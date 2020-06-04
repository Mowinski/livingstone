<?php
require_once('settings.php');

class Livingstone_Customize
{
    public static function register($wp_customize)
    {
        self::register_images($wp_customize);
        self::register_texts($wp_customize);
        self::register_backgrounds($wp_customize);
    }

    public static function register_backgrounds($wp_customize)
    {
        $wp_customize->add_section('livingstone_options_backgrounds', array(
            'title' => __('Backgorund', 'mytheme'),
            'priority' => 35,
            'capability' => 'edit_theme_options',
            'description' => __('Allows you to customize backgrounds in livingstone layout', 'mytheme'),
        ));

        $wp_customize->add_setting(ThemeSettings::BACKGROUND_1,
            array(
                'default' => './assets/img/bgd/watch&footer_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::BACKGROUND_2,
            array(
                'default' => './assets/img/bgd/story_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::BACKGROUND_3,
            array(
                'default' => './assets/img/bgd/team_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::BACKGROUND_4,
            array(
                'default' => './assets/img/bgd/graphic_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::BACKGROUND_5,
            array(
                'default' => './assets/img/bgd/watch&footer_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_background_1',
            array(
                'label' => __('Trailer background', 'mytheme'),
                'settings' => ThemeSettings::BACKGROUND_1,
                'priority' => 10,
                'section' => 'livingstone_options_backgrounds',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_background_2',
            array(
                'label' => __('Story background', 'mytheme'),
                'settings' => ThemeSettings::BACKGROUND_2,
                'priority' => 11,
                'section' => 'livingstone_options_backgrounds',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_background_3',
            array(
                'label' => __('Team background', 'mytheme'),
                'settings' => ThemeSettings::BACKGROUND_3,
                'priority' => 12,
                'section' => 'livingstone_options_backgrounds',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_background_4',
            array(
                'label' => __('Gallery background', 'mytheme'),
                'settings' => ThemeSettings::BACKGROUND_4,
                'priority' => 10,
                'section' => 'livingstone_options_backgrounds',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_background_5',
            array(
                'label' => __('Footer background', 'mytheme'),
                'settings' => ThemeSettings::BACKGROUND_5,
                'priority' => 10,
                'section' => 'livingstone_options_backgrounds',
            )
        ));
    }

    public static function register_images($wp_customize)
    {
        $wp_customize->add_section('livingstone_options_images',
            array(
                'title' => __('Images', 'mytheme'),
                'priority' => 35,
                'capability' => 'edit_theme_options',
                'description' => __('Allows you to customize images in livingstone layout', 'mytheme'),
            )
        );

        $wp_customize->add_setting(ThemeSettings::HEADER_BG,
            array(
                'default' => './assets/img/bgd/header_bg.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::TEASER_URL,
            array(
                'default' => 'https://www.youtube.com/embed/SuIXLyoyIHk',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_setting(ThemeSettings::TEAM_PHOTO,
            array(
                'default' => './assets/img/team/team.png',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_header_bg',
            array(
                'label' => __('Header image', 'mytheme'),
                'settings' => ThemeSettings::HEADER_BG,
                'priority' => 10,
                'section' => 'livingstone_options_images',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'livingstone_teaser_photo',
            array(
                'type' => 'url',
                'label' => __('Teaser', 'mytheme'),
                'settings' => ThemeSettings::TEASER_URL,
                'priority' => 11,
                'section' => 'livingstone_options_images',
            )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'livingstone_team_photo',
            array(
                'label' => __('Team photo', 'mytheme'),
                'settings' => ThemeSettings::TEAM_PHOTO,
                'priority' => 10,
                'section' => 'livingstone_options_images',
            )
        ));
    }

    public static function register_texts($wp_customize)
    {
        $wp_customize->add_section('livingstone_options_texts',
            array(
                'title' => __('Content', 'mytheme'),
                'priority' => 35,
                'capability' => 'edit_theme_options',
                'description' => __('Allows you to customize texts and galleries in livingstone layout.', 'mytheme'),
            ));

        $wp_customize->add_setting(ThemeSettings::ABOUT_US_TEXT, array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::HUE_TEXT, array(
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::WEAPONS, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::GALLERY, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::FOOTER_CAROUSEL, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::PRESS_KIT, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::FORM_SHORTCODE, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_setting(ThemeSettings::CONTACT_FORM, array(
            'default' => 0,
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'form_shortcode_text_control', array(
            'type' => 'text',
            'label' => __('Shortcode from form newsletter', 'mytheme'),
            'settings' => ThemeSettings::FORM_SHORTCODE,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'form_contact_text_control', array(
            'type' => 'text',
            'label' => __('Shortcode from form contact', 'mytheme'),
            'settings' => ThemeSettings::CONTACT_FORM,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about_team_text_control', array(
            'type' => 'textarea',
            'label' => __('About us text', 'mytheme'),
            'settings' => ThemeSettings::ABOUT_US_TEXT,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hue_text_control', array(
            'type' => 'textarea',
            'label' => __('Hue text (text on paper)', 'mytheme'),
            'settings' => ThemeSettings::HUE_TEXT,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'weapons_text_control', array(
            'type' => 'number',
            'label' => __('Weapons post id', 'mytheme'),
            'settings' => ThemeSettings::WEAPONS,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'gallery_text_control', array(
            'type' => 'number',
            'label' => __('Gallery post id', 'mytheme'),
            'settings' => ThemeSettings::GALLERY,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_carousel_text_control', array(
            'type' => 'number',
            'label' => __('Footer carousel post id (image proportion 3:2 eg: 1742x1162 px)', 'mytheme'),
            'settings' => ThemeSettings::FOOTER_CAROUSEL,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'presskit_text_controll', array(
            'type' => 'url',
            'label' => __('Presskit webpage', 'mytheme'),
            'settings' => ThemeSettings::PRESS_KIT,
            'priority' => 11,
            'section' => 'livingstone_options_texts',
        )));
    }

    public static function header_output()
    {
        ?>
        <!--Customizer CSS-->
        <style type="text/css">
            <?php self::generate_css('.header', 'background-image', ThemeSettings::HEADER_BG, 'url("', '")'); ?>
            <?php self::generate_css('.team-img', 'background-image', ThemeSettings::TEAM_PHOTO, 'url("', '")'); ?>
            <?php self::generate_css('.watch', 'background-image', ThemeSettings::BACKGROUND_1, 'url("' . get_template_directory_uri() . '/assets/img/decor/border.png"), url("', '")'); ?>
            <?php self::generate_css('.story', 'background-image', ThemeSettings::BACKGROUND_2, 'url("' . get_template_directory_uri() . '/assets/img/decor/border.png"), url("', '")'); ?>
            <?php self::generate_css('.team', 'background-image', ThemeSettings::BACKGROUND_3, 'url("' . get_template_directory_uri() . '/assets/img/decor/border.png"), url("', '")'); ?>
            <?php self::generate_css('.graphic', 'background-image', ThemeSettings::BACKGROUND_4, 'url("' . get_template_directory_uri() . '/assets/img/decor/border.png"), url("', '")'); ?>
            <?php self::generate_css('.footer', 'background-image', ThemeSettings::BACKGROUND_5, 'url("' . get_template_directory_uri() . '/assets/img/decor/border.png"), url("', '")'); ?>


            .header {
                background-repeat: no-repeat;
                background-position: center center, center bottom;
            }

            .team-img {
                background-repeat: no-repeat;
                background-position: center center, center center;
                background-size: contain;
            }
        </style>
        <!--/Customizer CSS-->
        <?php
    }

    /**
     * This will generate a line of CSS for use in header output. If the setting
     * ($mod_name) has no defined value, the CSS will not be output.
     *
     * @param string $selector CSS selector
     * @param string $style The name of the CSS *property* to modify
     * @param string $mod_name The name of the 'theme_mod' option to fetch
     * @param string $prefix Optional. Anything that needs to be output before the CSS property
     * @param string $postfix Optional. Anything that needs to be output after the CSS property
     * @param bool $echo Optional. Whether to print directly to the page (default: true).
     * @return string Returns a single line of CSS with selectors and a property.
     * @uses get_theme_mod()
     * @since MyTheme 1.0
     */
    public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true)
    {
        $return = '';
        $mod = get_theme_mod($mod_name);
        if (!empty($mod)) {
            $return = sprintf('%s { %s:%s; }',
                $selector,
                $style,
                $prefix . $mod . $postfix
            );
            if ($echo) {
                echo $return;
            }
        }
        return $return;
    }
}

add_action('customize_register', array('Livingstone_Customize', 'register'));
add_action('wp_head', array('Livingstone_Customize', 'header_output'));
