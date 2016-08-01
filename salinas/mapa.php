<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
 $mapa = get_ativar();
 ?>
 <footer class="footer">
 <section style="<?php if($mapa['ativar_mapa_salinas'] == false){echo 'display:none;';} ?>" id="mapa">
   <div class="container-fluid">
     <div class="row">
       <div id="maps">
          <!-- Maps API Javascript -->
           <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCF88DKo2KBtZe2VK30w1b9GEefAxuYa2Q&amp;sensor=false"></script>
       </div>
     </div>
   </div>
</section>
