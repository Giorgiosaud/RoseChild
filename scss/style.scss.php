$LogoLoader:"<?php echo wp_get_attachment_image_src(get_option('child_theme')['logo_cargador'],'full',false)[0]; ?>";



div#status:before{
	background-image:url( $LogoLoader );
}
@media only screen and (max-width: 1024px){
	header.transparent .logo{
		background-image: url( $LogoLoader ) !important;
		width: auto;
	}
}