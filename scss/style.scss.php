$image: <?php echo get_option( 'redcolour', '#c00' ); ?>;

.theme{
	color:lighten(red,20%);
	background-image:url($image);
}