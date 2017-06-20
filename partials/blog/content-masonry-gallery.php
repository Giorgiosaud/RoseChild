<!-- BLOG ARTICLE -->
<article class="blog-article-masonry">
	<?php $gallery = rose_get_meta( get_the_ID(), 'gallery') ; if( ! empty( $gallery ) ):?>
	<div class="blog-article-gallrey flexslider">
		<ul class="slides">
			<?php
	            foreach( $gallery as $image ):
	            ?>
	            <li><img src="<?php echo esc_url( $image );?>" class="scale" alt=""></li>
	            <?php endforeach;
            ?>
		</ul>
	</div>
	<?php elseif( has_post_thumbnail()):?>
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
		<h3 class="blog-article-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
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