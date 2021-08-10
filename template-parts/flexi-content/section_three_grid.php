<div class="container three_grid_content">
    <div class="swiper-container  servicescopy">
      <div class="swiper-wrapper three_grid_content__wrap">
          <?php if ( have_rows('3_grid_content') ): ?>

              <?php while ( have_rows('3_grid_content') ) : the_row();

              $three_grid_content_heading = get_sub_field('three_grid_content_heading');
              $three_grid_content_body = get_sub_field('three_grid_content_body');


              ?>

                <div class="swiper-slide">
                  <p class="title wow fadeInDown">
                    <?php if ($three_grid_content_heading) : ?>

                      <?php echo $three_grid_content_heading ?>

                      <?php else : ?>
                      &nbsp;
                    <?php endif; ?>

                  </p>

                  <div class="wow fadeInUp">
                    <?php echo $three_grid_content_body ?>
                  </div>

                </div>



              <?php endwhile; ?>

          <?php endif; ?>

        </div>

        <div class="slider__nav-btn--next">Next</div>
        <div class="slider__nav-btn--prev">Prev</div>
  </div>

</div>
