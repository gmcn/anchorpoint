<?php

  $section_testimonial__body = get_sub_field('section_testimonial__body');
  $section_testimonial__byline = get_sub_field('section_testimonial__byline');
  $testimonial__byline__title = get_sub_field('testimonial__byline__title');

 ?>

<section class="single-project__review testimonial-block aos-init" data-aos="fade">
  <div class="container">
    <div class="testimonial-block__wrapper">

        <div class="testimonial-block__text">

          <?php echo $section_testimonial__body ?>

        </div>

        <header class="testimonial-block__header">
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
          </header>


      </div>
    </div>
  </section>
