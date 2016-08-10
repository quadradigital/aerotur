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
        <h2 id="subtitulo-color"><?= get_field('tipo_pacote', get_the_ID());?></h2>
      </div>
    </div>
  </div> <!-- FIM row -->
</div> <!-- FIM container-fluid -->

<div class="container-fluid space-down">
  <div class="row">
    <div class="container">
      <div class="col-md-12">
        <div class="col-xs-12 col-md-6 detalhes-pacote-a">
          <?php
          $img_post = get_field('banner', get_the_ID());
          $img_post2 = get_field('banner2', get_the_ID());
          $img_post3 = get_field('banner3', get_the_ID());
          $img_post4 = get_field('banner4', get_the_ID());
          $img_post5 = get_field('banner5', get_the_ID());
           ?>
          <ul id="thumbnails">
           <li>
              <a href="#slide1">
                <img src="<?= $img_post['url']?>">
              </a>
            </li>
            <li>
              <a href="#slide2">
                <img src="<?= $img_post2['url']?>">
              </a>
            </li>
            <li>
              <a href="#slide3">
                <img src="<?= $img_post3['url']?>">
              </a>
            </li>
            <li>
              <a href="#slide4">
                <img src="<?= $img_post4['url']?>">
              </a>
            </li>
            <li>
              <a href="#slide5">
                <img src="<?= $img_post5['url']?>">
              </a>
            </li>
          </ul>
          <div class="thumb-box">
            <ul class="thumbs">
              <li><a href="#1" data-slide="1"><img src="<?= $img_post['url']?>"></a></li>
              <li><a href="#2" data-slide="2"><img src="<?= $img_post2['url']?>"></a></li>
              <li><a href="#3" data-slide="3"><img src="<?= $img_post3['url']?>"></a></li>
              <li><a href="#4" data-slide="4"><img src="<?= $img_post4['url']?>"></a></li>
              <li><a href="#5" data-slide="5"><img src="<?= $img_post5['url']?>"></a></li>
            </ul>
          </div>

        </div>
        <div class="col-xs-12 col-md-6 detalhes-pacote-b">
          <div id="titulo-recomendacoes">
            <h2 id="pacote-titulo"><?= get_the_title(get_the_ID());?></h2>
            <p id="pacote-subtitulo">De <?= get_field('origem', get_the_ID());?> a <?= get_field('destino', get_the_ID())?></p>
              <div class="col-md-5 pct-pddg-l pct-pddg-r">
                <div class="maps-pacote">
                </div>
              </div>
              <div class="col-md-7 pct-pddg-l div-top-dth-pct">
                <p id="pct-ttl">Duração: <span id="pct-ctud"><?= get_field('dias', get_the_ID());?> dia(s) / <?= get_field('noites', get_the_ID());?> noite(s)</p>
                <p id="pct-ttl">Saindo de: <span id="pct-ctud"><?= get_field('saida', get_the_ID());?></span></p>
                <p id="pct-ttl">Visitando: <span id="pct-ctud"><?= get_field('itinerario', get_the_ID());?></span></p>
                <p id="pct-ttl">Saídas: <span id="pct-ctud"><?= get_field('data_saida', get_the_ID());?></span></p>
              </div>
            <div class="col-md-12 pacotes-no-padding-l">
              <div class="footerbar-pacote">
                <div class="col-xs-1 col-md-4">
                  <span class="footbar-pacote-text">PREÇO DO PACOTE POR PESSOA:</span>
                </div>
                <div class="col-xs-1 col-md-4">
                  <span class="valor-pacote-box">
                    <span class="footbar-pacote-moeda">R$
                      <span class="footbar-pacote-valor"><?= get_field('valor', get_the_ID());?>
                        <span class="footbar-pacote-parcelas"><?= get_field('parcelas', get_the_ID());?> de</span>
                        <span class="footbar-pacote-centavos">,<?= get_field('centavos', get_the_ID());?></span>
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
          <li id="li-pills" class="text-center"><a data-toggle="pill" href="" class="pills-buttons-a">Cadastre-se</a></li>
        </ul>

        <div class="tab-content">
          <div id="atracoes" class="tab-pane fade">
            <div class="col-md-4">
              <span id="dia-pills">1º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao1', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">2º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao2', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">3º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao3', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">4º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao4', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">5º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao5', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">6º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao6', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">7º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao7', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">8º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao8', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">9º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao9', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">10º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao10', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">11º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao11', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">12º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao12', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">13º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao13', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">14º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao14', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">15º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao15', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">16º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao16', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">17º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao17', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">18º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao18', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">19º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('atracao19', get_the_ID());?></span>
            </div>
          </div>
          <div id="roteiro" class="tab-pane fade in active">
            <div class="col-md-4">
              <span id="dia-pills">1º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro1', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">2º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro2', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">3º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro3', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">4º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro4', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">5º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro5', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">6º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro6', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">7º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro7', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">8º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro8', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">9º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro9', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">10º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro10', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">11º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro11', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">12º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro12', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">13º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro13', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">14º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro14', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">15º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro15', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">16º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro16', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">17º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro17', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">18º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro18', get_the_ID());?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">19º Dia:</span><span> </span><span id="detalhamento-pills"><?= get_field('roteiro19', get_the_ID());?></span>
            </div>
          </div>
          <div id="precos" class="tab-pane fade">
            <div class="col-md-4">
              <span id="dia-pills">Preço:</span><span> </span><span id="detalhamento-pills">R$ <?= get_field('valor', get_the_ID()).",".get_field('centavos', get_the_ID())?></span>
            </div>
            <div class="col-md-4">
              <span id="dia-pills">Condições:</span><span> </span><span id="detalhamento-pills"><?= get_field('condicoes', get_the_ID());?></span>
            </div>
          </div>
          <div id="cadastrese" class="tab-pane fade">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
