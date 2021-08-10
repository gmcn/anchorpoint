<?php

  $section_testimonial__body = get_sub_field('section_testimonial__body');
  $section_testimonial__byline = get_sub_field('section_testimonial__byline');
  $testimonial__byline__title = get_sub_field('testimonial__byline__title');
  $section_testimonial_branding = get_sub_field('section_testimonial_branding');

 ?>

<section class="single-project__review testimonial-block aos-init" data-aos="fade">
  <div class="container">
    <div class="testimonial-block__wrapper row wow fadeIn">

      <?php if ($section_testimonial_branding): ?>

        <div class="col-md-3 testimonial-block__branding">

          <img src="<?php echo $section_testimonial_branding ?>" alt="<?php echo $section_testimonial__byline ?>">



        </div>

      <?php endif; ?>

      <?php if ($section_testimonial_branding): ?>
        <div class="col-md-9 testimonial-block__text">
        <?php else : ?>
          <div class="col-md-12 testimonial-block__text">
      <?php endif; ?>

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

        <!-- <header class="testimonial-block__header">
          <div class="testimonial-block__author">
              <div class="testimonial-block__author-meta">
                <div class="testimonial-block__author-name"><?php echo $section_testimonial__byline ?></div>
                <div class="testimonial-block__author-info">
                  <?php echo $testimonial__byline__title; ?>
                </div>
              </div>
            </div>
            <a class="testimonial-block__social" href="#">
              <svg width="34" height="34">
                <use xlink:href="#twitter"></use>
              </svg>
            </a>
          </header> -->


      </div>
    </div>
  </section>
