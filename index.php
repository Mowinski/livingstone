<?php get_header( ); ?>
    <section class="container-fluid watch" id="watch">
        <div class="watch-video">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?php echo get_theme_mod(ThemeSettings::TEASER_URL)?>"></iframe>
            </div>
        </div>
        <?php wp_nav_menu(array(
            'theme_location' => 'social',
            'container' => '',
            'menu_class' => 'social-media-list',
            'walker' => new Social_Walker_Nav_Menu(),
        )); ?>
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
                        <?php echo get_theme_mod(ThemeSettings::HUE_TEXT); ?>
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
            <div class="col-team-left team-img"></div>
            <div class="col-team-right">
                <p class="team-text">
                    <?php echo get_theme_mod(ThemeSettings::ABOUT_US_TEXT); ?>
                </p>

                <div class="proud-box">

                    <h2 class="proud-text">
                        we are proud laureate of Digital dragons innovative incubator
                    </h2>
                    <ul class="icon-list">
                        <?php foreach(get_images_from_post(get_theme_mod(ThemeSettings::WEAPONS), ImageSize::FULL) as $image_src) : ?>
                            <li class="icon-list-item">
                                <img src="<?php echo $image_src; ?>" alt="icon" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="graphic" id="graphic">
        <!-- SLIDER -->
        <div class="swiper-container graphic-slider">
            <div class="swiper-wrapper">
                <?php foreach(get_images_from_post(get_theme_mod(ThemeSettings::GALLERY), ImageSize::FULL) as $image_src) :?>
                <div class="swiper-slide">
                    <div class="swiper-zoom-container">
                        <img src="<?php echo $image_src; ?>" alt="slide-img" />
                    </div>
                </div>
                <?php endforeach; ?>
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

<?php get_footer(); ?>