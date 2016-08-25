<?php
/**
 *  Class Visual composer Generator Image
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_button extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'title'    => '',
            'el_class' => '',
            'style'    => 'flat',
            'shape'    => 'square',
            'color'    => 'blue',
            'align'    => 'center',
            'link'     => 'url:%23|||',
            'link'     => 'button_block',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('vc_btn', $attributes, self::NODE_INLINE);

    }


}