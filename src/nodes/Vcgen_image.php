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

namespace leandrogoncalves\nodes;


class Vcgen_image extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct(Array $att = []){
        parent::__construct();

        $attributes = [
            'image'    => '',
            'el_class' => '',
            'img_size' => '',
            'onclick'  => '',
        ];

        $attributes = array_merge($attributes, $att);

        $this->createElement('vc_single_image', $attributes, self::NODE_INLINE);

    }


}