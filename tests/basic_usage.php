<?php
/**
 * Portfolio single template
 *
 * @package presscore
 * @since presscore 0.1
 */

use vcgen\vcgen_factory;
use vcgen\vcgen_collection;

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

$factory = new Vcgen_factory();

$collection = new Vcgen_collection();

global $post;
$config = Presscore_Config::get_instance();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('project-post'); ?>>

    <?php
    do_action('presscore_before_post_content');


    $the_content =  get_the_content();
    $img_id = get_post_thumbnail_id($post->ID);

    $main_row = $factory->newRow();

    $col_r = $factory->newCol(['width'=>'1/3']);

    $main_image = $factory->newImage(['image'=>$img_id]);

    $col_r->addChild($main_image);




    $col_l = $factory->newCol(['width'=>'2/3']);


    $main_row->addChilds([$col_l,$col_r]);

    echo '<pre>';
    die(print_r($main_row));

    $collection->addNode($main_row);


    echo  do_shortcode($collection->render());


    do_action('presscore_after_post_content');
    ?>

</article><!-- #post-<?php the_ID(); ?> -->

