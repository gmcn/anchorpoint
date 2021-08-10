<section class="webpage__partners partners">
  <div class="partners__inner container">
  <h2 class="partners__heading heading wow fadeInDown">Our trusted partners</h2>
  <div class="partners__text wow fadeInDown">Your success, our reputation! We are proud to accompany more than 30 major brands</div>


  <?php if ( have_rows('partners', 'option') ): ?>
    <ul class="partners__list">
      <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
        <li class="partners__item wow fadeIn">
          <?php
            $image = get_sub_field('partner_logo', 'option');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
            <?php endif; ?>
            <?php //the_sub_field('partner_name'); ?>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>



  <div class="partners__line"></div>
  </div>
</section>
