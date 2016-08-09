<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $recomendacoes = get_ativar();
 ?>
 <section style="<?php if($recomendacoes['ativar_recomendacoes'] == false){echo 'display:none;';} ?>" id="recomendacoes">
   <div id="recomendacoes"></div>
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <p id="titulo-color">CONHEÇA AS</p>
        <h2 id="subtitulo-color">RECOMENDAÇÕES DOS NOSSOS CLIENTES</h2>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid space-down">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-6 col-md-12">
        <?php
        $args_post = array('post_type' => 'recomendacao', 'order' => 'ASC', 'posts_per_page'=>500);
        $myposts_post = get_posts( $args_post );
        foreach ( $myposts_post as $post_post ){
            setup_postdata( $post_post );
            $id2 = $post_post->ID;
            $recomendacoes = get_recomendacoes($id2);
         ?>
         <div class="col-xs-12 col-md-3 promo-img recomendacao-clientes" style="background-image:url(<?= $recomendacoes['imagem']['url']?>)">
            <div class="recomenda-cliente">
              <div class="col-xs-3 col-sm-3 col-md-3">
                <img class="img-bordas" src="<?= $recomendacoes['imagem_autor']['url']?>" width="52" height="52">
              </div>
              <div class="col-xs-9 col-sm-9 col-md-9">
                <h5 class="media-nome"><?= $recomendacoes['autor']?>:</h5>
              <h4 class="media-local"><?= $recomendacoes['cidade']?></h4>
              </div>
            </div>
              <div class="rodape-recomendacoes text-center">
                "<?= $recomendacoes['recomendacao']?>"
              </div>
          </div>
      <?php }?>
    </div>
    </div>
  </div>
</div>
</section>