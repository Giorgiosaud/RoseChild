<?php
	$atts = shortcode_atts(array(
	    'el_class' => '',
		'show_filter' => 0,
		'nav_class' => '',
		'nav_align' => '',
		'thumb_size' => 'full',		
		'columns' => 2,		
		'style' =>'gutters',		
		'view_more_text' => esc_html__('Show More','rose'),
		'show_viewmore' => 0,		
		'orderby' =>'',
		'btn_class' => '',
		'order' =>'',
		'posts_per_page' => 9,
		'ids'=>''

	), $atts);

	extract( $atts );

	wp_enqueue_script('isotope');
?>
<!-- *********************
	PORTFOLIO
********************** -->
<!-- PORTFOLIO CATEGORIES FILTERS -->
<?php if( $show_filter ):

$class = array('portfolio-filter clearfix');
$class[] = $nav_class;
$class[] = $nav_align;
?>
<div class="container">
	<nav class="portfolio-navigation">
		<ul class="<?php echo esc_attr( implode(' ', $class ) );?>" data-option-key="filter">
			<li><a href="" data-filter="*" class="current-filter"><?php esc_html_e('All','rose');?></a></li>
			<?php
				$terms = get_terms('portfolio_type');
				$cate = array();
				if ( !empty( $terms ) && !is_wp_error( $terms ) ){
					foreach ( $terms as $term ) {
					?>
						<li><a href="" data-filter=".<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></a></li>
					<?php
					}
				}
			?>
		</ul>
	</nav>
</div>
<?php endif;?>
<?php
	$posts_per_page = $posts_per_page > 0 ? (int)$posts_per_page : -1;

	$paged = (int) is_front_page() ? (get_query_var('page') ? get_query_var('page') : 1 ) : (get_query_var('paged') ? get_query_var('paged') : 1);
	$idsArray=explode(',',$ids);
	$args = array(
	    'post_type' => 'portfolio',
		'paged' => $paged,
		'posts_per_page' =>$posts_per_page,
		'post__in'=>$idsArray,
	    'post_status' => 'publish'
	);

    $p = new WP_Query($args);
    if( $p->have_posts() ) :
    	$class = array('portfolio-container');
    	$class[] = 'portfolio-'. $style . '-'. $columns;
    	$class[] = $el_class;
?>
<!-- PORTFOLIO FILTERS -->
<div class="<?php echo esc_attr( implode(' ', $class ) );?>">
<?php while( $p->have_posts() ) : $p->the_post();
	$terms = get_the_terms( get_the_ID(),'portfolio_type');

	$cats = array();

	if ( !empty( $terms ) && !is_wp_error( $terms ) ){

		foreach ( $terms as $term ) {

			$cats[] = $term->slug;

		}

	}

?>
	<!-- portfolio item -->
	<div class="portfolio-item <?php echo esc_attr( implode(' ', $cats ) );?>">
		<a href="<?php the_permalink(); ?>">
			<?php $img = rose_getImageBySize( array(
	                'attach_id' => get_post_thumbnail_id( get_the_ID() ),
	                'thumb_size' => $thumb_size,
	                'class' => 'img-responsive',
	            ) );
				if( $img ) echo do_shortcode($img['thumbnail']);
			?>
		</a>
		<div class="portfolio-item-caption">
			<h2 class="portfolio-item-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
			<?php if( has_term('', 'portfolio_type', get_the_ID()) ):?>
            <div class="portfolio-item-cats">
				<?php the_terms( get_the_ID(), 'portfolio_type', '<span>', '</span> <span>', '</span>');?>
			</div>
            <?php endif;?>
			
		</div>
		<!-- </a> -->
	</div>
<?php endwhile;
?>
</div><!-- END PORTFOLIO CONTAINER -->
<?php if( $show_viewmore && $p->max_num_pages > $paged ):
	$class = array('m-btn m-btn-large m-btn-radius m-btn-border');
	$class = rose_get_button_class( $class, $btn_class);
?>
<div class="load-more load-more-portfolio">
	<a href="#" data-params='<?php echo wp_json_encode($atts); ?>' data-max-page="<?php echo intval( $p->max_num_pages); ?>" data-next-page="<?php echo esc_attr($paged) + 1;?>" class="<?php echo esc_attr( implode(' ', $class ) );?>"><?php echo esc_attr( $view_more_text );?></a>
</div>
<?php endif;?>

<?php
	wp_reset_postdata();
endif;
?>