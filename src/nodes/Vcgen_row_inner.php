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

class Vcgen_row_inner extends Vcgen_node{


    /**
     * Vcgen constructor.
     */
    public function __construct($att = []){
        parent::__construct();

        $attributes = [
            'atts'  => '',
            'equal_height'  => '',
            'el_class' => '',
            'el_id' => '',
            'css' => ''
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : '';

        $this->createElement('vc_row_inner', $attributes);
    }

    /**
     * Adiciona uma nova coluna interna na linha interna
     * @param Vcgen_col $col
     */
    public function addInnerCol(Vcgen_column_inner $col){
        $this->addChild($col);
        return $this;
    }

    /**
     * Adiciona mais de uma coluna interna na linha interna
     * @param array $cols
     */
    public function addInnerCols(array $cols){
        try{
            foreach ($cols as $e) {
                if (!$e instanceof Vcgen_column_inner) {
                    throw new ParameterException("Os elementos devem ser filhos de Vcgen_column_inner. ");
                }
                $this->addChild($e);
            }
        }catch (ParameterException $p){
            //TODO tratar mensagem
            die($p->getMessage());
        }
        return $this;
    }


}