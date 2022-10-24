<?php

 $section_text_image__header = get_sub_field('section_text_image__header');
 $section_text_image__body = get_sub_field('section_text_image__body');
 $section_text_image__cta = get_sub_field('section_text_image__cta');


 $section_text_image = get_sub_field('section_text_image');
 $section_text_image_overlay_text = get_sub_field('section_text_image_overlay_text');
 $section_text_image_video_link = get_sub_field('section_text_image_video_link');


 ?>


<section class="webpage__our-story our-story">
  <div class="our-story__inner container">
    <div class="row align-items-center">
      <div class="our-story__intro col-12 col-md col-lg-7">
        <div class="our-story__image wow fadeInLeft">

          <?php
          if ( !empty($section_text_image) ): ?>
            <img src="<?php echo $section_text_image['url']; ?>" alt="<?php echo $section_text_image['alt']; ?>" loading="lazy" />
          <?php endif; ?>


          <div class="our-story__intro-wrapper">

            <?php if (is_front_page()): ?>
              <div class="our-story__exp">
                <span class="our-story__exp-value">22</span>
                <span class="our-story__exp-text">years
                  <br>of experience
                </span>
              </div>
            <?php endif; ?>

            <div class="our-story__intro-text"><?php echo $section_text_image_overlay_text ?></div>
          </div>
        </div>
      </div>
      <div class="our-story__content col-12 col-md col-lg-5 wow fadeInRight">

        <h2 class="our-story__heading heading"><?php echo $section_text_image__header; ?></h2>

        <div class="our-story__text">

          <?php echo $section_text_image__body ?>

        </div>


          <div class="our-story__buttons">


            <?php
              if( $section_text_image__cta ):
                  $link_url = $section_text_image__cta['url'];
                  $link_title = $section_text_image__cta['title'];
                  $link_target = $section_text_image__cta['target'] ? $section_text_image__cta['target'] : '_self';
                  ?>
                  <a class="our-story__btn btn btn--outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>

              <?php if ($section_text_image_video_link): ?>

                <div class="our-story__video-btn video-btn">
                  <a class="video-btn__btn fancybox" data-fancybox-type="iframe" href="<?php echo $section_text_image_video_link ?>">
                  <span class="visually-hidden">Play</span>
                  <svg width="20" height="20">
                    <svg id="play" viewBox="0 0 64 64">
                      <path d="M56.6 27.9L12.8.7C11.2-.1 9.3-.4 8 .7c-1.6.5-2.7 2.1-2.7 4v54.7c0 1.6 1.1 3.2 2.4 4 .8.3 1.6.5 2.4.5s1.9-.3 2.7-.8L56.6 36c1.3-.8 2.1-2.4 2.1-4s-.8-3.3-2.1-4.1zm-46 30.2V5.8L52.8 32 10.6 58.1z"></path>
                      </svg>
                  </svg>
                  </a>
                  <span class="video-btn__text">view our story</span>
                </div>

              <?php endif; ?>

          </div>

      </div>
    </div>
  </div>
</section>
