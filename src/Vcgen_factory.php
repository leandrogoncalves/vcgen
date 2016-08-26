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

namespace vcgen;


use vcgen\exceptions\ParameterException;
use vcgen\exceptions\NullException;

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
            'newDtBlogScroller'     => __NAMESPACE__ . '\nodes\Vcgen_dt_blog_scroller',
            'newDtButton'           => __NAMESPACE__ . '\nodes\Vcgen_dt_button',
            'newHeader'             => __NAMESPACE__ . '\nodes\Vcgen_ut_heading',
            'newRow'                => __NAMESPACE__ . '\nodes\Vcgen_row',
            'newInnerRow'           => __NAMESPACE__ . '\nodes\Vcgen_row_inner',
            'newCol'                => __NAMESPACE__ . '\nodes\Vcgen_column',
            'newInnerCol'           => __NAMESPACE__ . '\nodes\Vcgen_column_inner',
            'newText'               => __NAMESPACE__ . '\nodes\Vcgen_text',
            'newImage'              => __NAMESPACE__ . '\nodes\Vcgen_image',
            'newGallery'            => __NAMESPACE__ . '\nodes\Vcgen_gallery',
            'newSpacer'             => __NAMESPACE__ . '\nodes\Vcgen_empty_space',
            'newButton'             => __NAMESPACE__ . '\nodes\Vcgen_button',
            'newSeparator'          => __NAMESPACE__ . '\nodes\Vcgen_separator',
        ];
    }

    /**
     * Create a new vcgen node dinamic
     * @param $type String
     * @param $attr String
     */
    public function __call($type, $attr){
        try{

            $attributes =  $val = null;

            if(isset($attr[0])) $attributes = $attr[0];

            if(isset($attr[1])) $val = $attr[1];

            if(!array_key_exists($type, $this->typeList )){
                throw new ParameterException($type . " não é um tipo válido");
            }

            $className = $this->typeList[$type];

            return new $className($attributes, $val);

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


}