<!-- BLOG ARTICLE -->
<article class="blog-article article-quote">
	<div class="blog-article-content">
		<!-- BLOG ARTICLE HEADER -->
		<div class="blog-article-header media">
			<span class="blog-article-media-type cl">
				<i class="icon-quote"></i>
			</span>
			<div class="bd">
				<h2 class="blog-article-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<div class="blog-article-info">
					<span class="blog-article-date">
						<?php esc_html_e('Posted at: ','rose');?>
						<?php
						$archive_year  = get_the_time('Y');
						$archive_month = get_the_time('m');
						$archive_day = get_the_time('d');
						?>

						<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php esc_html_e('Archive for ','rose');?><?php the_time(get_option('date_format' )); ?>
						</a>
					</span>
					<span class="blog-article-tags">
						<?php esc_html_e('Posted in: ','rose');?>
						<?php the_category(', '); ?>
					</span>
				</div>
			</div>
		</div><!-- BLOG ARTICLE HEADER -->
		<div class="ui-excerpt">
			<p>
			<?php echo rose_excerpt( $excerpt_length ); ?>				
			</p>
		</div>
		<!-- BLOG ARTICLE FOOTER -->
		<div class="blog-article-footer">
			<div class="blog-article-author">
				<?php echo get_avatar( get_the_author_meta( 'ID' ),60, '', 'author avatar'); ?> 
				<h4 class="blog-article-author-name"><a href="<?php the_author_link();?>"><?php the_author();?></a></h4>
			</div>
			<div class="blog-article-nav">
				<span class="blog-article-nav-item">
					<a href="<?php comments_link();?>"><?php comments_number( 'no comments', 'one comment', '% comments' ); ?></a>
				</span>
				<?php if( $show_readmore ):?>
				<span class="blog-article-nav-item">
					<a href="<?php the_permalink();?>"><?php echo esc_attr( $readmore_text );?></a>
				</span>
				<?php endif;?>
			</div>
		</div><!-- BLOG ARTICLE FOOTER -->
	</div><!-- BLOG ARTICLE CONTENT -->
</article><!--  -->