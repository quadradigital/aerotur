<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $monte = get_ativar();
 ?>
 <section style="<?php if($monte['ativar_monte'] == false){echo 'display:none;';} ?>" id="monte">
   <div class="container-fluid space-down">
     <div class="row">
       <div class="container">
         <div class= "col-xs-12 col-md-12 no-padding-right">
           <?
           $args_post = array('post_type' => 'monte_sua_viagem');
           $myposts_post = get_posts( $args_post );
           foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
               $id2 = $post_post->ID;
               $monte = get_monte_sua_viagem($id2);
            ?>
           <span class="pull-right monte-sua-viagem"><?= $monte['texto_botao']?></span>
           <? } ?>
         </div>
       </div>
     </div>
   </div>
</section>
