<?php get_header();

while(have_posts()) : the_post();

get_template_part( 'partials/portfolio/single/style', apply_filters('portfolio-style', 1) );

        if(  comments_open() ){
            comments_template();
        }
endwhile;wp_reset_postdata();

get_footer(); ?>