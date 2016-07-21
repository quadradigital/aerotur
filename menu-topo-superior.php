<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $menu_superior = get_menu_superior();
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="viagens-navbar"><?= $menu_superior['texto_link1']?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= $menu_superior['link1_menu1']?>" target="_blank"><?= $menu_superior['texto_link1_menu1']?></a></li>
          </ul>
       </li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="corp-navbar"><?= $menu_superior['texto_link2']?> <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="<?= $menu_superior['link1_menu2']?>" target="_blank"><?= $menu_superior['texto_link1_menu2']?></a></li>
         </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="teen-navbar"><?= $menu_superior['texto_link3']?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?= $menu_superior['link1_menu3']?>" target="_blank"><?= $menu_superior['texto_link1_menu3']?></a></li>
        </ul>
     </li>
     <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="viaje-navbar"><?= $menu_superior['texto_link4']?> <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="<?= $menu_superior['link1_menu4']?>" target="_blank"><?= $menu_superior['texto_link1_menu4']?></a></li>
       </ul>
    </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="salinas-navbar"><?= $menu_superior['texto_link5']?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?= $menu_superior['link1_menu5']?>" target="_blank"><?= $menu_superior['texto_link1_menu5']?></a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
