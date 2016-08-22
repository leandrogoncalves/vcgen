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


class Vcgen{

    public function __construct() {}
    
    public function addRow(array $att = []){
        return new Vcgen_row($att);
    }

    public function addCol(array $att = []){
        return new Vcgen_row($att);
    }
    
}