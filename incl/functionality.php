<?php 

/*
 Enable pagination (custom post types)
*/

/*  
 *     @call template 
 * 
 *     <nav class="pagination">
 *             <?php pagination_bar( $the_query ); ?>
 *    </nav>
 */              

// add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');

//     function enqueue_parent_styles() {
//         wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
//     }


// function pagination_bar( $custom_query ) {

// $total_pages = $custom_query->max_num_pages;
// $big = 999999999; // need an unlikely integer

// if ($total_pages > 1){
//     $current_page = max(1, get_query_var('paged'));

//     echo paginate_links(array(
//         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//         'format' => '?paged=%#%',
//         'current' => $current_page,
//         'total' => $total_pages,
//     ));
// }
// }
