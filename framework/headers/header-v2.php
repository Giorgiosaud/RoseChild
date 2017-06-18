<!--********************** HEADER SECTION ************************* -->
<?php $header_class= apply_filters( 'rose-header-type', array('header-fw','header-center'), 'v1' );
	$container = rose_get_object_option('header_layout', 'container');
?>
<header class="<?php echo esc_attr( implode(' ', $header_class ) );?>">
	<div class="<?php echo esc_attr($container);?>">
		<div class="header-container">
			<!-- LOGO -->
			<div class="col-md-2">
				<h1 class="logo"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a></h1>
			</div>
			<!-- PRIMARY NAVIGATION -->
			<div class="col-md-<?php if( is_active_sidebar( 'mini-cart' ) ){ ?>8<?php }else{ ?>10<?php } ?>">
				<?php //if( $show_top_nav = rose_get_option('top_nav') ):?>
					<nav class="primary-navigation">
						<?php
					      if (has_nav_menu('center-nav')){
					      	wp_nav_menu([
					        	'theme_location' => 'center-nav',
					        	'menu_class' => 'nav menu-top-page',
					        	'menu_id'=>'nav-menu',
					        	'container'=>''
					        ]);
					      }else{
					      	wp_nav_menu([
					        	'theme_location' => 'primary',
					        	'menu_class' => 'nav menu-top-page',
					        	'menu_id'=>'nav-menu',
					        	'container'=>''
					        ]);
					      };
					    ?>
					</nav>
				<?php //endif;?>
			</div><!--  -->
			<!-- TOOL NAV -->
			<?php if( is_active_sidebar( 'mini-cart' ) ){ ?>
			<div class="col-md-2">
				
					<?php dynamic_sidebar( 'mini-cart' ); ?>
					
			
			</div>
			<?php }?>
			<span class="responsive-trigger"><i class="icon-list2"></i></span>
		</div>
	</div>
	<!-- RESPONSIVE NAVIGATION -->
	<?php //if( $show_top_nav ):?>
	<nav class="responsive-navigation">
		<div class="tool-nav-resp">
			<?php if( ! rose_get_option('hide_search') ): ?>
			<button class="tool-nav-item search-btn-resp"><i class="icon-search2"></i></button>
			<?php endif; ?>
			<?php if( ! rose_get_option('hide_cart') && rose_get_option('exist_woo') ): ?>
			<a href="<?php echo esc_url(WC()->cart->get_cart_url());?>" class="tool-nav-item"><i class="icon-cart"></i> <span class="cart-resp-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span></a>
			<?php endif; ?>
		</div>
	</nav>
	<?php //endif;?>
</header>

<div class="content">