<?php
/**
 * Template Name: Full Width Page
 *
 * @package Zonapro
 * @subpackage Rose
 */
get_header('blank'); ?>
	<?php if(function_exists('vc_add_param')){ ?>
	<?php while(have_posts()):the_post(); ?>
	<?php
	    the_content();
	    endwhile;
	?>
	<?php }else{ 
	global $aq_theme_options;
	while( have_posts() ) : the_post();
	?>
	<section id="blog" class="content blog no-heading">
		<div class="container">
			<div class="blog-article-container clearfix col-md-9">
				<!-- BLOG ARTICLE -->
				<?php
					$format = get_post_format();
					$post_format = empty( $format ) ? '' : '-'. $format;
					require ROSE_ABS_PATH .'/partials/blog/single/content'. $post_format .'.php';
				 ?>

				
				
				<!-- COMMENTS -->
				<?php
					if(comments_open() ){
						comments_template();
					}
				?>
				<!-- COMMENTS -->

			</div><!-- BLOG ARTICLE CONTAINER -->

			<!-- BLOG SIDEBAR -->
			<div class="blog-sidebar col-md-3">
				<?php get_sidebar(); ?>
			</div><!-- BLOG SIDEBAR -->
		</div>
	</section><!-- End Content -->
	<?php endwhile;wp_reset_postdata(); ?>
	<?php } ?>
<?php get_footer();
?>