<?php
extract(shortcode_atts(array(
    'title' => '',
	'has_icon'=> '',
	'pos_icon' => 'after',
	'size' => '',
	'icon' => '',
	'link'=>'#',
	'el_class' =>'',
	'css' => ''
), $atts));

$class = array(
	'm-btn',
	vc_shortcode_custom_css_class( $css )
);

if( ! empty( $el_class ) ){
	$class = rose_get_button_class( $class, $el_class);
}

if( ! empty( $size ) ) $class[] = $size;

?>
<a href="<?php echo esc_url( $link );?>" class="<?php echo esc_attr(implode(' ', $class ) );?>">
	<?php
	$after = $pos_icon === 'after';
	if( $after ) echo esc_attr( $title );
	if( ! empty( $icon ) ):
		?>
		<i class="<?php echo esc_attr( $icon );?>"></i>
		<?php
	endif;
	
	if( ! $after ) echo esc_attr( $title );
	?>
</a>