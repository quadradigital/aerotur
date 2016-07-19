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
  $arr['logo2'] = get_field('logo2', $id);
  $arr['logo3'] = get_field('logo3', $id);
  $arr['logo4'] = get_field('logo4', $id);
  $arr['logo5'] = get_field('logo5', $id);

  return $arr;
}
?>
