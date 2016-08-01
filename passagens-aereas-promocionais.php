<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $promocao = get_ativar();
 ?>
 <section style="<?php if($promocao['ativar_promocao'] == false){echo 'display:none;';} ?>" id="promocao">
   <div id="promocao"></div>
   <div class="container-fluid">
        <div class="row">
          <div class="container">
            <?php
            $args_post = array('post_type' => 'texto_promocao', 'posts_per_page'=>1);
            $myposts_post = get_posts( $args_post );
            foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
                $id2 = $post_post->ID;
                $promocao = get_texto_promocao($id2);
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
              <p id="titulo-color"><?= $promocao['texto_superior']?></p>
              <h2 id="subtitulo-color"><?= $promocao['texto_inferior']?></h2>
              <p id="promocoes-subtitulo"><?= $promocao['descricao']?>:</p>
            </div>
            <?php }?>
          </div>
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->

      <div class="container-fluid space-down">
        <div class="row">
          <div class="container">
            <?php
            $args_post = array('post_type' => 'banner_promocao', 'posts_per_page'=>400);
            $myposts_post = get_posts( $args_post );
            foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
                $id2 = $post_post->ID;
                $promocao = get_banner_promocao($id2);
            if(!empty($promocao['banner']['url'])){
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4 promo-1">
              <img src="<?= $promocao['banner']['url']?>" class="img-responsive">
            </div>
            <?php }
          }
          ?>
          </div>
        </div>
      </div>
</section>
