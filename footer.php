<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $rodape = get_rodape();
 ?>
 <section style="<?php if($rodape['ativar_footer'] == false){echo 'display:none;';} ?>" id="footer">
 <div class="container-fluid">
   <div class=row>
     <div class="footer-four" id="footer-four">
       <div class="container">
         <div class="col-xs-12 col-sm-2 col-md-2">
           <h4><?= $rodape['texto_topico_rodape_horizontal1']?></h4>
           <ul class="list-unstyled">
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical1']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical2']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical3']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical4']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical5']?></li></a>
           </ul>
         </div>
         <div class="col-xs-12 col-sm-2 col-md-2">
           <h4><?= $rodape['texto_topico_rodape_horizontal2']?></h4>
           <ul class="list-unstyled">
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical6']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical7']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical8']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical9']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical10']?></li></a>
           </ul>
         </div>
         <div class="col-xs-12 col-sm-2 col-md-2">
           <h4><?= $rodape['texto_topico_rodape_horizontal3']?></h4>
           <ul class="list-unstyled">
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical11']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical12']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical13']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical14']?></li></a>
             <a href="#"><li><?= $rodape['texto_topico_rodape_vertical15']?></li></a>
           </ul>
         </div>
         <div class="col-xs-12 col-sm-2 col-md-2">
           <h4><?= $rodape['texto_topico_rodape_horizontal4']?></h4>
             <ul class="list-unstyled">
               <a href="#"><li><?= $rodape['texto_topico_rodape_vertical16']?></li></a>
               <a href="#"><li><?= $rodape['texto_topico_rodape_vertical17']?></li></a>
               <a href="#"><li><?= $rodape['texto_topico_rodape_vertical18']?></li></a>
               <a href="#"><li><?= $rodape['texto_topico_rodape_vertical19']?></li></a>
               <a href="#"><li><?= $rodape['texto_topico_rodape_vertical20']?></li></a>
             </ul>
         </div>
         <div class="col-xs-12 col-sm-2 col-md-2">
           <ul class="list-unstyled" id="quinta-coluna-footer-four">
             <a href="#"><li>HOME</li></a>
             <a href="#"><li>NEWSLETTER</li></a>
             <a href="#"><li>3 MOTIVOS PARA ESCOLHER A AEROTUR</li></a>
             <a href="#"><li>CONTATO</li></a>
           </ul>
         </div>
       </div> <!-- FIM container -->
     </div> <!-- FIM footer-four -->
   </div> <!-- FIM row -->
 </div> <!-- FIM container-fluid -->
</section>

 <div class="container-fluid">
   <div class="row">
     <div class="footer-five">
       <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/logoquadra.png" height="60" width="128" class="img-responsive center-block"></a>
     </div> <!-- FIM footer-five -->
   </div> <!-- FIM row -->
 </div> <!-- FIM container-fluid -->
</footer> <!-- FIM footer -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url') ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php bloginfo('template_url') ?>/assets/dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script src="<?php bloginfo('template_url') ?>/assets/js/infobox.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/markerclusterer.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/mapa.js"></script>

<script src="<?php bloginfo('template_url') ?>/assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="<?php bloginfo('template_url') ?>/assets/js/slippry.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/scripts.js"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/r.js"></script>

<script>
 $(document).ready(function(){
   $('selector').slippry()
 });
</script>

</body>

</html>
