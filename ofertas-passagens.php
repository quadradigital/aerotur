<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $ofertas = get_ativar();
 ?>
 <section style="<?php if($ofertas['ativar_ofertas'] == false){echo 'display:none;';} ?>" id="ofertas">
   <div class="container-fluid">
     <div class="row">
       <div class="container">
         <?php
         $args_post = array('post_type' => 'texto_ofertas', 'posts_per_page'=>1);
         $myposts_post = get_posts( $args_post );
         foreach ( $myposts_post as $post_post ){
             setup_postdata( $post_post );
             $id2 = $post_post->ID;
             $ofertas = get_texto_ofertas($id2);
         ?>
         <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
           <p id="titulo-color"><?= $ofertas['texto_superior']?></p>
           <h2 id="subtitulo-color"><?= $ofertas['texto_inferior']?></h2>
           <p id="subtitulo-table-passagens"><?= $ofertas['observacoes']?></p>
           <p id="promocoes-subtitulo"><?= $ofertas['descricao']?></p>
         </div>
         <?php }?>
       </div>
     </div> <!-- FIM row -->
   </div> <!-- FIM container-fluid -->
    <div class="continer-fluid space-down">
     <div class="row">
     <div class="container list-side-left">
     <?php
     $args_post = array('post_type' => 'tabela_ofertas', 'order' => 'ASC');
     $myposts_post = get_posts( $args_post );
     foreach ( $myposts_post as $post_post ){
        setup_postdata( $post_post );
         $id2 = $post_post->ID;
         $ofertas = get_ofertas($id2);
      ?>
        <div class= "col-xs-12 col-sm-6 col-md-6 list-side-left">
           <div class="list-group center-block">
              <span class="list-group-item painel-titulo">
                 <span class="pull-left pull-down-text">Destinos saindo de <?= $ofertas['cidade_origem']?></span>
                 <span class="pull-right pull-down-text">a partir de:</span>
               </span>
               <?php
               if(!empty($ofertas['companhia_aerea']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_passagem']?></span>
                 </div>
               </a>
               <?php }
               if(!empty($ofertas['companhia_aerea2']['url'])){
                ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea2']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea2']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_passagem2']?></span>
                 </div>
               </a>
             <? }
             if(!empty($ofertas['companhia_aerea3']['url'])){
              ?>
             <a href="#" class="list-group-item ofertas-item-lista">
               <div class="col-xs-1 col-sm-1 col-md-1">
                 <span class="pull-left"><img src="<?= $ofertas['companhia_aerea3']['url']?>"></span>
               </div>
               <div class="col-xs-5 col-sm-8 col-md-8">
                 <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea3']?></span>
               </div>
               <div class="col-xs-5 col-sm-3 col-md-3">
                 <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_passagem3']?></span>
               </div>
             </a>
           <? }
           if(!empty($ofertas['companhia_aerea4']['url'])){
            ?>
           <a href="#" class="list-group-item ofertas-item-lista">
             <div class="col-xs-1 col-sm-1 col-md-1">
               <span class="pull-left"><img src="<?= $ofertas['companhia_aerea4']['url']?>"></span>
             </div>
             <div class="col-xs-5 col-sm-8 col-md-8">
               <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea4']?></span>
             </div>
             <div class="col-xs-5 col-sm-3 col-md-3">
               <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_passagem4']?></span>
             </div>
           </a>
         <? }
         if(!empty($ofertas['companhia_aerea5']['url'])){
          ?>
         <a href="#" class="list-group-item ofertas-item-lista">
           <div class="col-xs-1 col-sm-1 col-md-1">
             <span class="pull-left"><img src="<?= $ofertas['companhia_aerea5']['url']?>"></span>
           </div>
           <div class="col-xs-5 col-sm-8 col-md-8">
             <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea5']?></span>
           </div>
           <div class="col-xs-5 col-sm-3 col-md-3">
             <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_passagem5']?></span>
           </div>
         </a>
       <? } ?>
             </div>
         </div>
      <?  } ?>
    </div>
      </div>
   </div>
</section>
