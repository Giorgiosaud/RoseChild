<?php
extract(shortcode_atts(array(
	'tpl' => 'grid',
	'columns' => 3,
    'order' => '',
    'el_class' => ''

), $atts));

$class[] = $el_class;
$class[] = $tpl;

$order = $order > 0 ? (int)$order : -1;

$args = array('post_type'=>'testimonial','posts_per_page' => $order);

$q = new WP_Query($args);

?>

<?php
if($tpl === 'slider'):
	$class[] = 'quote-slider-white flex-trans flexslider';
	if( $q->have_posts()):
?>

<div class="<?php echo rose_join( $class );?>">
	<ul class="slides">
		<?php while( $q->have_posts() ) : $q->the_post();?>
		<li>
			<?php the_content(); ?>
			<span class="quote-w-author"><?php the_title(); ?></span>
		</li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>
<?php endif;
else:
	$class[] = 'testimonial';
	$column_class = array('m-testimonial wow bounceIn');

	$column_class[] = rose_get_class_column( $columns );
	 if( $q->have_posts()):
?>
	<div class="<?php echo rose_get_option( $class );?>">
		<?php while( $q->have_posts() ) : $q->the_post();?>
		<div class="<?php echo rose_join( $column_class );?>" data-wow-delay="0.7s">
			<div class="m-testimonial-quote">
				<?php the_content(); ?>
			</div>
			<div class="m-testimonial-author media">
				<div class="m-testimonial-author-img cl">
					<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
				</div>
				<div class="m-testimonial-author-info bd">
					<span class="m-testimonial-author-name"><?php the_title(); ?></span>
					<?php $job = rose_get_meta(get_the_ID(), 'job'); if( ! empty( $job )):?>
					<span><?php echo esc_attr( $job ); ?></span>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<?php endif;
endif;?>