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
           <p id="titulo-color">ENCONTRE O SEU LUGAR NO MUNDO COM ESTAS</p>
           <h2 id="subtitulo-color">OFERTAS DE PASSAGENS</h2>
           <p id="subtitulo-table-passagens">Preços a incluir taxas e encargos</p>
           <p id="promocoes-subtitulo">O menor preço em Passagens Aéreas e as melhores datas para voos pelo Brasil e o Mundo marcando sua origem abaixo:</p>
         </div>
       </div>
     </div> <!-- FIM row -->
   </div> <!-- FIM container-fluid -->

   <div class="continer-fluid space-down">
       <div class="container">
         <div class= "col-xs-6 col-sm-6 col-md-6 list-side-left">
            <div class="list-group">
               <span class="list-group-item painel-titulo">
                 <span class="pull-left pull-down-text">Destinos saindo de Natal/RN</span>
                 <span class="pull-right pull-down-text">a partir de:</span>
               </span>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo1.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Orlando</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 1.667,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo2.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Montreal</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 2.331,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo3.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Punta Cana</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 2.842,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo4.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Rio de Janeiro</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 610,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo5.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Porto Alegre</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 990,00</span>
                 </div>
               </a>
             </div>
         </div>
         <div class= "col-xs-6 col-sm-6 col-md-6 list-side-right">
           <div class="list-group">
               <span class="list-group-item painel-titulo">
                 <span class="pull-left pull-down-text">Destinos saindo de Natal/RN</span>
                 <span class="pull-right pull-down-text">a partir de:</span>
               </span>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo1.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Orlando</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 1.667,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo2.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Montreal</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 2.331,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo3.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Punta Cana</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 2.842,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo4.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Rio de Janeiro</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 610,00</span>
                 </div>
               </a>
               <a href="#" class="list-group-item ofertas-item-lista">
                 <div class="col-xs-1 col-sm-1 col-md-1">
                   <span class="pull-left"><img src="<?php bloginfo('template_url') ?>/imgs/voo5.png"></span>
                 </div>
                 <div class="col-xs-8 col-sm-8 col-md-8">
                   <span class="pull-left pull-left-cidade pull-down-text">Porto Alegre</span>
                 </div>
                 <div class="col-xs-3 col-sm-3 col-md-3">
                   <span class="pull-right pull-down-text">R$ 990,00</span>
                 </div>
               </a>
             </div>
           </div>
       </div>
   </div>
</section>
