<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $redessociais = get_redes_sociais();
 ?>
<div class="col-xs-3 col-sm-3 col-md-3 pull-right social-top-icons">
  <ul class="list-unstyled list-inline pull-right">
    <?php
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
    <?php } ?>
  </ul>
</div>
