<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $grupo_aerotur = get_grupo_aerotur();
 ?>

 <section style="<?php if($grupo_aerotur['ativar_grupo'] == false){echo 'display:none;';} ?>" id="grupo">
   <div id="grupo"></div>

<div class=container-fluid id="bg-footer-two">
  <div class="row">
    <div class="container">
      <div class="footer-two" id="footer-two">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <p class="">GRUPO AEROTUR</p>
        </div>
      </div> <!-- FIM footer-two -->
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid">
  <div class="row">
    <div class="footer-three">
      <div class="container">
        <?php
        if(!empty($grupo_aerotur['logo1']['url'])){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2">
        <a href="#"><img src="<?= $grupo_aerotur['logo1']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
        </div>
        <?php } ?>
        <?php
        if(!empty($grupo_aerotur['logo2']['url'])){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
        <a href="#"><img src="<?= $grupo_aerotur['logo2']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
        </div>
        <?php } ?>
        <?php
        if(!empty($grupo_aerotur['logo3']['url'])){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
        <a href="#"><img src="<?= $grupo_aerotur['logo3']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
        </div>
        <?php } ?>
        <?php
        if(!empty($grupo_aerotur['logo4']['url'])){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
        <a href="#"><img src="<?= $grupo_aerotur['logo4']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
        </div>
        <?php } ?>
        <?php
        if(!empty($grupo_aerotur['logo5']['url'])){
        ?>
        <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
        <a href="#"><img src="<?= $grupo_aerotur['logo5']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
        </div>
        <?php } ?>
      </div>
    </div> <!-- FIM footer-three -->
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->
</section>
