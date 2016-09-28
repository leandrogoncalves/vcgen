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


class Vcgen_ult_buttons extends Vcgen_node{

    /**
     * Vcgen constructor.
     */
    public function __construct($val){
        parent::__construct();

        $attributes = [
            'btn_title'               => '',
            'btn_link'                => '',
            'btn_align'               => '',
            'btn_size'                => '',
            'btn_height'              => '',
            'btn_padding_left'        => '',
            'btn_title_color'         => '',
            'btn_bg_color'            => '',
            'btn_hover'               => '',
            'btn_bg_color_hover'      => '',
            'btn_title_color_hover'   => '',
            'icon_size'               => '',
            'btn_border_size'         => '',
            'btn_radius'              => '',
            'css_adv_btn'             => '',
            'el_class'                => '',
            'btn_font_size'           => '',
        ];

        $this->createElement('ult_buttons', $attributes, self::NODE_INLINE);

    }


}