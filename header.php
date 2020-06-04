<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    ?>
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/69200756dcd519f5be6846809/f3cff81f6e29c1ada36734506.js");</script>
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