<?php 
/*
* Custom Post Types
*/
function create_posttypes() {
 
    // register_post_type( 'resources',
    // // CPT Options
    //     array(
    //         'labels' => array(
    //             'name' => __( 'Resources' ),
    //             'singular_name' => __( 'Resource' )
    //         ),
    //         'public' => true,
    //         'has_archive' => true,
    //         'rewrite' => array('slug' => 'resource'),
    //         'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail'),
    //         'taxonomies'          => array( 'topic' ,'keyword', 'type','audience' ),
    //     )
    // );

   
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttypes' );

function create_category_taxonomies() {
    	// register_taxonomy(
    	// 	'topic',
    	// 	'resources',
    	// 	array(
    	// 		'label' => 'Topic',
    	// 		'hierarchical' => true,
    	// 		'show_admin_column' => true

    			
    			
    	// 	)
    	// );

    	
    	// register_taxonomy(
    	// 	'audience',
    	// 	array('resources','newsletters'),
    	// 	array(
    	// 		'label' => 'Audience',
    	// 		'hierarchical' => true,
    	// 		'show_admin_column' => true

    	// 	)
    	// );
       
    	
       

    }

 
add_action( 'init', 'create_category_taxonomies' );