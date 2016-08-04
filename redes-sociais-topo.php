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
<div class="col-xs-12 col-sm-3 col-md-3 pull-right social-top-icons hidden-xs">
  <ul class="list-unstyled list-inline pull-right">
    <?php
        $args_post = array('post_type' => 'redes_sociais', 'posts_per_page'=>400);
        $myposts_post = get_posts( $args_post );
        foreach ( $myposts_post as $post_post ){
          setup_postdata( $post_post );
          $id2 = $post_post->ID;
          $redessociais = get_redes_sociais($id2);
          if(!empty($redessociais['facebook'])){
          ?>
          <li><a href="<?= $redessociais['facebook']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/facebook.png" height="31" width="31" class="center-block"></a></li>
          <?php }
          if(!empty($redessociais['instagram'])){
          ?>
          <li><a href="<?= $redessociais['instagram']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/instagram.png" height="31" width="31" class="center-block"></a></li>
          <?php }
          if(!empty($redessociais['twitter'])){
          ?>
          <li><a href="<?= $redessociais['twitter']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/twitter.png" height="31" width="31" class="center-block"></a></li>
          <?php }
          if(!empty($redessociais['vimeo'])){
          ?>
          <li><a href="<?= $redessociais['vimeo']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/vimeo.png" height="31" width="31" class="center-block"></a></li>
          <?php }
          if(!empty($redessociais['flickr'])){
          ?>
          <li><a href="<?= $redessociais['flickr']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/flickr.png" height="31" width="31" class="center-block"></a></li>
          <?php }
        }?>
  </ul>
</div>
