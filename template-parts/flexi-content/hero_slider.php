<?php

$hero_slide_images = get_sub_field('hero_slide_images');
$hero_slide_title = get_sub_field('hero_slide_title');
$hero_slide_desc = get_sub_field('hero_slide_desc');
$hero_slide_link = get_sub_field('hero_slide_link');
$hero_slide_cta_details = get_sub_field('hero_slide_cta_details');
$hero_slide_cta = get_sub_field('hero_slide_cta');
$hero_slide_video = get_sub_field('hero_slide_video');
$hero_slide_video_hosted = get_sub_field('hero_slide_video_hosted');
$slide_video_type = get_sub_field('slide_video_type');

 ?>

<section class="webpage__an-awards an-awards">
  <div class="container">
    <div class="row">

      <div class="an-awards__intro wow fadeInLeft col-12 col-md col-lg-7 order-md-1 wow fadeInRight">
        <div class="an-awards__image">



          <?php if ( have_rows('hero_slide_images') ): ?>
            <div class="swiper-container __js_slider-hero">
              <div class="swiper-wrapper">
                <img class="slider_top" src="<?php echo get_template_directory_uri(); ?>/images/slider-img_top.svg" alt="<?php echo $hero_slide_title ?>" loading="lazy">
                <?php while ( have_rows('hero_slide_images') ) : the_row(); ?>
                  <div class="swiper-slide">


                    <?php
          						$image = get_sub_field('hero_slide_image');
          						if( $image ):

          						    // Image variables.
          						    $url = $image['url'];
          						    $title = $image['title'];
          						    $alt = $image['alt'];
          						    $caption = $image['caption'];

          						    // Thumbnail size attributes.
          						    $size = 'hero-square';
          						    $thumb = $image['sizes'][ $size ];
          						    $width = $image['sizes'][ $size . '-width' ];
          						    $height = $image['sizes'][ $size . '-height' ]; ?>




          						        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?> <?php echo get_sub_field('hero_slide_image'); ?>" loading="lazy" />
          						<?php endif; ?>





                  </div>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endif; ?>







        </div>
      </div>

      <div class="an-awards__content col-12 col-md col-lg-5 wow fadeInLeft">
        <h1 class="an-awards__heading heading heading--h1"><?php echo $hero_slide_title ?></h1>
        <div class="an-awards__text"><?php echo $hero_slide_desc; ?></div>

        <?php if( $hero_slide_link ):

           $link_url = $hero_slide_link['url'];
           $link_title = $hero_slide_link['title'];
           $link_target = $hero_slide_link['target'] ? $hero_slide_link['target'] : '_self';

           ?>

           <div class="an-awards__buttons">
             <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>

             <?php //if ($hero_slide_video): ?>

             <div class="our-story__video-btn video-btn">
               
               <?php if ($slide_video_type == "self-hosted"): ?>

                <a class="video-btn__btn fancybox" href="#myVideo">

                <?php else : ?>

                <a class="video-btn__btn fancybox" data-fancybox-type="iframe" href="<?php echo $hero_slide_video ?>">

               <?php endif; ?>
               <span class="visually-hidden">Play</span>
               <svg width="20" height="20">
                 <svg id="play" viewBox="0 0 64 64">
                   <path d="M56.6 27.9L12.8.7C11.2-.1 9.3-.4 8 .7c-1.6.5-2.7 2.1-2.7 4v54.7c0 1.6 1.1 3.2 2.4 4 .8.3 1.6.5 2.4.5s1.9-.3 2.7-.8L56.6 36c1.3-.8 2.1-2.4 2.1-4s-.8-3.3-2.1-4.1zm-46 30.2V5.8L52.8 32 10.6 58.1z"></path>
                   </svg>
               </svg>
               </a>
               <span class="video-btn__text">view our story</span>
             </div>

             <video id="myVideo" width="800" src="<?php echo $hero_slide_video_hosted ?>" controls="controls" style="display:none;"> </video>

            <?php endif; ?>
           </div>



       <?php //endif; ?>


        <div class="an-awards__notice"><?php echo $hero_slide_cta_details ?></div>
        <div class="an-awards__phone phone-block">
          <div class="phone-block__icon">
            <svg id="phone" viewBox="0 0 64 64">
              <path d="M61.6 44.1l-9.3-5.9c-2.4-1.3-5.3-.8-6.9 1.3l-2.1 3.2c-12-7.2-19.5-16.8-22.4-21.1l3.5-2.1c1.1-.8 1.9-1.9 2.1-3.2.3-1.3 0-2.7-.8-3.7l-6.1-8.8C18 1.7 15.1.9 12.9 2.2L4 7c-.5.3-.8.5-1.3.8C-4 15 2.1 31.3 17.6 45.9c11.2 10.7 23.2 16.5 31.7 16.5 3.2 0 5.9-.8 7.7-2.4l1.1-1.1 5.1-8c1.6-2.3.8-5.5-1.6-6.8zm-8 11.9c-4.6 3.8-18.9-1-32.5-13.8C7.7 29.4 2.7 15.8 6.7 11.5L15 6.7l5.9 8.5-3.5 2.1c-1.1.8-1.9 1.9-2.1 3.2-.3 1.3 0 2.7.8 3.7 2.9 4.3 11.2 15.2 24.3 23.2 2.4 1.3 5.3.8 6.9-1.3l2.4-3.5 9.1 5.6-5.2 7.8z"></path>
             </svg>
          </div>
          <div class="phone-block__content">
            <!-- <div class="phone-block__hint">hotline 24/7</div> -->
            <a class="phone-block__number" href="tel:<?php echo $hero_slide_cta ?>"><?php echo $hero_slide_cta ?></a>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>
