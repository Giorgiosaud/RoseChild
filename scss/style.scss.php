$LogoLoader:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_cargador'],'full',false)[0]; ?>";
$LogoDarkChild:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_dark_child'],'full',false)[0]; ?>";
$LogoLightChild:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_light_child'],'full',false)[0]; ?>";

div#status:before{
	background-image:url( $LogoLoader );
}
@media only screen and (max-width: 1024px){
	header.transparent .logo{
		background-image: url( $LogoDarkChild ) !important;
		width: auto;
	}
}