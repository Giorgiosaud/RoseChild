$LogoLoader:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_cargador'],'full',false)[0]; ?>";
div#status:before{
	background-image:url($LogoLoader);
}