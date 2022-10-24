<div class="services">

<?php if ( have_rows('building_block') ): ?>

    <?php $i = 1; while ( have_rows('building_block') ) : the_row();

    $service_page_button_title = get_sub_field('building_block_title');
    $building_block_copy = get_sub_field('building_block_copy');
    $service_page_button_img = get_sub_field('building_block_img');
    $service_page_button_link = get_sub_field('building_block_button');


    ?>

      <?php if ($i % 2): ?>
        <div class="row no-gutters services__service">

          <div class="col-lg-7 d-lg-none">
            <img src="<?php echo $service_page_button_img ?>" alt="<?php echo $service_page_button_title; ?>" loading="lazy">
          </div>

          <div class="offset-lg-1 col-lg-4 services__service__excerpt align-self-center">
            <h2><?php echo $service_page_button_title ?></h2>
            <?php echo $building_block_copy; ?>



            <?php
            if( $service_page_button_link ):
                $link_url = $service_page_button_link['url'];
                $link_title = $service_page_button_link['title'];
                $link_target = $service_page_button_link['target'] ? $service_page_button_link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>

          </div>

          <div class="col-lg-7 d-none d-lg-block" style="background: url(<?php echo $service_page_button_img ?>) center center; background-size: cover;">
            <!-- <img src="<?php echo $service_page_button_img ?>" alt="<?php echo $service_page_button_title; ?>" loading="lazy"> -->
          </div>

        </div>
      <?php else : ?>
        <div class="row no-gutters services__service">

          <div class="col-lg-7" style="background: url(<?php echo $service_page_button_img ?>) center center; background-size: cover;">
            <img class="d-lg-none" src="<?php echo $service_page_button_img ?>" alt="<?php echo $service_page_button_title; ?>" loading="lazy">
          </div>

          <div class="col-lg-4 services__service__excerpt align-self-center">
            <h2><?php echo $service_page_button_title ?></h2>
            <?php echo $building_block_copy; ?>

            <?php
            if( $service_page_button_link ):
                $link_url = $service_page_button_link['url'];
                $link_title = $service_page_button_link['title'];
                $link_target = $service_page_button_link['target'] ? $service_page_button_link['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>


          </div>

        </div>
      <?php endif; ?>


    <?php $i++; endwhile; ?>

  <?php endif;  wp_reset_postdata(); ?>

</div>
