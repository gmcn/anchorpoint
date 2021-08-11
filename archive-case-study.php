<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<!-- <header class="page__header"> -->
	<div class="container services__container">
	<h1 class="service-page__heading heading wow fadeIn">Our Work</h1>
		<div class="service-page__text wow fadeIn">

		<p>Some things come naturally, your passion for work and commitment to customers.  Others take a little imagination.  If you are ready to redefine your workspace, take a look at our projects for inspiration.</p>

		</div>
	</div>
<!-- </header> -->

<div class="works-page__content">

<section class="works">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- <header class="works__header">

			<div class="works__filter filter">

				<button class="filter__item filter__item--active" type="button" data-filter="*">all</button>

				<button class="filter__item" type="button" data-filter=".__js_architecture">architecture</button>

				<button class="filter__item" type="button" data-filter=".__js_interior">interior</button>

				<button class="filter__item" type="button" data-filter=".__js_work-space">work space</button>

				<button class="filter__item" type="button" data-filter=".__js_meeting-room">meeting room</button>

				<button class="filter__item" type="button" data-filter=".__js_breakout-area">breakout area</button>

			</div>

			<div class="works__sort sort">
				<label class="sort__hint" for="sortSelect">filter by years:</label>
				<select class="sort__select __js_filter-select" id="sortSelect" name="sort">
					<option value="*">all</option>
					<option value="2020">2021</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
					<option value="2017">2017</option>
				</select>
			</div>
		</header> -->
		</div>
		<div class="container-fluid">

			<ul id="ajax-posts" class="works__list row __js_works-filter">
		        <?php
		            $postsPerPage = 9;
		            $args = array(
		                    'post_type' => 'case-study',
		                    'posts_per_page' => $postsPerPage,
												'orderby'   => 'menu_order',
        								'order' => 'ASC',
												'post_status' => 'publish',
		            );

		            $loop = new WP_Query($args);

		            while ($loop->have_posts()) : $loop->the_post();

								$post_date = get_the_date( 'Y' );
								$location = get_field('project_location');

								// $terms = get_the_terms( $post->ID, 'work_types' );
								// $term = array_shift( $terms );
		        ?>

						<li class="works__item work-card work-card--compact col-12 col-md-6 col-lg-4 <?php //foreach ( get_the_terms( get_the_ID(), 'work_types' ) as $tax ) { echo  '__js_' . __( $tax->slug . " " ); } ?> __js_<?php echo $post_date; ?>">
						 <a class="work-card__image" href="<?php echo the_permalink(); ?>">

							 <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'project-archive') ?>" alt="<?php echo the_title() ?>" loading="lazy">

						 </a>
						 <div class="work-card__content">
							 <!-- <div class="work-card__year">

								 <?php

									 //echo $post_date;

									?>

							 </div> -->
							 <div class="work-card__tags">


								 <?php
									 // foreach ( get_the_terms( get_the_ID(), 'work_types' ) as $tax ) {
										//  echo  __( $tax->name ) . ' / ';
									 // }
									 ?>


							 </div>
							 <h2 class="work-card__heading">

								 <?php if ($location): ?>
									 <a><?php echo the_title(); ?>, <span><?php echo $location; ?></span></a>
								 <?php else : ?>
									 <a><?php echo the_title(); ?></a>
								 <?php endif; ?>



							 </h2>
						 </div>
					 </li>

		         <?php endwhile; wp_reset_postdata(); ?>
		    </ul>

			<a id="more_posts" class="works__more more-btn">
				<span class="more-btn__text">more</span>
			</a>
		</div>
		</section>

		</main><!-- #main -->
</div>






<?php
get_footer();
