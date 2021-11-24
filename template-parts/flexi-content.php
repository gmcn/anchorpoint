<?php if( have_rows('flexible_content') ): ?>
 <?php while( have_rows('flexible_content') ): the_row(); ?>


   <?php if( get_row_layout() == 'hero_slider' ): ?>

     <?php include(locate_template("template-parts/flexi-content/hero_slider.php")); ?>

     <?php elseif( get_row_layout() == 'intro_paragraph' ): ?>

       <?php include(locate_template("template-parts/flexi-content/intro_paragraph.php")); ?>

     <?php elseif( get_row_layout() == 'section_text' ): ?>

       <?php include(locate_template("template-parts/flexi-content/section_text.php")); ?>

     <?php elseif( get_row_layout() == 'section_testimonial' ): ?>

       <?php include(locate_template("template-parts/flexi-content/section_testimonial.php")); ?>

     <?php elseif( get_row_layout() == 'section_get_in_touch' ): ?>

       <?php include(locate_template("template-parts/flexi-content/contact-form.php")); ?>

     <?php elseif( get_row_layout() == 'section_team' ): ?>

       <?php include(locate_template("template-parts/flexi-content/team.php")); ?>

       <?php elseif( get_row_layout() == 'section_full_width_img' ): ?>

         <?php include(locate_template("template-parts/flexi-content/full-width-img.php")); ?>

       <?php elseif( get_row_layout() == 'section_partners' ): ?>

         <?php include(locate_template("template-parts/flexi-content/partners.php")); ?>

       <?php elseif( get_row_layout() == 'section_text_image' ): ?>

         <?php include(locate_template("template-parts/flexi-content/our-story.php")); ?>

       <?php elseif( get_row_layout() == 'section_our_values' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_our_values.php")); ?>

       <?php elseif( get_row_layout() == 'latest_projects' ): ?>

         <?php include(locate_template("template-parts/flexi-content/latest-projects.php")); ?>

       <?php elseif( get_row_layout() == 'latest_news' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_news.php")); ?>

       <?php elseif( get_row_layout() == 'section_statistics' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_statistics.php")); ?>

       <?php elseif( get_row_layout() == 'our_approach' ): ?>

         <?php include(locate_template("template-parts/flexi-content/our-approach.php")); ?>

       <?php elseif( get_row_layout() == 'our_approach_timeline' ): ?>

         <?php include(locate_template("template-parts/flexi-content/our-approach-timeline.php")); ?>

       <?php elseif( get_row_layout() == 'section_solutions' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_solutions.php")); ?>

       <?php elseif( get_row_layout() == 'three_grid_content' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_three_grid.php")); ?>

       <?php elseif( get_row_layout() == 'section_services' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_services.php")); ?>

       <?php elseif( get_row_layout() == 'section_reviews' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_review.php")); ?>

       <?php elseif( get_row_layout() == 'horizontal_gallery' ): ?>

         <?php include(locate_template("template-parts/flexi-content/horizontal-gallery.php")); ?>

       <?php elseif( get_row_layout() == 'section_cta' ): ?>

         <?php include(locate_template("template-parts/flexi-content/section_cta.php")); ?>


     <?php endif; ?>
 <?php endwhile; ?>
<?php endif; ?>
