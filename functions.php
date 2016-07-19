<?php

function get_rodape(){
  $page = get_page_by_title('rodapé');
  $id = $page->ID;
  $arr['ativar_footer'] = get_field('ativar_footer', $id);
  $arr['texto_topico_rodape_horizontal1'] = get_field('texto_topico_rodape_horizontal1', $id);
  $arr['texto_topico_rodape_vertical1'] = get_field('texto_topico_rodape_vertical1', $id);
  $arr['texto_topico_rodape_vertical2'] = get_field('texto_topico_rodape_vertical2', $id);
  $arr['texto_topico_rodape_vertical3'] = get_field('texto_topico_rodape_vertical3', $id);
  $arr['texto_topico_rodape_vertical4'] = get_field('texto_topico_rodape_vertical4', $id);
  $arr['texto_topico_rodape_vertical5'] = get_field('texto_topico_rodape_vertical5', $id);

  $arr['texto_topico_rodape_horizontal2'] = get_field('texto_topico_rodape_horizontal2', $id);
  $arr['texto_topico_rodape_vertical6'] = get_field('texto_topico_rodape_vertical6', $id);
  $arr['texto_topico_rodape_vertical7'] = get_field('texto_topico_rodape_vertical7', $id);
  $arr['texto_topico_rodape_vertical8'] = get_field('texto_topico_rodape_vertical8', $id);
  $arr['texto_topico_rodape_vertical9'] = get_field('texto_topico_rodape_vertical9', $id);
  $arr['texto_topico_rodape_vertical10'] = get_field('texto_topico_rodape_vertical10', $id);

  $arr['texto_topico_rodape_horizontal3'] = get_field('texto_topico_rodape_horizontal3', $id);
  $arr['texto_topico_rodape_vertical11'] = get_field('texto_topico_rodape_vertical11', $id);
  $arr['texto_topico_rodape_vertical12'] = get_field('texto_topico_rodape_vertical12', $id);
  $arr['texto_topico_rodape_vertical13'] = get_field('texto_topico_rodape_vertical13', $id);
  $arr['texto_topico_rodape_vertical14'] = get_field('texto_topico_rodape_vertical14', $id);
  $arr['texto_topico_rodape_vertical15'] = get_field('texto_topico_rodape_vertical15', $id);

  $arr['texto_topico_rodape_horizontal4'] = get_field('texto_topico_rodape_horizontal4', $id);
  $arr['texto_topico_rodape_vertical16'] = get_field('texto_topico_rodape_vertical16', $id);
  $arr['texto_topico_rodape_vertical17'] = get_field('texto_topico_rodape_vertical17', $id);
  $arr['texto_topico_rodape_vertical18'] = get_field('texto_topico_rodape_vertical18', $id);
  $arr['texto_topico_rodape_vertical19'] = get_field('texto_topico_rodape_vertical19', $id);
  $arr['texto_topico_rodape_vertical20'] = get_field('texto_topico_rodape_vertical20', $id);

  return $arr;
}

function get_grupo_aerotur(){
  $page = get_page_by_title('grupo aerotur');
  $id = $page->ID;
  $arr['ativar_grupo'] = get_field('ativar_grupo', $id);
  $arr['logo1'] = get_field('logo1', $id);
  $arr['linklogo1'] = get_field('linklogo1', $id);
  $arr['logo2'] = get_field('logo2', $id);
  $arr['linklogo2'] = get_field('linklogo2', $id);
  $arr['logo3'] = get_field('logo3', $id);
  $arr['linklogo3'] = get_field('linklogo3', $id);
  $arr['logo4'] = get_field('logo4', $id);
  $arr['linklogo4'] = get_field('linklogo4', $id);
  $arr['logo5'] = get_field('logo5', $id);
  $arr['linklogo5'] = get_field('linklogo5', $id);

  return $arr;
}

function get_enderecos(){
  $page = get_page_by_title('endereços');
  $id = $page->ID;
  $arr['ativar_enderecos'] = get_field('ativar_enderecos', $id);
  $arr['texto_loja1'] = get_field('texto_loja1', $id);
  $arr['telefone_loja1'] = get_field('telefone_loja1', $id);
  $arr['endereco_loja1'] = get_field('endereco_loja1', $id);
  $arr['texto_loja2'] = get_field('texto_loja2', $id);
  $arr['telefone_loja2'] = get_field('telefone_loja2', $id);
  $arr['endereco_loja2'] = get_field('endereco_loja2', $id);
  $arr['texto_loja3'] = get_field('texto_loja3', $id);
  $arr['telefone_loja3'] = get_field('telefone_loja3', $id);
  $arr['endereco_loja3'] = get_field('endereco_loja3', $id);
  $arr['texto_loja4'] = get_field('texto_loja4', $id);
  $arr['telefone_loja4'] = get_field('telefone_loja4', $id);
  $arr['endereco_loja4'] = get_field('endereco_loja4', $id);

  return $arr;
}

function get_contato_plantao(){
  $page = get_page_by_title('Formulário Contato / Plantão 24h');
  $id = $page->ID;
  $arr['ativar_contato_plantao'] = get_field('ativar_contato_plantao', $id);
  $arr['cidade1'] = get_field('cidade1', $id);
  $arr['telefone_cidade1'] = get_field('telefone_cidade1', $id);
  $arr['cidade2'] = get_field('cidade2', $id);
  $arr['telefone_cidade2'] = get_field('telefone_cidade2', $id);
  $arr['cidade3'] = get_field('cidade3', $id);
  $arr['telefone_cidade3'] = get_field('telefone_cidade3', $id);
  $arr['cidade4'] = get_field('cidade4', $id);
  $arr['telefone_cidade4'] = get_field('telefone_cidade4', $id);
  $arr['cidade5'] = get_field('cidade5', $id);
  $arr['telefone_cidade5'] = get_field('telefone_cidade5', $id);

  return $arr;
}

function get_mapa(){
  $page = get_page_by_title('mapa');
  $id = $page->ID;
  $arr['ativar_mapa'] = get_field('ativar_mapa', $id);

  return $arr;
}

function get_redes_sociais(){
  $page = get_page_by_title('redes sociais');
  $id = $page->ID;
  $arr['ativar_redes_sociais'] = get_field('ativar_redes_sociais', $id);
  $arr['facebook'] = get_field('facebook', $id);
  $arr['instagram'] = get_field('instagram', $id);
  $arr['twitter'] = get_field('twitter', $id);
  $arr['vimeo'] = get_field('vimeo', $id);
  $arr['flickr'] = get_field('flickr', $id);

  return $arr;
}
?>
