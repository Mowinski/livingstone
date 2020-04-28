<?php get_header( ); ?>

<section class="container-fluid watch" id="watch">
  <div class="watch-video">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SuIXLyoyIHk"></iframe>
    </div>
  </div>

  <ul class="social-media-list">
    <li class="list-item">
      <a href="https://www.facebook.com/drlivingstonegame" target="_blank" rel="noopener">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/fb.png" alt="icon" />
      </a>
    </li>
    <li class="list-item">
      <a href="https://msha.ke/livingstone_game/" target="_blank" rel="noopener">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/milk_shake.png" alt="icon" />
      </a>
    </li>
    <li class="list-item">
      <a href="https://twitter.com/Livi_TheGame" target="_blank" rel="noopener">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/twitter.png" alt="icon" />
      </a>
    </li>
    <li class="list-item">
      <a href="https://www.instagram.com/livingstone_game/" target="_blank" rel="noopener">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/insta.png" alt="icon" />
      </a>
    </li>
  </ul>
</section>

<section class="container-fluid story" id="story">
  <div class="row-story">
    <div class="col-left-story">
      <div class="katamino-simba rellax" data-rellax-speed="1 " data-rellax-percentage="0.5">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/story/katamino_simba_story.png" alt="simba-icon" />
      </div>
      <h2 class="story-title">
        Nothing earthly will make me give<br />
        up my work in despair
      </h2>
      <div class="bottom-img-wrap rellax" data-rellax-speed="1 " data-rellax-percentage="0.5">
        <div class="katamino-joecamel">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/story/katamino_joecamel.png"
            alt="joecamel-icon" />
        </div>
        <div class="katamino-zyraf">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/story/katamino_zyraf.png" alt="zyraf-icon" />
        </div>
      </div>
    </div>

    <div class="col-right-story">
      <div class="hue-wrap">
        <div class="hue rellax" data-rellax-speed="1" data-rellax-percentage="0.5">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/story/hue.png" alt="icon" />
        </div>
        <p class="hue-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        </p>
      </div>
      <div class="katamino-olifant">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/story/katamino_olifant.png" alt="icon" />
      </div>
    </div>
  </div>
</section>

<section class="container-fluid team" id="team">
  <div class="row-team">
    <div class="col-team-left">
      <div class="team-img">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/team/team.png" alt="team-icon" />
      </div>
    </div>
    <div class="col-team-right">
      <p class="team-text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
      </p>

      <div class="proud-box">

        <h2 class="proud-text">
          we are proud laureate of Digital dragons innovative incubator
        </h2>
        <ul class="icon-list">
          <li class="icon-list-item">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/team/perforce.png" alt="icon" />
          </li>
          <li class="icon-list-item">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/team/digital-dragons.png" alt="icon" />
          </li>
          <li class="icon-list-item unreal-engine">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/team/unreal_engine.png" alt="icon" />
          </li>
          <li class="icon-list-item">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/team/blender.png" alt="icon" />
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="graphic" id="graphic">
  <!-- SLIDER -->
  <div class="swiper-container graphic-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/graphic/main_slide.png" alt="slide-img" />
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/graphic/main_slide.png" alt="slide-img" />
        </div>
      </div>
      <div class="swiper-slide">
        <div class="swiper-zoom-container">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/graphic/main_slide.png" alt="slide-img" />
        </div>
      </div>
    </div>

    <div class="slider-controls">

      <div class="swiper-button-next"></div>
      <button class="zoom-btn">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/graphic/expand.png" alt="" />
      </button>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>

<footer class="container-fluid footer" id="footer">
  <div class="swiper-container photo-slider">
    <div class="swiper-wrapper photo-slider-wrapper">
      <div class="swiper-slide"
        style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-slide-item.png);">
      </div>
      <div class="swiper-slide"
        style="background-image: url(<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer-slide-item.png);">
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <div class="row flex-wrap footer-row">
    <ul class="col-12 col-md-6 col-xl-3  footer-links">
      <li class="footer-link-item">
        <a href="https://www.facebook.com/drlivingstonegame" target="_blank" rel="noopener">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/fb.png" alt="link" />
        </a>
      </li>
      <li class="footer-link-item">
        <a href="https://msha.ke/livingstone_game/" target="_blank" rel="noopener">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/milk_shake.png" alt="link" />
        </a>
      </li>
      <li class="footer-link-item">
        <a href="https://twitter.com/Livi_TheGame" target="_blank" rel="noopener">
          <img src=" <?php echo bloginfo('template_url'); ?>/assets/img/links/twitter.png" alt="link" />
        </a>
      </li>
      <li class="footer-link-item">
        <a href="https://www.instagram.com/livingstone_game/" target="_blank" rel="noopener">
          <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/insta.png" alt="link" />
        </a>
      </li>
    </ul>

    <form class="col-10  col-md-10 col-xl-3 subscribe-form">
      <input class="subscribe-input" type="text" placeholder="enter your e-mail" />
      <button class="subscribe-btn" type="submit">
        <img src="" alt="" />
      </button>
    </form>

    <div class="col-6  col-md-3 col-xl-2 offset-xl-4 footer-logo">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer_logo.png" alt="logo" />
      </a>
    </div>
  </div>
</footer>

<?php
    wp_footer();
  ?>
</body>

</html>