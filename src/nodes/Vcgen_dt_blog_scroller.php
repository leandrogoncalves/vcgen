<?php
/**
 *  Class Visual composer Generator Dream-them Blog Scroller
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_dt_blog_scroller extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'number'    => '6',
            'width'     => '318',
            'height'    => '195',
            'bg_under_posts'  => 'disabled',
            'show_excerpt'    => 'true',
            'show_categories'    => 'true',
            'autoslide'    => '',
            'loop'    => 'true',
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('dt_blog_scroller', $attributes, self::NODE_INLINE);

    }


}