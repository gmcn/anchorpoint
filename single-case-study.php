<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<article class="single-project">
	<header class="single-project__header container">
		<div class="single-project__inner row">
			<div class="col-12 col-md-4 wow fadeIn">
				<h1 class="single-project__heading heading"><?php echo the_title(); ?></h1>
				<ul class="single-project__social social">
					<li class="social__item">
						<a class="social__link" href="#" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
							  <path id="Path_41" data-name="Path 41" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#666"/>
							</svg>
							<span class="visually-hidden">twitter</span>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="https://facebook.com/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							  <path id="Path_37" data-name="Path 37" d="M16.625-16H1.375a1.352,1.352,0,0,0-1,.375A1.2,1.2,0,0,0,0-14.75V.75a1.2,1.2,0,0,0,.375.875,1.352,1.352,0,0,0,1,.375h15.25a1.352,1.352,0,0,0,1-.375A1.2,1.2,0,0,0,18,.75v-15.5a1.2,1.2,0,0,0-.375-.875A1.352,1.352,0,0,0,16.625-16ZM5.375-.625H2.625V-9.25h2.75ZM4-10.375a1.362,1.362,0,0,1-1.062-.5A1.664,1.664,0,0,1,2.5-12a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,4-13.5a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,5.5-12a1.664,1.664,0,0,1-.437,1.125A1.362,1.362,0,0,1,4-10.375ZM15.375-.625h-2.75v-4.25a6.663,6.663,0,0,0-.125-1.5,1.292,1.292,0,0,0-1.25-.75A1.342,1.342,0,0,0,10-6.5a3.127,3.127,0,0,0-.375,1.625v4.25H7V-9.25H9.625v1.125a2.506,2.506,0,0,1,.938-.937A2.848,2.848,0,0,1,12.125-9.5,2.808,2.808,0,0,1,14.75-8.25a5.068,5.068,0,0,1,.625,2.875Z" transform="translate(0 16)" fill="#666"/>
							</svg>

							<span class="visually-hidden">linkedin</span>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="#" target="_blank">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							  <path id="Path_36" data-name="Path 36" d="M18-10.75a8.049,8.049,0,0,0-.5-2.187,4.582,4.582,0,0,0-1-1.562,4.582,4.582,0,0,0-1.562-1A8.049,8.049,0,0,0,12.75-16H5.25a8.049,8.049,0,0,0-2.187.5,4.781,4.781,0,0,0-1.625,1.063,4.179,4.179,0,0,0-1,1.563A9.058,9.058,0,0,0,0-10.75v7.5A8.049,8.049,0,0,0,.5-1.062,4.781,4.781,0,0,0,1.563.563a4.179,4.179,0,0,0,1.563,1A9.342,9.342,0,0,0,5.375,2H12.75a8.049,8.049,0,0,0,2.188-.5A4.781,4.781,0,0,0,16.563.438a4.179,4.179,0,0,0,1-1.562A9.342,9.342,0,0,0,18-3.375V-10.75ZM16.375-3.375A7.813,7.813,0,0,1,16-1.812a3.024,3.024,0,0,1-.687,1.125A3.024,3.024,0,0,1,14.188,0a5.924,5.924,0,0,1-1.625.313q-.937.062-3.625.063T5.375.313A5.77,5.77,0,0,1,3.813,0,3.024,3.024,0,0,1,2.688-.687,3.024,3.024,0,0,1,2-1.812a5.77,5.77,0,0,1-.312-1.562Q1.625-4.25,1.625-7t.063-3.625A5.77,5.77,0,0,1,2-12.187a3.024,3.024,0,0,1,.688-1.125A3.024,3.024,0,0,1,3.813-14a5.924,5.924,0,0,1,1.625-.312q.938-.063,3.625-.062t3.563.063A5.77,5.77,0,0,1,14.188-14a3.024,3.024,0,0,1,1.125.688A3.024,3.024,0,0,1,16-12.187a5.924,5.924,0,0,1,.313,1.625q.062.938.063,3.625ZM9-11.625A4.48,4.48,0,0,0,6.688-11,4.68,4.68,0,0,0,5-9.312,4.48,4.48,0,0,0,4.375-7,4.48,4.48,0,0,0,5-4.687,4.68,4.68,0,0,0,6.688-3,4.48,4.48,0,0,0,9-2.375,4.48,4.48,0,0,0,11.313-3,4.68,4.68,0,0,0,13-4.687,4.48,4.48,0,0,0,13.625-7,4.48,4.48,0,0,0,13-9.312,4.68,4.68,0,0,0,11.313-11,4.48,4.48,0,0,0,9-11.625ZM9-4a2.893,2.893,0,0,1-2.125-.875A2.893,2.893,0,0,1,6-7a2.893,2.893,0,0,1,.875-2.125A2.893,2.893,0,0,1,9-10a2.893,2.893,0,0,1,2.125.875A2.893,2.893,0,0,1,12-7a2.893,2.893,0,0,1-.875,2.125A2.893,2.893,0,0,1,9-4Zm3.75-7.75a.956.956,0,0,0,.313.688,1.023,1.023,0,0,0,.75.313,1.023,1.023,0,0,0,.75-.312,1.023,1.023,0,0,0,.313-.75,1.023,1.023,0,0,0-.312-.75,1.023,1.023,0,0,0-.75-.312,1.023,1.023,0,0,0-.75.313A1.1,1.1,0,0,0,12.75-11.75Z" transform="translate(0 16)" fill="#666"/>
							</svg>
							<span class="visually-hidden">instagram</span>
						</a>
					</li>
					<li class="social__item">
						<a class="social__link" href="#" target="_blank">

							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewBox="0 0 18 12">
							  <path id="Path_34" data-name="Path 34" d="M16.5-13H1.5a1.447,1.447,0,0,0-1.062.438A1.447,1.447,0,0,0,0-11.5v9A1.447,1.447,0,0,0,.438-1.437,1.447,1.447,0,0,0,1.5-1h15a1.447,1.447,0,0,0,1.063-.437A1.447,1.447,0,0,0,18-2.5v-9a1.447,1.447,0,0,0-.437-1.062A1.447,1.447,0,0,0,16.5-13Zm-1.75,1.5L9.25-8.25q-.125.125-.5,0L3.25-11.5ZM1.5-2.5v-8.375l6.375,4A2.481,2.481,0,0,0,9-6.625a1.777,1.777,0,0,0,1-.25l6.5-4V-2.5Z" transform="translate(0 13)" fill="#666"/>
							</svg>

							<span class="visually-hidden">email</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-12 col-md-7 offset-md-1 aos-init aos-animate" data-aos="fade">
				<ul class="single-project__meta project-meta">

          <?php $client = get_field('project_client');

          if ($client): ?>

					<li class="project-meta__item">
						<div class="project-meta__item-title">client</div>
              <div class="project-meta__item-text">

                <?php echo $client ?>

              </div>
						</li>

          <?php endif; ?>

          <?php if ( have_rows('project_team') ): ?>
            <li class="project-meta__item">
              <div class="project-meta__item-title">team</div>
              <div class="project-meta__item-text">
              <?php while ( have_rows('project_team') ) : the_row(); ?>
                <?php the_sub_field('project_team_member'); ?><br />
              <?php endwhile; ?>
              </div>
            </li>
          <?php endif; ?>


          <?php $services = get_field('project_services');

          if ($services): ?>

					<li class="project-meta__item">
						<div class="project-meta__item-title">services</div>
              <div class="project-meta__item-text">

                <?php echo $services ?>

              </div>
						</li>

          <?php endif; ?>

          <?php $date = get_field('project_date');

          if ($date): ?>

					<li class="project-meta__item">
						<div class="project-meta__item-title">year</div>
              <div class="project-meta__item-text">

                <?php echo $date; ?>

              </div>
						</li>

          <?php endif; ?>
						</ul>
					</div>
				</div>
			</header>


      <?php if (get_the_post_thumbnail_url()): ?>

        <div class="single-project__bg-parallax wow fadeIn">
  				<div class="single-project__bg-parallax-image" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center fixed; background-size: cover;">
  					<!-- <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo the_title() ?>" loading="lazy"> -->
  				</div>

					<?php if (get_field('project_video')): ?>
						<div class="single-project__video wow fadeInRight">
							<a class="fancybox" data-fancybox-type="iframe" href="<?php echo get_field('project_video') ?>">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.667" height="20" viewBox="0 0 16.667 20">
								  <path id="Path_34" data-name="Path 34" d="M17.639-9.028,4.028-17.5q-.972-.556-1.528,0a.682.682,0,0,0-.625.347,1.737,1.737,0,0,0-.208.9V.833a1.245,1.245,0,0,0,.208.625,1.6,1.6,0,0,0,.556.556,1.457,1.457,0,0,0,.764.208,1.493,1.493,0,0,0,.833-.278L17.639-6.528a.843.843,0,0,0,.556-.486,2.039,2.039,0,0,0,.139-.764,2.039,2.039,0,0,0-.139-.764A.843.843,0,0,0,17.639-9.028ZM3.333.417V-15.972L16.528-7.778Z" transform="translate(-1.667 17.778)" fill="#fff"/>
								</svg>
								<span>Watch <br> the video</span>
							</a>
						</div>

					<?php endif; ?>

  			</div>

      <?php endif; ?>

      <?php include(locate_template("template-parts/flexi-content.php")); ?>

			<?php if ( have_rows('project_gallery') ): ?>
				<div class="single-project__gallery">
	          <div class="single-project__gallery-inner container">
	            <div class="row">

							    <?php while ( have_rows('project_gallery') ) : the_row();

									$project_gallery_image = get_sub_field('project_gallery_image');
									$project_gallery_image_size = get_sub_field('project_gallery_image_size');

									?>


									<?php if ($project_gallery_image_size == 1): ?>
										<div class="single-project__gallery-image col-12 col-md-6 wow fadeIn">
											<img src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="<?php echo esc_attr($project_gallery_image['alt']); ?>" />
										</div>
									<?php else : ?>
										<div class="single-project__gallery-image col-12 wow fadeIn">
											<img src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="<?php echo esc_attr($project_gallery_image['alt']); ?>" />
										</div>
									<?php endif; ?>
							    <?php endwhile; ?>


						</div>
					</div>
				</div>
		<?php endif; ?>



		<footer class="single-project__footer">
			<div class="paginate">
				<div class="container">
					<div class="row no-gutters">

						<div class="paginate__item paginate__item--prev col-6">



							<?php $next_post = get_next_post();
							if($next_post) : ?>

							<a href="<?php echo get_permalink($next_post->ID) ?>">

								<div class="paginate__image">

									<div class="paginate__item__overlay"></div>

									<img src="<?php echo get_the_post_thumbnail_url($next_post->ID, 'project-pagination') ?>" alt="<?php echo apply_filters( 'the_title', $next_post->post_title ); ?>">

								</div>

								<div class="paginate__text">
								<span class="hint">Prev</span>
								<span><?php echo apply_filters( 'the_title', $next_post->post_title ); ?>,
								<br><?php echo get_field('project_location', $next_post->ID); ?>
								</span>
								</div>

							</a>
							<?php endif; ?>


						</div>


						<div class="paginate__item paginate__item--next col-6">

							<?php $prev_post = get_previous_post();
							if($prev_post) : ?>

							<a href="<?php echo get_permalink($prev_post->ID) ?>">

								<div class="paginate__image">

									<div class="paginate__item__overlay"></div>

									<img src="<?php echo get_the_post_thumbnail_url($prev_post->ID, 'project-pagination') ?>" alt="<?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>">

								</div>

								<div class="paginate__text">
								<span class="hint">Next</span>
								<span><?php echo apply_filters( 'the_title', $prev_post->post_title ); ?>,
								<br><?php echo get_field('project_location', $prev_post->ID); ?>
								</span>
								</div>

							</a>
							<?php endif; ?>

						</div>


					</div>
				</div>
			</div>
		</footer>


</article>



<?php
get_footer();
