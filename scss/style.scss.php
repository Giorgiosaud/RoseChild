<?php $optionsChild=get_option('child_theme') ?>

$imagen: <?php $imagen=wp_get_attachment_image($optionsChild['logo_cargador'],'full',false,array('class'=>'img-responsive logo-fixed on-pc'));echo $imagen; ?>;

.theme{
	background-image:url($imagen);
}