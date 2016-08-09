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

   <!-- Fixed navbar - NÃO EXIBE NO MOBILE -->
   <nav  class="navbar navbar-default navbar-fixed-top line-fixed-top hidden-xs">
     <div class="cont_largura container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand center-block" href="#" id="navbar-logo"></a>
       </div>
       <div id="navbar" class="collapse navbar-collapse navpersonal">
         <ul class="nav navbar-nav navbar-styles">
           <li class="dropdown">
             <a href="#" class="dropdown-toggle viagens-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GRUPO<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">GRUPO</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle corp-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VIAGENS<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">VIAGENS</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle teen-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TEEN<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="http://www.aeroturteen.com.br">TEEN</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle viaje-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VIAJE FÁCIL<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="#">VIAJE FÁCIL</a></li>
             </ul>
           </li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle salinas-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALINAS<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="/salinas/">SALINAS</a></li>
             </ul>
           </li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
