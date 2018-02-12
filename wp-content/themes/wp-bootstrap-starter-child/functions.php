<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function cptui_register_my_cpts_projet() {

	/**
	 * Post Type: projets.
	 */

	$labels = array(
		"name" => __( "projets", "wp-bootstrap-starter-child" ),
		"singular_name" => __( "projet", "wp-bootstrap-starter-child" ),
		"menu_name" => __( "Projets", "wp-bootstrap-starter-child" ),
		"all_items" => __( "Tous les projets", "wp-bootstrap-starter-child" ),
		"add_new" => __( "Ajouter un nouveau projet", "wp-bootstrap-starter-child" ),
		"add_new_item" => __( "Ajouter un projet", "wp-bootstrap-starter-child" ),
		"edit_item" => __( "Editer", "wp-bootstrap-starter-child" ),
		"new_item" => __( "Nouveau projet", "wp-bootstrap-starter-child" ),
		"view_item" => __( "Voir le projet", "wp-bootstrap-starter-child" ),
		"view_items" => __( "Voir les projets", "wp-bootstrap-starter-child" ),
		"search_items" => __( "Rechercher", "wp-bootstrap-starter-child" ),
		"not_found" => __( "Aucun projet trouvé", "wp-bootstrap-starter-child" ),
		"not_found_in_trash" => __( "Aucun projet trouvé dans la corbeille", "wp-bootstrap-starter-child" ),
		"featured_image" => __( "Image de présentation", "wp-bootstrap-starter-child" ),
		"set_featured_image" => __( "Paramétrer l'image de présentation", "wp-bootstrap-starter-child" ),
		"remove_featured_image" => __( "Supprimer l'image de présentation", "wp-bootstrap-starter-child" ),
		"use_featured_image" => __( "Utiliser comme image de présentation", "wp-bootstrap-starter-child" ),
		"archives" => __( "Projets archivés", "wp-bootstrap-starter-child" ),
		"insert_into_item" => __( "Insérer dans projets", "wp-bootstrap-starter-child" ),
		"uploaded_to_this_item" => __( "Importer dans projets", "wp-bootstrap-starter-child" ),
		"filter_items_list" => __( "Flitrer les projets", "wp-bootstrap-starter-child" ),
		"items_list_navigation" => __( "Navigation projets", "wp-bootstrap-starter-child" ),
		"items_list" => __( "Liste des projets", "wp-bootstrap-starter-child" ),
		"attributes" => __( "Attributs", "wp-bootstrap-starter-child" ),
	);

	$args = array(
		"label" => __( "projets", "wp-bootstrap-starter-child" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projet", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array( "title", "thumbnail", "custom-fields" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "projet", $args );
}

add_action( 'init', 'cptui_register_my_cpts_projet' );

function cptui_register_my_taxes_technologie() {

	/**
	 * Taxonomy: technologies.
	 */

	$labels = array(
		"name" => __( "technologies", "wp-bootstrap-starter-child" ),
		"singular_name" => __( "technologie", "wp-bootstrap-starter-child" ),
		"menu_name" => __( "Technologies", "wp-bootstrap-starter-child" ),
		"all_items" => __( "Toutes les technologies", "wp-bootstrap-starter-child" ),
		"edit_item" => __( "Editer une technologie", "wp-bootstrap-starter-child" ),
		"view_item" => __( "Voir techonologie", "wp-bootstrap-starter-child" ),
		"update_item" => __( "Mettre à jour", "wp-bootstrap-starter-child" ),
		"add_new_item" => __( "Ajouter une nouvelle technologie", "wp-bootstrap-starter-child" ),
		"new_item_name" => __( "Nouvelle technologie", "wp-bootstrap-starter-child" ),
		"parent_item" => __( "Technologie parente", "wp-bootstrap-starter-child" ),
		"parent_item_colon" => __( "Technologie parente:", "wp-bootstrap-starter-child" ),
		"search_items" => __( "Rechercher une technologie", "wp-bootstrap-starter-child" ),
		"popular_items" => __( "Technologies populaires", "wp-bootstrap-starter-child" ),
		"separate_items_with_commas" => __( "séparer avec des virgules", "wp-bootstrap-starter-child" ),
		"add_or_remove_items" => __( "ajouter ou supprimer des technologies", "wp-bootstrap-starter-child" ),
		"choose_from_most_used" => __( "Choisir parmi les plus utilisées", "wp-bootstrap-starter-child" ),
		"not_found" => __( "aucune technologie trouvée", "wp-bootstrap-starter-child" ),
		"no_terms" => __( "pas de technologie", "wp-bootstrap-starter-child" ),
		"items_list_navigation" => __( "menu technologies", "wp-bootstrap-starter-child" ),
		"items_list" => __( "liste des technologies", "wp-bootstrap-starter-child" ),
	);

	$args = array(
		"label" => __( "technologies", "wp-bootstrap-starter-child" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "technologies",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'technologie', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "technologie", array( "projet" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_technologie' );
