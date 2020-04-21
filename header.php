<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>
  <?php 
    wp_head();
  ?>
</head>

<body>
  <header class="container-fluid header">
    <!-- BURGER -->
    <button class="hamburger hamburger--collapse" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <!--NAVIGATION -->
    <nav class="nav-menu">
      <a class="menu-link" href="<?php echo get_home_url(); ?>#watch">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/watch.png" alt="Watch" />
        <span class="menu-subtitle">Watch</span>
      </a>

      <a class="menu-link" href="<?php echo get_home_url(); ?>#story">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/our_story.png"
          alt="Graphic" />
        <span class="menu-subtitle">Our story</span>
      </a>

      <a class="menu-link" href="<?php echo get_home_url(); ?>#team">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/team.png" alt="Comics" />
        <span class="menu-subtitle">Team</span>
      </a>
      <a class="menu-link" href="<?php echo get_home_url(); ?>#graphic">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/graphic.png"
          alt="Our team" />
        <span class="menu-subtitle">Graphic</span>
      </a>
      <a class="menu-link" href="<?php echo get_home_url(); ?>#footer">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/photo.png"
          alt="Our story" />
        <span class="menu-subtitle">Photo</span>
      </a>
      <a class="menu-link" href="<?php echo get_bloginfo('template_url');?>/contact">
        <img class="menu-img" src="<?php echo get_bloginfo('template_url');?>/assets/img/links/contact_us.png"
          alt="Contact Us" />
        <span class="menu-subtitle">Contact us</span>
      </a>
    </nav>
  </header>