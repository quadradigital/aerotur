<?php
/**
 * Template Name: blog
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
/*
  $secoes = get_secoes();
  $cores = get_cores();
  $tags = $_GET['tag'];
  $cats = $_GET['categoria'];
  $page_atual = get_query_var('paged');
  $total_posts_por_pagina = 3;

  if($page_atual == 0){
    $page_atual = 1;
  }

  if($tags != ""){
        $params = $params."?tag=".$tags;
  }

  if($cats != ""){
        $params = $params."?categoria=".$cats;
  }
*/
 ?>
      <div class="container-fluid">
        <div class="container">
          <div class="col-xs-12 col-sm-12 col-md-12 blog-mobile-titulo">
            <h4 id="titulo-color">BLOG</h4>
            <h2 class="subtitulo-blog" id="subtitulo-color">O MELHOR DESTINO</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid space-down">
        <div class="container">
          <div class="row">
            <div class="col-xs-1 col-sm-12 col-md-12">
              <?
              $args_post = array('post_type' => 'post', 'posts_per_page'=>12, 'order'=>'DESC');
              $myposts_post = get_posts( $args_post );
              foreach ( $myposts_post as $post_post ){
                setup_postdata( $post_post );
                $id_post = $post_post->ID;
                $titulo_post = get_the_title($id_post);
                $conteudo_post = wp_strip_all_tags(get_the_content(), false);
                $link_post = get_post_permalink($id_post);
                $img_post = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), array(386,285)) ;
                //$img_post_thumb = set_post_thumbnail_size( $width, $height, $crop );
              ?>
              <div class="col-xs-1 col-sm-6 col-md-4">
                  <div style="background-image:url(<?= $img_post[0]?>)" class="sidebar-img-blog">

                      <div class="sidebar-img-dados-blog-posts">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                          <div class="sidebar-circulo center-block">
                            <p class="text-center sidebar-data-dia"><?= get_the_date('j',$id_post); ?></p>
                            <p class="text-center blog-data-mes"><?= get_the_date('F',$id_post); ?></p>
                          </div>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 sidebar-img-text">
                          <a href="<?= $link_post ?>"><?= $titulo_post ?></a>
                        </div>
                      </div>
                  </div>
              </div>
              <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
