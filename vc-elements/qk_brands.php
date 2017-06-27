<?php
extract(shortcode_atts(array(
    'brands' => '',
    'perview' => 7,
    'thumb_size' => 'full',
    'el_class' => ''
), $atts));
// $class = array('feature_section1');
$class[] = $el_class;
if( ! empty( $brands ) ):
	$brands = explode(',', $brands);
?>
<ul class="brand-list-carousel" <?php if( ! empty( $perview ) ) echo 'data-perview="'. (int) $perview .'"';?>>
	<?php
		foreach( $brands as $brand ):
		$img = rose_getImageBySize( array(
			'attach_id' => $brand,
			'thumb_size' => $thumb_size,
			'class' => 'img-responsive',
		) );
		if( ! empty( $img ) ):
		?>
		<li class="brand-item">
			<?php echo do_shortcode($img['thumbnail']);?>
		</li>
		<?php 
			endif;
		endforeach;
	?>
</ul>
<?php endif;?>