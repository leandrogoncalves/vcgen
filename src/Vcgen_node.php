<?php
/**
 *  Class Visual composer Generator
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace leandrogoncalves;

use leandrogoncalves\exceptions\NullException;
use leandrogoncalves\exceptions\ParameterException;

class Vcgen_node{

    /**
     * Tipos de nós
     * TYPE_NODE 1 => shortcode tag do visual composer
     */
    const TYPE_NODE = 1;

    /**
     * Nome da tag
     * @var null
     */
    protected $nodeName;

    /**
     * Valor String da Tag
     * @var null
     */
    protected $nodeValue;

    /**
     * Atributos da tag
     * @var array
     */
    protected $attributes;

    /**
     * Tag pai
     * @var array
     */
    protected $parentNode;

    /** Tag filha
     * @var array
     */
    protected $childNodes;

    /**
     * Vcgen constructor.
     */
    protected function __construct() {
        $this->nodeName = null;
        $this->nodeValue = null;
        $this->attributes = [];
        $this->parentNode = [];
        $this->childNodes = [];
    }

    /**
     * Cria um novo VC shortcode
     * @param String $name
     * @param array $attributes
     * @return Vcgen
     */
    protected function createElement($name, $attributes = []){

        try{

            if(is_array($name)) throw new ParameterException("O nome deve ser uma string", 003);
            if(empty($attributes) && !is_array($attributes))  throw new NullException("O parametro nao pode ser nulo.  ", 001);

            $this->nodeName = $name;
            $this->attributes = array_merge($this->attributes, $attributes);

        }catch (ParameterException $e){
            //TODO tratar mensagem
            die($e->getMessage());
        }catch (NullException $e){
            //TODO tratar mensagem
            die($e->getMessage());
        }

    }

    protected function setAttr($name, $value){
        if(!in_array($name, $this->attributes)){
            $this->attributes[$name] = null;
        }

        if(!is_array($value)){
            $this->attributes[$name] = $value;
        }

        return $this;
    }


    /**
     * Cria um novo VC shortcode a partir de metodos dinamicos
     * @param $name
     * @param $attributes
     * @return Vcgen
     */
//    protected function __call($name, $attributes){
//        try
//        {
//            if(empty($attributes) && !is_array($attributes))  throw new NullException("O parametro nao pode ser nulo.  ", 001);
//
//            if(!isset($atributes['name'])) throw new NullException("O atributo nome deve ser declarado. ", 002);
//
//            return $this->createElement($atributes['name'], $attributes);
//        }catch(NullException $n){
//            //TODO tratar mensagem
//            die($n->getMessage());
//        }
//    }


}