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
     * Vcgen_ult_buttons constructor.
     * @param array $att
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'btn_title'               => '',
            'btn_link'                => 'url:#|||',
            'btn_align'               => 'ubtn-center',
            'btn_size'                => 'ubtn-custom',
            'btn_height'              => '35',
            'btn_padding_left'        => '25',
            'btn_padding_top'         => '5',
            'btn_title_color'         => '#f5941d',
            'btn_bg_color'            => 'rgba(0,0,0,0.01)',
            'btn_hover'               => 'ubtn-fade-bg',
            'btn_bg_color_hover'      => '#f6951d',
            'btn_title_color_hover'   => '#ffffff',
            'icon_size'               => '32',
            'btn_icon_pos'            => 'ubtn-sep-icon-at-left',
            'btn_border_style'        => 'solid',
            'btn_color_border'        => '#f6951d',
            'btn_color_border_hover'  => '#f6951d',
            'btn_border_size'         => '4',
            'btn_radius'              => '0',
            'css_adv_btn'             => '',
            'el_class'                => 'btn-nd-custom',
            'btn_font_size'           => 'desktop:11px;',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('ult_buttons', $attributes, self::NODE_INLINE);

    }


}