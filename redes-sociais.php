<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $redessociais = get_ativar();
 ?>
 <section style="<?php if($redessociais['ativar_redes_sociais'] == false){echo 'display:none;';} ?>" id="redessociais">
<div class="container-fluid" id="bg-footer-zero">
  <div clss="row">
    <div class="container">
      <div class="footer-zero">
        <div class="col-xs-4 col-md-4 coluna-social-footer-titulo" id="coluna-esquerda-footer-zero">
          <p id="titulo-red">AEROTUR NAS</p>
          <h2 id="titulo-redes">REDES SOCIAIS</h2>
        </div>
        <div class="col-xs-4 col-md-4" id="coluna-esquerda-footer-zero">
          <ul class="list-unstyled list-inline coluna-social-footer" id="social-icons">
            <?php
              $args_post = array('post_type' => 'redes_sociais', 'posts_per_page'=>400);
            	$myposts_post = get_posts( $args_post );
            	foreach ( $myposts_post as $post_post ){
            		setup_postdata( $post_post );
            		$id2 = $post_post->ID;
                $redessociais = get_redes_sociais($id2);
                if(!empty($redessociais['facebook'])){
                ?>
                <li><a href="<?= $redessociais['facebook']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/facebook.png" height="54" width="54" class="center-block"></a></li>
                <?php }
                if(!empty($redessociais['instagram'])){
                ?>
                <li><a href="<?= $redessociais['instagram']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/instagram.png" height="54" width="54" class="center-block"></a></li>
                <?php }
                if(!empty($redessociais['twitter'])){
                ?>
                <li><a href="<?= $redessociais['twitter']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/twitter.png" height="54" width="54" class="center-block"></a></li>
                <?php }
                if(!empty($redessociais['vimeo'])){
                ?>
                <li><a href="<?= $redessociais['vimeo']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/vimeo.png" height="54" width="54" class="center-block"></a></li>
                <?php }
                if(!empty($redessociais['flickr'])){
                ?>
                <li><a href="<?= $redessociais['flickr']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/imgs/flickr.png" height="54" width="54" class="center-block"></a></li>
                <?php }
              }?>
          </ul>
        </div>
      </div> <!-- FIM footer-zero -->
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->
</section>
