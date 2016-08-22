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

class Vcgen{

    /**
     * Tipos de nós
     * TYPE_NODE 1 => shortcode tag do visual composer 
     */
    const TYPE_NODE = 1;

    /**
     * Nome da tag
     * @var null
     */
    public $nodeName;

    /**
     * Valor String da Tag
     * @var null
     */
    public $nodeValue;

    /**
     * Atributos da tag
     * @var array
     */
    public $attributes;

    /**
     * Tag pai
     * @var array
     */
    public $parentNode;

    /** Tag filha
     * @var array
     */
    public $childNodes;

    /**
     * Vcgen constructor.
     */
    public function __construct() {
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
    public function createElement($name, $attributes = []){
        $tmp = new self();
        $tmp->nodeName = $name;
        if(is_array($attributes) && !empty($attributes)){
            $tmp->attributes = array_merge($tmp->attributes, $attributes);
        }
        return $tmp;
    }

    /**
     * Cria um novo VC shortcode a partir de metodos dinamicos
     * @param $name
     * @param $attributes
     * @return Vcgen
     */
    public function __call($name, $attributes){
        if(empty($name)){
            throw new NullException;
        }
        return $this->createElement($name, $attributes);
    }


}