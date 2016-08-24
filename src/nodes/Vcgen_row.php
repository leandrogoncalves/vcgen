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

namespace leandrogoncalves\nodes;


use leandrogoncalves\exceptions\ParameterException;

class Vcgen_row extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'type'  => 'vc_default', //Stripe style
            'gap'  => '20',
            'animation' => '',
            'margin_top' => '',
            'margin_bottom' => '',
            'full_width_row' => '',
            'full_width' => 'stretch_row',
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
            'el_id' => '',
            'video_bg_url'=>'',
            'video_bg_parallax'=>'',
            'parallax_speed_bg'=>'',
            'parallax_speed_video'=>'',
            'content_placement'=>'top',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : '';

        $this->createElement('vc_row', $attributes);
    }
    

}