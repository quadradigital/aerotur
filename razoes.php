<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $razoes = get_razoes();
 ?>
 <section style="<?php if($razoes['ativar_razao'] == false){echo 'display:none;';} ?>" id="razoes">
   <div id="razoes"></div>
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <p id="titulo-color">3 RAZÕES PARA</p>
        <h2 id="subtitulo-color">ESCOLHER A AEROTUR</h2>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container -->

<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <ul id="slippry-demo">
          <?php
          if(!empty($razoes['banner1']['url'])){
          ?>
          <li>
            <img src="<?= $razoes['banner1']['url']?>">
          </li>
          <?php }
          if(!empty($razoes['banner2']['url'])){
          ?>
          <li>
            <img src="<?= $razoes['banner2']['url']?>">
          </li>
          <?php }
          if(!empty($razoes['banner3']['url'])){
          ?>
          <li>
            <img src="<?= $razoes['banner3']['url']?>">
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>
 </section>
