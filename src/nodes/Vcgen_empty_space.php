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

namespace leandrogoncalves\nodes;


class Vcgen_dt_empyty_space extends Vcgen_node{

    /**
     * Vcgen constructor.
     */
    public function __construct($val){
        parent::__construct();

        $attributes = [
            'number'          => '6',
            'width'           => '318',
            'height'          => '195',
            'bg_under_posts'  => 'disabled',
            'show_excerpt'    => 'true',
        ];

        $this->createElement('dt_blog_scroller', $attributes, self::NODE_INLINE);

    }


}