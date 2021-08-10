<?php

  $section_services__title = get_sub_field('section_services__title');
  $services_usp__desc = get_sub_field('services_usp__desc');

 ?>


<section class="webpage__type-service type-service">
	<div class="container">
		<h2 class="type-service__heading heading"><?php echo $section_services__title ?></h2>
		<div class="type-service__text"><?php echo $services_usp__desc; ?></div>

      <?php if ( have_rows('services_usp_list') ): ?>
        <ul class="type-service__list row">
          <?php while ( have_rows('services_usp_list') ) : the_row();

          $service__item_icon = get_sub_field('service__item-icon');
          $service__item_heading = get_sub_field('service__item-heading');
          $service__item_copy = get_sub_field('service__item-copy');
          $service__item_link = get_sub_field('service__item-link');
          $service__item_project_count = get_sub_field('service__item-project-count');


          ?>

            <li class="type-service__item col-12 col-md">
      				<a href="<?php echo $service__item_link; ?>">
      					<div class="type-service__item-icon type-service__item-icon--interior">

                  <?php if ($service__item_icon): ?>
                    <img src="<?php echo $service__item_icon ?>" alt="<?php echo $service__item_heading; ?>" loading="lazy">
                  <?php endif; ?>


      					</div>
      					<h3 class="type-service__item-heading"><?php echo $service__item_heading; ?></h3>
      					<div class="type-service__item-text"><?php echo $service__item_copy; ?></div>

                <?php if ($service__item_project_count): ?>
                  <div class="type-service__item-link"><?php echo $service__item_project_count; ?></div>
                <?php endif; ?>

      				</a>
      			</li>

          <?php endwhile; ?>
        </ul>
      <?php endif; ?>





	</div>
</section>
