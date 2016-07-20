<?php
/**
 * The Footer template for our theme
 *
 * @package aerotur
 * @subpackage aerotur
 * @since Aerotur 1.0
 */
    $blog = get_blog();
 ?>
 <section style="<?php if($blog['ativar_blog'] == false){echo 'display:none;';} ?>" id="blog">
   <div id="blog"></div>
<div class="container-fluid space-down">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 bg-blogs">
      <div class="container">
        <div class="col-xs-4 col-sm-4 col-md-4 bg-textbox-left">
          <h4>BLOG</h4>
          <h2>O MELHOR DESTINO</h2>
          <h5>15 de abril de 2016</h5>
          <h3>Morbi malesuada eu urna non lacinia mauris id magna sit amet</h3>
          <p>
          Quisque pulvinar maximus odio eu faucibus. Maecenas laoreet ipsum eros, et blandit dolor aliquet et. Aenean ut mollis tortor, eu elementum massa. Nunc laoreet, nisl sit amet accumsan euismod, urna sapien dictum enim, sit amet posuere ante ipsum quis velit. Mauris at nisl posuere, condimentum lorem eu, molestie arcu. Donec arcu diam, suscipit id congue non, laoreet in ante. Praesent at viverra felis. Phasellus imperdiet at ligula in pretium. Aenean tincidunt ut tortor quis semper.</p>

          <p>Nulla facilisis enim dolor. Phasellus facilisis elementum sodales. Phasellus scelerisque lorem quis libero euismod, non interdum odio tincidunt. Morbi maximus magna vel tortor consequat euismod. Morbi dictum, dolor at euismod malesuada, sem libero commodo velit, vel commodo risus ex id libero. Aenean semper bibendum lacus in maximus.
          <button type="button" class="btn btn-danger pull-left">+ POSTS</button>
          </p>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 bg-textbox-right">
          <h4 class="text-right">BLOG</h4>
          <h2 class="text-right">AEROTUR DISNEY</h2>
          <h5>15 de abril de 2016</h5>
          <h3>Morbi malesuada eu urna non lacinia mauris id magna sit amet</h3>
          <p>
          Quisque pulvinar maximus odio eu faucibus. Maecenas laoreet ipsum eros, et blandit dolor aliquet et. Aenean ut mollis tortor, eu elementum massa. Nunc laoreet, nisl sit amet accumsan euismod, urna sapien dictum enim, sit amet posuere ante ipsum quis velit. Mauris at nisl posuere, condimentum lorem eu, molestie arcu. Donec arcu diam, suscipit id congue non, laoreet in ante. Praesent at viverra felis. Phasellus imperdiet at ligula in pretium. Aenean tincidunt ut tortor quis semper.</p>

          <p>Nulla facilisis enim dolor. Phasellus facilisis elementum sodales. Phasellus scelerisque lorem quis libero euismod, non interdum odio tincidunt. Morbi maximus magna vel tortor consequat euismod. Morbi dictum, dolor at euismod malesuada, sem libero commodo velit, vel commodo risus ex id libero. Aenean semper bibendum lacus in maximus.
          </p>
          <button type="button" class="btn btn-success pull-right">+ POSTS</button>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
