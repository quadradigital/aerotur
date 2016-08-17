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
 <div class="col-xs-12 col-md-9">

           <p id="titulo-color">NOSSOS</p>
           <h2 id="subtitulo-color">PACOTES</h2>
           <?php
           $args_post = array('post_type' => 'pacotes', 'posts_per_page'=>400);
           $myposts_post = get_posts( $args_post );
           foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
               $id = $post_post->ID;
               $pacotes = get_pacotes($id);
               $link_post = get_post_permalink($id);
               /*
               NO ARQUIVO FUNCTIONS.PHP ESTÁ ASSIM

               $arr['filtro_eventos'] = get_field('filtro_eventos', $id);
               $arr['filtro_moeda'] = get_field('filtro_moeda', $id);
               $arr['filtro_preco'] = get_field('filtro_preco', $id);
               $arr['filtro_localidade'] = get_field('filtro_localidade', $id);
               */
           ?>
                   <a class="<?= str_replace(' ','', $pacotes['filtro_localidade'])?>_div_pacote <?= str_replace(' ','', $pacotes['filtro_moeda'])?>_div_pacote <?= str_replace(' ','', $pacotes['filtro_eventos'])?>_div_pacote <?= str_replace(' ','', $pacotes['filtro_preco'])?>_pacote_preco allitem_div_pacote" href="<?= $link_post ?>"><div class="col-xs-12 col-md-4 promo-blocks" style="background-image:url(<?= $pacotes['banner']['url']?>)">
                     <div class="promo-dados">
                       <div class="col-xs-6 col-sm-8 col-md-6">
                         <h5 class="promo-title"><?= $pacotes['texto_superior_pacote']?></h5>
                         <h4 class="promo-subtitle"><?= $pacotes['texto_inferior_pacote']?></h4>
                       </div>
                       <div class="col-xs-5 col-sm-3 col-md-5">
                         <h5 class="promo-parcelas text-right">A partir de <?= $pacotes['parcelas']?> de</h5>
                         <h4 class="promo-valor text-right"><?= $pacotes['moeda_de_pagamento'].$pacotes['valor']?>  <span class="promo-centavos">,<?= $pacotes['centavos']?></span> </h4>
                       </div>
                       <p class="desc_pacote"><?php
                       if (strlen($pacotes['resumo']) > 100){
                         $pacotes['resumo'] = substr($pacotes['resumo'], 0, 300);
                         $pacotes['resumo'] = trim($pacotes['resumo']) . "...";
                       }
                       echo $pacotes['resumo'];
                       ?></p>
                     </div>
                   </div></a>
                   <?php }?>
         </div>
       </div>
        </div>
      </div>
    </div>
