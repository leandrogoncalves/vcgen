<?php
/**
 *  Class Visual composer Generator Text
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_text extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($value){
        parent::__construct();

        $this->createElement('vc_column_text', $value, self::NODE_INLINE);
    }


}