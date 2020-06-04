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
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'items_wrap' => '%3$s',
            'container' => '',
            'walker' => new Livingstone_Walker_Nav_Menu(),
        )); ?>
    </nav>
</header>