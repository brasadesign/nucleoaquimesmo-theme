<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_projetos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_projetos() {

    /**
     * Labels customizados para o tipo de post
     */
    $labels = array(
	    'name' => _x('Projetos', 'post type general name'),
	    'singular_name' => _x('Projeto', 'post type singular name'),
	    'add_new' => _x('Novo Projeto', 'projeto'),
	    'add_new_item' => __('Novo Projeto'),
	    'edit_item' => __('Editar Projeto'),
	    'new_item' => __('Novo Projeto'),
	    'all_items' => __('Todos Projetos'),
	    'view_item' => __('Ver Projeto'),
	    'search_items' => __('Procurar Projetos'),
	    'not_found' =>  __('Nenhum projetos encontrado'),
	    'not_found_in_trash' => __('Nenhum projeto encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Projetos'
    );
    
    /**
     * Registamos o tipo de post projetos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'projetos', array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'has_archive' => 'projetos',
		'query_var' => true,
		'rewrite' => array(
		'slug' => 'projetos',
		'with_front' => false,
	    ),
	'capability_type' => 'post',
	'hierarchical' => true,
	'menu_position' => null,
	'supports' => array('title','editor','author','thumbnail','revisions','excerpt','page-attributes'),
	'taxonomies' => array( 'post_tag' )
	    )
    );

	flush_rewrite_rules();

}
