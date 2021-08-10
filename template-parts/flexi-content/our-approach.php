<section class="about__approach approach">
  <div class="approach__inner container">
    <header class="approach__header">
      <h2 class="approach__heading heading">Our Approach</h2>
    </header>


    <div class="swiper-container __js_slider-approach">
      <div class="swiper-wrapper">


        <?php if ( have_rows('approach_tiles') ): ?>
            <?php $i = 1; while ( have_rows('approach_tiles') ) : the_row();

            $approach_step = get_sub_field('approach_step');
            $approach_icon = get_sub_field('approach_icon');
            $approach_heading = get_sub_field('approach_heading');
            $approach_text = get_sub_field('approach_text');


            ?>
              <div class="swiper-slide slide<?php echo $i ?> wow fadeInRight">
                <div class="approach__card">
                  <div class="approach__card--counter">
                    <?php echo $approach_step; ?>
                  </div>
                  <div class="approach__card-icon">

                    <?php
                      if( !empty( $approach_icon ) ): ?>
                          <img src="<?php echo esc_url($approach_icon['url']); ?>" alt="<?php echo esc_attr($approach_icon['alt']); ?>" />
                      <?php endif; ?>

                  </div>
                  <h3 class="approach__card-heading"><?php echo $approach_heading ?></h3>

                  <?php if ($approach_text): ?>
                    <div class="approach__card-text">

                      <?php echo $approach_text ?>

                    </div>
                  <?php endif; ?>


                </div>
              </div>
            <?php $i++; endwhile; ?>
        <?php endif; ?>

      </div>

    </div>
    <div class="swiper-button-next"></div>
    <!-- <div class="swiper-button-prev"></div> -->
  </div>
</section>
