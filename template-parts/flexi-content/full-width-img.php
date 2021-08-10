<?php
$image = get_sub_field('section_full_width_img__image');
$parallax = get_sub_field('section_full_width_img__parallax');
if( !empty( $image ) ):
?>

<div class="single-project__bg-parallax wow fadeIn">
  <div class="single-project__bg-parallax-image" style="background: url(<?php echo esc_url($image['url']); ?>) center center no-repeat <?php if ($parallax): ?>fixed<?php endif; ?>; background-size: cover;">

  </div>
</div>

<?php endif; ?>
