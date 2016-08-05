<?php
/**
 * The Header template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <meta name="description" content="">
     <meta name="author" content="">
     <link rel="icon" href="#">
     <meta name="theme-color" content="#B7986D">

     <title><?php wp_title( '-', true, 'right'); bloginfo() ?></title>

     <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/corporativo/assets/css/slippry.css">
     <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/corporativo/assets/css/jquery.bxslider.css">

     <!-- Bootstrap core CSS -->
     <link href="<?php bloginfo('template_url') ?>/assets/dist/css/bootstrap.css" rel="stylesheet">

     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <link href="<?php bloginfo('template_url') ?>/corporativo/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

     <!-- Custom styles for this template -->
     <link href="<?php bloginfo('template_url') ?>/corporativo/css/style-corporativo.css" rel="stylesheet">
     <link href="<?php bloginfo('template_url') ?>/corporativo/css/fonts.css" rel="stylesheet">

     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/ie-emulation-modes-warning.js"></script>

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->

     <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

   </head>
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
         <div class="containter-fluid space-pills hidden-xs">
       <div class="menu_div2 container cont_largura">
         <div class="menu_2_divul col-xs-12 col-sm-5 col-md-5 col-md-offset-4 kill-padding-left">
           <ul class="nav nav-pills style-pills-top">
             <li role="presentation"><a href="#">EMPRESA</a></li>
             <li role="presentation"><a href="#">PACOTES</a></li>
             <li role="presentation"><a href="/blog/">BLOG</a></li>
             <li role="presentation"><a href="#">LOJAS</a></li>
             <li role="presentation"><a href="#">CONTATO</a></li>
           </ul>
         </div>
         <div class="menu_2_redes col-xs-12 col-sm-3 col-md-3 pull-right social-top-icons hidden-xs">
           <ul class="list-unstyled list-inline pull-right">
             <?php
                 $args_post = array('post_type' => 'redes_sociais', 'posts_per_page'=>400);
                 $myposts_post = get_posts( $args_post );
                 foreach ( $myposts_post as $post_post ){
                   setup_postdata( $post_post );
                   $id2 = $post_post->ID;
                   $redessociais = get_redes_sociais($id2);
                   if(!empty($redessociais['facebook'])){
                   ?>
                   <li><a href="<?= $redessociais['facebook']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/facebook.png" height="31" width="31" class="center-block"></a></li>
                   <?php }
                   if(!empty($redessociais['instagram'])){
                   ?>
                   <li><a href="<?= $redessociais['instagram']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/instagram.png" height="31" width="31" class="center-block"></a></li>
                   <?php }
                   if(!empty($redessociais['twitter'])){
                   ?>
                   <li><a href="<?= $redessociais['twitter']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/twitter.png" height="31" width="31" class="center-block"></a></li>
                   <?php }
                   if(!empty($redessociais['vimeo'])){
                   ?>
                   <li><a href="<?= $redessociais['vimeo']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/vimeo.png" height="31" width="31" class="center-block"></a></li>
                   <?php }
                   if(!empty($redessociais['flickr'])){
                   ?>
                   <li><a href="<?= $redessociais['flickr']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/flickr.png" height="31" width="31" class="center-block"></a></li>
                   <?php }
                 }?>
           </ul>
         </div>
       </div>
     </div>

     <!-- /Fixed navbar - NÃO EXIBE NO MOBILE -->

     <!-- Fixed navbar - EXIBE NO MOBILE -->
   <!--     <nav class="navbar navbar-default navbar-fixed-top line-fixed-top hidden-md hidden-sm hidden-lg">
       <div class="container">
         <div class="navbar-header menu-mobile">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand pull-left" href="#"><img src="imgs/navlogo-bg-mb-f.png" class="navbar-logo"></a>
         </div>
         <div id="navbar1" class="collapse navbar-collapse navpersonal">
           <ul class="nav navbar-nav navbar-styles">
             <li><a href="#" class="viagens-navbar">GRUPO AEROTUR</a></li>
             <li><a href="#" class="corp-navbar">VIAGENS</a></li>
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
         </div>
       </div>
     </nav> -->
     <!-- /Fixed navbar - EXIBE NO MOBILE -->

     <!-- Begin page content -->



     <div class=" slide_all_div container-fluid">
       <div class="row">
         <ul id="slider-topo">
           <li style="width: 100%;height: 500px;background-image:url('<?php bloginfo('template_url') ?>/corporativo/assets/img/image-2.png')">
             <!-- <img src="" class="img-responsive"> -->
             <div class="form_all_slide">
                <div class="form_all_slide2">
                     <h4 class="titulo_form_slide">Acesso exclusivo</h4>
                     <div class="div_form_all_b">
                         <p>Sistema de Gestão de Viagens Corporativas</p>
                         <form>
                             <input name="login" placeholder="Digite seu login">
                             <input placeholder="Digite sua senha">
                             <button type="submit">ENTRAR</button>
                         </form>
                     </div>
                 </div>
             </div>

           </li>
           <!-- <li>
             <img src="assets/img/image-1.jpg" class="img-responsive">
           </li> -->
         </ul>
       </div>
     </div>

   <!--   <div class="container-fluid space-down">
       <div class="row">
         <div class="container">
           <div class= "col-xs-12 col-md-12 no-padding-right">
             <span class="pull-right monte-sua-viagem">Monte sua viagem</span>
           </div>
         </div>
       </div>
     </div> -->

     <div class="container-fluid">
       <div class="row">
         <div class="container">
           <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
             <p id="titulo-color">A</p>
             <h2 id="subtitulo-color">EMPRESA</h2>
            </div>
         </div>
       </div> <!-- FIM row -->
     </div> <!-- FIM container-fluid -->
     <?php
     $args_post = array('post_type' => 'empresa_corporativo', 'posts_per_page'=>1);
     $myposts_post = get_posts( $args_post );
     foreach ( $myposts_post as $post_post ){
       setup_postdata( $post_post );
       $id = $post_post->ID;
       $empresa = get_empresa($id);
     }
      ?>
     <div class="empresa_bg continer-fluid space-down">
         <div class="container list-side-left">
             <h3 class="titulo_empresa"><?= $empresa['texto_superior']?></h3>
             <p class="texto_empresa"><?= $empresa['texto_inferior']?></p>
         </div>

     </div>
     <?php
     $args_post = array('post_type' => '50anos_corporativo', 'posts_per_page'=>1);
     $myposts_post = get_posts( $args_post );
     foreach ( $myposts_post as $post_post ){
       setup_postdata( $post_post );
       $id = $post_post->ID;
       $aerotur50 = get_aerotur50($id);
     }
      ?>
       <!-- -->
       <div class="container-fluid space-down">
         <div class="row">
           <div class="container">
            <img class="img_50anos" src="<?php bloginfo('template_url') ?>/corporativo/imgs/aerot50.png"/>

             <p class="texto_50anos"><?= $aerotur50['historia']?></p>

           </div>
         </div>
       </div>

   <div id="anos_all50" class="container-fluid space-down">
         <div class="row">
             <div class="container-fluid">
               <div class="row">
                 <div class="container">
                   <div class="col-xs-12 col-sm-12 col-md-12">
                     <ul id="slippry50anos">
                       <li class="li_slide_50anos">
                             <div style="background-image:url('<?php bloginfo('template_url') ?>/corporativo/imgs/img_missao.png')" class="div_50anos div_50anosimg">
                             </div>

                             <div class="div_50anos">
                               <span>Nossa</span>
                               <p class="tit_50anos">Missão</p>
                               <p class="desc_50anos"><?= $aerotur50['missao']?></p>
                             </div>
                       </li>
                       <li>
                             <div style="background-image:url('<?php bloginfo('template_url') ?>/corporativo/imgs/img_missao.png')" class="div_50anos div_50anosimg">
                             </div>

                             <div class="div_50anos">
                               <span>Nossa</span>
                               <p class="tit_50anos">Visão</p>
                               <p class="desc_50anos"><?= $aerotur50['visao']?></p>
                             </div>

                       </li>
                       <li>
                             <div style="background-image:url('<?php bloginfo('template_url') ?>/corporativo/imgs/img_missao.png')" class="div_50anos div_50anosimg">
                             </div>

                             <div class="div_50anos">
                               <span>Nossos</span>
                               <p class="tit_50anos">Valores</p>
                               <p class="desc_50anos"><?= $aerotur50['valores']?></p>
                             </div>

                       </li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
         </div>
       </div>




       <div class="container-fluid">
         <div class="row">
           <div class="container">
             <div class="col-xs-12 col-sm-12 col-md-12">
               <p id="titulo-color">NOSSA</p>
               <h2 id="subtitulo-color">EQUIPE</h2>
             </div>
           </div>
         </div> <!-- FIM row -->
       </div> <!-- FIM container-fluid -->

       <div class="container-fluid space-down">
         <div class="row">
             <div class="container-fluid">
               <div class="row">
                 <div class="container">
                   <div class="col-xs-12 col-sm-12 col-md-12">
                     <ul id="slippry-demo">
                       <li class="li_slide_equipe">
                         <?php
                         $aux=0;
                         $args_post = array('post_type' => 'equipe_corporativo', 'posts_per_page'=>500);
                         $myposts_post = get_posts( $args_post );
                         foreach ( $myposts_post as $post_post ){
                           $aux+=1;
                           setup_postdata( $post_post );
                           $id = $post_post->ID;
                           $equipe = get_equipe($id);
                          ?>
                             <div class="div_equipe">
                                 <div class="div_equipe_img" style="background-image:url(<?= $equipe['foto']['url']?>) !important"></div>
                                 <div class="div_equipe_texto">
                                   <h3><?= $equipe['nome']?></h3>
                                   <p><?= $equipe['cargo']?></p>
                                 </div>
                             </div>
                          <?php
                          if($aux==6){
                              echo "</li><li>";
                              $aux=0;
                          }
                        }
                       ?>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
         </div>
       </div>

       <div class="container-fluid space-down">
         <div class="row">
           <div class="container">
             <div class="box-newsletter center-block border-newsletter">
               <div class="col-xs-12 col-md-6" id="newsletter">
                 <p id="titulo-color-inverted">ASSINE NOSSA</p>
                 <h2 id="subtitulo-color-inverted">NEWSLETTER</h2>
               </div>
               <div class="col-xs-12 col-md-6 newsletter-form-position">
                 <form class="form-inline">
                   <div class="form-group">
                     <input type="text" class="form-control" id="exampleInputName2" placeholder="Digite seu nome">
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Digite seu email">
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
                 <p id="titulo-color">RAZÕES PARA</p>
                 <h2 id="subtitulo-color">ESCOLHER A AEROTUR</h2>
               </div>
             </div>
           </div> <!-- FIM row -->
         </div> <!-- FIM container -->

   <div class="razoes_all container-fluid space-down">
         <div class="row">
             <div class="container-fluid">
               <div class="row">
                 <div class="container">
                   <div class="col-xs-12 col-sm-12 col-md-12">
                     <ul id="slippry">
                         <?php
                         $cont=1;
                         $args_post = array('post_type' => 'razoes_corporativo', 'posts_per_page'=>500, 'order'=>'ASC');
                         $myposts_post = get_posts( $args_post );
                         foreach ( $myposts_post as $post_post ){
                           setup_postdata( $post_post );
                           $id = $post_post->ID;
                           $razoes_corp = get_razoes_corp($id);
                          ?>
                          <li class="li_slide_razoes">
                             <div class="div_razoes">
                                 <img src="<?= $razoes_corp['imagem']['url']?>">
                             </div>
                             <div class="div_razoes">
                               <span><?= $cont;?></span>
                               <p class="tit_raz"><?= $razoes_corp['texto_superior']?></p>
                               <p class="desc_raz"><?= $razoes_corp['texto_inferior']?></p>
                             </div>
                          </li>
                       <?php
                       $cont++;
                      } ?>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
         </div>
       </div>
         <div class="container-fluid">
           <div class="row">
             <div class="container">
               <div class="col-xs-12 col-sm-6 col-md-6">
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
               <div class="col-xs-12 col-sm-4 col-md-4">
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

               <div class="col-xs-12 col-sm-4 col-md-4">
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
               <div class="col-xs-12 col-sm-4 col-md-4">
                   <div class="row">
                     <div class="col-xs-6 col-sm-6 col-md-6" id="img-phone">
                       <img src="<?php bloginfo('template_url') ?>/corporativo/imgs/phone.png" height="27" width="37" class="pull-right">
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6" id="text-phone-right">
                       <p class="text-left plantao-text">PLANTÃO</p>
                       <h2 class="text-left hour">24H</h2>
                     </div>
                   </div>

                   <div class="row">
                     <div id="hr-phone"></div>
                   </div>

                   <?php
                    $args_post = array('post_type' => 'form_contato', 'posts_per_page'=>400, 'order'=>'ASC');
                 	  $myposts_post = get_posts( $args_post );
                 	  foreach ( $myposts_post as $post_post ){
                 		   setup_postdata( $post_post );
                 		    $id = $post_post->ID;
                        $contato_plantao = get_contato_plantao($id);

                        if(!empty($contato_plantao['cidade'])){
                       ?>
                       <div class="row">
                         <div class="col-xs-6 col-sm-6 col-md-6" id="cidade">
                           <p class="pull-right" id="cidade"><?= $contato_plantao['cidade']?>:</p>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                           <p class="pull-left" id="cidade-phone"><?= $contato_plantao['telefone']?></p>
                         </div>
                         <div class="col-xs-6 col-sm-6 col-md-6" id="cidade-phone">
                           <p class="pull-left" id="cidade-phone"><?= $contato_plantao['telefone2']?></p>
                         </div>
                       </div>
                       <?php }
                    } ?>
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
              <!-- Maps API Javascript -->
               <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCF88DKo2KBtZe2VK30w1b9GEefAxuYa2Q&amp;sensor=false"></script>
           </div>
         </div>
       </div>

       <div class="container-fluid" id="bg-footer-zero">
         <div clss="row">
           <div class="container">
             <div class="footer-zero">
               <div class="col-xs-4 col-md-4 coluna-social-footer-titulo" id="coluna-esquerda-footer-zero">
                 <p id="titulo-red">AEROTUR NAS</p>
                 <h2 id="titulo-redes">REDES SOCIAIS</h2>
               </div>
               <div class="col-xs-4 col-md-4" id="coluna-esquerda-footer-zero">
                 <ul class="list-unstyled list-inline coluna-social-footer" id="social-icons">
                   <?php
                     $args_post = array('post_type' => 'redes_sociais', 'posts_per_page'=>400);
                     	$myposts_post = get_posts( $args_post );
                     	foreach ( $myposts_post as $post_post ){
                     		setup_postdata( $post_post );
                     		$id = $post_post->ID;
                         $redessociais = get_redes_sociais($id);
                         if(!empty($redessociais['facebook'])){
                         ?>
                     <li><a href="<?= $redessociais['facebook']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/facebook.png" height="54" width="54" class="center-block social-icon-mobile"></a></li>
                     <?php }
                     if(!empty($redessociais['instagram'])){
                     ?>
                     <li><a href="<?= $redessociais['instagram']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/instagram.png" height="54" width="54" class="center-block social-icon-mobile"></a></li>
                     <?php }
                     if(!empty($redessociais['twitter'])){
                     ?>
                     <li><a href="<?= $redessociais['twitter']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/twitter.png" height="54" width="54" class="center-block social-icon-mobile"></a></li>
                     <?php }
                     if(!empty($redessociais['vimeo'])){
                     ?>
                     <li><a href="<?= $redessociais['vimeo']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/vimeo.png" height="54" width="54" class="center-block social-icon-mobile"></a></li>
                     <?php }
                     if(!empty($redessociais['flickr'])){
                     ?>
                     <li><a href="<?= $redessociais['flickr']?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/flickr.png" height="54" width="54" class="center-block social-icon-mobile"></a></li>
                     <?php }
                     }?>
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
               <?php
                 $args_post = array('post_type' => 'endereco', 'posts_per_page'=>400, 'order'=>'ASC');
           		   $myposts_post = get_posts( $args_post );
           		   foreach ( $myposts_post as $post_post ){
           			     setup_postdata( $post_post );
           			       $id2 = $post_post->ID;
                       $enderecos = get_enderecos($id2);
               ?>
               <div class="col-xs-12 col-sm-3 col-md-3">
                 <div id="footer-one-local">
                   <p><?= $enderecos['texto_loja']?></p>
                 </div>
                 <div id="footer-one-tel">
                   <p><span id="ddd-tel"><?= $enderecos['ddd']?></span><?= $enderecos['telefone']?></p>
                 </div>
                 <hr class="endereco"></hr>
                 <div id="footer-one-endereco">
                   <p><?= $enderecos['endereco_loja']?></p>
                 </div>
               </div>
               <?php } ?>
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
               <?php
               $args_post = array('post_type' => 'grupo_aerotur', 'posts_per_page'=>400);
           		$myposts_post = get_posts( $args_post );
           		foreach ( $myposts_post as $post_post ){
           			setup_postdata( $post_post );
           			$id2 = $post_post->ID;
                 $grupo_aerotur = get_grupo_aerotur($id2);
                 if(!empty($grupo_aerotur['logo']['url'])){
               ?>
               <div class="col-xs-12 col-sm-2 col-md-2 col-md-offset-1">
               <a href="<?= $grupo_aerotur['linklogo']?>" target="_blank"><img src="<?= $grupo_aerotur['logo']['url']?>" height="54" width="181" class="img-responsive center-block"></a>
               </div>
               <?php }
             } ?>
             </div>
           </div> <!-- FIM footer-three -->
         </div> <!-- FIM row -->
       </div> <!-- FIM container-fluid -->

       <div class="container-fluid">
         <div class=row>
           <div class="footer-four" id="footer-four">
             <div class="container">
               <?php
               $args_post = array('post_type' => 'footer', 'posts_per_page'=>400, 'order'=>'ASC');
               $myposts_post = get_posts( $args_post );
               foreach ( $myposts_post as $post_post ){
                 setup_postdata( $post_post );
                 $id2 = $post_post->ID;
                 $rodape = get_rodape($id2);
                ?>
                <div class="col-xs-12 col-sm-2 col-md-2">
                  <h4><?= $rodape['texto_topico_rodape_horizontal']?></h4>
                  <ul class="list-unstyled">
                    <a href="#"><li><?= $rodape['texto_topico_rodape_vertical1']?></li></a>
                    <a href="#"><li><?= $rodape['texto_topico_rodape_vertical2']?></li></a>
                    <a href="#"><li><?= $rodape['texto_topico_rodape_vertical3']?></li></a>
                    <a href="#"><li><?= $rodape['texto_topico_rodape_vertical4']?></li></a>
                    <a href="#"><li><?= $rodape['texto_topico_rodape_vertical5']?></li></a>
                  </ul>
                </div>
               <? } ?>
               <div class="col-xs-12 col-sm-3 col-md-3">
                 <ul class="list-unstyled" id="quinta-coluna-footer-four">
                   <a href="#"><li>HOME</li></a>
                   <a href="#"><li>NEWSLETTER</li></a>
                   <a href="#"><li>3 MOTIVOS PARA ESCOLHER A AEROTUR</li></a>
                   <a href="#"><li>CONTATO</li></a>
                 </ul>
               </div>
             </div> <!-- FIM container -->
           </div> <!-- FIM footer-four -->
         </div> <!-- FIM row -->
       </div> <!-- FIM container-fluid -->

       <div class="container-fluid">
         <div class="row">
           <div class="footer-five">
             <a href="http://www.quadradigital.com.br" target="_blank"><img src="<?php bloginfo('template_url') ?>/corporativo/imgs/logoquadra.png" height="60" width="128" class="img-responsive center-block"></a>
           </div> <!-- FIM footer-five -->
         </div> <!-- FIM row -->
       </div> <!-- FIM container-fluid -->
     </footer> <!-- FIM footer -->

     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
     <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/vendor/jquery.min.js"><\/script>')</script>
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/bootstrap.min.js"></script>
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/infobox.js"></script>
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/markerclusterer.js"></script>
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/mapa.js"></script>

     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/ie10-viewport-bug-workaround.js"></script>

     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/slippry.js"></script>
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/scripts.js"></script>
     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/r.js"></script>

     <script src="<?php bloginfo('template_url') ?>/corporativo/assets/js/jquery.bxslider.min.js"></script>

     <script>
       $(document).ready(function(){
         $('selector').slippry();

          $('#slippry').slippry();

          $('#slippry50anos').slippry();

       });
     </script>

     <script>
     $(document).ready(function(){
       $('.slider4').bxSlider({
         slideWidth: 365,
         minSlides: 1,
         maxSlides: 3,
         moveSlides: 1,
         pager: false,
         slideMargin: 10
       });
     });
     </script>

   </body>

   </html>
