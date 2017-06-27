<?php
extract(shortcode_atts(array(
	'mp4' => '',
	'webm' => '',
	'ogg' => '',
	'auto_play' => 0,
	'loop' => 0,
	'el_class' => ''
), $atts));
$class = array('video-bg-container');
$class[] = $el_class;
?>
<div class="<?php echo rose_join( $class );?>">
	<div class="video-bg-dark"></div>
	<video <?php if( $auto_play ) echo esc_attr('autoplay');?> <?php if( $loop ) echo esc_attr('loop');?> class="full-video" id="bgvid">
		<?php if( !empty( $mp4 ) ):?>
		<source src="<?php echo esc_url( wp_get_attachment_url($mp4 ) );?>" type="video/mp4">
		<?php endif;?>
		<?php if( ! empty( $ogg ) ):?>
		<source src="<?php echo esc_url( wp_get_attachment_url($ogg ) );?>" type="video/ogg">
		<?php endif;?>
		<?php if( ! empty( $webm ) ):?>
		<source src="<?php echo esc_url( wp_get_attachment_url($webm ) );?>" type="video/webm">
		<?php endif;?>
	</video>
</div>