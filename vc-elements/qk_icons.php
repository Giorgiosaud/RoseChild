<?php
extract(shortcode_atts(array(
	'tpl' => 'tpl1',
    'icon' => '',
    'sub_title' => '',
    'title' => '',
	'css' => '',
	'el_class' =>'',
	
), $atts));
$class = array('m-features-content');
$class[] = $el_class;
$class[] = vc_shortcode_custom_css_class( $css );
if( $tpl !== 'tpl2'):
?>
<!-- FEATURE ITEM -->
<?php if( ! empty( $icon ) ):?>
<div class="m-features-icon"><i class="<?php echo esc_attr( $icon );?>"></i></div>
<?php endif;?>
<div class="<?php echo esc_attr( implode(' ', $class ) );?>">
	<h3 class="m-features-title"><?php echo esc_attr( $title );?></h3>
	<?php if( ! empty( $content) ):?>
	<div class="m-features-desc">
		<?php echo apply_filters( 'the_content', $content );?>
	</div>
	<?php endif;?>
</div>
<?php else: ?>
	<?php if( ! empty( $icon ) ):?>
	<div class="big-icon default-color">
		<i class="<?php echo esc_attr( $icon );?>"></i>
	</div>
	<div class="spacer"></div>
	<?php endif;?>
	<?php if( ! empty( $sub_title ) ):?>
	<h5 class="default-color upper"><?php echo esc_attr( $sub_title );?></h5>
	<?php endif;?>
	<h4 class="upper"><?php echo esc_attr( $title );?></h4>
	<div class="clearfix">
		<?php echo apply_filters( 'the_content', $content );?>
	</div>
<?php endif; ?>