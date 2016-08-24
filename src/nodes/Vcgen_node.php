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

namespace leandrogoncalves\nodes;


use leandrogoncalves\exceptions\ParameterException;

class Vcgen_node implements \Iterator
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
     * @var int
     */
    protected $currentNode;


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
    protected function createElement($name, $attributes = [],  $type = NODE_BLOCK)
    {

        if (is_array($name)) throw new ParameterException("O nome deve ser uma string", 003);

        $this->nodeName = $name;

        if (is_array($attributes)) {
            $this->attributes = array_merge($this->attributes, $attributes);
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
    protected function setAttr($name, $value)
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
    protected function addChild(Vcgen_node $node)
    {
        $this->childNodes[] = $node;
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
     * Move forward to next element.
     *
     * @link http://php.net/manual/en/iterator.next.php
     *
     * @return void Any returned value is ignored.
     */
    public function next(){
        $this->currentNode++;
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
     * (PHP 5 &gt;= 5.0.0)<br/>
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
     * (PHP 5 &gt;= 5.0.0)<br/>
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

}