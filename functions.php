<?php

function customLoginLogo() {
	echo '<style type="text/css">
		h1 a { background-image: url("http://aeroturnovo.quadradigital.com.br/wp-content/themes/aerotur/imgs/logo-aerotur.png") !important; background-size:auto !important; width:300px !important; height:100px !important; padding-bottom:20px !important; }
	</style>';
}
add_action('login_head', 'customLoginLogo');

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
  $arr['ddd1'] = get_field('ddd1', $id);
  $arr['telefone_loja1'] = get_field('telefone_loja1', $id);
  $arr['endereco_loja1'] = get_field('endereco_loja1', $id);
  $arr['texto_loja2'] = get_field('texto_loja2', $id);
  $arr['ddd2'] = get_field('ddd2', $id);
  $arr['telefone_loja2'] = get_field('telefone_loja2', $id);
  $arr['endereco_loja2'] = get_field('endereco_loja2', $id);
  $arr['texto_loja3'] = get_field('texto_loja3', $id);
  $arr['ddd3'] = get_field('ddd3', $id);
  $arr['telefone_loja3'] = get_field('telefone_loja3', $id);
  $arr['endereco_loja3'] = get_field('endereco_loja3', $id);
  $arr['texto_loja4'] = get_field('texto_loja4', $id);
  $arr['ddd4'] = get_field('ddd4', $id);
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
  $arr['telefone2_cidade1'] = get_field('telefone2_cidade1', $id);
  $arr['cidade2'] = get_field('cidade2', $id);
  $arr['telefone_cidade2'] = get_field('telefone_cidade2', $id);
  $arr['telefone2_cidade2'] = get_field('telefone2_cidade2', $id);
  $arr['cidade3'] = get_field('cidade3', $id);
  $arr['telefone_cidade3'] = get_field('telefone_cidade3', $id);
  $arr['telefone2_cidade3'] = get_field('telefone2_cidade3', $id);
  $arr['cidade4'] = get_field('cidade4', $id);
  $arr['telefone_cidade4'] = get_field('telefone_cidade4', $id);
  $arr['telefone2_cidade4'] = get_field('telefone2_cidade4', $id);
  $arr['cidade5'] = get_field('cidade5', $id);
  $arr['telefone_cidade5'] = get_field('telefone_cidade5', $id);
  $arr['telefone2_cidade5'] = get_field('telefone2_cidade5', $id);

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

function get_razoes(){
  $page = get_page_by_title('razões');
  $id = $page->ID;
  $arr['ativar_razao'] = get_field('ativar_razao', $id);
  $arr['banner1'] = get_field('banner1', $id);
  $arr['banner2'] = get_field('banner2', $id);
  $arr['banner3'] = get_field('banner3', $id);

  return $arr;
}

function get_newsletter(){
  $page = get_page_by_title('newsletter');
  $id = $page->ID;
  $arr['ativar_news'] = get_field('ativar_news', $id);

  return $arr;
}

function get_recomendacoes(){
  $page = get_page_by_title('recomendações');
  $id = $page->ID;
  $arr['ativar_recomendacoes'] = get_field('ativar_recomendacoes', $id);

  return $arr;
}

function get_blog(){
  $page = get_page_by_title('blog');
  $id = $page->ID;
  $arr['ativar_blog'] = get_field('ativar_blog', $id);

  return $arr;
}

function get_promocao(){
  $page = get_page_by_title('promoções');
  $id = $page->ID;
  $arr['ativar_promocao'] = get_field('ativar_promocao', $id);
  $arr['texto_superior'] = get_field('texto_superior', $id);
  $arr['texto_inferior'] = get_field('texto_inferior', $id);
  $arr['descricao'] = get_field('descricao', $id);
  $arr['imagem1'] = get_field('imagem1', $id);
  $arr['imagem2'] = get_field('imagem2', $id);
  $arr['imagem3'] = get_field('imagem3', $id);

  return $arr;
}

