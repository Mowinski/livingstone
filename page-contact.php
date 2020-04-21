<?php
/*
  Template Name: Contact
*/
?>

<?php 

get_header( );

?>

<div class="container-fluid contact">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8">
      <div class="kit">
        <span class="kit-pointer kit-left-pointer"></span>
        <a href="" class="kit-title">press kit</a>
        <span class="kit-pointer kit-right-pointer"></span>
      </div>
      <h2 class="title">contact us</h2>
      <!-- CONTACT-FORM -->
      <form class="contact-form" type="name" action="">
        <input type="name" class="name" placeholder="enter your name">
        <input type="text" class="email" placeholder="enter your email">
        <textarea id="story" name="message" rows="2" cols="23" placeholder="enter your message"></textarea>
        <button class="send-btn">send</button>
      </form>
      <!-- NEWSLETTER -->
      <div class="news-letter">
        <h2>newsletter</h2>
        <form action="" class="n-letter-form">
          <input type="email" name="" id="" placeholder="enter your email">
          <button class="news-letter-btn"></button>
        </form>
      </div>

    </div>
  </div>

  <!-- FOOTER -->

  <div class="row justify-content-between contact-footer-row">
    <div class="col-12 col-md-3">
      <ul class="footer-links">
        <li class="footer-link-item">
          <a href="https://www.facebook.com/drlivingstonegame" target="_blank" rel="noopener">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/fb.png" alt="icon" />
          </a>
        </li>
        <li class="footer-link-item">
          <a href="https://msha.ke/livingstone_game/" target="_blank" rel="noopener">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/milk_shake.png" alt="icon" />
          </a>
        </li>
        <li class="footer-link-item">
          <a href="https://twitter.com/Livi_TheGame" target="_blank" rel="noopener">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/twitter.png" alt="icon" />
          </a>
        </li>
        <li class="footer-link-item">
          <a href="https://www.instagram.com/livingstone_game/" target="_blank" rel="noopener">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/links/insta.png" alt="icon" />
          </a>
        </li>
      </ul>
    </div>
    <div class="col-6 col-md-2 contact-logo">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer_logo.png" alt="logo" />
      </a>
    </div>
  </div>
</div>