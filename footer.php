
<footer class="container-fluid footer" id="footer">
    <div class="swiper-container photo-slider">
        <div class="swiper-wrapper photo-slider-wrapper">
            <?php foreach(get_images_from_post(get_theme_mod(ThemeSettings::FOOTER_CAROUSEL), ImageSize::FULL) as $image_src) :?>
            <div class="swiper-slide"
                 style="background-image: url(<?php echo $image_src; ?>); background-position: center; background-size: cover;">
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="row flex-wrap footer-row">
        <?php wp_nav_menu(array(
            'theme_location' => 'social',
            'container' => '',
            'menu_class' => 'col-12 col-md-6 col-xl-4 footer-links',
            'walker' => new Social_Walker_Nav_Menu(),
        )); ?>

        <form class="col-10  col-md-10 col-xl-3 subscribe-form">
            <input class="subscribe-input" type="text" placeholder="enter your e-mail" />
            <button class="subscribe-btn" type="submit">
                <img src="" alt="" />
            </button>
        </form>

        <div class="col-6  col-md-3 col-xl-2 offset-xl-3 footer-logo">
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