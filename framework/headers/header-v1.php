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
				<!-- PRIMARY NAVIGATION -->
				<?php //if( $show_top_nav = rose_get_option('top_nav') ):?>
				<nav class="primary-navigation">
					<?php
				      if (has_nav_menu('primary')) :
				        wp_nav_menu(
				        	['theme_location' => 'primary',
				        	'menu_class' => 'nav',
				        	'menu_id'=>'nav-menu',
				        	'container'=>''
				        	]
				        );
				      endif;
				    ?>
				</nav>
				<?php //endif;?>
				<!-- TOOL NAV -->
				<?php if( is_active_sidebar( 'mini-cart' ) ){
					dynamic_sidebar( 'mini-cart' );
				};?>	
				<span class="responsive-trigger"><i class="icon-list2"></i></span>
			</div>
		</div>
	</div>
	<!-- RESPONSIVE NAVIGATION -->
	<?php //if( $show_top_nav ):?>
	<nav class="responsive-navigation">
		<?php
			if( has_nav_menu('mobile-nav')){
				$menu = 'mobile-nav';
			}else{
				$menu = 'primary';
			}
			wp_nav_menu([
				'theme_location' => $menu,
				'menu_class' => 'menu-top-page',
				'menu_id'=>'mobile-nav',
				'container'=>''
			]);
	    ?>
		<div class="tool-nav-resp">
			<?php if( ! rose_get_option('hide_search') ): ?>
			<button class="tool-nav-item search-btn-resp"><i class="icon-search2"></i></button>
			<?php endif; ?>
			<?php if( ! rose_get_option('hide_cart') && rose_get_option('exist_woo') ): ?>
			<a href="<?php echo esc_url(WC()->cart->get_cart_url());?>" class="tool-nav-item"><i class="icon-cart"></i> <span class="cart-resp-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
			<?php //endif; ?>
		</div>
	</nav>
	<?php endif;?>
</header>

<div class="content">