<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package aeroteen
 * @subpackage aeroteen
 * @since Aeroteen 1.0
 */
$img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), array(1110,410));
?>
      <div class="container-fluid space-down">
        <div class="row">
          <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 blog-box-img">
              <h4 id="titulo-color">BLOG</h4>
              <h2 class="subtitulo-blog" id="subtitulo-color">O MELHOR DESTINO</h2>
              <div class="size-img-blog">
                <img src="<?= $img[0]?>">
              </div>
                  <div class="col-xs-12 col-sm-7 col-md-7 blog-box-bg-l">
                    <div class="col-xs-12 col-sm-2 col-md-2">
                      <article class="col">
                        <div class="spacer"></div>
                          <div class="blog-circulo center-block">
                            <p class="text-center blog-data-dia"><?php the_time('j'); ?></p>
                            <p class="text-center blog-data-mes"><?php the_time('F'); ?></p>
                          </div>
                      </article>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-10 div-blog-titulo-img">
                      <p class="blog-titulo-img"><?php the_title(); ?></p>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-5 col-md-5 blog-box-bg-r">
                    <div class="col-xs-2 col-sm-1 col-md-1 box-r-comentarios">
                      <img src="<?php bloginfo('template_url') ?>/assets/img/bubble.png">
                    </div>
                    <div class="col-xs-2 col-sm-5 col-md-5 box-r-comentarios">
                      <a href="#">200 <span class="hidden-xs">comentários</span></a>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 box-social-twitter">
                      <img src="<?php bloginfo('template_url') ?>/assets/img/twitter.png">
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3 box-social-facebook">
                      <img src="<?php bloginfo('template_url') ?>/assets/img/facebook.png">
                    </div>
                  </div>

              <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 content-blog">
                <p><?php the_content(get_the_ID()); ?></p>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 content-blog-sidebar">
                <h4 class="text-right titulo-sidebar">Você também vai gostar de ler:</h4>
                  <div class="pull-right sidebar-img">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/city.jpg">
                      <div class="sidebar-img-dados">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                          <div class="sidebar-circulo center-block">
                            <p class="text-center sidebar-data-dia">22</p>
                            <p class="text-center blog-data-mes">JUN</p>
                          </div>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 sidebar-img-text">
                          Morbi malesuada eu urna non lacinia mauris id magna sit amet
                        </div>
                      </div>
                  </div>

                  <div class="pull-right sidebar-img">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/cityy.jpg">
                      <div class="sidebar-img-dados">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                          <div class="sidebar-circulo center-block">
                            <p class="text-center sidebar-data-dia">22</p>
                            <p class="text-center blog-data-mes">JUN</p>
                          </div>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 sidebar-img-text">
                          Morbi malesuada eu urna non lacinia mauris id magna sit amet
                        </div>
                      </div>
                  </div>
              </div>
              <!-- INÍCIO COMENTÁRIOS -->
              <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 content-blog-comentario">
                <h4>Deixe seu comentário</h4>

                <div class="row">
                  <form>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                          <label class="sr-only" for="inputNome">Nome</label>
                          <input type="text" class="form-control input-lg" id="inputNome" placeholder="Nome">
                        </div>
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                          <label class="sr-only" for="inputEmail">Email</label>
                          <input type="email" class="form-control input-lg" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="col-xs-12 col-sm-10 col-md-10">
                          <textarea class="form-control input-lg" rows="3" placeholder="Digite seu comentário"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 comentarios-botao">
                          <button type="submit" class="btn btn-danger btn-lg">OK</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div> <!-- /FIM COMENTÁRIOS -->
            </div>
          </div> <!-- /FIM container -->
        </div> <!-- /FIM row -->
      </div>  <!-- /FIM container-fluid -->
