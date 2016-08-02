<?php
/**
 * Template Name: blog
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
 ?>
 <!-- AQUI INICIA O CONTEÚDO DO BLOG -->

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
                $img_post = wp_get_attachment_image_src( get_post_thumbnail_id($id_post), array(386,285));
              ?>
              <div class="col-xs-1 col-sm-6 col-md-4">
                  <div class="sidebar-img-blog">
                    <img src="<?= $img_post[0]?>" class="center-block img-blog-responsive">
                      <div class="sidebar-img-dados-blog-posts">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                          <div class="sidebar-circulo center-block">
                            <p class="text-center sidebar-data-dia"><?= get_the_date('j',$id_post); ?></p>
                            <p class="text-center blog-data-mes"><?= get_the_date('F',$id_post); ?></p>
                          </div>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 sidebar-img-text">
                          <a style="color: #EDBD7B; !important;" href="<?= $link_post ?>"><?= $titulo_post ?></a>
                        </div>
                      </div>
                  </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>

      <!-- /AQUI FINALIZA O CONTEÚDO DO BLOG -->
