<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $enderecos = get_enderecos();
 ?>
 <section style="<?php if($enderecos['ativar_enderecos'] == false){echo 'display:none;';} ?>" id="enderecos">
 <div class="container-fluid" id="bg-footer-one">
   <div class="row">
     <div  class="container">
       <div class="footer-one" id="footer-one">
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id="footer-one-local">
             <p><?= $enderecos['texto_loja1']?></p>
           </div>
           <div id="footer-one-tel">
             <p><span id="ddd-tel"><?= $enderecos['ddd1']?></span><?= $enderecos['telefone_loja1']?></p>
           </div>
           <hr class="endereco"></hr>
           <div id="footer-one-endereco">
             <p><?= $enderecos['endereco_loja1']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p><?= $enderecos['texto_loja2']?></p>
           </div>
           <div id="footer-one-tel">
             <p><span id="ddd-tel"><?= $enderecos['ddd2']?></span><?= $enderecos['telefone_loja2']?></p>
           </div>
           <hr class="endereco"></hr>
           <div id="footer-one-endereco">
             <p><?= $enderecos['endereco_loja2']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p><?= $enderecos['texto_loja3']?></p>
           </div>
           <div id="footer-one-tel">
             <p><span id="ddd-tel"><?= $enderecos['ddd3']?></span><?= $enderecos['telefone_loja3']?></p>
           </div>
           <hr class="endereco"></hr>
           <div id="footer-one-endereco">
             <p><?= $enderecos['endereco_loja3']?></p>
           </div>
         </div>
         <div class="col-xs-12 col-sm-3 col-md-3">
           <div id=footer-one-local>
             <p><?= $enderecos['texto_loja4']?></p>
           </div>
           <div id="footer-one-tel">
             <p><span id="ddd-tel"><?= $enderecos['ddd4']?></span><?= $enderecos['telefone_loja4']?></p>
           </div>
           <hr class="endereco"></hr>
           <div id="footer-one-endereco">
             <p><?= $enderecos['endereco_loja4']?></p>
           </div>
         </div>
       </div> <!-- FIM footer-one -->
     </div> <!-- FIM container -->
   </div> <!-- FIM row -->
 </div> <!-- FIM container-fluid -->
</section>
