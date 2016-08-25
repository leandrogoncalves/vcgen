<?php
/**
 * Portfolio single template
 *
 * @package presscore
 * @since presscore 0.1
 */


// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }


$factory = new vcgen\Vcgen_factory(); //CRIA FABRICA DE ELEMENTOS VC
$collection = new vcgen\Vcgen_collection(); //CRIA A COLECAO DE ELEMENTOS VC

global $post;
$config = Presscore_Config::get_instance();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('project-post'); ?>>

    <?php
    do_action('presscore_before_post_content');


    $the_content =  get_the_content();
    $img_id = get_post_thumbnail_id($post->ID);
    $galeria = get_field('galeria');

    $galeria = array_map(function($e){
        return $e['id'];
    },$galeria);




    //CRIA OS ESPAÇOS EM BRANCO
    $spacer_20 = $factory->newSpacer(20);
    $spacer_40 = $factory->newSpacer(40);
    $spacer_60 = $factory->newSpacer(50);

    //CRIA A LINHA PRINCIPAL
    $main_row = $factory->newRow();

    //ADICIONA DUAS COLUNAS
    $main_row->addChild($factory->newCol(['width'=>'1/3']));
    $main_row->addChild($factory->newCol(['width'=>'2/3']));

    //CRIA UMA LINHA E COLUNA INTERNAS
    $row_inner = $factory->newInnerRow();
    $row_inner->addChild($factory->newInnerCol(['offset'=>'vc_hidden-lg vc_hidden-md vc_hidden-sm']));

    //ADICIONA OS ITENS DA COLUNA INTERNA
    $row_inner->innerColumn(0)->addChild($factory->newText('<h1>Nome da loja</h1>'));
    $row_inner->innerColumn(0)->addChild($factory->newText('<h6>Seguimento | Seguimento</h6>'));
    $row_inner->innerColumn(0)->addChild($spacer_20);
    $dados_loja =<<<DADOS
        <div id="icones-template">
			<img src="http://pagebras.nacaodesign.com.br/wp-content/uploads/2016/08/pin.svg" />   Endereço da Loja
			<img src="http://pagebras.nacaodesign.com.br/wp-content/uploads/2016/08/telefone.svg" />   Telefone da Loja
			<img src="http://pagebras.nacaodesign.com.br/wp-content/uploads/2016/08/email.svg" />   Email da Loja
			<img src="http://pagebras.nacaodesign.com.br/wp-content/uploads/2016/08/compartilhamento.svg" />   <a class="link-geral" href="#">Acesse o site da loja</a>
	    </div>
DADOS;
    $row_inner->innerColumn(0)->addChild($factory->newText($dados_loja));
    $row_inner->innerColumn(0)->addChild($spacer_40);

    //ADICIONA A LINHA E CONLUNA INTERNA NA LINHA PRINCIPAL
    $main_row->column(0)->addChild($row_inner);
    $main_row->column(0)->addChild($factory->newImage(['image'=>$img_id]));
    $main_row->column(0)->addChild($factory->newText($factory->newGallery(['ids'=>implode(',',$galeria)])));
    $main_row->column(0)->addChild($factory->newText('<p>clique nas imagens ampliar.</p>'));

    //CRIA A LINHA INTERNA DOS BOTOES
    $row_inner_btn = $factory->newInnerRow();
    $row_inner_btn->addChild($factory->newInnerCol(['offset'=>'vc_hidden-xs', 'el_class'=>'btn-template']));
    $row_inner_btn->innerColumn(0)->addChild($factory->newButton(['title'=>'VEJA MAIS LOJAS DESTE SEGMENTO', 'link' => '#']));
    $row_inner_btn->innerColumn(0)->addChild($factory->newButton(['title'=>'VEJA A LISTA COMPLETA DE LOJAS', 'link' => '#']));

    //ADICIONA A LINHA INTERNA NA LINHA PRINCIPAL
    $main_row->column(0)->addChild($row_inner_btn);

    $collection->addNode($main_row);

    echo '<pre>';
    die(print_r($collection->render()));

    echo  do_shortcode($collection->render());


    do_action('presscore_after_post_content');
    ?>

</article><!-- #post-<?php the_ID(); ?> -->

