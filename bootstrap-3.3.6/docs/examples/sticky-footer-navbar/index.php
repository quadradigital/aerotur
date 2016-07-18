<?php
/**
 * The main template file
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */

get_header(); ?>
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

        <div class="container-fluid">
          <div class="row">
            <div class="container">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <p id="titulo-color">ENTRE EM</p>
                <h2 id="subtitulo-color">CONTATO CONOSCO</h2>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
              </div>
            </div>
          </div> <!-- FIM row -->
        </div> <!-- FIM container-fluid -->

        <form class="form-horizontal" role="form" method="post" action="#">

        <div class="container-fluid">
          <div class="row" id="contato-form">
            <div class="container">
              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control input-lg" id="name" name="name" placeholder="Nome" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" value="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" class="form-control input-lg" id="telefone" name="telefone" placeholder="Telefone" value="">
                  </div>
                </div>
              </div>

              <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea class="form-control input-lg" rows="4" name="mensagem" placeholder="Mensagem"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input id="submit" name="submit" type="submit" value="ENVIAR" class="btn btn-danger btn-lg btn-block">
                  </div>
                </div>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6" id="img-phone">
                      <img src="<?php bloginfo('template_url') ?>/imgs/phone.png" height="27" width="37" class="pull-right">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" id="text-phone-right">
                      <p class="text-left plantao-text">PLANTÃO</p>
                      <h2 class="text-left hour">24H</h2>
                    </div>
                  </div>

                  <div class="row">
                    <hr id="hr-phone"></hr>
                  </div>

                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade">
                      <p class="pull-right" id="cidade">NATAL:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                      <p class="pull-left" id="cidade-phone">(84) 3220.2999</p>
                    </div>
                  </div>

                  <div calss="row">
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade">
                      <!-- VERIFICAR AS CLASSES DE OFFSET DO BOOTSTRAP PARA REMOVER ESTA DIV -->
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                      <p class="pull-left" id="cidade-phone">(84) 9402.2999</p>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade">
                      <p class="pull-right" id="cidade-recife">RECIFE:</p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                      <p class="pull-left" id="cidade-phone-recife">(81) 3326.8872</p>
                    </div>
                  </div>

              </div>
             </div>
            </div>
          </div>
        </form>


        <div class="container-fluid">
          <div class="row">
            <div class="container">
              <div class="col-xs-2 col-sm-2 col-md-2">
                <p id="titulo-color">NOSSAS</p>
                <h2 id="subtitulo-color">LOJAS</h2>
              </div>
              <div class="col-xs-10 col-sm-10 col-md-10">
              </div>
            </div> <!-- FIM container -->
          </div> <!-- FIM row -->
        </div> <!-- FIM container-fluid -->

    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div id="maps">
          </div>
        </div>
      </div>

      <div class="container-fluid" id="bg-footer-zero">
        <div clss="row">
          <div class="container">
            <div class="footer-zero">
              <div class="col-xs-4 col-sm-4 col-md-4" id="coluna-esquerda-footer-zero">
                <p id="titulo-red">AEROTUR NAS</p>
                <h2 id="titulo-redes">REDES SOCIAIS</h2>
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8" id="coluna-esquerda-footer-zero">
                <ul class="list-unstyled list-inline" id="social-icons">
                  <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/facebook.png" height="54" width="54" class="center-block"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/instagram.png" height="54" width="54" class="center-block"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/twitter.png" height="54" width="54" class="center-block"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/vimeo.png" height="54" width="54" class="center-block"></a></li>
                  <li><a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/flickr.png" height="54" width="54" class="center-block"></a></li>
                </ul>
              </div>
            </div> <!-- FIM footer-zero -->
          </div>
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->

      <div class="container-fluid" id="bg-footer-one">
        <div class="row">
          <div  class="container">
            <div class="footer-one" id="footer-one">
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div id="footer-one-local">
                  <p>MATRIZ - NATAL/RN</p>
                </div>
                <div id="footer-one-tel">
                  <p><span id="ddd-tel">(84)</span> 3220-2999</p>
                </div>
                <hr class="endereco"></hr>
                <div id="footer-one-endereco">
                  <p>Rua Apodi, 583 - Tirol</p>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div id=footer-one-local>
                  <p>SHOPPING CIDADE JARDIM - NATAL/RN</p>
                </div>
                <div id="footer-one-tel">
                  <p><span id="ddd-tel">(84)</span> 3204-2999</p>
                </div>
                <hr class="endereco"></hr>
                <div id="footer-one-endereco">
                  <p>Av. Engenheiro Roberto Freire, 2920</p>
                  <p id="sub-endereco">Loja 01E - Capim Macio</p>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div id=footer-one-local>
                  <p>AEROPORTO ALOÍZIO ALVES - NATAL/RN</p>
                </div>
                <div id="footer-one-tel">
                  <p><span id="ddd-tel">(84)</span> 9402-2999</p>
                </div>
                <hr class="endereco"></hr>
                <div id="footer-one-endereco">
                  <p>Aeroporto Internacional Governador</p>
                  <p id="sub-endereco">Aluízio Alves</p>
                </div>
              </div>
              <div class="col-xs-3 col-sm-3 col-md-3">
                <div id=footer-one-local>
                  <p>AEROTUR AFLITOS - RECIFE/PE</p>
                </div>
                <div id="footer-one-tel">
                  <p><span id="ddd-tel">(81)</span> 3326-8872</p>
                </div>
                <hr class="endereco"></hr>
                <div id="footer-one-endereco">
                  <p>Avenida Santos Dumont, 38 - Aflitos</p>
                </div>
              </div>
            </div> <!-- FIM footer-one -->
          </div> <!-- FIM container -->
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->

      <div class=container-fluid id="bg-footer-two">
        <div class="row">
          <div class="container">
            <div class="footer-two" id="footer-two">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <p class="">GRUPO AEROTUR</p>
              </div>
            </div> <!-- FIM footer-two -->
          </div>
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->

      <div class="container-fluid">
        <div class="row">
          <div class="footer-three">
            <div class="container">
              <div class="col-xs-2 col-sm-2 col-md-2">
              <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/aeroviag.png" height="54" width="181" class="img-responsive center-block"></a>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
                <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/aerocorp.png" height="54" width="181" class="img-responsive center-block"></a>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
                <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/aeroteen.png" height="54" width="181" class="img-responsive center-block"></a>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
                <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/aeroserv.png" height="54" width="181" class="img-responsive center-block"></a>
              </div>
              <div class="col-xs-2 col-sm-2 col-md-2 col-half-offset">
                <a href="#"><img src="<?php bloginfo('template_url') ?>/imgs/aeroviag.png" height="54" width="181" class="img-responsive center-block"></a>
              </div>
            </div>
          </div> <!-- FIM footer-three -->
        </div> <!-- FIM row -->
      </div> <!-- FIM container-fluid -->
<!--start  FOOTER  -->
<?php get_footer(); ?>
<!--end  FOOTER  -->
