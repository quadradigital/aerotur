<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $mapa = get_mapa();
 ?>
 <footer class="footer">
 <section style="<?php if($mapa['ativar_mapa'] == false){echo 'display:none;';} ?>" id="mapa">
   <div id="mapa"></div>
   <div class="container-fluid">
     <div class="row">
       <div class="container">
         <div class="col-xs-2 col-sm-2 col-md-2">
           <p id="titulo-color">NOSSAS</p>
           <h2 id="subtitulo-color">LOJAS</h2>
         </div>
         <div class="col-xs-10 col-sm-10 col-md-10">
         </div>
       </div> <!-- FIM container -->
     </div> <!-- FIM row -->
   </div> <!-- FIM container-fluid -->
   <div class="container-fluid">
     <div class="row">
       <div id="maps" style="">
          <!-- Maps API Javascript -->
           <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCF88DKo2KBtZe2VK30w1b9GEefAxuYa2Q&amp;sensor=false"></script>
       </div>
     </div>
   </div>
</section>
<footer class="footer">
