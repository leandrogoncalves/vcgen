<?php
/**
 *  Class Visual composer Generator Empty Space
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_separator extends Vcgen_node{

    /**
     * Vcgen constructor.
     */
    public function __construct($val){
        parent::__construct();

        $attributes = [
            'color' => '',
            'align' => '',
            'style' => '',
            'border_width' => '',
            'el_width' => ''
        ];

        $this->createElement('vc_separator', $attributes, self::NODE_INLINE);

    }


}