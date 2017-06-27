<?php

extract(shortcode_atts(array(
	'title' => '',
	'title_color' => '',
	'sub_title' => '',
	'sub_color' => '',
    'el_class' => '',
    'el_align' => '',
    'css' => ''

), $atts));

$class = array(
	'heading-wrap',
	vc_shortcode_custom_css_class( $css )
);
$class[] = $el_class;

$title_class = array('section-title');
$sub_class = array('section-subtitle-m section-subtitle-color');
if( ! empty( $title_color ) ){
	$title_class = rose_get_style_color( $title_class, $title_color, $color_class="default-color" );
}
if( ! empty( $sub_color ) ){
	$sub_class = rose_get_style_color( $sub_class, $title_color, $color_class="default-color" );
}

if( ! empty( $el_align ) ) $class[] = $el_align;

?>

<div class="<?php echo esc_attr( implode(' ', $class ) );?>">
	<h1 class="<?php echo implode(' ', $title_class );?>"><?php echo esc_attr( $title );?></h1>
	<?php if( ! empty( $sub_title ) ):?>
	<span class="<?php echo implode(' ', $sub_class );?>"><?php echo esc_attr( $sub_title );?></span>
	<?php endif;?>
</div>