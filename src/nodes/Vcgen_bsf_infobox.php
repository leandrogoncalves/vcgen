<?php
/**
 *  Class Visual composer Generator Vcgen_bsf_infobox
 *  This class was created to generate shortcodes of visual composer plugin,
 *  to be used in templates of custom pages wordpress
 * @author Leandro Gonçalaves <leandro@lesolution.com.br>
 * @link https://github.com/leandrogoncalves/vcgen
 * @version 1.0
 *
 */

namespace vcgen\nodes;


class Vcgen_bsf_infobox extends Vcgen_node{


    /**
     * Vcgen_bsf_infobox constructor.
     * @param array $att
     * @param string $val
     */
    public function __construct($att = [], $val = ''){
        parent::__construct();

        $attributes = [
                'icon_type'                  =>"custom",
				'icon_img'                   =>"",
				'img_width'                  =>"35",
				'icon_style'                 =>"advanced",
				'icon_color_bg'              =>"#cacaca",
				'icon_border_style'          =>"solid",
				'icon_color_border'          =>"#cacaca",
				'icon_border_size'           =>"0",
				'icon_border_radius'         =>"500",
				'icon_border_spacing'        =>"10",
				'read_more'                  =>"box",
				'link'                       =>"url:%23|||",
                'href'                       =>"``#``",
				'hover_effect'               =>"style_2",
				'pos'                        =>"left",
				'title'                      =>"",
				'title_font'                 =>"font_family:Open Sans|font_call:Open+Sans|variant:regular",
				'title_font_style'           =>"font-weight:normal;font-style:normal;",
				'desc_font'                  =>"font_family:Open Sans|font_call:Open+Sans",
				'title_font_size'            =>"desktop:12px;",
				'title_font_line_height'     =>"desktop:14px;",
				'title_font_color'           =>"#5e5f5e",
				'desc_font_size'             =>"desktop:12px;",
				'desc_font_line_height'      =>"desktop:14px;",
				'desc_font_color'            =>"#5e5f5e",
				'css_info_box'               =>".vc_custom_1474582748759{margin-bottom: 30px !important;padding-right: 35px !important;}"
        ];

        $attributes = is_array($att)?  array_merge($attributes, $att) : $attributes;

        $this->createElement('vc_column_inner', $attributes);
        $this->nodeContent = $val;
    }



}