<?php $optionsChild=get_option('child_theme') ?>

$imagen: <?php echo wp_get_attachment_image($optionsChild['logo_cargador'],'full',false,array('class'=>'img-responsive logo-fixed on-pc')); ?>;

.theme{
	background-image:url($imagen);
}