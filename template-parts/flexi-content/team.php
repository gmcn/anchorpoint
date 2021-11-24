<div class="container team__container">
  <div class="team__wrapper">



    <?php if ( have_rows('team_members') ): ?>

        <?php while ( have_rows('team_members') ) : the_row();


            $email = get_sub_field('team_members_email');
            $phone = get_sub_field('team_members_phone');
            $linkedin = get_sub_field('team_members_linkedin');

        ?>

          <div class="team__item team-item wow fadeIn">
        		<div class="team-item__photo">

              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                    <?php
                    $image = get_sub_field('team_members_photo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" />
                    <?php endif; ?>
                  </div>
                  <div class="flip-card-back">

                    <div class="flip-card-back__wrap">
                      <p><?php echo the_sub_field('team_member_desc'); ?></p>

                      <?php if ($email): ?>
                        <a href="mailto:<?php echo $email ?>">

                          <svg xmlns="http://www.w3.org/2000/svg" width="21.918" height="16.438" viewBox="0 0 21.918 16.438">
                            <g id="icon_mail" transform="translate(0 -8)">
                              <path id="Path_36" data-name="Path 36" d="M20.548,8H1.37A1.37,1.37,0,0,0,0,9.37v2.3l10.959,4.384L21.918,11.67V9.37A1.37,1.37,0,0,0,20.548,8ZM0,13.907v9.162a1.37,1.37,0,0,0,1.37,1.37H20.548a1.37,1.37,0,0,0,1.37-1.37V13.907L10.959,18.29Z" fill="#fff"/>
                            </g>
                          </svg>


                        </a>
                      <?php endif; ?>

                      <?php if ($phone): ?>
                        <a href="tel:<?php echo $phone ?>">

                          <svg xmlns="http://www.w3.org/2000/svg" width="16.01" height="16" viewBox="0 0 16.01 16">
                            <g id="icon_phone" transform="translate(-1.326 -1.334)">
                              <path id="Path_34" data-name="Path 34" d="M7.812,5.005C7.6,2.608,5.1,1.432,5,1.384a.531.531,0,0,0-.317-.043C1.793,1.82,1.359,3.5,1.341,3.57a.54.54,0,0,0,.011.295C4.8,14.548,11.951,16.528,14.3,17.18c.181.05.331.091.444.128a.52.52,0,0,0,.168.026.54.54,0,0,0,.226-.049,4.42,4.42,0,0,0,2.187-3.445.544.544,0,0,0-.052-.334,5.175,5.175,0,0,0-3.392-2.362.533.533,0,0,0-.482.115A7.289,7.289,0,0,1,11.086,12.7a10.287,10.287,0,0,1-4.91-4.989A5.849,5.849,0,0,1,7.67,5.423.544.544,0,0,0,7.812,5.005Z" fill="#fff"/>
                            </g>
                          </svg>


                        </a>
                      <?php endif; ?>

                      <?php if ($linkedin): ?>
                        <a href="<?php echo $linkedin ?>" target="_blank">

                          <svg xmlns="http://www.w3.org/2000/svg" width="14.02" height="16" viewBox="0 0 14.02 16">
                          <path id="Path_35" data-name="Path 35" d="M2.034,6.267H5.2V18H2.034Zm9.659,0a3.259,3.259,0,0,0-2.226.927V6.267H6.284V18H9.467V10.613S9.35,9.142,11.114,9.142a1.374,1.374,0,0,1,1.553,1.471V18H16.02V10.717A4.1,4.1,0,0,0,11.693,6.268ZM2,3.6A1.6,1.6,0,1,0,3.6,2,1.6,1.6,0,0,0,2,3.6Z" transform="translate(-2 -2)" fill="#fff"/>
                        </svg>


                        </a>
                      <?php endif; ?>
                    </div>
                    <!-- <h1><?php echo the_sub_field('team_member_name'); ?></h1>
                    <p><?php echo the_sub_field('team_member_title'); ?></p> -->



                  </div>
                </div>
              </div>



            </div>
            <div class="team-item__name">
              <?php echo the_sub_field('team_member_name'); ?>
            </div>
        		<div class="team-item__position">
              <?php echo the_sub_field('team_member_title'); ?>
            </div>
        	</div>


        <?php endwhile; ?>

    <?php endif; ?>



  </div>
</div>
