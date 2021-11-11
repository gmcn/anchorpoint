<?php if ( !is_paged() ) : ?>

<article class="news-sb-page">
		<section class="news-sb-slider aos-init aos-animate" data-aos="fade">
	   <div class="swiper-container __js_slider-news-2 swiper-container-initialized swiper-container-horizontal">
	      <div class="swiper-wrapper">

					<?php
					$args = array(
					  'post_type' => 'post',
						'posts_per_page' => 4,
						'cat' => 42
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) : ?>
					    <?php while ( $query->have_posts() ) : $query->the_post(); ?>



								<div class="news-sb-slider__item swiper-slide" role="group">
									 <div class="news-sb-slider__pic">
											<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'news_featured') ?>" alt="<?php echo the_title(); ?>">
									 </div>
									 <div class="news-sb-slider__content">
											<div class="news-sb-slider__date">
												 <a class="tag" href="#" target="_blank">Featured</a>
												 <span class="delimiter">/</span>
												 <span><?php echo get_the_date('M d, Y') ?></span>
											</div>
											<a class="news-sb-slider__title" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
									 </div>
								</div>


					    <?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

	      </div>
	      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
	   </div>
	   <!-- <button class="arrow-square arrow-square--prev" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-ee891abd2d89a566">
	      <svg>
	         <use xlink:href="#arrow-angle"></use>
	      </svg>
	   </button>
	   <button class="arrow-square arrow-square--next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-ee891abd2d89a566">
	      <svg>
	         <use xlink:href="#arrow-angle"></use>
	      </svg>
	   </button> -->
	</section>
</article>

<?php endif; ?>
