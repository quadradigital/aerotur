<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $recomendacoes = get_recomendacoes();
 ?>
 <section style="<?php if($recomendacoes['ativar_recomendacoes'] == false){echo 'display:none;';} ?>" id="recomendacoes">
   <div id="recomendacoes"></div>
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
        <p id="titulo-color">CONHEÇA AS</p>
        <h2 id="subtitulo-color">RECOMENDAÇÕES DOS NOSSOS CLIENTES</h2>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-lg-3 recomendacao-1">
        <div class="recomendacao-dados">
          <div class="media">
            <div class="media-left">
              <img class="media-object img-bordas" src="<?php bloginfo('template_url') ?>/imgs/perfil.png" width="52" height="52">
            </div>
            <div class="media-body">
              <h5 class="media-heading media-nome">JOÃO DA SILVA RECOMENDA:</h5>
              <h4 class="media-heading media-local">Las Vegas</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 recomendacao-2">
        <div class="recomendacao-dados">
          <div class="media">
            <div class="media-left">
              <img class="media-object img-bordas" src="<?php bloginfo('template_url') ?>/imgs/perfil.png" width="52" height="52">
            </div>
            <div class="media-body">
              <h5 class="media-heading media-nome">ANA MARIA RECOMENDA:</h5>
              <h4 class="media-heading media-local">Foz do Iguaçu</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 recomendacao-3">
        <div class="recomendacao-dados">
          <div class="media">
            <div class="media-left">
              <img class="media-object img-bordas" src="<?php bloginfo('template_url') ?>/imgs/perfil.png" width="52" height="52">
            </div>
            <div class="media-body">
              <h5 class="media-heading media-nome">PAULO FREITAS RECOMENDA:</h5>
              <h4 class="media-heading media-local">Miami</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 recomendacao-4">
        <div class="recomendacao-dados">
          <div class="media">
            <div class="media-left">
              <img class="media-object img-bordas" src="<?php bloginfo('template_url') ?>/imgs/perfil.png" width="52" height="52">
            </div>
            <div class="media-body">
              <h5 class="media-heading media-nome">CLÁUDIA SANTOS RECOMENDA:</h5>
              <h4 class="media-heading media-local">Roma</h4>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid space-down">
  <div class="row">
    <div class="container">
      <div class="col-lg-3 recomendacao-rodape-text">
      "Morbi malesuada eu urna non lacinia. Mauris id magna sit amet nunc egestas vehicula ut vitae."
      </div>
      <div class="col-lg-3 recomendacao-rodape-text">
      "Morbi malesuada eu urna non lacinia. Mauris id magna sit amet nunc egestas vehicula ut vitae."
      </div>
      <div class="col-lg-3 recomendacao-rodape-text">
      "Morbi malesuada eu urna non lacinia. Mauris id magna sit amet nunc egestas vehicula ut vitae."
      </div>
      <div class="col-lg-3 recomendacao-rodape-text">
      "Morbi malesuada eu urna non lacinia. Mauris id magna sit amet nunc egestas vehicula ut vitae."
      </div>
    </div>
  </div>
</div>
</section>
