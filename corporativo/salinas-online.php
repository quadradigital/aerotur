<?php
/*
  * Template Name: Corporativo
  * @package aerotur
  * @subpackage aerotur
  * @since Aerotur 1.0
  * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
  */
  $salinas_online = get_ativar();
 ?>
 <section style="<?php if($salinas_online['ativar_salinas_online'] == false){echo 'display:none;';} ?>" id="salinas_online">
   <div class="container-fluid space-down">
     <div class="row">
       <div class="container">
   <?php
   $args_post = array('post_type' => 'texto_salinas_online', 'posts_per_page'=>1);
   $myposts_post = get_posts( $args_post );
   foreach ( $myposts_post as $post_post ){
       setup_postdata( $post_post );
       $id2 = $post_post->ID;
       $texto_salinas_online = get_texto_salinas_online($id2);
     }
    ?>
      <div class="col-xs-12 col-sm-12col-md-12" id="titulo-recomendacoes">
        <p id="inv-titulo-color"><?= $texto_salinas_online['texto_superior'] ?></p>
        <h2 id="inv-subtitulo-color"><?= $texto_salinas_online['texto_inferior'] ?></h2>
        <div class="row">
        <?php
        $args_post = array('post_type' => 'secao_salinas_online', 'posts_per_page'=>300, 'order' => 'ASC');
        $myposts_post = get_posts( $args_post );
        foreach ( $myposts_post as $post_post ){
            setup_postdata( $post_post );
            $id2 = $post_post->ID;
            $salinas_online = get_salinas_online($id2);
         ?>
          <div class="col-xs-12 col-sm-6 col-md-4 salinas-online">
            <h3><?= $salinas_online['categoria'] ?></h3>
            <p><?= $salinas_online['descricao'] ?></p>
            <div class="borda-inferior">
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div> <!-- FIM container -->
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->
</section>
