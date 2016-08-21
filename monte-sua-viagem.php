<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 * Author: Pedro Schneider [ Web Design / pedro@woones.com ], Ramon Carvalho [ Front-end / ramon@oakz.org ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
    $monte = get_ativar();
 ?>
 <section style="<?php if($monte['ativar_monte'] == false){echo 'display:none;';} ?>" id="monte">
   <div class="container-fluid container_testehover space-down">
     <div class="row">
       <div class="container">
         <div class= "col-xs-12 col-md-12 no-padding-right">
           <?
           $args_post = array('post_type' => 'monte_sua_viagem');
           $myposts_post = get_posts( $args_post );
           foreach ( $myposts_post as $post_post ){
               setup_postdata( $post_post );
               $id2 = $post_post->ID;
               $monte = get_monte_sua_viagem($id2);
            ?>
            <div class="outer-div">
              <div class="pull-right outer-form">
                <div class="col-xs-12 monte-form-box">
                  <form method="post" id="form_contato_topo">
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputTelefone" name="inputTelefone" placeholder="Telefone">
                    </div>
                    <div class="row">
                      <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="inputDe" name="inputDe" placeholder="De">
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="inputAte" name="inputAte" placeholder="Até">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="inputCidade" name="inputCidade" placeholder="Cidade">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">ENVIAR</button>
                  </form>
                </div>
              </div> <!-- /OUTER FORM -->
              <div class="monte-box-form-footer pull-right">
                <span class="center-block text-center monte-sua-viagem">Monte sua viagem</span>
              </div>
            </div>

           <? } ?>
         </div>
       </div>
     </div>
   </div>
</section>
