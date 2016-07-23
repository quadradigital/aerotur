<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $monte = get_monte_sua_viagem();
 ?>
 <section style="<?php if($monte['ativar_monte'] == false){echo 'display:none;';} ?>" id="monte">
   <div id="monte"></div>
   <div class="container-fluid space-down">
     <div class="row">
       <div class="container">
         <div class= "col-xs-12 col-md-12 no-padding-right">
           <span class="pull-right monte-sua-viagem"><?= $monte['texto_botao']?></span>
         </div>
       </div>
     </div>
   </div>
<section>
