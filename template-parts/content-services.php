<div class="services">

<?php

  $args = array(
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_parent'    => $post->ID,
      'order'          => 'ASC',
      'orderby'        => 'menu_order'
   );


  $parent = new WP_Query( $args );

  if ( $parent->have_posts() ) : ?>

    <?php $i = 1; while ( $parent->have_posts() ) : $parent->the_post();

    $service_page_button_title = get_field('service_page_button_title');

    ?>

      <?php if ($i % 2): ?>
        <div class="row no-gutters services__service">

          <div class="col-lg-7 d-lg-none">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy">
          </div>

          <div class="offset-lg-1 col-lg-4 services__service__excerpt align-self-center">
            <h2><?php echo the_title(); ?></h2>
            <?php echo the_excerpt(); ?>
            <a href="<?php echo the_permalink() ?>">

              <?php if ($service_page_button_title): ?>
                <?php echo $service_page_button_title ?>
              <?php else : ?>
                Find out more
              <?php endif; ?>

            </a>
          </div>

          <div class="col-lg-7 d-none d-lg-block" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
            <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy"> -->
          </div>

        </div>
      <?php else : ?>
        <div class="row no-gutters services__service">

          <div class="col-lg-7" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
            <img class="d-lg-none" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" loading="lazy">
          </div>

          <div class="col-lg-4 services__service__excerpt align-self-center">
            <h2><?php echo the_title(); ?></h2>
            <?php echo the_excerpt(); ?>
            <a href="<?php echo the_permalink() ?>">

              <?php if ($service_page_button_title): ?>
                <?php echo $service_page_button_title ?>
              <?php else : ?>
                Find out more
              <?php endif; ?>

            </a>
          </div>

        </div>
      <?php endif; ?>


    <?php $i++; endwhile; ?>

  <?php endif;  wp_reset_postdata(); ?>

</div>
