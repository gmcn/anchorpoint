<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<article class="news-list">
<div class="container news-list__container">

	<header class="news-list__header">
		<h2 class="news-list__heading heading">Welcome to our News page</h2>
		<p>Read on to learn of our new projects, industry news and working trends.</p>
	</header>

		<?php
		if ( have_posts() ) : ?>

		<div class="filter controls news-list__filter">
			<!-- <button class="filter__item filter__item--active" type="button" data-filter="*">all</button>
			<button class="filter__item" type="button" data-filter=".__js_anchorpoint">anchorpoint</button>
			<button class="filter__item" type="button" data-filter=".__js_industry">industry</button>
			<button class="filter__item" type="button" data-filter=".__js_awards">awards</button>
			<button class="filter__item" type="button" data-filter=".__js_covid">covid</button>
			<button class="filter__item" type="button" data-filter=".__js_returning-to-work">returning to work</button> -->
		</div>

		<div class="grid-wrapper __js_news-list-filter">


			<?php /* Start the Loop */
			$i = 1; while ( have_posts() ) : the_post();

			$datetime = get_the_date('Y-m-d');
			$date = get_the_date('M d, Y');
			$content = get_the_content();
			$categories = wp_get_post_categories( get_the_ID() );

			 ?>



			<div class="article-list__item __js_news-list-item <?php if( $i == 1 ) : ?> col-md-12 article-list__item__first <?php elseif ($i == 2 || $i == 8 || $i == 14 || $i == 20): ?>col-md-9 <?php else : ?>col-md-3<?php endif; ?> <?php
				//loop through them
				foreach($categories as $c){ $cat = get_category( $c );
					//get the name of the category
					$cat_id = get_cat_ID( $cat->name );
					//make a list item containing a link to the category
					echo '__js_'.$cat->slug." ";
				}
			?>">
				<div class="article-preview" tabindex="0">
					<div class="article-preview__image">
						<?php if ($i == 1) : ?>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php echo the_title() ?>" loading="lazy">
						<?php else : ?>
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'project-archive') ?>" alt="<?php echo the_title() ?>" loading="lazy">
						<?php endif; ?>
					</div>
					<div class="article-preview__content">
						<time class="article-preview__date" datetime="<?php echo $datetime ?>"><?php echo $date; ?></time>
						<h3 class="article-preview__heading"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?></a></h3>
						<div class="article-preview__text">

							<?php if ($i == 1) : ?>
								<?php echo wp_trim_words( get_the_content(), 100, '...' ); ?>
							<?php else : ?>
								<?php echo wp_trim_words( get_the_content(), 12, '...' ); ?>
							<?php endif; ?>


						</div>
						<a class="article-preview__btn" href="<?php echo the_permalink(); ?>">continue</a>
					</div>
				</div>
			</div>

		<?php $i++; endwhile; ?>

	</div>

<?php	endif; ?>

</div>
</article>

<?php
// get_sidebar();
get_footer();
