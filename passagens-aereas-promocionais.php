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
              <p id="titulo-color"><?= $promocao['texto_superior']?></p>
              <h2 id="subtitulo-color"><?= $promocao['texto_inferior']?></h2>
              <p id="promocoes-subtitulo"><?= $promocao['descricao']?>:</p>
            </div>
          </div>
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->

      <div class="container-fluid space-down">
        <div class="row">
          <div class="container">
            <?php
            if(!empty($promocao['imagem1']['url'])){
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4 promo-1">
              <img src="<?= $promocao['imagem1']['url']?>" class="img-responsive">
            </div>
            <?php }
            if(!empty($promocao['imagem2']['url'])){
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4 promo-2">
              <img src="<?= $promocao['imagem2']['url']?>" class="img-responsive">
            </div>
            <?php }
            if(!empty($promocao['imagem3']['url'])){
            ?>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <img src="<?= $promocao['imagem3']['url']?>" class="img-responsive">
            </div>
            <?php }
            ?>
          </div>
        </div>
      </div>
</section>
