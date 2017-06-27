<!--********************** HEADER SECTION ************************* -->
<?php $header_class= apply_filters( 'rose-header-type', array('header-fw'), 'v1' );
	$container = rose_get_object_option('header_layout', 'container');
?>
<header class="<?php echo esc_attr( implode(' ', $header_class ) );?>">
	<div class="<?php echo esc_attr($container);?>">
		<div class="header-container">
			<!-- LOGO -->
			<div class="logo"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></div>
			<div class="nav-container">
				<!-- TOOL NAV -->
				<?php if( is_active_sidebar( 'mini-cart' ) ){
					dynamic_sidebar( 'mini-cart' );
				};?>	
				<span class="responsive-trigger"><i class="icon-list2"></i></span>
			</div>
		</div>
	</div>
	<!-- RESPONSIVE NAVIGATION -->

</header>

<div class="content">