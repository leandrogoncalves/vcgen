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


use leandrogoncalves\exceptions\ParameterException;

class Vcgen_factory{


    /**
     * @var array
     */
    protected $typeList;

    /**
     * use list types or merge with the default
     * Vcgen_factory constructor.
     */
    public function __construct() {
        $this->typeList = [
            'newRow'  => __NAMESPACE__ . '\nodes\Vcgen_row',
            'newCol'  => __NAMESPACE__ . '\nodes\Vcgen_col',
            'newText' => __NAMESPACE__ . '\nodes\Vcgen_text',
        ];
    }

    /**
     * Create a new vcgen node dinamic
     * @param $type String
     * @param $attr String
     */
    public function __call($type, $attr){
        try{

            if(!array_key_exists($type, $this->typeList )){
                throw new ParameterException($type . " não é um parametro válido");
            }
            $className = $this->typeList[$type];
            return new $className(array_shift($attr));

        }catch (ParameterException $e){
            //TODO tratar mensagem
            die($e->getMessage());
        }catch (NullException $e){
            //TODO tratar mensagem
            die($e->getMessage());
        }catch (\Exception $ex){
            //TODO tratar mensagem
            die($ex->getMessage());
        }
    }

//    public function newRow(array $att = []){
//        return new Vcgen_row($att);
//    }
//
//    public function newCol(array $att = []){
//        return new Vcgen_row($att);
//    }

}