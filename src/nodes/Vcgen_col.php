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

namespace leandrogoncalves\nodes;


class Vcgen_col extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct(array $att = []){
        parent::__construct();

        $attributes = [
            'width'  => '', //Stripe style
            'el_class' => '',
        ];

        $attributes = array_merge($attributes, $att);

        $this->createElement('vc_col', $attributes);
    }

}