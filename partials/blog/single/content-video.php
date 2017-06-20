<article class="blog-article blog-article-single">
	<?php $video = rose_get_meta( get_the_ID(), 'video'); if( ! empty( $video ) ):
	?>
		<div class="media-video">
			<?php echo wp_oembed_get( esc_url( $video ) );?>
		</div>
	<?php elseif( has_post_thumbnail() ):?>
	<div class="blog-article-img">
		<?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
	</div>
	<?php endif;?>
	<div class="blog-article-content">
		<!-- BLOG ARTICLE HEADER -->
		<div class="blog-article-header media">
			<span class="blog-article-media-type cl">
				<i class="icon-video"></i>
			</span>
			<div class="bd">
				<h2 class="blog-article-title"><?php the_title(); ?></h2>
				<div class="blog-article-info">
					<span class="blog-article-date">
						<?php esc_html_e('Posted at: ','rose');?>
						<?php
						$archive_year  = get_the_time('Y');
						$archive_month = get_the_time('m');
						$archive_day = get_the_time('d');
						?>

						<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time(get_option('date_format' )); ?>
						</a>
					</span>
					<span class="blog-article-tags">
						<?php esc_html_e('Posted in: ','rose');?>
						<?php the_category(', '); ?>
					</span>
				</div>
			</div>
		</div><!-- BLOG ARTICLE HEADER -->
		<div class="ui-content clearfix">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div>
		<!-- BLOG ARTICLE FOOTER -->
		<div class="blog-article-footer">
			<?php if( has_tag() ):?>
			<div class="blog-article-tags">
				<h5 class="blog-article-tags-title"><?php esc_html_e('Tags :','rose');?></h5>
				<?php the_tags( '<ul><li>', '</li> <li>', '</li></ul>' );?>
			</div>
			<?php endif; ?>
		</div><!-- BLOG ARTICLE FOOTER -->
	</div><!-- BLOG ARTICLE CONTENT -->
</article><!--  -->