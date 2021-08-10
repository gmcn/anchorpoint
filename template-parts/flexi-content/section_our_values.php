<?php

  $section_our_values__title = get_sub_field('section_our_values__title');

 ?>


 <div class="container">
   <!-- <div class="row"> -->


     <div class="type-service type-service--lite">

       <h2><?php echo $section_our_values__title ?></h2>

       <div class="row type-service__list">
         <?php if ( have_rows('section_our_values__values') ): ?>
             <?php $i = 1; while ( have_rows('section_our_values__values') ) : the_row();

             $section_our_values__values__title = get_sub_field('section_our_values__values__title');
             $section_our_values__values__desc = get_sub_field('section_our_values__values__desc');

             ?>

               <div class="type-service__item col-md-6 wow <?php if ($i % 2): ?>fadeInLeft<?php else: ?>fadeInRight<?php endif; ?>">
                 <div class="type-service__item_wrapper">
                 <h3 class="type-service__item-heading"><?php echo $section_our_values__values__title ?></h3>
                 <div class="type-service__item-text">

                   <?php echo $section_our_values__values__desc; ?>

                 </div>
               </div>
               </div>

             <?php $i++; endwhile; ?>
         <?php endif; ?>


       </div>
     </div>
   <!-- </div> -->
 </div>
