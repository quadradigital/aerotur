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
<div class="container-fluid">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12" id="titulo-recomendacoes">
        <p id="titulo-color">PACOTES</p>
        <h2 id="subtitulo-color">INTERNACIONAIS</h2>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid space-down">
  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-xs-12 col-md-6 detalhes-pacote-a">

          <ul id="thumbnails">
           <li>
              <a href="#slide1">
                <img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png">
              </a>
            </li>
            <li>
              <a href="#slide2">
                <img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png">
              </a>
            </li>
            <li>
              <a href="#slide3">
                <img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png">
              </a>
            </li>
            <li>
              <a href="#slide4">
                <img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png">
              </a>
            </li>
            <li>
              <a href="#slide5">
                <img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png">
              </a>
            </li>
          </ul>
          <div class="thumb-box">
            <ul class="thumbs">
              <li><a href="#1" data-slide="1"><img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png" alt="This is caption 1 <a href='#link'>Even with links!</a>"></a></li>
              <li><a href="#2" data-slide="2"><img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png" alt="This is caption 2"></a></li>
              <li><a href="#3" data-slide="3"><img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png" alt="And this is some very long caption for slide 3. Yes, really long."></a></li>
              <li><a href="#4" data-slide="4"><img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png" alt="And this is some very long caption for slide 4."></a></li>
              <li><a href="#5" data-slide="5"><img src="<?php bloginfo('template_url') ?>/assets/img/img-1.png" alt="And this is some very long caption for slide 4."></a></li>
            </ul>
          </div>

        </div>
        <?php
        $args_post = array('post_type' => 'pacotes', 'posts_per_page'=>400);
        $myposts_post = get_posts( $args_post );
        foreach ( $myposts_post as $post_post ){
           setup_postdata( $post_post );
            $id2 = $post_post->ID;
            $pacotes = get_pacotes($id2);
            $link_post = get_post_permalink($id2);
          }
        ?>
        <div class="col-xs-12 col-md-6 detalhes-pacote-b">
          <div id="titulo-recomendacoes">
            <h2 id="pacote-titulo"><?= $pacotes['texto_superior_pacote'];?></h2>
            <p id="pacote-subtitulo">De Londres a Dublin</p>
              <div class="col-md-5 pct-pddg-l pct-pddg-r">
                <div class="maps-pacote">
                </div>
              </div>
              <div class="col-md-7 pct-pddg-l div-top-dth-pct">
                <p id="pct-ttl">Duração: <span id="pct-ctud">10 dias / 9 noites</p>
                <p id="pct-ttl">Saindo de: <span id="pct-ctud">Natal/RN</span></p>
                <p id="pct-ttl">Visitando: <span id="pct-ctud">Londres, Cork, Blarney Castle, Killarney, Ring of Kerry, Cliffs of Moher, Galway, Dublin</span></p>
                <p id="pct-ttl">Saídas: <span id="pct-ctud">2016: Set. 09; Out. 07</span></p>
              </div>
            <div class="col-md-12 pacotes-no-padding-l">
              <div class="footerbar-pacote">
                <div class="col-xs-1 col-md-4">
                  <span class="footbar-pacote-text">PREÇO DO PACOTE POR PESSOA:</span>
                </div>
                <div class="col-xs-1 col-md-4">
                  <span class="valor-pacote-box">
                    <span class="footbar-pacote-moeda">R$
                      <span class="footbar-pacote-valor">1.393
                        <span class="footbar-pacote-parcelas">9x de</span>
                        <span class="footbar-pacote-centavos">,00</span>
                      </span>
                    </span>
                  </span>
                </div>
                <div class="col-xs-1 col-md-4">
                  <a class="btn btn-danger btn-pacote-footbar" href="#">TENHO INTERESSE</a>
                </div>
              </div>
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
      <div class="col-md-12">

         <ul class="nav nav-pills navpills-pacote">
          <li id="li-pills" class="text-center"><a data-toggle="pill" href="#atracoes" class="pills-buttons-a">Atrações</a></li>
          <li id="li-pills" class="text-center active"><a data-toggle="pill" href="#roteiro" class="pills-buttons-a">Roteiro</a></li>
          <li id="li-pills" class="text-center"><a data-toggle="pill" href="#precos" class="pills-buttons-a">Preços e Condições</a></li>
          <li id="li-pills" class="text-center"><a data-toggle="pill" href="#cadastrese" class="pills-buttons-a">Cadastre-se</a></li>
        </ul>

        <div class="tab-content">
          <div id="atracoes" class="tab-pane fade in active">
            <div class="col-md-4">
              <span id="dia-pills">1º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">2º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">3º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">4º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">5º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">6º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">7º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">8º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">9º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">10º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">11º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">12º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">13º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">14º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">15º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">16º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">17º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">18º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">19º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">20º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
          </div>
          <div id="roteiro" class="tab-pane fade">
            <div class="col-md-4">
              <span id="dia-pills">1º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">2º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">3º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">4º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">5º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">6º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">7º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">8º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">9º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">10º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">11º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">12º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">13º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">14º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">15º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">16º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">17º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">18º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">19º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">20º Dia</span><span> </span><span id="detalhamento-pills">Chegada a Londres</span>
            </div>
          </div>
          <div id="precos" class="tab-pane fade">

          </div>
          <div id="cadastrese" class="tab-pane fade">

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
