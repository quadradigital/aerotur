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
              <?php
              $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
              $custom_args = array(
                  'post_type' => 'post',
                  'posts_per_page' => 2,
                  'paged' => $paged
              );
              $custom_query = new WP_Query( $custom_args );
              if ( $custom_query->have_posts() ) :
                while ( $custom_query->have_posts() ) : $custom_query->the_post();
                $posttags = get_the_tags();
                $categoria = get_the_category();
                $img_post = wp_get_attachment_image_src( get_post_thumbnail_id(), array(386,285)) ;
              ?>
              <div class="col-xs-12">
                <h2><a style="color: #EDBD7B; !important;" href="<?= get_post_permalink(); ?>"><?= get_the_title(); ?></a></h2>
                <div class="col-xs-12 img-lista-posts">
                  <a href="<?= get_post_permalink(); ?>"><img src="<?= $img_post[0]?>" class="pull-left img-blog-responsive"></a>
                  <div class="col-xs-12 meta-post">
                      <a style="color: #333; !important;" href="<?= get_post_permalink(); ?>"><span class="meta-data"><p><?= get_the_date('j \d\e F \d\e Y'); ?></p></span></a>
                  </div>
                </div>
                <div class="col-xs-12">
                  <p class="meta-tags"><i class="fa fa-user" aria-hidden="true"></i>
                    <span class="meta-titles">Autor: <span class="meta-info-text"><?= get_the_author(); ?></span></span> <i class="fa fa-tag" aria-hidden="true"></i>
                    <span class="meta-titles">Categorias: <span class="meta-info-text"><?= $categoria[0]->name;?></span></span> <i class="fa fa-tags" aria-hidden="true"></i>
                    <span class="meta-titles">Tags: <span class="meta-info-text"><?php if ($posttags) { foreach($posttags as $tag) { echo $tag->name . ' '; } }?></span></span></p>
                      <a style="color: #333; !important;" href="<?= get_post_permalink(); ?>"><p class="resumo-post"><?= get_the_excerpt(); ?></p></a>
                    </a>
                  <a href="<?= get_post_permalink(); ?>" class="btn btn-danger pull-right">LEIA MAIS</a>
                </div>
              </div>
              <?php
              endwhile;
              $links = paginacao($custom_query->max_num_pages,"",$paged);
              if ($links) {
              ?>
              Página <?= $paged ?> de <?= $custom_query->max_num_pages ?>
                  <?= $links ?>
              <?php }
              wp_reset_postdata();
              else:
              ?>
              <p><?php _e( 'Sem Posts.' ); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /AQUI FINALIZA O CONTEÚDO DO BLOG -->
