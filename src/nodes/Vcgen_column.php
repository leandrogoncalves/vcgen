<?php
/**
 *  Class Visual composer Generator Collumn
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_column extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'width'  => '', //Stripe style
            'el_class' => '',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('vc_column', $attributes);
    }

    /**
     * Return a inner Row specific
     * @param $offset
     * @return mixed|null
     */
    public function innerRow($offset){
        try{
            return $this->getChild($offset);
        }catch (NullException $e){
            die($e->getMessage());
        }
    }

}