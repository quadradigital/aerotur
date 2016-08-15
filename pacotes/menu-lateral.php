<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
 ?>
      <div class="container-fluid space-down">
        <div class="row">
          <div class="container">
            <div class= "col-xs-12 col-md-12">

              <div class="col-xs-12 col-md-3">
                <span>Filtros:</span>


                <p>TIPO</p>

                <div class="checkbox">
                  <label>
                    <input class="filtro_pacote" id="allitem" type="checkbox" checked value="">
                    Todos
                  </label>
                </div>
                <?php
                $args_post = array('post_type' => 'filtro_evento', 'posts_per_page'=>400, 'order'=>'ASC');
                $myposts_post = get_posts( $args_post );
                foreach ( $myposts_post as $post_post ){
                    setup_postdata( $post_post );
                    $id = $post_post->ID;
                    $filtro = get_filtro($id);
                ?>
                <div class="checkbox">
                  <label>
                    <input class="filtro_pacote" id="reveillon" type="checkbox" value="">
                    <?= $filtro['tipo_evento']?>
                  </label>
                </div>
                <?php }?>

                <p>MOEDA</p>
                <?php
                $args_post = array('post_type' => 'filtro_moeda', 'posts_per_page'=>400, 'order'=>'ASC');
                $myposts_post = get_posts( $args_post );
                foreach ( $myposts_post as $post_post ){
                    setup_postdata( $post_post );
                    $id = $post_post->ID;
                    $filtro = get_filtro($id);
                ?>
                <div class="checkbox">
                  <label>
                    <input class=""  type="checkbox" value="">
                    <?= $filtro['tipo_moeda']?>
                  </label>
                </div>
                <?php }?>

                <p>PARCELAS A PARTIR DE</p>
                <?php
                $args_post = array('post_type' => 'filtro_preco', 'posts_per_page'=>400, 'order'=>'ASC');
                $myposts_post = get_posts( $args_post );
                foreach ( $myposts_post as $post_post ){
                    setup_postdata( $post_post );
                    $id = $post_post->ID;
                    $filtro = get_filtro($id);
                ?>
                <div class="checkbox">
                  <label>
                    <input class=""  type="checkbox" value="">
                    <?= $filtro['tipo_preco']?>
                  </label>
                </div>
                <?php }?>

                <p>LOCALIDADE</p>
                <?php
                $args_post = array('post_type' => 'filtro_localidade', 'posts_per_page'=>400, 'order'=>'ASC');
                $myposts_post = get_posts( $args_post );
                foreach ( $myposts_post as $post_post ){
                    setup_postdata( $post_post );
                    $id = $post_post->ID;
                    $filtro = get_filtro($id);
                ?>
                <div class="checkbox">
                  <label>
                    <input class="filtro_pacote"  type="checkbox" value="">
                    <?= $filtro['tipo_localidade']?>
                  </label>
                </div>
                <?php }?>
              </div>
