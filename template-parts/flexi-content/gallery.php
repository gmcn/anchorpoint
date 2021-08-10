<div class="news-masonry__container">

<section class="webpage__masonry masonry">

		<?php if ( have_rows('gallery') ): ?>

		<!-- <header class="works__header">

			<div class="works__filter filter">

				<button class="filter__item filter__item--active" type="button" data-filter="*">all</button>

				<button class="filter__item" type="button" data-filter=".__js_workspace-consultancy">Workplace Consultancy</button>

				<button class="filter__item" type="button" data-filter=".__js_design-feasibility">Design & Feasibility</button>

				<button class="filter__item" type="button" data-filter=".__js_corporate-workspaces">Corporate Workspaces</button>

				<button class="filter__item" type="button" data-filter=".__js_industrial-workspaces">Industrial Workspaces</button>

			</div>

			<div class="works__sort sort">
				<label class="sort__hint" for="sortSelect">filter by years:</label>
				<select class="sort__select __js_filter-select" id="sortSelect" name="sort">
					<option value="*">all</option>
          <option value="2021">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>
				</select>
			</div>
		</header> -->
		<!-- <div class="container-fluid"> -->

			<ul class="works__list __js_gallery-filter">

			<?php while ( have_rows('gallery') ) : the_row();

			$post_date = get_sub_field('gallery_item_year');
      $services = get_sub_field('gallery_item_services');

      $field = get_sub_field( 'gallery_item_work_type' );

			?>

			<li class="masonry-item works__item work-card work-card--compact <?php echo "__js_" . implode( ' __js_', $field ); ?>  __js_<?php echo $post_date; ?>">
				<a class="work-card__image fancybox" rel="group" href="<?php echo get_sub_field('gallery_item_image') ?>">

					<img src="<?php echo get_sub_field('gallery_item_image') ?>" alt="<?php echo get_sub_field('gallery_item_name'); ?>" loading="lazy">


				</a>
				<div class="work-card__content">
					<!-- <div class="work-card__year"> -->

						<?php

							//echo $post_date;

						 ?>

					<!-- </div> -->
					<div class="work-card__tags">
            <?php echo $services; ?>
					</div>
					<h2 class="work-card__heading">

						<a><?php echo get_sub_field('gallery_item_name'); ?></a>



					</h2>
				</div>
			</li>



		<?php endwhile; ?>

		</ul>

			<?php endif; ?>

		<!-- <a class="works__more more-btn" href="#">
		<span class="more-btn__text">more</span>
		</a> -->
		<!-- </div> -->
		</section>
</div>
