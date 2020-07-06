<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mekar
 */

get_header();
?>
<?php
while ( have_posts() ) :
    the_post();
    $postType = get_post_type();
//    if($postType == 'product'){
//        get_template_part( 'pages/acf', 'product-details' );
//    } else {
        get_template_part($postType);
//    }

endwhile;
?>
<?php
get_footer();