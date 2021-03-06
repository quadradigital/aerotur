<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
 ?>   
 <div id="sessao_contato"></div>
 <div class="container-fluid">
   <div class="row">
     <div class="container">
       <div class="col-xs-12 col-sm-6 col-md-6">
         <p id="titulo-color">ENTRE EM</p>
         <h2 id="subtitulo-color">CONTATO CONOSCO</h2>
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6">
       </div>
     </div>
   </div> <!-- FIM row -->
 </div> <!-- FIM container-fluid -->

 <form class="form-horizontal" role="form" method="post" action="#">

 <div class="container-fluid">
   <div class="row" id="contato-form">
     <div class="container">
       <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="form-group">
           <div class="col-sm-12">
             <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Nome" value="">
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-12">
             <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" value="">
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-12">
             <input type="text" class="form-control input-lg" id="telefone" name="telefone" placeholder="Telefone" value="">
           </div>
         </div>
       </div>

       <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="form-group">
           <div class="col-sm-12">
             <textarea class="form-control input-lg mensagem_height_contato" rows="4" name="mensagem" placeholder="Mensagem"></textarea>
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-12">
             <input id="submit" name="submit" type="submit" value="ENVIAR" class="btn btn-danger btn-lg btn-block">
           </div>
         </div>
       </div>
       <div class="col-xs-12 col-sm-4 col-md-4">
           <div class="row">
             <div class="col-xs-6 col-sm-6 col-md-6" id="img-phone">
               <img src="<?php bloginfo('template_url') ?>/corporativo/imgs/phone.png" height="27" width="37" class="pull-right">
             </div>
             <div class="col-xs-6 col-sm-6 col-md-6" id="text-phone-right">
               <p class="text-left plantao-text">PLANTÃO</p>
               <h2 class="text-left hour">24H</h2>
             </div>
           </div>

           <div class="row">
             <div id="hr-phone"></div>
           </div>

           <?php
            $args_post = array('post_type' => 'form_contato', 'posts_per_page'=>400, 'order'=>'ASC');
            $myposts_post = get_posts( $args_post );
            foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
                $id = $post_post->ID;
                $contato_plantao = get_contato_plantao($id);

                if(!empty($contato_plantao['cidade'])){
               ?>
               <div class="row">
                 <div class="col-xs-6 col-sm-6 col-md-6" id="cidade">
                   <p class="pull-right" id="cidade"><?= $contato_plantao['cidade']?>:</p>
                 </div>
                 <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                   <p class="pull-left" id="cidade-phone"><?= $contato_plantao['telefone']?></p>
                 </div>
                 <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                   <p class="pull-left" id="cidade-phone"><?= $contato_plantao['telefone2']?></p>
                 </div>
               </div>
               <?php }
            } ?>
       </div>
      </div>
     </div>
   </div>
 </form>
