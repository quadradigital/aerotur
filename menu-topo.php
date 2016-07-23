<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $menu = get_menu();
 ?>
 <section style="<?php if($menu['ativar_menu'] == false){echo 'display:none;';} ?>" id="menu">
   <div id="menu"></div>
<div class="containter-fluid space-pills hidden-xs">
  <div class="container">
    <div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-4 kill-padding-left">
      <ul class="nav nav-pills style-pills-top">
        <li role="presentation"><a href="#"><?= $menu['texto_menu1']?></a></li>
        <li role="presentation"><a href="#"><?= $menu['texto_menu2']?></a></li>
        <li role="presentation"><a href="#"><?= $menu['texto_menu3']?></a></li>
        <li role="presentation"><a href="#"><?= $menu['texto_menu4']?></a></li>
        <li role="presentation"><a href="#"><?= $menu['texto_menu5']?></a></li>
      </ul>
    </div>
    <!--start REDES SOCIAIS TOPO -->
    <?php include('redes-sociais-topo.php') ?>
    <!--end REDES SOCIAIS TOPO -->
  </div>
</div>
</section>
