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
        <a href="<?php echo get_theme_mod(ThemeSettings::PRESS_KIT);?>" class="kit-title">press kit</a>
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
        <?php wp_nav_menu(array(
            'theme_location' => 'social',
            'container' => '',
            'menu_class' => 'footer-links',
            'walker' => new Social_Walker_Nav_Menu(),
        )); ?>

    </div>
    <div class="col-6 col-md-2 contact-logo">
      <a href="<?php echo get_home_url(); ?>">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/footer/footer_logo.png" alt="logo" />
      </a>
    </div>
  </div>
</div>

