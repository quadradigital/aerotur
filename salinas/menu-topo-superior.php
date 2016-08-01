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
   <nav class="navbar navbar-default navbar-fixed-top line-fixed-top hidden-xs">
     <div class="container">
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
             <a href="#" class="dropdown-toggle viagens-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VIAGENS<span class="caret"></span></a>
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

           <li class="dropdown">
             <a href="#" class="dropdown-toggle corp-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CORPORATIVO<span class="caret"></span></a>
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

           <li class="dropdown">
             <a href="#" class="dropdown-toggle teen-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TEEN<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="http://www.aeroturteen.com.br/">AEROTUR TEEN</a></li>
             </ul>
           </li>

           <li class="dropdown">
             <a href="#" class="dropdown-toggle viaje-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VIAJE FÁCIL<span class="caret"></span></a>
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

           <li class="dropdown">
             <a href="#" class="dropdown-toggle salinas-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALINAS <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="/salinas/">SALINAS</a></li>
             </ul>
           </li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
   <!-- /Fixed navbar - NÃO EXIBE NO MOBILE -->

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
             <a href="#" class="dropdown-toggle salinas-navbar" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SALINAS <span class="caret"></span></a>
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
