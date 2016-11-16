<?php
/**
 *  Class Visual composer Generator Ultimate heading
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_ut_heading extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = [], $val = ''){
        parent::__construct();

        $attributes = [
            'main_heading'       => '#',
            'heading_tag'        => 'h1',
            'alignment'          => 'left',
            'spacer'             => '',
            'spacer_position'    => '',
            'line_height'        => '1',
            'line_color'         => '',
        ];
        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('ultimate_heading', $attributes);
        $this->nodeContent = $val;

    }


}