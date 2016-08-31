<?php
/**
 *  Class Visual composer Generator Vcgen Node
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


use vcgen\exceptions\NullException;
use vcgen\exceptions\ParameterException;

abstract class Vcgen_node implements \Iterator
{

    /**
     * Tipos de nós
     */
    const NODE_BLOCK = 1;
    const NODE_INLINE = 2;

    /**
     * Nome da tag
     * @var null
     */
    public $nodeName;

    /**
     * Valor String da Tag
     * @var null
     */
    public $nodeContent;

    /**
     * Atributos da tag
     * @var array
     */
    protected $attributes;


    /** Tag filha
     * @var array
     */
    protected $childNodes;


    /**
     * Nó atual
     * @var int
     */
    protected $currentNode;

    /**
     * Abertura de tag
     * @var
     */
    public $tags;

    /**
     * TIPO DE NÓ
     * @var int
     */
    public $nodeType;

    /**
     * Vcgen constructor.
     */
    protected function __construct()
    {
        $this->nodeName = null;
        $this->nodeValue = null;
        $this->attributes = [];
        $this->childNodes = [];
        $this->currentNode = 0;
    }

    /**
     * Cria um novo VC shortcode
     *
     * @param String $name
     * @param array $attributes
     * @return Vcgen
     */
    protected function createElement($name, $attributes = [],  $type = self::NODE_BLOCK)
    {

        if (is_array($name)) throw new ParameterException("O nome deve ser uma string", 003);

        $this->nodeName = $name;

        if (is_array($attributes)) {
            $this->attributes = $attributes;
        }elseif($attributes instanceof Vcgen_node){
            $this->addChild($attributes);
        }else{
            $this->nodeContent = $attributes;
        }


        $this->nodeType = $type;

    }

    /**
     * Return formated attributes
     *
     * @return string
     */
    public function getAttributes(){
        $tmp = "";
        if(!empty($this->attributes)){
            foreach ($this->attributes as $k => $att){
                $tmp .= ($att) ?  " {$k}='{$att}' " : '';
            }
        }
        return $tmp;
    }

    /**
     * Configure node atributees
     *
     * @param $name String
     * @param $value Mixed
     * @return $this
     */
    public function setAttr($name, $value)
    {
        if (!in_array($name, $this->attributes)) {
            $this->attributes[$name] = null;
        }

        if (!is_array($value)) {
            $this->attributes[$name] = $value;
        }

    }

    /**
     *
     * Add a node child
     *
     * @param Vcgen_node $node
     */
    public function addChild(Vcgen_node $node)
    {
        $this->childNodes[] = $node;
        return $this;
    }


    /**
     *
     * Add a node child
     *
     * @param Vcgen_node $node
     */
    public function addChilds(Array $nodes){

        try{

            foreach ($nodes as $e) {
                if (FALSE === ($e instanceof Vcgen_node)){
                    throw new ParameterException("Os elementos devem ser filhos de Vcgen_node. ");
                }
                $this->addChild($e);
            }


        }catch (ParameterException $p){
            //TODO tratar mensagem
            die($p->getMessage());
        }

        return $this;
    }

    /**
     * Return a son node specific if this exists
     *
     * @param $k
     * @return mixed|null
     */
    protected function getChild($k){
        if( !$this->has_child() || !array_key_exists($k,$this->childNodes) )throw new NullException("Nó filho de {$this->nodeName} não encontrado");
        return $this->childNodes[$k];
    }


    /**
     * Check if exist son node
     *
     * @return bool
     */
    public function has_child(){
        return count($this->childNodes) > 0 ? true : false;
    }

    /**
     * @return bool
     */
    public function has_tags(){
        return count($this->tags) > 0 ? true : false;
    }


    /**
     * Move forward to next element.
     *
     * @link http://php.net/manual/en/iterator.next.php
     *
     * @return void Any returned value is ignored.
     */
    public function next(){
        $this->currentNode++;
        return $this;
    }

    /**
     * Return the current book.
     *
     * @link http://php.net/manual/en/iterator.current.php
     *
     * @return current node
     */
    public function current()
    {
        return $this->childNodes[$this->currentNode];
    }

    /**
     * (PHP 5 >= 5.0.0)<br/>
     * Checks if current position is valid.
     *
     * @link http://php.net/manual/en/iterator.valid.php
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     *              Returns true on success or false on failure.
     */
    public function valid()
    {
        return isset($this->childNodes[$this->currentNode]);
    }


    /**
     * (PHP 5 >= 5.0.0)<br/>
     * Return the key of the current element.
     *
     * @link http://php.net/manual/en/iterator.key.php
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->currentNode;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element.
     *
     * @link http://php.net/manual/en/iterator.rewind.php
     *
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->currentNode = 0;
    }


    /**
     * Clonando objetos filhos
     *
     *@link http://php.net/manual/pt_BR/language.oop5.cloning.php
     */
    public function __clone(){
        if($this->has_child()){
            foreach ($this->childNodes as $k => $node) {
                $this->childNodes[$k] = clone $node;
            }
        }
    }

    /**
     * Gera tags html
     * @param $name
     * @param $attr
     */
    public function __call($name, $attr){
        $this->tags[]['name'] = $name;
        $this->tags[]['attributes'] = $this->tags['value'] = NULL;
        $this->tags[]['display'] = self::NODE_BLOCK;


        if(!empty($attr[0]) && !is_array($attr[0])){
            $this->tags[]['value'] = $attr[1];
        }

        if(!empty($attr[1]) && is_array($attr[1])){
           foreach ($attr[1] as $k => $v) $this->tags[]['attributes'] .= " {$k}=\"$v\" ";
        }

        if(!empty($attr[2]) && !is_array($attr[2])){
            $attr[2] = (int)$attr[2];
            if($attr[2] == self::NODE_BLOCK || $attr[2] == self::NODE_INLINE){
                $this->tags[]['display'] = $attr[2];
            }
        }

    }

    /**
     * @return String
     */
    public function __toString()
    {
        return $this->nodeName;
    }

}