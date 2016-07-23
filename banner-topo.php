<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $banner_topo = get_banner_topo();
 ?>
 <section style="<?php if($banner_topo['ativar_banner_topo'] == false){echo 'display:none;';} ?>" id="banner_topo">
   <div class="container-fluid">
     <div class="row">
       <ul id="slider-topo">
         <?php
         if(!empty($banner_topo['banner1']['url'])){
         ?>
         <li>
           <img class="img-responsive" src="<?= $banner_topo['banner1']['url']?>">
         </li>
         <?php }
         if(!empty($banner_topo['banner2']['url'])){
         ?>
         <li>
           <img class="img-responsive" src="<?= $banner_topo['banner2']['url']?>">
         </li>
         <?php }
         if(!empty($banner_topo['banner3']['url'])){
         ?>
         <li>
           <img class="img-responsive" src="<?= $banner_topo['banner3']['url']?>">
         </li>
         <?php } ?>
       </ul>
     </div>
   </div>
</section>
