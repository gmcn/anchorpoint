<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>

<section class="webpage__article-list article-list aos-init aos-animate" data-aos="fade">
  <div class="container">

    <header class="article-list__header">
    <h2 class="article-list__heading heading">Latest News</h2>
    <a class="article-list__more more" href="/latest-news/">see all</a>
    </header>

    <div class="grid-wrapper">

      <?php while ( $query->have_posts() ) : $query->the_post();

      $datetime = get_the_date('Y-m-d');
      $date = get_the_date('M d, Y');
      $content = get_the_content();
      $categories = wp_get_post_categories( get_the_ID() );


       ?>


        <div class="article-list__item col-sm-6 col-lg-4 __js_news-list-item undefined">
          <div class="article-preview" tabindex="0">

            <div class="article-preview__image">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'project-archive') ?>" alt="<?php echo the_title() ?>" loading="lazy">
            </div>

            <div class="article-preview__content">
              <time class="article-preview__date" datetime="<?php echo $datetime ?>"><?php echo $date; ?></time>
              <h3 class="article-preview__heading"><a href="<?php echo the_permalink(); ?>"> <?php echo the_title(); ?></a></h3>
              <div class="article-preview__text">


                <?php echo wp_trim_words( get_the_content(), 15, '...' ); ?>

              </div>
              <a class="article-preview__btn" href="<?php echo the_permalink(); ?>">continue</a>
            </div>
          </div>
        </div>



      <?php endwhile; ?>



    </div>
  </div>
</section>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
