 <?php if ( have_rows('statistics') ): ?>

   <div class="container">
     <div class="our-story__statistics statistics row wow fadeIn">
       <?php while ( have_rows('statistics') ) : the_row();

       $statistic_no = get_sub_field('statistic_no');
       $statistic_animate = get_sub_field('statistic_animate');
       $statistic_symbol = get_sub_field('statistic_symbol');
       $statistic_details = get_sub_field('statistic_details');


       ?>
       <div class="statistics__item col-12 col-sm">

         <?php if ($statistic_animate): ?>
           <div class="statistics__item-value">
             <span class="__js_number" data-end-value="<?php echo $statistic_no ?>"><?php echo $statistic_no ?></span><?php echo $statistic_symbol ?>
           </div>
         <?php else : ?>
           <div class="statistics__item-value">
             <span data-end-value="<?php echo $statistic_no ?>"><?php echo $statistic_no ?></span><?php echo $statistic_symbol ?>
           </div>
         <?php endif; ?>

         <div class="statistics__item-text">

           <?php echo $statistic_details; ?>
         </div>
       </div>
       <?php endwhile; ?>
     </div>
   </div>

 <?php endif; ?>
