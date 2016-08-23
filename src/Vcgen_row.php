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


class Vcgen_row extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct(array $att = []){
        parent::__construct();

        $attributes = [
            'type'  => '', //Stripe style
            'animation' => '',
            'margin_top' => '',
            'margin_bottom' => '',
            'full_width_row' => '',
            'full_height' => '',
            'padding_left' => '',
            'padding_right' => '',
            'padding_top' => '',
            'padding_bottom' => '',
            'bg_color' => '',
            'bg_repeat' => '',
            'bg_cover' => '',
            'bg_attachment' => '',
            'enable_parallax' => '',
            'anchor' => '',
            'min_height' => '',
            'bg_image' => '',
            'el_class' => '',
            'el_id' => ''
        ];

        $attributes = array_merge($attributes, $att);

        $this->createElement('vc_row', $attributes);
    }

    public function addCol(Vcgen_col $col){
        $this->addChild($col);
    }

    public function addCols(array $cols){
        $this->addChildrens($cols);
    }


}