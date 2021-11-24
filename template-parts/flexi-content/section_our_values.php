<?php

  $section_our_values__title = get_sub_field('section_our_values__title');

 ?>


 <div class="container">
   <!-- <div class="row"> -->


     <div class="type-service type-service--lite" style="position: relative">

       <h2><?php echo $section_our_values__title ?></h2>

        <?php if ( have_rows('section_our_values__values') ): ?>

             <div class="swiper type-service__list serviceList" style="position: relative">
              <div class="swiper-wrapper">
                <?php $i = 1; while ( have_rows('section_our_values__values') ) : the_row();

                $section_our_values__values__title = get_sub_field('section_our_values__values__title');
                $section_our_values__values__desc = get_sub_field('section_our_values__values__desc');

                ?>

                <div class="swiper-slide type-service__item wow <?php if ($i % 2): ?>fadeInDown<?php else: ?>fadeInUp<?php endif; ?>">
                  <div class="type-service__item_wrapper">
                  <h3 class="type-service__item-heading"><?php echo $section_our_values__values__title ?></h3>
                  <div class="type-service__item-text">

                    <?php echo $section_our_values__values__desc; ?>

                  </div>
                </div>
                </div>

                <?php $i++; endwhile; ?>

              </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          <?php endif; ?>
     </div>
   <!-- </div> -->
 </div>
