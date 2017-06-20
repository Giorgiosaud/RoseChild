<section class="portfolio" id="portfolio">
    <div class="portfolio-project-container container">
        <div class="portfolio-project-media col-md-9">
            <?php
                $gallery = rose_get_meta( get_the_ID(), 'gallery'); if( ! empty( $gallery ) ):
                ?>
                <div class="project-media-gallrey flexslider">
                    <ul class="slides">
                <?php
                foreach( $gallery as $image ):
                ?>
                <li><img src="<?php echo esc_url( $image );?>" class="scale" alt="<?php esc_html_e('Project Media','rose');?>"></li>          
                <?php endforeach;?>
                    </ul>
                </div>
            <?php endif;?>
            <?php $content = get_the_content(); if( ! empty( $content ) ):?>
                <div class="spacer"></div>
                <div class="clearfix portfolio-content wrap-text-medium">
                    <?php the_content(); ?>
                </div>
            <?php endif;?>
        </div>
        <div class="portfolio-project-details col-md-3">
            <div class="ui-excerpt">
                <?php the_excerpt();?>
            </div>
            <!-- Project info details -->
            <ul>
                <?php $client = rose_get_meta( get_the_ID(), 'client') ; if( ! empty($client )):?>
                <li>
                    <span><?php esc_html_e('Client :','rose');?></span><?php echo esc_attr( $client );?>
                </li>
                <?php endif;?>
                <?php if( has_term('', 'portfolio_type', get_the_ID()) ):?>
                <li>
                    <span><?php esc_html_e('Category : ','rose');?></span>
                    <ul>
                        <?php the_terms( get_the_ID(), 'portfolio_type', '<li>', '</li><li>', '</li>');?>
                    </ul>
                </li>
                <?php endif;?>
                <?php $executive = rose_get_meta( get_the_ID(), 'executive'); if( ! empty( $executive  ) ):?>
                <li>
                    <span><?php esc_html_e('Executive : ','rose');?></span><?php echo esc_attr( $executive );?>
                </li>
                <?php endif;?>
                <?php $url = rose_get_meta( get_the_ID(), 'url' ); if( ! empty( $url  )):?>
                <li>
                    <span><?php esc_html_e('Project url : ','rose');?></span><a href="<?php echo esc_url($url);?>"><?php echo esc_attr($url);?></a>
                </li>
                <?php endif;?>
                 <?php $date = rose_get_meta( get_the_ID(), 'date' ); if( ! empty( $date )):?>
                <li>
                    <span><?php esc_html_e('Date realised : ','rose');?></span><?php echo esc_attr($date);?>
                </li>
                <?php endif;?>
            </ul>
        </div><!-- PROJECT DETAILS -->
    </div>
</section>
<!-- *********************
    LINK SECTION
********************** -->
<?php $link = rose_get_meta( get_the_ID(), 'link' ); if( ! empty( $link ) ):?>
<section class="ui-link-section">
    <div class="container">
        <div class="m-link-section default-bg">
            <a href="<?php echo esc_url( $link );?>"></a>
            <h3 class="m-link-section-title">
                <?php esc_html_e('Let\'s Talk About Your Project','rose');?>
            </h3>
        </div>
    </div>
</section>
<?php endif;?>
<!-- *********************-->