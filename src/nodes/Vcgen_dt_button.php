<?php
/**
 *  Class Visual composer Generator Gallery
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace leandrogoncalves\nodes;


class Vcgen_dt_button extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = [], $val = ''){
        parent::__construct();

        $attributes = [
            'link'               => '#',
            'target_blank'       => 'false',
            'button_alignment'   => 'center',
            'animation'          => '',
            'smooth_scroll'      => '',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : '';


        $this->createElement('dt_button', $attributes);
        $this->nodeContent = $val;

    }


}