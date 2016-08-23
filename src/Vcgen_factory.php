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

namespace leandrogoncalves;


class Vcgen_factory{

    public function __construct() {}
    
    public function newRow(array $att = []){
        return new Vcgen_row($att);
    }

    public function newCol(array $att = []){
        return new Vcgen_row($att);
    }
    
}