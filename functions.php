<?php

function customLoginLogo() {
	echo '<style type="text/css">
		h1 a { background-image: url("http://aeroturnovo.quadradigital.com.br/wp-content/themes/aerotur/imgs/logo-aerotur.png") !important; background-size:auto !important; width:300px !important; height:100px !important; padding-bottom:20px !important; }
	</style>';
}
add_action('login_head', 'customLoginLogo');

function get_ativar(){
	$args_post = array('post_type' => 'secoes', 'posts_per_page'=>400);
	$myposts_post = get_posts( $args_post );
	foreach ( $myposts_post as $post_post ){
		setup_postdata( $post_post );
		$id = $post_post->ID;
	  $arr['ativar_banner_topo'] = get_field('ativar_banner_topo', $id);
		$arr['ativar_footer'] = get_field('ativar_footer', $id);
		$arr['ativar_grupo'] = get_field('ativar_grupo', $id);
		$arr['ativar_enderecos'] = get_field('ativar_enderecos', $id);
		$arr['ativar_redes_sociais'] = get_field('ativar_redes_sociais', $id);
		$arr['ativar_mapa'] = get_field('ativar_mapa', $id);
		$arr['ativar_contato_plantao'] = get_field('ativar_contato_plantao', $id);
		$arr['ativar_razao'] = get_field('ativar_razao', $id);
		$arr['ativar_news'] = get_field('ativar_news', $id);
		$arr['ativar_recomendacoes'] = get_field('ativar_recomendacoes', $id);
		$arr['ativar_blog'] = get_field('ativar_blog', $id);
		$arr['ativar_promocao'] = get_field('ativar_promocao', $id);

		return $arr;
	}
}

function get_rodape($id){
	  $arr['texto_topico_rodape_horizontal'] = get_field('texto_topico_rodape_horizontal', $id);
	  $arr['texto_topico_rodape_vertical1'] = get_field('texto_topico_rodape_vertical1', $id);
	  $arr['texto_topico_rodape_vertical2'] = get_field('texto_topico_rodape_vertical2', $id);
	  $arr['texto_topico_rodape_vertical3'] = get_field('texto_topico_rodape_vertical3', $id);
	  $arr['texto_topico_rodape_vertical4'] = get_field('texto_topico_rodape_vertical4', $id);
	  $arr['texto_topico_rodape_vertical5'] = get_field('texto_topico_rodape_vertical5', $id);

  	return $arr;
}

function get_grupo_aerotur($id){
	  $arr['logo'] = get_field('logo', $id);
	  $arr['linklogo'] = get_field('linklogo', $id);

		return $arr;
}

function get_enderecos($id){
  $arr['texto_loja'] = get_field('texto_loja', $id);
  $arr['ddd'] = get_field('ddd', $id);
  $arr['telefone'] = get_field('telefone', $id);
  $arr['endereco_loja'] = get_field('endereco_loja', $id);

  return $arr;
	}

function get_contato_plantao($id){
	  $arr['cidade'] = get_field('cidade', $id);
	  $arr['telefone'] = get_field('telefone', $id);
	  $arr['telefone2'] = get_field('telefone2', $id);

		return $arr;
}

function get_redes_sociais($id){
  $arr['facebook'] = get_field('facebook', $id);
  $arr['instagram'] = get_field('instagram', $id);
  $arr['twitter'] = get_field('twitter', $id);
  $arr['vimeo'] = get_field('vimeo', $id);
  $arr['flickr'] = get_field('flickr', $id);

  return $arr;
}

function get_razoes($id){
  $arr['banner'] = get_field('banner', $id);

  return $arr;
}

function get_texto_promocao($id){
  $arr['texto_superior'] = get_field('texto_superior', $id);
  $arr['texto_inferior'] = get_field('texto_inferior', $id);
  $arr['descricao'] = get_field('descricao', $id);

  return $arr;
}

function get_banner_promocao($id){
  $arr['banner'] = get_field('banner', $id);

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

function get_banner_topo($id){
	  $arr['banner'] = get_field('banner', $id);

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
