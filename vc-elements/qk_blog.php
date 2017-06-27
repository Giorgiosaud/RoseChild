<?php
$atts = shortcode_atts(array(
    'posts_per_page' => '',
	'show_pagination' => 0,
	'tpl'=> '',
	'orderby' => '',
	'order' => '',
	'thumb_size' => 'full',
	'show_readmore' => 0,
	'readmore_text' => esc_html__('Read More &rarr;','rose'),
    'show_viewmore' => 0,
    'excerpt_length' => 50,
    'viewmore_text' => esc_html__('Show More','rose')
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

$class = array('clearfix','blog-container');
if( empty( $tpl ) ){
	$class[] = 'blog-articles-container col-md-12';
}else{
	$class[] = 'blog-articles-masonry-container';
}
$blog = new WP_Query($args);
if( $blog->have_posts() ):
ob_start();
?>

<div class="<?php echo rose_join( $class );?>">
	<?php while( $blog->have_posts() ) : $blog->the_post();
		$format = get_post_format();
		$post_format = empty( $format ) ? '' : '-'. $format;
		$located = ROSE_ABS_PATH .'/partials/blog/content'. $tpl . $post_format .'.php';
		if( ! empty( $located  ) ){
			require $located;
		}
	endwhile;?>
</div>
<!-- Pagination -->
<?php if( $show_pagination && ! $show_viewmore && $blog->max_num_pages > 1 ):?>
	<div class="pagination col-md-12">
	<?php $big = 999999999; // need an unlikely integer;
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, $paged ),
			'total' =>$blog->max_num_pages,
			'prev_text' =>  '<i class="icon-arrow-left5"></i>',
			'next_text' => '<i class="icon-arrow-right5"></i>',
			'type' => 'list'
		) );
	?>
	</div>
<?php endif;?>
<?php if( $show_viewmore && ! $show_pagination && $blog->max_num_pages > 1 ):?>
<div class="load-more load-more-blog">
	<a href="" data-params='<?php echo wp_json_encode($atts); ?>' data-max-page="<?php echo intval( $blog->max_num_pages); ?>" data-next-page="<?php echo esc_attr($paged) + 1;?>" class="m-btn m-btn-large m-btn-default m-btn-radius m-btn-border"><?php echo esc_attr( $viewmore_text );?></a>
</div>
<?php endif;?>

<?php endif;
echo ob_get_clean();