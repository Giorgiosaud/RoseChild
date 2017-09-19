<?php die('test');?>
<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="isie ie9 no-js" <?php language_attributes(); ?>>
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
	<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<?php $favicon = rose_get_object_option('favicon', '', true); ?>
		<?php if($favicon!=''){ ?>
			<link rel="icon" href="<?php echo esc_url($favicon); ?>" type="image/x-icon">
		<?php } ?>

	<?php } ?>

	<!-- apple icon -->
	<?php $apple_icon = array('','57','72','114');
		foreach( $apple_icon as $icon ){
			$rose_img = rose_get_option("apple_icon{$icon}",false, true );
			if( empty( $rose_img  ) ) continue;
			?>
			<link rel="apple-touch-icon" <?php if( ! empty( $icon ) ) echo "sizes='{$icon}x{$icon}";?> href="<?php echo esc_url($rose_img); ?>" />
			<?php
		}
	?>
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="site-wrapper">
		<!-- ================================ -->
		<!-- ========== HEADER ========== -->
		<!-- ================================ -->
		<?php if( rose_get_option('show_preloader', true)): ?>
		<div id="preloader">
			<div id="status" class="animated infinite pulse"></div>
		</div>
		<?php endif; ?>
		<?php if( rose_get_object_option('border_layout') ):?>
		<div class="border-box-style w-border-top"></div>
		<div class="border-box-style w-border-left"></div>
		<div class="border-box-style w-border-bottom"></div>
		<div class="border-box-style w-border-right"></div>
		<?php endif;?>
		<?php rose_header();?>
		<?php rose_title_bar();?>
