<?php

	function register_my_menus() {
		register_nav_menus(
			array(
				'menu-gauche1' => __( 'Menu de navigation - gauche1' ),
				'menu-gauche2' => __( 'Menu de navigation - gauche2' ),
				'menu-droite' => __( 'Menu de navigation - droite' ),
				'menu-prestations' => __( 'Menu de navigation - prestations' ),
				'menu-footer' => __( 'Menu du footer' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );

	add_filter( 'the_content_more_link', 'modify_read_more_link' );
	function modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '">Lire la suite ...</a>';
	}

 
?>