<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $pacotes = get_ativar();
 ?>
 <section style="<?php if($pacotes['ativar_pacotes'] == false){echo 'display:none;';} ?>" id="pacotes">
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
            <div class="slider4">
                <?php
                $args_post = array('post_type' => 'pacotes', 'posts_per_page'=>400);
                $myposts_post = get_posts( $args_post );
                foreach ( $myposts_post as $post_post ){
                   setup_postdata( $post_post );
                    $id2 = $post_post->ID;
                    $pacotes = get_pacotes($id2);
                if(!empty($pacotes['banner']['url'])){
                ?>
                <div class="slide">
                  <div class="col-md-3 promo-img center-block">
                    <img src="<?= $pacotes['banner']['url']?>">
                    <div class="promo-dados">
                      <div>
                          <div class="col-xs-8 col-sm-8 col-md-8">
                            <h5 class="promo-title"><?= $pacotes['texto_superior_pacote']?></h5>
                            <h4 class="promo-subtitle"><?= $pacotes['texto_inferior_pacote']?></h4>
                          </div>
                          <div class="col-xs-3 col-sm-3 col-md-3">
                            <h5 class="promo-parcelas"><?= $pacotes['parcelas']?></h5>
                            <h4 class="promo-valor"><?= $pacotes['valor']?></h4>
                          </div>
                          <div class="col-xs-1 col-sm-1 col-md-1 promo-centavos">
                            <span class="">,<?= $pacotes['centavos']?></span>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }
                }
                ?>
              </div>
            </div>
          </div>
        </div>
</section>