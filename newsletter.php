<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $newsletter = get_newletter();
 ?>
   <div class="container-fluid space-down">
     <div class="row">
       <div class="container">
         <div class="box-newsletter center-block border-newsletter">
           <div class="col-xs-12 col-md-6" id="newsletter">
              <p id="titulo-color-inverted">ASSINE NOSSA</p>
              <h2 id="subtitulo-color-inverted">NEWSLETTER</h2>
            </div>
            <div class="col-xs-12 col-md-6 newsletter-form-position">
              <form action="<?= $newsletter['link_mailchimp'] ?>" method="post" class="form-inline">
                <div class="form-group">
                  <input type="text" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Digite seu nome">
                </div>
                <div class="form-group">
                  <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Digite seu email">
                </div>
                <input class="btn btn-danger" type="submit" value="OK">
                <!--<button type="submit" class="btn btn-danger">OK</button>-->
                <h3 class="msg_confi2" style="display:none;">E-mail Cadastrado.</h3>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
