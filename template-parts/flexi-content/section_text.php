<?php

  $section_text__heading = get_sub_field('section_text__header');
  $section_text__body = get_sub_field('section_text__body');

 ?>


<section class="single-project__section">
  <div class="container">
    <?php if ($section_text__heading) : ?>
      <h2 class="single-project__section-heading wow fadeInDown">
        <?php echo $section_text__heading ?>
      </h2>
    <?php endif; ?>

    <div class="single-project__section-text wow fadeInUp">

      <?php echo $section_text__body; ?>

  </div>




    <?php

    $section_text_add_video = get_sub_field('section_text_add_video');

     if ($section_text_add_video): ?>

     <div class="an-awards__buttons wow fadeInUp">

      <div class="our-story__video-btn video-btn">

       <a class="video-btn__btn fancybox" href="#myVideo">
        <span class="visually-hidden">Play</span>
        <svg width="20" height="20">
          <svg id="play" viewBox="0 0 64 64">
            <path d="M56.6 27.9L12.8.7C11.2-.1 9.3-.4 8 .7c-1.6.5-2.7 2.1-2.7 4v54.7c0 1.6 1.1 3.2 2.4 4 .8.3 1.6.5 2.4.5s1.9-.3 2.7-.8L56.6 36c1.3-.8 2.1-2.4 2.1-4s-.8-3.3-2.1-4.1zm-46 30.2V5.8L52.8 32 10.6 58.1z"></path>
            </svg>
        </svg>
        </a>
        <span class="video-btn__text">view our story</span>
      </div>

      <video id="myVideo" width="800" src="<?php echo $section_text_add_video ?>" controls="controls" style="display:none;"> </video>

      </div>

    <?php endif; ?>


</section>
