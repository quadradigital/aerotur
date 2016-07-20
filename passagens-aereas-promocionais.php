<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $promocao = get_promocao();
 ?>
 <section style="<?php if($promocao['ativar_promocao'] == false){echo 'display:none;';} ?>" id="promocao">
   <div id="promocao"></div>
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
        <p id="titulo-color">PASSAGENS AÉREAS</p>
        <h2 id="subtitulo-color">PROMOCIONAIS</h2>
        <p id="promocoes-subtitulo">Confira as melhores promoções do mercado de viagens:</p>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid space-down">
  <div class="row">
    <div class="container">
      <div class="col-xs-4 col-sm-4 col-md-12 promo-1">
      </div>
      <div class="col-xs-4 col-sm-4 col-md-12 promo-2">
      </div>
      <div class="col-xs-4 col-sm-4 col-md-12 promo-3">
      </div>
    </div>
  </div>
</div>
</section>
