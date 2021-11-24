<?php
$images = get_sub_field('horizontal_gallery_images');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>

<div class="hortizontal-gallery">

  <div class="swiper-container horizontal_gallery">
    <div class="swiper-wrapper">
          <?php foreach( $images as $image_id ): ?>
              <div class="swiper-slide">



                <a class="fancybox" rel="group" href="<?php echo wp_get_attachment_url( $image_id, $large ); ?>">
                  <?php echo wp_get_attachment_image( $image_id, 'horizontal_gallery' ); ?>
                </a>



              </div>
          <?php endforeach; ?>
        </div>
        <div class="slider__nav-btn--next">

          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="27" viewBox="0 0 17 27">
            <defs>
              <pattern id="pattern" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 34, 0)" viewBox="0 0 17 27">
                <image preserveAspectRatio="none" width="17" height="27" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAbCAYAAACa9mScAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAEaADAAQAAAABAAAAGwAAAADEI4ugAAAAjklEQVQ4EWNgIBH8//9/JhCfAWIlErVClEMNAFJgcBdIkmYQUAPIBeiAeIOAOrEZADPwDEFvETAAZNAqvIYQYcDuUQP+D/swAMYxExAb441rBobVBOQZGIAJSgmIQXkAH0gbNWg0jPClAWDiIZSO7uLTD5cjYBDhhAgzCYdBxBuAwyDSDUAySBDoKpRMCwD8TjJzgoE+LwAAAABJRU5ErkJggg=="/>
              </pattern>
            </defs>
            <rect id="Image_1" data-name="Image 1" width="17" height="27" fill="url(#pattern)"/>
          </svg>



        </div>
        <div class="slider__nav-btn--prev">

          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="27" viewBox="0 0 17 27">
            <image id="Image_1" data-name="Image 1" width="17" height="27" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAbCAYAAACa9mScAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAEaADAAQAAAABAAAAGwAAAADEI4ugAAAAjklEQVQ4EWNgIBH8//9/JhCfAWIlErVClEMNAFJgcBdIkmYQUAPIBeiAeIOAOrEZADPwDEFvETAAZNAqvIYQYcDuUQP+D/swAMYxExAb441rBobVBOQZGIAJSgmIQXkAH0gbNWg0jPClAWDiIZSO7uLTD5cjYBDhhAgzCYdBxBuAwyDSDUAySBDoKpRMCwD8TjJzgoE+LwAAAABJRU5ErkJggg=="/>
          </svg>


        </div>
        <div class="swiper-pagination"></div>

      </div>


</div>
<?php endif; ?>

<?php
$images = get_sub_field('horizontal_gallery_images');
$size = 'project-archive';
$large = 'medium';
if( !$images ): ?>

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
