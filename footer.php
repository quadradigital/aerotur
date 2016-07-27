<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $rodape = get_ativar();
 ?>
 <section style="<?php if($rodape['ativar_footer'] == false){echo 'display:none;';} ?>" id="footer">
 <div class="container-fluid">
   <div class=row>
     <div class="footer-four" id="footer-four">
       <div class="container">
         <?php
         $args_post = array('post_type' => 'footer', 'posts_per_page'=>400, 'order'=>'ASC');
         $myposts_post = get_posts( $args_post );
         foreach ( $myposts_post as $post_post ){
           setup_postdata( $post_post );
           $id2 = $post_post->ID;
           $rodape = get_rodape($id2);
          ?>
          <div class="col-xs-12 col-sm-2 col-md-2">
            <h4><?= $rodape['texto_topico_rodape_horizontal']?></h4>
            <ul class="list-unstyled">
              <a href="#"><li><?= $rodape['texto_topico_rodape_vertical1']?></li></a>
              <a href="#"><li><?= $rodape['texto_topico_rodape_vertical2']?></li></a>
              <a href="#"><li><?= $rodape['texto_topico_rodape_vertical3']?></li></a>
              <a href="#"><li><?= $rodape['texto_topico_rodape_vertical4']?></li></a>
              <a href="#"><li><?= $rodape['texto_topico_rodape_vertical5']?></li></a>
            </ul>
          </div>
         <? } ?>
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
