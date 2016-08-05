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
    <div class="container recomendacoes-space-right">
      <?php
      $args_post = array('post_type' => 'recomendacao', 'order' => 'ASC', 'posts_per_page'=>1);
      $myposts_post = get_posts( $args_post );
      foreach ( $myposts_post as $post_post ){
          setup_postdata( $post_post );
          $id2 = $post_post->ID;
          $recomendacoes = get_recomendacoes($id2);
       ?>
      <div class="col-xs-12 col-sm-3 col-md-3 align-left-img">
        <div class="col-md-3 recomendacao-1 center-block" style="background-image:url(<?= $recomendacoes['imagem']['url']?>)">
          <div class="recomendacao-dados">
            <div class="media-left no-padding-margin">
                <div class="col-xs-2 col-sm-2 col-md-2 no-padding-margin">
                  <img class="media-object img-bordas" src="<?= $recomendacoes['imagem_autor']['url']?>" width="52" height="52">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 no-padding-margin">
                  <h5 class="media-heading media-nome"><?= $recomendacoes['autor']?></h5>
                  <h4 class="media-heading media-local"><?= $recomendacoes['cidade']?></h4>
                </div>
            </div> <!-- -->
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
</section>