function get_ofertas(){
  $page = get_page_by_title('ofertas de passagens');
  $id = $page->ID;

  $arr['ativar_ofertas'] = get_field('ativar_ofertas', $id);
  $arr['texto_superior'] = get_field('texto_superior', $id);
  $arr['texto_inferior'] = get_field('texto_inferior', $id);
  $arr['observacoes'] = get_field('observacoes', $id);
  $arr['descricao'] = get_field('descricao', $id);
  $arr['cidade_origem'] = get_field('cidade_origem', $id);

  $arr['companhia_aerea1'] = get_field('companhia_aerea1', $id);
  $arr['destino_companhia_aerea1'] = get_field('destino_companhia_aerea1', $id);
  $arr['valor_inicial_companhia1'] = get_field('valor_inicial_companhia1', $id);

  $arr['companhia_aerea2'] = get_field('companhia_aerea2', $id);
  $arr['destino_companhia_aerea2'] = get_field('destino_companhia_aerea2', $id);
  $arr['valor_inicial_companhia2'] = get_field('valor_inicial_companhia2', $id);

  $arr['companhia_aerea3'] = get_field('companhia_aerea3', $id);
  $arr['destino_companhia_aerea3'] = get_field('destino_companhia_aerea3', $id);
  $arr['valor_inicial_companhia3'] = get_field('valor_inicial_companhia3', $id);

  $arr['companhia_aerea4'] = get_field('companhia_aerea4', $id);
  $arr['destino_companhia_aerea4'] = get_field('destino_companhia_aerea4', $id);
  $arr['valor_inicial_companhia4'] = get_field('valor_inicial_companhia4', $id);

  $arr['companhia_aerea5'] = get_field('companhia_aerea5', $id);
  $arr['destino_companhia_aerea5'] = get_field('destino_companhia_aerea5', $id);
  $arr['valor_inicial_companhia5'] = get_field('valor_inicial_companhia5', $id);

  return $arr;
}

function get_monte_sua_viagem(){
  $page = get_page_by_title('monte sua viagem');
  $id = $page->ID;
  $arr['ativar_monte'] = get_field('ativar_monte', $id);
  $arr['texto_botao'] = get_field('texto_botao', $id);

  return $arr;
}

function get_banner_topo(){
  $page = get_page_by_title('banner topo');
  $id = $page->ID;
  $arr['ativar_banner_topo'] = get_field('ativar_banner_topo', $id);
  $arr['banner1'] = get_field('banner1', $id);
  $arr['banner2'] = get_field('banner2', $id);
  $arr['banner3'] = get_field('banner3', $id);

  return $arr;
}

function get_menu(){
  $page = get_page_by_title('menu topo');
  $id = $page->ID;
  $arr['ativar_menu'] = get_field('ativar_menu', $id);
  $arr['texto_menu1'] = get_field('texto_menu1', $id);
  $arr['texto_menu2'] = get_field('texto_menu2', $id);
  $arr['texto_menu3'] = get_field('texto_menu3', $id);
  $arr['texto_menu4'] = get_field('texto_menu4', $id);
  $arr['texto_menu5'] = get_field('texto_menu5', $id);

  return $arr;
}

function get_menu_superior(){
  $page = get_page_by_title('menu topo superior');
  $id = $page->ID;

  $arr['texto_link1'] = get_field('texto_link1', $id);
  $arr['texto_link1_menu1'] = get_field('texto_link1_menu1', $id);
  $arr['link1_menu1'] = get_field('link1_menu1', $id);

  $arr['texto_link2'] = get_field('texto_link2', $id);
  $arr['texto_link1_menu2'] = get_field('texto_link1_menu2', $id);
  $arr['link1_menu2'] = get_field('link1_menu2', $id);

  $arr['texto_link3'] = get_field('texto_link3', $id);
  $arr['texto_link1_menu3'] = get_field('texto_link1_menu3', $id);
  $arr['link1_menu3'] = get_field('link1_menu3', $id);

  $arr['texto_link4'] = get_field('texto_link4', $id);
  $arr['texto_link1_menu4'] = get_field('texto_link1_menu4', $id);
  $arr['link1_menu4'] = get_field('link1_menu4', $id);

  $arr['texto_link5'] = get_field('texto_link5', $id);
  $arr['texto_link1_menu5'] = get_field('texto_link1_menu5', $id);
  $arr['link1_menu5'] = get_field('link1_menu5', $id);

  return $arr;
}
?>
