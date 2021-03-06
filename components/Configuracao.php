<?php
	class Configuracao {

		public static $baseUrl = "http://CAMINHODOSITE";
		public static $itensMenu = array(
									'seus_dados' => array(
										'icone' => 'icon-user',
										'link' => 'usuario',
										'label' => 'Seus Dados',
										'sub_itens' => array(
											'editar' => array('link' => 'editar', 'label' => 'Editar'),
										)
									),
									'noticias' => array(
											'icone' => 'icon-list',
											'link' => 'noticia',
											'label' => 'Noticias',
											'sub_itens' => array(
													'listar' => array('link' => 'listar', 'label' => 'Listar'),
													'adicionar' => array('link' => 'adicionar', 'label' => 'Adicionar')
											)
									),
									'categorias' => array(
											'icone' => 'icon-list',
											'link' => 'categoria',
											'label' => 'Categorias',
											'sub_itens' => array(
													'listar' => array('link' => 'listar', 'label' => 'Listar'),
													'adicionar' => array('link' => 'adicionar', 'label' => 'Adicionar')
											)
									),
									'usuarios' => array(
											'icone' => 'icon-user',
											'link' => 'usuario',
											'label' => 'Usuários',
											'sub_itens' => array(
													'listar' => array('link' => 'listar', 'label' => 'Listar'),
													'adicionar' => array('link' => 'adicionar', 'label' => 'Adicionar')
											)
									),
									'tiposUsuarios' => array(
											'icone' => 'icon-list',
											'link' => 'tipoUsuario',
											'label' => 'Tipos de Usuários',
											'sub_itens' => array(
													'listar' => array('link' => 'listar', 'label' => 'Listar'),
													'adicionar' => array('link' => 'adicionar', 'label' => 'Adicionar')
											)
									)
		);

		public static $extensaoPadrao = ".html";

	}
