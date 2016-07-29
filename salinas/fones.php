<?php
/*
  * Template Name: Salinas
  * @package aerotur
  * @subpackage aerotur
  * @since Aerotur 1.0
  */
  $fones = get_ativar();
 ?>
<section style="<?php if($fones['ativar_fones'] == false){echo 'display:none;';} ?>" id="fones">
  <?php
  $args_post = array('post_type' => 'secao_salinas_fone', 'posts_per_page'=>1);
  $myposts_post = get_posts( $args_post );
  foreach ( $myposts_post as $post_post ){
      setup_postdata( $post_post );
      $id2 = $post_post->ID;
      $fones = get_fones($id2);
    }
   ?>
 <div class="container-fluid" id="bg-footer-one">
   <div class="row">
     <div  class="container">
       <div class="footer-one" id="footer-one">
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id="footer-one-local">
             <p>FONE</p>
           </div>
           <div id="footer-one-tel">
             <p><?= $fones['telefone']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p>FAX</p>
           </div>
           <div id="footer-one-tel">
             <p><?= $fones['telefone2']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p>CELULAR</p>
           </div>
           <div id="footer-one-tel">
             <p><?= $fones['telefone3']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p>PLANTÃO</p>
           </div>
           <div id="footer-one-tel">
             <p><?= $fones['telefone4']?></p>
           </div>
         </div>
       </div> <!-- FIM footer-one -->
     </div> <!-- FIM container -->
   </div> <!-- FIM row -->
 </div> <!-- FIM container-fluid -->
</section>
