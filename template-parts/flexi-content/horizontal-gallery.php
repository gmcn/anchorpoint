<?php
// $images = get_sub_field('horizontal_gallery_images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

<div class="hortizontal-gallery">

  <div class="swiper-container horizontal_gallery">
    <div class="swiper-wrapper">
          <?php foreach( $images as $image_id ): ?>
              <div class="swiper-slide"><?php echo wp_get_attachment_image( $image_id, $size ); ?></div>
          <?php endforeach; ?>
        </div>
        <div class="slider__nav-btn--next"></div>
        <div class="slider__nav-btn--prev"></div>

      </div>
      <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
      </div>

</div>
<?php endif; ?>

<?php
$images = get_sub_field('horizontal_gallery_images');
$size = 'project-archive';
$large = 'medium';
if( $images ): ?>

<div class="hortizontal-gallery container">

  <div class="row">


    <?php $i = 1; foreach( $images as $image_id ): ?>

      <?php if ($i % 2): ?>
        <div class="col-6 col-lg-3 hortizontal-gallery__img wow fadeInUp">
      <?php else : ?>
        <div class="col-6 col-lg-3 hortizontal-gallery__img wow fadeInDown">
      <?php endif; ?>
      <div class="hortizontal-gallery__img-wrap">


        <a class="fancybox" rel="group" href="<?php echo wp_get_attachment_url( $image_id, $large ); ?>">
          <?php echo wp_get_attachment_image( $image_id, $size ); ?>
        </a>
        </div>
        </div>
    <?php $i++; endforeach; ?>


  </div>


</div>
<?php endif; ?>
