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
    public function __construct(array $att = []){
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
            'el_id' => ''
        ];

        $attributes = array_merge($attributes, $att);

        $this->createElement('vc_row', $attributes);
    }

    /**
     * Adiciona uma nova coluna na linha
     * @param Vcgen_col $col
     */
    public function addCol(Vcgen_col $col){
        $this->addChild($col);
    }

    /**
     * Adiciona mais de uma coluna ao mesmo tempo
     * @param array $cols
     */
    public function addCols(array $cols){
        try{
            foreach ($cols as $e) {
                if (!$e instanceof Vcgen_col) {
                    throw new ParameterException("Os elementos devem ser filhos de Vcgen_node. ");
                }
                $this->addChild($e);
            }
        }catch (ParameterException $p){
            //TODO tratar mensagem
            die($p->getMessage());
        }
    }


}