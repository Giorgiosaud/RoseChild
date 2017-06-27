<?php
$atts = shortcode_atts(array(
    'posts_per_page' => '',
	'orderby' => '',
	'order' => '',
	'thumb_size' => 'thumbnail',
    'show_viewmore' => 0,
    'more_link' => '#',
    'viewmore_text' => esc_html__('GO TO THE BLOG','rose'),
    'el_class' => ''
), $atts);
extract( $atts );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$order = $posts_per_page > 0 ? (int)$posts_per_page  : -1;
$args = array(
	'posts_per_page' => $posts_per_page,
	'order' => $order,
	'orderby' => $orderby,
	'paged'=>$paged
);

$tpl = empty( $tpl ) ? '' : '-'. $tpl;

$class = array('blog-listed-style');
$class[] = $el_class;
$blog = new WP_Query($args);
if( $blog->have_posts() ):
?>

<div class="<?php echo rose_join( $class );?>">
	<?php while( $blog->have_posts() ) : $blog->the_post(); ?>
	<article class="blog-listed-article media wow fadeInUp" data-wow-delay=".8s">
		<a href="<?php the_permalink();?>">
			<div class="blog-listed-media cl">
				<?php if( has_post_thumbnail() ){
					$img = rose_getImageBySize( array(
		                'attach_id' => get_post_thumbnail_id( get_the_ID() ),
		                'thumb_size' => $thumb_size,
		                'class' => 'img-responsive',
		            ) );
					if( $img ) echo do_shortcode($img['thumbnail']);
					}else{
						echo rose_get_no_image( $thumb_size );
					}
				?>
				<div class="article-date">
					<span><?php the_time('d');?></span>
					<?php the_time('M'); ?>
				</div>
			</div>
			<div class="bd">
				<h2 class="blog-listed-title"><?php the_title(); ?></h2>
			</div>
		</a>
	</article><!--  -->
	<?php endwhile;wp_reset_postdata(); ?>
	<?php if( $show_viewmore ):?>
	<div class="spacer"></div><!--  -->
	<div class="spacer"></div><!--  -->
	<div class="col-md-12 align-center">
		<a href="<?php echo esc_url( $more_link );?>" class="m-btn m-btn-large m-btn-border m-btn-radius"><?php echo esc_attr( $viewmore_text );?></a>
	</div>
	<?php endif;?>
</div>
<?php endif;