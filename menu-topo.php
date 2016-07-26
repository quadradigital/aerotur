<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $menu = get_ativar();
 ?>
 <section style="<?php if($menu['ativar_menu'] == false){echo 'display:none;';} ?>" id="menu">
   <div id="menu"></div>
<div class="containter-fluid space-pills hidden-xs">
  <div class="container">
    <div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-4 kill-padding-left">
      <ul class="nav nav-pills style-pills-top">
      <?php
      $args_post = array('post_type' => 'texto_menu', 'order' => 'ASC');
      $myposts_post = get_posts( $args_post );
      foreach ( $myposts_post as $post_post ){
          setup_postdata( $post_post );
          $id2 = $post_post->ID;
          $menu = get_menu($id2);
       ?>
        <li role="presentation"><a href="#"><?= $menu['texto_menu']?></a></li>
      <? } ?>
      </ul>
    </div>
    <!--start REDES SOCIAIS TOPO -->
    <?php include('redes-sociais-topo.php') ?>
    <!--end REDES SOCIAIS TOPO -->
  </div>
</div>
</section>
