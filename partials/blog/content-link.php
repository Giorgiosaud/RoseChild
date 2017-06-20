<!-- BLOG ARTICLE -->
<article class="blog-article article-link">
	<?php if( has_post_thumbnail() ):?>
	<div class="blog-article-img">
		<?php $img = rose_getImageBySize( array(
                'attach_id' => get_post_thumbnail_id( get_the_ID() ),
                'thumb_size' => $thumb_size,
                'class' => 'img-responsive',
            ) );
			if( $img ) echo do_shortcode($img['thumbnail']);
		?>
	</div>
	<?php endif;?>
	<div class="blog-article-content">
		<!-- BLOG ARTICLE HEADER -->
		<div class="blog-article-header media">
			<span class="blog-article-media-type cl">
				<i class="icon-link"></i>
			</span>
			<div class="bd">
				<h2 class="blog-article-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
				<div class="blog-article-info">
					<span class="blog-article-link">
						<a href="<?php $link = rose_get_meta(get_the_ID(), 'link'); echo esc_url( $link );?>"><?php echo esc_attr( $link );?></a>
					</span>
				</div>
			</div>
		</div><!-- BLOG ARTICLE HEADER -->
		<div class="blog-article-info">
			<div class="ui-excerpt">
			<?php echo rose_excerpt( $excerpt_length ); ?>
		</div>
		</div>
	</div><!-- BLOG ARTICLE CONTENT -->
</article><!--  -->