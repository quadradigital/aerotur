<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $newsletter = get_newsletter();
 ?>
 <section style="<?php if($newsletter['ativar_news'] == false){echo 'display:none;';} ?>" id="news">
   <div id="news"></div>
<div class="container newsletter-espaco">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1" id="border-newsletter">
      <div class="row">
        <div class="col-xs-8 col-sm-6" id="newsletter">
          <p id="titulo-color-inverted">ASSINE NOSSA</p>
          <h2 id="subtitulo-color-inverted">NEWSLETTER</h2>
        </div>
        <div class="col-xs-4 col-sm-6" id="posicao-inputs">
          <div class="col-xs-5" id="remove-padding">
          Digite seu nome
          </div>
          <div class="col-xs-5" id="remove-padding">
          Digite seu e-mail
          </div>
        </div>
        <div class="col-xs-4 col-sm-6">
          <form class="form-inline">
            <div class="form-group">
              <input type="text" class="form-control" id="nome">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email">
            </div>
            <button type="submit" class="btn btn-danger">OK</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
