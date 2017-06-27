<?php
extract(shortcode_atts(array(
  'title' => '',
  'job' => '',
  'img_url'=>'',
  'desc' => '',
  'el_class' => ''
), $atts));
// wp_enqueue_style( 'style-4' );
$class = array('m-team-member');
$class[] = $el_class;
$img_url = wp_get_attachment_url(intval($img_url));
?>
<div class="<?php echo rose_join( $class );?>">
  <div class="m-team-wrap">
    <?php if( $img_url ):?>
    <img src="<?php echo esc_url( $img_url );?>" alt="<?php echo esc_attr( $title );?>">
    <?php endif;?>
    <?php if( ! empty( $content ) ):?>
    <div class="m-team-cap">
      <div class="m-team-member-social-icons clearfix">
        <?= do_shortcode($content)?>
      </div>
    </div>
    <?php endif;?>
  </div><!-- team wrap -->
  <?php if( ! empty( $title ) ):?>
  <h3 class="m-team-member-name"><?php echo esc_attr( $title );?></h3>
  <?php endif;?>
  <?php if( ! empty( $job ) ):?>
  <span class="m-team-member-role"><?php echo esc_attr( $job );?></span>
  <?php endif;?>
  <?php if( ! empty( $desc ) ):?>
  <p class="m-team-member-desc">
    <?php echo esc_attr( $desc );?>
  </p>
<?php endif;?>
</div><!-- End Team member -->