<?php

		/*
		Theme Title found on page 77 
		*/
		function j2theme_filter_wp_title( $currenttitle, $sep, $seplocal ) {
			//Grab the site name
			$site_name = get_bloginfo( 'name' );
			// Add the site name after the current page title
			$full_title = $site_name . $currenttitle;
			// If we are on the front_page or homepage append the description
			if ( is_front_page() || is_home() ) {
				//Grab the Site Description
				$site_desc = get_bloginfo( 'description' );
				//Append Site Description to title
				$full_title .= ' ' . $sep . ' ' . $site_desc;
			}
			return $full_title;
		}
		// Hook into 'wp_title'
		add_filter( 'wp_title', 'j2theme_filter_wp_title', 10, 3 );
		
		
		
			
		
		
		
		
			
		/**
		 * Menu location registration page 90
		 */
		register_nav_menus(
			array(
				'main-nav-header-top' => 'Main Nav, Top of Header',
				'mobile-main-nav-header-top' => 'MOBILE Main Nav, Top of Header',
				'sub-nav-header-bottom' => 'Sub Nav, Bottom of Header',
				'mobile-sub-nav-header-bottom' => 'MOBILE Sub Nav, Bottom of Header',
				'aside-nav' => 'Widget Sidebar Menu',
				'footer-nav' => 'Footer Menu',
				'mobile-footer-nav' => 'MOBILE Footer Menu'
			)
		);
		
		
		
			
		
		
		
		
			
		/**
		 * Custom walker to put correct classes on <li>'s for main nav header top nav 
		 */
		class main_nav_header_top_walker extends Walker_Nav_Menu {
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				global $wp_query;
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
				$class_names = $value = '';
		
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
		
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' alignleft nobull text-shad txttranup"' : '';
		
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
				$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
		
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		
		}
		
		
		/**
		 * Custom walker to put correct classes on <li>'s for sub nav header bottom nav 
		 */
		class sub_nav_header_bottom_walker extends Walker_Nav_Menu {
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				global $wp_query;
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
				$class_names = $value = '';
		
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
		
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' alignleft nobull osc-cond text-shad-lt"' : '';
		
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
				$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
		
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		
		}
		
		
		/**
		 * Custom walker to put correct classes on <li>'s for footer nav 
		 */
		class footer_nav_walker extends Walker_Nav_Menu {
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				global $wp_query;
				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
				$class_names = $value = '';
		
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = 'menu-item-' . $item->ID;
		
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . ' alignleft nobull text-shad txttranup"' : '';
		
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		
				$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
				$item_output .= $args->after;
		
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		
		}
		
		
		
			
		
		
		
		
			
		/**
		 * Custom paginate function found on page 227
		 */
		 
		 function j2theme_paginate() {
				global $paged, $wp_query;
				$abignum = 999999999; //we need an unlikely integer
				$args = array(
					'base' => str_replace( $abignum, '%#%', esc_url( get_pagenum_link( $abignum ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var( 'paged' ) ),
					'total' => $wp_query->max_num_pages,
					'show_all' => False,
					'end_size' => 2,
					'mid_size' => 2,
					'prev_next' => True,
					'prev_text' => __( '&lt;' ),
					'next_text' => __( '&gt;' ),
					'type' => 'list'
				);
			echo paginate_links( $args );
		}
		
		
		
			
		
		
		
		
		/**
		 * Registering Post Thumbnails found in Chapter 14 
		 */	
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'slider', 530, 215, true );
		add_image_size( 'post-thumb', 260, 175, true );
		add_image_size( 'sm-post-thumb', 65, 50, true );
		add_image_size( 'page-featured-image', 530, 95, true );
		add_image_size( 'fullwidth-featured-image', 820, 95, true );
		
		
		
			
		
		
		
		
			
		/********************************************//**
		 * Registering sidebars
		 ***********************************************/
		 
		/**
		 * Registering the Header "Sidebar" 
		 */
		$j2theme_header_sidebar = array(
			'name' => 'Header',
			'id' => 'header',
			'description' => 'Widgets placed here will display in the header to the right of the logo',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		);
		register_sidebar( $j2theme_header_sidebar );
		 
		/**
		 * Registering the Aside "Sidebar" 
		 */
		$j2theme_aside_sidebar = array(
			'name' => 'Aside',
			'id' => 'aside',
			'description' => 'Widgets placed here will go in the Right hand sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div><!-- class: widget -->',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		);
		register_sidebar( $j2theme_aside_sidebar );
		 
		/**
		 * Registering the Upper Footer "Sidebar" 
		 */
		$j2theme_upperfooter_sidebar = array(
			'name' => 'Upper Footer',
			'id' => 'upper-footer',
			'description' => 'Widgets placed here will go in the upper footer area ',
			'before_widget' => '<div class="widget thirdcol alignleft">',
			'after_widget' => '</div><!-- class: widget -->',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		);
		register_sidebar( $j2theme_upperfooter_sidebar );
		 
		/**
		 * Registering the Left Footer "Sidebar" 
		 */
		$j2theme_footer_lt_sidebar = array(
			'name' => 'Left Footer',
			'id' => 'left-footer',
			'description' => 'Widgets placed here will go in the left column of the footer',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		);
		register_sidebar( $j2theme_footer_lt_sidebar );
		 
		/**
		 * Registering the Left Footer "Sidebar" 
		 */
		$j2theme_footer_rt_sidebar = array(
			'name' => 'Right Footer',
			'id' => 'right-footer',
			'description' => 'Widgets placed here will go in the right column of the footer',
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		);
		register_sidebar( $j2theme_footer_rt_sidebar );
		
		/**
		 * Registering the 404 "Sidebar" 
		 */
		$j2theme_404 = array(
			'name' => '404 Error Page',
			'id' => 'fourohfour',
			'description' => 'Widgets placed here will go 404 error page',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>',
		);
		register_sidebar( $j2theme_404 );
		
		
		
			
		
		
		
		
			
		/**
		 * Custom Header found on 248
		 */
		$custom_header_args = array(
			'random-default' => false,
			'width' => 350,
			'height' => 160,
			'flex-height' => true,
			'flex-width' => true,
			'default-image' => get_template_directory_uri() . '/images/header.jpg'
		);
		add_theme_support( 'custom-header', $custom_header_args );
