<article class="news-sb-page">

  <div class="container news-sb-page__wrapper">

    <?php
    if ( have_posts() ) : ?>

    <section class="news-sb">

    <?php /* Start the Loop */
    $i = 1; while ( have_posts() ) : the_post();

    $datetime = get_the_date('Y-m-d');
    $date = get_the_date('M d, Y');
    $content = get_the_content();
    $categories = wp_get_post_categories( get_the_ID() );

     ?>

     <?php if (is_sticky()): ?>

       <div class="news-sb__item news-sb__item--vertical wow fadeIn">
         <div class="news-sb__pic">
           <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'large') ?>" alt="<?php echo the_title(); ?>">
         </div>
         <div class="news-sb__content">
           <header>
             <div class="news-sb__date">
               <?php the_category(', '); ?>
               <span class="delimiter">/</span>
               <span><?php echo $date; ?></span>
             </div>
           </header>

             <a class="news-sb__title" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>

           <div class="news-sb__text"><?php the_excerpt(); ?></div>
         </div>
       </div>

     <?php else : ?>

     <div class="news-sb__item wow fadeIn">
       <div class="news-sb__pic">
         <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium') ?>" alt="<?php echo the_title() ?>">
       </div>
       <div class="news-sb__content">
         <header>
           <div class="news-sb__date">
             <!-- <a class="tag" href="#" target="_blank"> -->
               <?php the_category(', '); ?>
             <!-- </a> -->
             <span class="delimiter">/</span>
             <span><?php echo $date; ?></span>
           </div>
           <a class="news-sb__title" href="<?php echo the_permalink(); ?>"><?php echo the_title() ?></a>
         </header>
         <div class="news-sb__text"><?php the_excerpt(); ?></div>
       </div>
     </div>

     <?php endif; ?>

     <?php $i++; endwhile; ?>

     <section class="pagination wow fadeIn">

       <?php the_posts_pagination(
         array(
           'mid_size' => 2,
           'prev_text' => __( 'Prev', 'textdomain' ),
           'next_text' => __( 'Next', 'textdomain' ),
           ));
         ?>

    </section>

    </section>

     <?php	endif; ?>


    <section class="sidebar aos-init aos-animate" data-aos="fade">
      <div class="sidebar__block">
        <p>search</p>
        <form role="search" method="get" class="search-form" action="/">
          <input type="search" class="search-field" placeholder="Type and hit enter to search..." value="" name="s">
    		</form>
      </div>
      <div class="sidebar__block">
        <p>follow us</p>
        <ul class="social sidebar__social">
          <li class="social__item">
            <a class="social__link" href="https://www.linkedin.com/company/anchorpoint-interiors/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
  								  <path id="Path_42" data-name="Path 42" d="M16.625-16H1.375a1.352,1.352,0,0,0-1,.375A1.2,1.2,0,0,0,0-14.75V.75a1.2,1.2,0,0,0,.375.875,1.352,1.352,0,0,0,1,.375h15.25a1.352,1.352,0,0,0,1-.375A1.2,1.2,0,0,0,18,.75v-15.5a1.2,1.2,0,0,0-.375-.875A1.352,1.352,0,0,0,16.625-16ZM5.375-.625H2.625V-9.25h2.75ZM4-10.375a1.362,1.362,0,0,1-1.062-.5A1.664,1.664,0,0,1,2.5-12a1.447,1.447,0,0,1,.438-1.062A1.447,1.447,0,0,1,4-13.5a1.447,1.447,0,0,1,1.063.438A1.447,1.447,0,0,1,5.5-12a1.664,1.664,0,0,1-.437,1.125A1.362,1.362,0,0,1,4-10.375ZM15.375-.625h-2.75v-4.25a6.663,6.663,0,0,0-.125-1.5,1.292,1.292,0,0,0-1.25-.75A1.342,1.342,0,0,0,10-6.5a3.127,3.127,0,0,0-.375,1.625v4.25H7V-9.25H9.625v1.125a2.506,2.506,0,0,1,.938-.937A2.848,2.848,0,0,1,12.125-9.5,2.808,2.808,0,0,1,14.75-8.25a5.068,5.068,0,0,1,.625,2.875Z" transform="translate(0 16)" fill="#666"></path>
  								</svg>
              <span class="visually-hidden">Linkedin</span>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="https://twitter.com/anchorpointin" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14.875" viewBox="0 0 18 14.875">
  								  <path id="Path_41" data-name="Path 41" d="M16-11.875l1.125-1.375A1.08,1.08,0,0,0,17.5-14a3.943,3.943,0,0,1-2.125.625h-.25L15-13.5a4.062,4.062,0,0,0-2.562-.875,3.63,3.63,0,0,0-2.562,1.063A3.4,3.4,0,0,0,8.75-10.75l.125,1H8.25A9.256,9.256,0,0,1,3.5-11.5,20.959,20.959,0,0,1,1-13.625a3.444,3.444,0,0,0-.375,2,5.386,5.386,0,0,0,.5,1.75l1,1.625-1.5-.875A3.338,3.338,0,0,0,2-6.25l.75.625L2-5.375A3.41,3.41,0,0,0,4.375-3L5.5-2.75l-1,.625a5.644,5.644,0,0,1-2.5,1,8.031,8.031,0,0,1-2,0A9.143,9.143,0,0,0,5.5.5,9.109,9.109,0,0,0,7,.375L7.75.25A10.909,10.909,0,0,0,13.5-3a11.742,11.742,0,0,0,2.375-4.375,13.41,13.41,0,0,0,.375-3v-.25l.125-.125q1-1,1.625-1.75Z" transform="translate(0 14.375)" fill="#666"></path>
  								</svg>
              <span class="visually-hidden">Twitter</span>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="https://www.youtube.com/channel/UCYm1A0QpIa8Q3cN-riqMSaA" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40.02" viewBox="0 0 40 40.02">
  								  <g id="Group_31" data-name="Group 31" transform="translate(-1782 -6802.14)">
  								    <g id="Ellipse_2" data-name="Ellipse 2" transform="translate(1782 6802.14)" fill="none" stroke="#ccc" stroke-width="1">
  								      <ellipse cx="20" cy="20.01" rx="20" ry="20.01" stroke="none"></ellipse>
  								      <ellipse cx="20" cy="20.01" rx="19.5" ry="19.51" fill="none"></ellipse>
  								    </g>
  								    <path id="youtube_1_" data-name="youtube (1)" d="M12.336,18.332H12.33c-.745-.005-7.327-.065-9.192-.57A3.814,3.814,0,0,1,.454,15.081,27.989,27.989,0,0,1,0,9.44,28.516,28.516,0,0,1,.453,3.756l0-.005a3.894,3.894,0,0,1,2.68-2.7l.01,0C4.988.564,11.584.505,12.33.5h.013c.746.005,7.346.065,9.194.57a3.813,3.813,0,0,1,2.68,2.678,27.153,27.153,0,0,1,.454,5.713,28.066,28.066,0,0,1-.452,5.633V15.1a3.815,3.815,0,0,1-2.685,2.682l-.005,0c-1.844.484-8.439.544-9.185.549ZM2.316,4.251a27.576,27.576,0,0,0-.388,5.177v.025a25.912,25.912,0,0,0,.388,5.129A1.88,1.88,0,0,0,3.64,15.9a64.525,64.525,0,0,0,8.7.5,67.14,67.14,0,0,0,8.7-.485A1.881,1.881,0,0,0,22.356,14.6a26,26,0,0,0,.388-5.129c0-.01,0-.02,0-.03a25.1,25.1,0,0,0-.386-5.184v0a1.881,1.881,0,0,0-1.324-1.322,64.283,64.283,0,0,0-8.7-.5,67.231,67.231,0,0,0-8.7.484A1.934,1.934,0,0,0,2.316,4.251Zm20.972,10.6h0ZM9.879,13.32V5.512l6.747,3.9Zm0,0" transform="translate(1789.663 6812.733)" fill="#666"></path>
  								  </g>
  								</svg>
              <span class="visually-hidden">Youtube</span>
            </a>
          </li>
          <li class="social__item">
            <a class="social__link" href="https://www.instagram.com/anchorpoint_interiors/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
  								  <path id="Path_43" data-name="Path 43" d="M18-10.75a8.049,8.049,0,0,0-.5-2.187,4.582,4.582,0,0,0-1-1.562,4.582,4.582,0,0,0-1.562-1A8.049,8.049,0,0,0,12.75-16H5.25a8.049,8.049,0,0,0-2.187.5,4.781,4.781,0,0,0-1.625,1.063,4.179,4.179,0,0,0-1,1.563A9.058,9.058,0,0,0,0-10.75v7.5A8.049,8.049,0,0,0,.5-1.062,4.781,4.781,0,0,0,1.563.563a4.179,4.179,0,0,0,1.563,1A9.342,9.342,0,0,0,5.375,2H12.75a8.049,8.049,0,0,0,2.188-.5A4.781,4.781,0,0,0,16.563.438a4.179,4.179,0,0,0,1-1.562A9.342,9.342,0,0,0,18-3.375V-10.75ZM16.375-3.375A7.813,7.813,0,0,1,16-1.812a3.024,3.024,0,0,1-.687,1.125A3.024,3.024,0,0,1,14.188,0a5.924,5.924,0,0,1-1.625.313q-.937.062-3.625.063T5.375.313A5.77,5.77,0,0,1,3.813,0,3.024,3.024,0,0,1,2.688-.687,3.024,3.024,0,0,1,2-1.812a5.77,5.77,0,0,1-.312-1.562Q1.625-4.25,1.625-7t.063-3.625A5.77,5.77,0,0,1,2-12.187a3.024,3.024,0,0,1,.688-1.125A3.024,3.024,0,0,1,3.813-14a5.924,5.924,0,0,1,1.625-.312q.938-.063,3.625-.062t3.563.063A5.77,5.77,0,0,1,14.188-14a3.024,3.024,0,0,1,1.125.688A3.024,3.024,0,0,1,16-12.187a5.924,5.924,0,0,1,.313,1.625q.062.938.063,3.625ZM9-11.625A4.48,4.48,0,0,0,6.688-11,4.68,4.68,0,0,0,5-9.312,4.48,4.48,0,0,0,4.375-7,4.48,4.48,0,0,0,5-4.687,4.68,4.68,0,0,0,6.688-3,4.48,4.48,0,0,0,9-2.375,4.48,4.48,0,0,0,11.313-3,4.68,4.68,0,0,0,13-4.687,4.48,4.48,0,0,0,13.625-7,4.48,4.48,0,0,0,13-9.312,4.68,4.68,0,0,0,11.313-11,4.48,4.48,0,0,0,9-11.625ZM9-4a2.893,2.893,0,0,1-2.125-.875A2.893,2.893,0,0,1,6-7a2.893,2.893,0,0,1,.875-2.125A2.893,2.893,0,0,1,9-10a2.893,2.893,0,0,1,2.125.875A2.893,2.893,0,0,1,12-7a2.893,2.893,0,0,1-.875,2.125A2.893,2.893,0,0,1,9-4Zm3.75-7.75a.956.956,0,0,0,.313.688,1.023,1.023,0,0,0,.75.313,1.023,1.023,0,0,0,.75-.312,1.023,1.023,0,0,0,.313-.75,1.023,1.023,0,0,0-.312-.75,1.023,1.023,0,0,0-.75-.312,1.023,1.023,0,0,0-.75.313A1.1,1.1,0,0,0,12.75-11.75Z" transform="translate(0 16)" fill="#666"></path>
  								</svg>
              <span class="visually-hidden">Instagram</span>
            </a>
          </li>

        </ul>
      </div>
      <div class="sidebar__block">

        <p>Popular Posts</p>

        <div class="sidebar__popular-posts-wrapper">

          <?php
					$args = array(
					  'post_type' => 'post',
						'posts_per_page' => 4,
						'cat' => 42
					);
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) : ?>
					    <?php $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>

                <a class="popular-post" href="<?php echo the_permalink(); ?>">
                  <figure>
                    <div class="popular-post__num"><?php echo $i; ?></div>
                    <div class="popular-post__content">
                      <p class="tag">featured</p>
                      <p class="title"><?php echo wp_trim_words( get_the_title(), 4 ); ?></p>
                    </div>
                  </figure>
                </a>

              <?php $i++; endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </div>
      </div>



        <form class="newsletter" action="//anchorpointinteriors.us9.list-manage.com/subscribe/post?u=27755a62c24fcac48ec50a029&amp;id=2292d1b5af" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
          <div id="mc_embed_signup_scroll">
            <div class="newsletter__title">Newsletter</div>
            <div class="newsletter__text">Enter your email address to subscribe to our monthly workplace design update. </div>
            <div class="" style="position: relative; margin: 25px 0;">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required="">
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_27755a62c24fcac48ec50a029_2292d1b5af" tabindex="-1" value=""></div>
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subsubmit">
            </div>
          </div>
        </form>

      <div class="sidebar__block">
        <p>Categories</p>

        <ul class="sidebar__categories">
          <?php wp_list_categories( array(
              'exclude'  => array( 1, 42 ),
              'orderby'    => 'name',
              'title_li' => '',
              'show_count' => true,
          ) ); ?>
        </ul>

      </div>
      <div class="sidebar__ads">
        <h3>Workplace Consultancy</h3>

        <p>We learn how your workplace and people function to create smart working strategies that improve performance</p>

        <a href="/services/workplace-consultancy/">Find out more

          <svg xmlns="http://www.w3.org/2000/svg" width="10.537" height="17.098" viewBox="0 0 10.537 17.098">
            <path id="Path_64" data-name="Path 64" d="M1283.322,2850l-2.018,2.03,6.528,6.59-6.528,6.478,2.018,2,8.52-8.478Z" transform="translate(-1281.305 -2850)" fill="#fff"/>
          </svg>


        </a>

      </div>
    </section>
  </div>
</article>
