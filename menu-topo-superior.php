<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
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
      <a class="navbar-brand" href="/" id="navbar-logo"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-styles">
        <li class="dropdown">
          <a href="/pacotes/" class="dropdown-toggle viagens-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="viagens-navbar"><span id="menu-text-viagens">VIAGENS</span></a>
        </li>
        <li class="dropdown">
          <a href="/corporativo/" class="dropdown-toggle corp-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="corp-navbar"><span id="menu-text-corp">CORPORATIVO</span></a>
        </li>
        <li class="dropdown">
          <a href="http://www.aeroturteen.com.br/" class="dropdown-toggle teen-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="teen-navbar"><span id="menu-text-teen">TEEN</span></a>        
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle viaje-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="viaje-navbar"><span id="menu-text-viaje">VIAJE FÁCIL</span></a>
        </li>
        <li class="dropdown">
          <a href="/salinas/" class="dropdown-toggle salinas-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="salinas-navbar"><span id="menu-text-salinas">SALINAS</span></a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Fixed navbar - EXIBE NO MOBILE -->
    <nav class="navbar navbar-default navbar-fixed-top line-fixed-top hidden-md hidden-sm hidden-lg">
      <div class="container">
        <div class="navbar-header menu-mobile">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand pull-left" href="#"><img src="<?php bloginfo('template_url') ?>/imgs/navlogo-bg-mb-f.png" class="navbar-logo"></a>
        </div>
        <div id="navbar1" class="collapse navbar-collapse navpersonal">
          <ul class="nav navbar-nav navbar-styles">
            <li><a href="#" class="viagens-navbar">VIAGENS</a></li>
            <li><a href="#" class="corp-navbar">CORPORATIVO</a></li>
            <li><a href="#" class="teen-navbar">TEEN</a></li>
            <li><a href="#" class="viaje-navbar">VIAJE FÁCIL</a></li>
            <li class="dropdown">
              <a href="<?php bloginfo('template_url') ?>/salinas.php" class="dropdown-toggle salinas-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALINAS <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/salinas/">SALINAS</a></li>
              </ul>
            </li>
            <ul class="nav navbar-bar navbar-links-inside">
              <li role="presentation"><a href="#">EMPRESA</a></li>
              <li role="presentation"><a href="#">PACOTES</a></li>
              <li role="presentation"><a href="#">BLOG</a></li>
              <li role="presentation"><a href="#">LOJAS</a></li>
              <li role="presentation"><a href="#">CONTATO</a></li>
            </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- /Fixed navbar - EXIBE NO MOBILE -->
