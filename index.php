<?php
/**
 * The main template file
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
     get_header();
?>
  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top line-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" id="navbar-logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-styles">
            <li><a href="#" id="viagens-navbar">VIAGENS</a></li>
            <li><a href="#about" id="corp-navbar">CORPORATIVO</a></li>
            <li><a href="#contact" id="teen-navbar">TEEN</a></li>
            <li><a href="#contact" id="viaje-navbar">VIAJE FÁCIL</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="salinas-navbar">SALINAS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->

    <div class="containter-fluid space-pills">
      <div class="container">
        <div class="col-xs-5 col-sm-5 col-md-5 col-xs-offset-4 kill-padding-left">
          <ul class="nav nav-pills style-pills-top">
            <li role="presentation"><a href="#">EMPRESA</a></li>
            <li role="presentation"><a href="#">PACOTES</a></li>
            <li role="presentation"><a href="#">BLOG</a></li>
            <li role="presentation"><a href="#">LOJAS</a></li>
            <li role="presentation"><a href="#">CONTATO</a></li>
          </ul>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 pull-right social-top-icons">
          <ul class="list-unstyled list-inline pull-right">
            <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/facebook.png" height="31" width="31" class="center-block"></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/instagram.png" height="31" width="31" class="center-block"></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/twitter.png" height="31" width="31" class="center-block"></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/vimeo.png" height="31" width="31" class="center-block"></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/flickr.png" height="31" width="31" class="center-block"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <ul id="slider-topo">
          <li>
            <img src="<?php bloginfo('template_url') ?>/assets/img/image-1.jpg">
          </li>
          <li>
            <img src="<?php bloginfo('template_url') ?>/assets/img/image-2.jpg">
          </li>
          <li>
            <img src="<?php bloginfo('template_url') ?>/assets/img/image-4.jpg">
          </li>
        </ul>
      </div>
    </div>

    <div class="container-fluid space-down">
      <div class="row">
        <div class="container">
          <div class= "col-xs-12 col-sm-12 col-md-12 no-padding-right">
            <span class="pull-right monte-sua-viagem">Monte sua viagem</span>
          </div>
        </div>
      </div>
    </div>

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

      <div class="container-fluid space-down">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 bg-blogs">
            <div class="container">
              <div class="col-xs-4 col-sm-4 col-md-4 bg-textbox-left">
                <h4>BLOG</h4>
                <h2>O MELHOR DESTINO</h2>
                <h5>15 de abril de 2016</h5>
                <h3>Morbi malesuada eu urna non lacinia mauris id magna sit amet</h3>
                <p>
                Quisque pulvinar maximus odio eu faucibus. Maecenas laoreet ipsum eros, et blandit dolor aliquet et. Aenean ut mollis tortor, eu elementum massa. Nunc laoreet, nisl sit amet accumsan euismod, urna sapien dictum enim, sit amet posuere ante ipsum quis velit. Mauris at nisl posuere, condimentum lorem eu, molestie arcu. Donec arcu diam, suscipit id congue non, laoreet in ante. Praesent at viverra felis. Phasellus imperdiet at ligula in pretium. Aenean tincidunt ut tortor quis semper.</p>

                <p>Nulla facilisis enim dolor. Phasellus facilisis elementum sodales. Phasellus scelerisque lorem quis libero euismod, non interdum odio tincidunt. Morbi maximus magna vel tortor consequat euismod. Morbi dictum, dolor at euismod malesuada, sem libero commodo velit, vel commodo risus ex id libero. Aenean semper bibendum lacus in maximus.
                <button type="button" class="btn btn-danger pull-left">+ POSTS</button>
                </p>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 bg-textbox-right">
                <h4 class="text-right">BLOG</h4>
                <h2 class="text-right">AEROTUR DISNEY</h2>
                <h5>15 de abril de 2016</h5>
                <h3>Morbi malesuada eu urna non lacinia mauris id magna sit amet</h3>
                <p>
                Quisque pulvinar maximus odio eu faucibus. Maecenas laoreet ipsum eros, et blandit dolor aliquet et. Aenean ut mollis tortor, eu elementum massa. Nunc laoreet, nisl sit amet accumsan euismod, urna sapien dictum enim, sit amet posuere ante ipsum quis velit. Mauris at nisl posuere, condimentum lorem eu, molestie arcu. Donec arcu diam, suscipit id congue non, laoreet in ante. Praesent at viverra felis. Phasellus imperdiet at ligula in pretium. Aenean tincidunt ut tortor quis semper.</p>

                <p>Nulla facilisis enim dolor. Phasellus facilisis elementum sodales. Phasellus scelerisque lorem quis libero euismod, non interdum odio tincidunt. Morbi maximus magna vel tortor consequat euismod. Morbi dictum, dolor at euismod malesuada, sem libero commodo velit, vel commodo risus ex id libero. Aenean semper bibendum lacus in maximus.
                </p>
                <button type="button" class="btn btn-success pull-right">+ POSTS</button>
              </div>
            </div>
          </div>
        </div>
      </div>

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
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/assets/img/image-1.jpg">
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/assets/img/image-2.jpg">
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/assets/img/image-4.jpg">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      <!--start CONTATO -->
      <?php include('form-contato.php') ?>
      <!--end CONTATO -->

      <!--start MAPA -->
      <?php include('mapa.php') ?>
      <!--end MAPA -->

      <!--start REDES SOCIAIS -->
      <?php include('redes-sociais.php') ?>
      <!--end REDES SOCIAIS -->

      <!--start GRUPO AEROTUR -->
      <?php include('grupo-aerotur.php') ?>
      <!--end GRUPO AEROTUR -->
<!--start  FOOTER  -->
<?php get_footer(); ?>
<!--end  FOOTER  -->
