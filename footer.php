	    <!-- ================================= -->
	    <!-- ========== END FOOTER  ========== -->
	    <!-- ================================ --> 
	    <section class="footer-container no-pd-b">
	    	<?php if( rose_get_option('footer-widgets')): ?>
			<div class="footer-widgets <?php echo esc_attr( rose_get_option('footer_layout','container-fluid') );?>">
				<!-- ABOUT WIDGET -->
				<?php if( is_active_sidebar( 'footer-widget1' )):?>
				<div class="footer-widget footer-widget-1 col-md-4 col-md-push-2">
					<?php dynamic_sidebar( 'footer-widget1' ); ?>
				</div>
				<?php endif; ?>
				<!-- LATEST POSTS WIDGET -->
				<?php if( is_active_sidebar( 'footer-widget2' )):?>
				<div class="footer-widget footer-widget-2 widget-blog col-md-4 col-md-push-2">
					<?php dynamic_sidebar( 'footer-widget2' ); ?>
				</div>
				<?php endif; ?>
				<!-- LATEST TWEETS WIDGET -->
				<?php if( is_active_sidebar( 'footer-widget3' )):?>
				<div class="footer-widget footer-widget-3 col-md-3">
					<?php dynamic_sidebar('footer-widget3'); ?>
				</div>
				<?php endif; ?>
				<!-- INSTAGRAM WIDGET -->
				<?php if( is_active_sidebar( 'footer-widget4' )):?>
				<div class="footer-widget footer-widget-4 widget-instagram col-md-3">
					<?php dynamic_sidebar('footer-widget4'); ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<footer class="footer col-md-12">
				
				<?php echo wp_kses_post(rose_get_option('copy_right')); ?>
			</footer>
		</section>
	    <!-- search modal -->
	    <?php if( ! rose_get_option('hide_search', true) ):?>
	    <div class="search-modal">
			<div class="container-fluid">
				<div class="search-modal-wrap">
					<?php echo get_search_form(); ?>
				</div>
				<div class="close-modal">
					<i class="icon-cross" id="searchClose"></i>
				</div>
			</div>
		</div>
		<?php endif;?>
		<?php
		if( ! rose_get_option('hide_cart', true) && rose_get_option('exist_woo') ){
			require_once ROSE_ABS_PATH .'/framework/mini-cart.php';
		}
		wp_footer(); 
		?>

	</div>
</body>
</html>
