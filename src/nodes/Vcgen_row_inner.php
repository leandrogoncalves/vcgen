<?php
/**
 *  Class Visual composer Generator Row
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


use vcgen\exceptions\ParameterException;

class Vcgen_row_inner extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'atts'  => '',
            'equal_height'  => '',
            'el_class' => '',
            'el_id' => '',
            'css' => ''
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : '';

        $this->createElement('vc_row_inner', $attributes);
    }
    
}