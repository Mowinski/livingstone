<?php
require_once('settings.php');

class Livingstone_Customize
{
    public static function register($wp_customize)
    {
        self::register_images($wp_customize);
        self::register_texts($wp_customize);
    }

    public static function register_images($wp_customize)
    {
        $wp_customize->add_section('livingstone_options_images',
            array(
                'title' => __('Images', 'mytheme'),
                'priority' => 35,
                'capability' => 'edit_theme_options',
                'description' => __('Allows you to customize images in livingstone layout.', 'mytheme'),
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
            'livingstone_team_photo',
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
    }

    public static function header_output()
    {
        ?>
        <!--Customizer CSS-->
        <style type="text/css">
            <?php self::generate_css('.header', 'background', ThemeSettings::HEADER_BG, 'url("', '")'); ?>
            <?php self::generate_css('.team-img', 'background', ThemeSettings::TEAM_PHOTO, 'url("', '")'); ?>
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
