



<section class="webpage__latest-projects latest-projects">
  <div class="container">
    <header class="latest-projects__header">
      <h2 class="latest-projects__heading heading">

        <?php

        $projectTitle = get_sub_field('project_title');

        if ($projectTitle) : ?>
        <?php echo $projectTitle; ?>
        <?php else : ?>
          Our latest projects
        <?php endif ?>

      </h2>
      <a class="latest-projects__more more" href="/case-study">see all case studies</a>
    </header>
  </div>
  <div class="latest-projects__inner container">
    <div class="latest-projects__slider slider slider--single swiper-container __js_slider-single swiper-container-initialized swiper-container-horizontal">
      <div class="swiper-wrapper" id="swiper-wrapper-ef610e1c751a65ee" aria-live="polite">


        <?php
        $featured_posts = get_sub_field('projects_select');
        // $args = array(
        //   'post_type' => 'case-study',
        //   'posts_per_page' => 7,
        // );
        // $query = new WP_Query( $args );
        //if ( $query->have_posts() ) : ?>
            <?php //$i=1; while ( $query->have_posts() ) : $query->the_post(); ?>

          <?php if( $featured_posts ) : ?>

          <?php $i=1; foreach( $featured_posts as $featured_post ):

            $services = get_field('project_services', $featured_post->ID);
            $date_string = get_field('project_date', $featured_post->ID);
            $client = get_field('project_client', $featured_post->ID);
            $location = get_field('project_location', $featured_post->ID);

            $permalink = get_permalink( $featured_post->ID );
            $title = get_the_title( $featured_post->ID );

             ?>



                <div class="slider__item slide swiper-slide" data-swiper-slide-index="<?php echo $i; ?>" style="margin-right: 10px;" role="group" aria-label="<?php echo $i; ?> / 12">
                  <img src="<?php echo get_the_post_thumbnail_url($featured_post->ID,'project-slide') ?>" alt="<?php echo $title  ?>">
                    <div class="slide__content slide-content">
                      <div class="slide-content__detail"><?php echo $date_string; ?> - <?php echo $location; ?></div>
                      <div class="slide-content__heading">
                        <a href="<?php echo $permalink; ?>"><?php echo $title ?></a>
                      </div>
                      <a class="slide-content__a" href="<?php echo $permalink; ?>">View Case Study</a>

                    </div>
                  </div>

                  <?php $i++; endforeach; ?>


            <?php //$i++; endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>

      <div class="slider__nav-btn--next"></div>

      <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
      </div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>


    </div>
  </div>
</section>
