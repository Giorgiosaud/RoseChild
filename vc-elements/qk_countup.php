<?php

extract(shortcode_atts(array(
    'to' => '100',
    'speed' => '10000',
    'timer_color' => '',
    'title' => '',
    'title_color' => '',
    'animate' => '',
    'duration' => '0.8s',
    'delay' => '0.8s',
	'icon'=>'',
    'icon_color' => '',
	'el_class' =>''

), $atts));

wp_enqueue_script('countTo');

$class[] = $el_class;

$attrs = '';

$main_color = rose_get_option('main-color');

if( ! empty( $animate ) ){
	$class[] = 'wow';
	$class[] = $animate;
	
	if( ! empty( $duration ) ){
		$attrs .= ' data-duration="'. esc_attr( $duration ) .'"';
	}

	if( ! empty( $delay ) ){
		$attrs .= ' data-delay="'. esc_attr( $delay ) .'"';
	}
}

$timer = array('timer');
$cicon = array( 'counter-item-icon' );
if( ! empty($icon) ){
	$cicon[] = $icon;
}

$ctitle = array('counter-item-text');
$style = array('timer'=>'timer_color','cicon'=>'icon_color', 'ctitle'=>'title_color' );
foreach( $style as $arr => $color ){
	if( $$color === $main_color ){
		array_push( $$arr, 'default-color' );
	}elseif( ! empty($$color ) ){
		array_push( $$arr, '" style="color:'. esc_attr($$color) );
	}
}

?>
<!-- COUNTER ITEM -->
<div class="<?php echo esc_attr( implode(' ', $class ) );?>" <?php echo esc_attr($attrs);?>>
	<?php if( ! empty( $icon ) ):?>
	<i class="<?php echo implode(' ', $cicon );?>"></i>
	<?php endif;?>
	<span class="<?php echo implode(' ', $timer );?>" data-to="<?php echo (int) $to;?>" data-speed="<?php echo (int) $speed;?>"></span>
	<?php if( ! empty( $title ) ):?>
	<span class="<?php echo implode(' ', $ctitle );?>"><?php echo esc_attr( $title );?></span>
	<?php endif;?>
</div>



