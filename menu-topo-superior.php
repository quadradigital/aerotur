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
            <li><a href="#"><?= $menu_superior['link1']?></a></li>
            <li><a href="#"><?= $menu_superior['link2']?></a></li>
            <li><a href="#"><?= $menu_superior['link3']?></a></li>
            <li><a href="#"><?= $menu_superior['link4']?></a></li>
            <li><a href="#"><?= $menu_superior['link5']?></a></li>
          </ul>
       </li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="corp-navbar"><?= $menu_superior['texto_link2']?> <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="#"><?= $menu_superior['link6']?></a></li>
           <li><a href="#"><?= $menu_superior['link7']?></a></li>
           <li><a href="#"><?= $menu_superior['link8']?></a></li>
           <li><a href="#"><?= $menu_superior['link9']?></a></li>
           <li><a href="#"><?= $menu_superior['link10']?></a></li>
         </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="teen-navbar"><?= $menu_superior['texto_link3']?> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?= $menu_superior['link11']?></a></li>
          <li><a href="#"><?= $menu_superior['link12']?></a></li>
          <li><a href="#"><?= $menu_superior['link13']?></a></li>
          <li><a href="#"><?= $menu_superior['link14']?></a></li>
          <li><a href="#"><?= $menu_superior['link15']?></a></li>
        </ul>
     </li>
     <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="viaje-navbar"><?= $menu_superior['texto_link4']?> <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="#"><?= $menu_superior['link16']?></a></li>
         <li><a href="#"><?= $menu_superior['link17']?></a></li>
         <li><a href="#"><?= $menu_superior['link18']?></a></li>
         <li><a href="#"><?= $menu_superior['link19']?></a></li>
         <li><a href="#"><?= $menu_superior['link20']?></a></li>
       </ul>
    </li>
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="salinas-navbar"><?= $menu_superior['texto_link5']?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><?= $menu_superior['link21']?></a></li>
            <li><a href="#"><?= $menu_superior['link22']?></a></li>
            <li><a href="#"><?= $menu_superior['link23']?></a></li>
            <li><a href="#"><?= $menu_superior['link24']?></a></li>
            <li><a href="#"><?= $menu_superior['link25']?></a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
