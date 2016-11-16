<?php
/**
 *  Class Visual composer Generator Vcgen_ult_contentbox
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_ult_contentbox extends Vcgen_node{


    /**
     * Vcgen_ult_contentbox constructor.
     * @param array $att
     */

    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'bg_color'=>"#f5f2ed",
			'box_shadow'=>"horizontal:px|vertical:px|blur:px|spread:px|color:rgb(247, 247, 247)|style:none|",
			'padding'=>"padding-top:20px;padding-right:15px;padding-bottom:20px;padding-left:15px;",
			'hover_box_shadow'=>"horizontal:px|vertical:px|blur:px|spread:px|color:rgb(247, 247, 247)|style:none|",
            'el_class' => '',
            'offset' => '',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('ult_content_box', $attributes);
    }



}