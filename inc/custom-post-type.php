<?php

// let's create the function for the custom type - Actividades
function custom_post_activity() { 
    // creating (registering) the custom type 
    register_post_type( 'activities', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Actividades', 'impande'), /* This is the Title of the Group */
            'singular_name' => __('Actividades', 'impande'), /* This is the individual type */
            'all_items' => __('Todas las actividades', 'impande'), /* the all items menu item */
            'add_new' => __('Añadir nueva', 'impande'), /* The add new menu item */
            'add_new_item' => __('Añadir nueva actividad', 'impande'), /* Add New Display Title */
            'edit' => __( 'Editar', 'impande' ), /* Edit Dialog */
            'edit_item' => __('Editar actividad', 'impande'), /* Edit Display Title */
            'new_item' => __('Nueva actividad', 'impande'), /* New Display Title */
            'view_item' => __('Ver actividad', 'impande'), /* View Display Title */
            'search_items' => __('Buscar actividad', 'impande'), /* Search Custom Type Title */ 
            'not_found' =>  __('Nada encontrado en base de datos.', 'impande'), /* This displays if there are no entries yet */ 
            'not_found_in_trash' => __('Nada econtrado en papelera', 'impande'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */ 
            'menu_icon' => 'dashicons-universal-access-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'   => array( 'slug' => 'actividades', 'impande' , 'with_front' => true ), /* you can specify its url slug */
            'has_archive' => __('actividades', 'impande'), /* you can rename the slug here */
            'capability_type' => 'post',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */
    
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_activity');

// now let's add custom Product categories 
register_taxonomy( 'category-activities', 
array('activities'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
array('hierarchical' => true,     /* if this is true, it acts like categories */             
    'labels' => array(
        'name' => __( 'Categorías Actividades', 'impande' ), /* name of the custom taxonomy */
        'singular_name' => __( 'Categoría actividades', 'impande' ), /* single taxonomy name */
        'search_items' =>  __( 'Buscar actividades', 'impande' ), /* search title for taxomony */
        'all_items' => __( 'Todas las categorías', 'impande' ), /* all title for taxonomies */
        'parent_item' => __( 'Parent category', 'impande' ), /* parent title for taxonomy */
        'parent_item_colon' => __( 'Parent category:', 'impande' ), /* parent taxonomy title */
        'edit_item' => __( 'Edit Category', 'impande' ), /* edit custom taxonomy title */
        'update_item' => __( 'Update Category', 'impande' ), /* update title for taxonomy */
        'add_new_item' => __( 'Add new Category', 'impande' ), /* add new title for taxonomy */
        'new_item_name' => __( 'New Category', 'impande' ) /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite'   => array( 'slug' => 'actividades-cat', 'impande' , 'with_front' => false ), /* you can specify its url slug */
    'has_archive' => true, /* you can rename the slug here */
    )
);


function wpa_course_post_link( $post_link, $id = 0 ){
    $post = get_post($id);  
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'category-activities' );
        if( $terms ){
            return str_replace( '%cat%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;  
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );


add_filter('request', 'change_term_request', 1, 1 );
 
function change_term_request($query){
 
	$tax_name = 'category-activities'; // specify you taxonomy name here, it can be also 'category' or 'post_tag'
 
	// Request for child terms differs, we should make an additional check
	if( $query['attachment'] ) :
		$include_children = true;
		$name = $query['attachment'];
	else:
		$include_children = false;
		$name = $query['name'];
	endif;
 
 
	$term = get_term_by('slug', $name, $tax_name); // get the current term to make sure it exists
 
	if (isset($name) && $term && !is_wp_error($term)): // check it here
 
		if( $include_children ) {
			unset($query['attachment']);
			$parent = $term->parent;
			while( $parent ) {
				$parent_term = get_term( $parent, $tax_name);
				$name = $parent_term->slug . '/' . $name;
				$parent = $parent_term->parent;
			}
		} else {
			unset($query['name']);
		}
 
		switch( $tax_name ):
			case 'category':{
				$query['category_name'] = $name; // for categories
				break;
			}
			case 'post_tag':{
				$query['tag'] = $name; // for post tags
				break;
			}
			default:{
				$query[$tax_name] = $name; // for another taxonomies
				break;
			}
		endswitch;
 
	endif;
 
	return $query;
 
}
 
 
add_filter( 'term_link', 'rudr_term_permalink', 10, 3 );
 
function rudr_term_permalink( $url, $term, $taxonomy ){
 
	$taxonomy_name = 'category-activities'; // your taxonomy name here
	$taxonomy_slug = 'category-activities'; // the taxonomy slug can be different with the taxonomy name (like 'post_tag' and 'tag' )
 
	// exit the function if taxonomy slug is not in URL
	if ( strpos($url, $taxonomy_slug) === FALSE || $taxonomy != $taxonomy_name ) return $url;
 
	$url = str_replace('/' . $taxonomy_slug, '', $url);
 
	return $url;
}