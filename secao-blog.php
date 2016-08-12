<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $blog = get_ativar();

    $args_post = array('post_type' => 'post', 'posts_per_page'=>1, 'order'=>'ASC');
    $myposts_post = get_posts( $args_post );
    foreach ( $myposts_post as $post_post ){
      setup_postdata( $post_post );
      $id_post = $post_post->ID;
      $titulo_post = get_the_title($id_post);
      $conteudo = get_the_excerpt($id);
      //$conteudo_post = wp_strip_all_tags(get_the_content(), false);
      $link_post = get_post_permalink($id_post);
    }
  ?>
 <section style="<?php if($blog['ativar_blog'] == false){echo 'display:none;';} ?>" id="blog">
   <div class="container-fluid">
     <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 bg-blogs">
          <div class="container">
            <div class="col-xs-12">
              <div class="col-md-6 side-l-correction">
               <div class="col-xs-12 col-sm-9 col-md-9 bg-textbox-left side-l-correction">
                 <h4>BLOG</h4>
                 <h2>O MELHOR DESTINO</h2>
                 <h5><?= get_the_date(' j \d\e F \d\e Y',$id_post); ?></h5>
                 <h3><?= $titulo_post ?></h3>
                 <p><a href="<?= $link_post?>" style="color: #fff; !important;"><?= $conteudo ?></a></p>
               </div>
              </div>
              <div class="col-md-6 side-r-correction">
               <div class="col-xs-12 col-sm-9 col-md-9 col-md-offset-3 bg-textbox-right side-r-correction">
                 <h4 class="text-right">BLOG</h4>
                 <h2 class="text-right">AEROTUR DISNEY</h2>
                 <?php
                 $xml = simplexml_load_file('http://www.aeroturteen.com.br/category/blog-blog/feed/');
                 setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                 date_default_timezone_set('America/Recife');
                  ?>
                 <h5><?= strftime('%d de %B de %Y', strtotime($xml->channel->item->pubDate))?></h5>
                 <h3><?= $xml->channel->item->title?></h3>
                 <p><a href="<?= $xml->channel->item->link?>" style="color: #fff; !important;"><?= $xml->channel->item->description?></a></p>                   
               </div>
              </div>
            </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  
  <div class="container space-down">
    <div class="col-xs-6 pull-left">
      <button type="button" class="btn btn-danger pull-left btn-posts-red"><a href="http://aeroturnovo.quadradigital.com.br/blog/" style="color: #fff; !important;">+ POSTS</a></button>
    </div>
    <div class="col-xs-6 pull-right">
      <button type="button" class="btn btn-success pull-right btn-posts-green"><a href="http://www.aeroturteen.com.br/blog/" style="color: #fff; !important;">+ POSTS</a></button>
    </div>
  </div>

</section>
