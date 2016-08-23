<?php
/**
 * Portfolio single template
 *
 * @package presscore
 * @since presscore 0.1
 */

use leandrogoncalves\vcgen_factory;

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

    $row_1 = $factory->newRow(['full_width_row'=>'1']);
    $col_r = $factory->newCol(['width'=>'1/2']);

    $col_r->addContent($factory->newText());

    $row_1->addCol($col_r);

    $collection->add($row_1);


    echo $collection->render();


    echo '<pre>';
    die(print_r($row_1));
    //

    do_action('presscore_after_post_content');
    ?>

</article><!-- #post-<?php the_ID(); ?> -->

