<!-- BLOG ARTICLE -->
<article class="blog-article-masonry blog-article-quote">
	<div class="blog-article-content">
		<a href="<?php the_permalink();?>"></a>
		<div class="ui-excerpt">
			<p>
			<?php echo rose_excerpt( $excerpt_length ); ?>				
			</p>
		</div>
		<div class="blog-article-footer">
			<span class="blog-article-author">
				<a href="<?php the_author_link();?>"><?php the_author();?>
				</a>
			</span>
			<span class="blog-article-author right">
				<?php
				$archive_year  = get_the_time('Y');
				$archive_month = get_the_time('m');
				$archive_day = get_the_time('d');
				?>

				<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time(get_option('date_format' )); ?>
				</a>
			</span>
		</div>
	</div>
</article><!--  -->