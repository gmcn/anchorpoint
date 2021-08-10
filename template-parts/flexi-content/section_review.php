
<?php if ( have_rows('') ): ?>
<section class="webpage__review review">
  <div class="review__inner container">

      <?php while ( have_rows('') ) : the_row();

        $section_reviews_image = get_sub_field('section_reviews_image');
        $section_reviews_desc = get_sub_field('section_reviews_desc');
        $section_reviews_brand = get_sub_field('section_reviews_brand');
        $section_reviews_byline_title = get_sub_field('section_reviews_byline_title');
        $section_reviews_byline = get_sub_field('section_reviews_byline');
        $section_reviews_company = get_sub_field('section_reviews_company');

      ?>

        <div class="review__content align-self-center wow fadeIn">
          <div class="review__text"><?php echo $section_reviews_desc ?></div>
          <div class="review__author">
            <div class="review__author-logo">
              <img src="<?php echo $section_reviews_brand ?>" alt="">
            </div>
          </div>
        </div>

      <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>



<?php if ( have_rows('section_reviews_repeater') ): ?>
  <section class="webpage__review review">
    <div class="review__inner container">
    <div class="swiper-container vertreview">
      <div class="swiper-wrapper">

        <?php while ( have_rows('section_reviews_repeater') ) : the_row();

          $section_reviews_image = get_sub_field('section_reviews_image');
          $section_reviews_desc = get_sub_field('section_reviews_desc');
          $section_reviews_brand = get_sub_field('section_reviews_brand');
          $section_reviews_byline_title = get_sub_field('section_reviews_byline_title');
          $section_reviews_byline = get_sub_field('section_reviews_byline');
          $section_reviews_company = get_sub_field('section_reviews_company');

        ?>

          <div class="swiper-slide">
              <div class="review__content row no-gutters align-self-center wow fadeIn">
                <div class="review__author-logo col-md-4 align-self-center">
                  <img src="<?php echo $section_reviews_brand ?>" alt="">
                </div>
                <div class="review__text col-md-8 align-self-center">
                  <?php echo $section_reviews_desc ?>
                </div>
              </div>



          </div>

        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<?php /*
<?php if ( have_rows('section_reviews_repeater') ): ?>
  <section class="webpage__review review">
  	<div class="review__inner container">
    <?php while ( have_rows('section_reviews_repeater') ) : the_row();

      $section_reviews_image = get_sub_field('section_reviews_image');
      $section_reviews_desc = get_sub_field('section_reviews_desc');
      $section_reviews_brand = get_sub_field('section_reviews_brand');
      $section_reviews_byline_title = get_sub_field('section_reviews_byline_title');
      $section_reviews_byline = get_sub_field('section_reviews_byline');
      $section_reviews_company = get_sub_field('section_reviews_company');

    ?>

      <div class="row">
  			<div class="review__image col-12 col-md-6 order-md-1 wow fadeInRight">
  				<img src="<?php echo $section_reviews_image ?>" alt="TBC">
  			</div>
  			<div class="review__content col-12 col-md-6 align-self-center wow fadeIn">
  				<div class="review__text"><?php echo $section_reviews_desc ?></div>
  				<div class="review__author">
  					<div class="review__author-logo"><img src="<?php echo $section_reviews_brand ?>" alt=""> </div>
  					<div class="review__author-name"><?php echo $section_reviews_byline ?></div>
  					<div class="review__author-detail"><?php echo $section_reviews_byline_title ?> at <span><?php echo $section_reviews_company; ?></span> </div>
  				</div>
  			</div>
  		</div>

    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
*/ ?>
