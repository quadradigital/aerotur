<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $ofertas = get_ofertas();
 ?>
 <section style="<?php if($ofertas['ativar_ofertas'] == false){echo 'display:none;';} ?>" id="ofertas">
   <div id="ofertas"></div>
   <div class="container-fluid">
     <div class="row">
       <div class="container">
         <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
           <p id="titulo-color"><?= $ofertas['texto_superior']?></p>
           <h2 id="subtitulo-color"><?= $ofertas['texto_inferior']?></h2>
           <p id="subtitulo-table-passagens"><?= $ofertas['observacoes']?></p>
           <p id="promocoes-subtitulo"><?= $ofertas['descricao']?></p>
         </div>
       </div>
     </div> <!-- FIM row -->
   </div> <!-- FIM container-fluid -->

   <div class="continer-fluid space-down">
      <div class="container list-side-left">
        <div class= "col-xs-12 col-sm-6 col-md-6 list-side-left">
           <div class="list-group center-block">
              <span class="list-group-item painel-titulo">
                 <span class="pull-left pull-down-text">Destinos saindo de <?= $ofertas['cidade_origem']?></span>
                 <span class="pull-right pull-down-text">a partir de:</span>
               </span>
               <?php
               if(!empty($ofertas['companhia_aerea1']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea1']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea1']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_companhia1']?></span>
                 </div>
               </a>
               <?php }
               if(!empty($ofertas['companhia_aerea2']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-2 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea2']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea2']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_companhia2']?></span>
                 </div>
               </a>
               <?php }
               if(!empty($ofertas['companhia_aerea3']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-2 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea3']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea3']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_companhia3']?></span>
                 </div>
               </a>
               <?php }
               if(!empty($ofertas['companhia_aerea4']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-2 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea4']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea4']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_companhia4']?></span>
                 </div>
               </a>
               <?php }
               if(!empty($ofertas['companhia_aerea5']['url'])){
               ?>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-2 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?= $ofertas['companhia_aerea5']['url']?>"></span>
                 </div>
                 <div class="col-xs-5 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text"><?= $ofertas['destino_companhia_aerea5']?></span>
                 </div>
                 <div class="col-xs-5 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text"><?= $ofertas['valor_inicial_companhia5']?></span>
                 </div>
               </a>
               <?php }?>
             </div>
         </div>
       </div>
   </div>
</section>
