<?php



 ?>

<section class="single-project__review testimonial-block aos-init" data-aos="fade">
  <div class="container">
      <div class="testimonial-block__wrapper wow fadeIn">

        <div class="swiper __js_testimonialSwiper">
          <div class="swiper-wrapper" style="position: relative;">
              <?php if ( have_rows('testimonial_section') ): ?>
                  <?php while ( have_rows('testimonial_section') ) : the_row();

                  $section_testimonial__body = get_sub_field('section_testimonial__body');
                  $section_testimonial__byline = get_sub_field('section_testimonial__byline');
                  $testimonial__byline__title = get_sub_field('testimonial__byline__title');
                  $section_testimonial_branding = get_sub_field('section_testimonial_branding');


                  ?>
                  <?php if ($section_testimonial_branding): ?>

                    <div class="swiper-slide">

                      <!-- <div class="row"> -->
                        <div class="testimonial-block__branding">

                          <img src="<?php echo $section_testimonial_branding ?>" alt="<?php echo $section_testimonial__byline ?>">



                        </div>
                      <!-- </div> -->

                  <?php endif; ?>

                  <div class="testimonial-block__text">

                      <?php echo $section_testimonial__body ?>

                      <div class="testimonial-block__author">
                          <div class="testimonial-block__author-meta">
                            <div class="testimonial-block__author-name"><?php echo $section_testimonial__byline ?></div>
                            <div class="testimonial-block__author-info">
                              <?php echo $testimonial__byline__title; ?>
                            </div>
                          </div>
                        </div>

                    </div>


                  </div>


                  <?php endwhile; ?>
              <?php endif; ?>

            </div>
            <div class="test-pagination"></div>
          </div>


      </div>
    </div>
  </section>
