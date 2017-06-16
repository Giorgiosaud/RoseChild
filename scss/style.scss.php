$imagen: "<?php echo wp_get_attachment_image(get_option('child_theme','logo_cargador'),'full',false,array()); ?>";

.theme{
	background-image:url($imagen);
}