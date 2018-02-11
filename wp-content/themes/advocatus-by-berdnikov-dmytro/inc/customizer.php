<?php
/**
 * Advocatus by Berdnikov Dmytro Theme Customizer
 *
 * @package Advocatus_by_Berdnikov_Dmytro
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advocatus_by_berdnikov_dmytro_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'advocatus_by_berdnikov_dmytro_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'advocatus_by_berdnikov_dmytro_customize_partial_blogdescription',
        ));
    }

    // Customizer's "header image" section removed. These settings will be added to another section.
    $wp_customize->remove_section('header_image');

    // Customizer's "background image" section removed. These settings will be added to another section.
    $wp_customize->remove_section('background_image');

    // Customizer's section for the introductory subsection of the header
    $wp_customize->add_section('intro_header_subsection_options',
        array(
            'title' => __('Intro subsection of the header'),
            'description' => esc_html__('Here are the settings for the introductory subsection of the header'),
            'priority' => 61
        )
    );

    $wp_customize->add_setting('intro_header_subsection_background');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'intro_bg',
            array(
                'label'      => __( 'Background image', 'advocatus-by-berdnikov-dmytro' ),
                'section'    => 'intro_header_subsection_options',
                'settings'   => 'intro_header_subsection_background'
            )
        )
    );

    $wp_customize->add_setting('rep_name');
    $wp_customize->add_control('rep_name',
        array(
            'label' => __('Name of the representative'),
            'description' => esc_html__('Please enter the name of the representative'),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('rep_position');
    $wp_customize->add_control('rep_position',
        array(
            'label' => __('Position of the representative'),
            'description' => esc_html__('Please enter the position of the representative'),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('button_text');
    $wp_customize->add_control('button_text',
        array(
            'label' => __('Button text'),
            'description' => esc_html__('Please enter the text of the button'),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('button_link');
    $wp_customize->add_control('button_link',
        array(
            'label' => __('Button URL'),
            'description' => esc_html__('Please enter the URL button links to'),
            'section' => 'intro_header_subsection_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    // Customizer's section with options for the "About us" section of the site
    $wp_customize->add_section('about_us_section_options',
        array(
            'title' => __('"About us" section options'),
            'description' => esc_html__('Here are the settings for the "About us" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('about_us_section_title');
    $wp_customize->add_control('about_us_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('about_us_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('about_us_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'about_us_section_options',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting('about_us_left_subsection_title');
    $wp_customize->add_control('about_us_left_subsection_title',
        array(
            'label' => __('Left Subsection Title'),
            'description' => esc_html__('Please enter the title for the left subsection'),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('about_us_right_subsection_title');
    $wp_customize->add_control('about_us_right_subsection_title',
        array(
            'label' => __('Right Subsection Title'),
            'description' => esc_html__('Please enter the title for the right subsection'),
            'section' => 'about_us_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('about_us_right_subsection_content',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('about_us_right_subsection_content',
        array(
            'label' => __('Right Subsection Content'),
            'description' => esc_html__('Please enter the text below'),
            'section' => 'about_us_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "Practis area" section of the site
    $wp_customize->add_section('practice_area_section_options',
        array(
            'title' => __('"Practis area" section options'),
            'description' => esc_html__('Here are the settings for the "Practis area" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('practice_area_section_title');
    $wp_customize->add_control('practice_area_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'practice_area_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('practice_area_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('practice_area_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'practice_area_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "Meet our attorney" section of the site
    $wp_customize->add_section('meet_our_attorney_section_options',
        array(
            'title' => __('"Meet our attorney" section options'),
            'description' => esc_html__('Here are the settings for the "Meet our attorney" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('meet_our_attorney_section_title');
    $wp_customize->add_control('meet_our_attorney_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'meet_our_attorney_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('meet_our_attorney_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('meet_our_attorney_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'meet_our_attorney_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "Our clients say" section of the site
    $wp_customize->add_section('our_clients_say_section_options',
        array(
            'title' => __('"Our clients say" section options'),
            'description' => esc_html__('Here are the settings for the "Our clients say" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('our_clients_say_section_title');
    $wp_customize->add_control('our_clients_say_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'our_clients_say_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('our_clients_say_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('our_clients_say_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'our_clients_say_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "Recent publications" section of the site
    $wp_customize->add_section('recent_publications_section_options',
        array(
            'title' => __('"Recent publications" section options'),
            'description' => esc_html__('Here are the settings for the "Recent publications" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('recent_publications_section_title');
    $wp_customize->add_control('recent_publications_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'recent_publications_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('recent_publications_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('recent_publications_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'recent_publications_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "FAQ" section of the site
    $wp_customize->add_section('faq_section_options',
        array(
            'title' => __('"FAQ" section options'),
            'description' => esc_html__('Here are the settings for the "FAQ" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('faq_section_title');
    $wp_customize->add_control('faq_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'faq_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('faq_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('faq_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'faq_section_options',
            'type' => 'textarea'
        )
    );

    // Customizer's section with options for the "Feel free to contact" section of the site
    $wp_customize->add_section('contact_section_options',
        array(
            'title' => __('"Feel free to contact" section options'),
            'description' => esc_html__('Here are the settings for the "Feel free to contact" section of the site'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('contact_section_title');
    $wp_customize->add_control('contact_section_title',
        array(
            'label' => __('Section Title'),
            'description' => esc_html__('Please enter the title for this section'),
            'section' => 'contact_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('contact_section_description',
        array(
            'default' => '',
            'transport' => 'refresh',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $wp_customize->add_control('contact_section_description',
        array(
            'label' => __('Section Description'),
            'description' => esc_html__('Please enter the description for this section'),
            'section' => 'contact_section_options',
            'type' => 'textarea'
        )
    );

    $wp_customize->add_setting('contact_button_text');
    $wp_customize->add_control('contact_button_text',
        array(
            'label' => __('Button text'),
            'description' => esc_html__('Please enter the text of the button'),
            'section' => 'contact_section_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('contact_section_map_image');
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'map',
            array(
                'label'      => __( 'Map image', 'advocatus-by-berdnikov-dmytro' ),
                'section'    => 'contact_section_options',
                'settings'   => 'contact_section_map_image'
            )
        )
    );

    // Customizer's site footer options
    $wp_customize->add_section('footer_options',
        array(
            'title' => __('Footer options'),
            'description' => esc_html__('Here are the settings for the site footer'),
            'priority' => 62
        )
    );

    $wp_customize->add_setting('footer_link_text');
    $wp_customize->add_control('footer_link_text',
        array(
            'label' => __('Footer link text'),
            'description' => esc_html__('Please enter the text of the link to be displayed in the footer'),
            'section' => 'footer_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );

    $wp_customize->add_setting('footer_link_url');
    $wp_customize->add_control('footer_link_url',
        array(
            'label' => __('Footer link URL'),
            'description' => esc_html__('Please enter the URL of the link displayed in the footer'),
            'section' => 'footer_options',
            'type' => 'text' // Can be either text, email, url, number, hidden, or date
        )
    );
}

add_action('customize_register', 'advocatus_by_berdnikov_dmytro_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function advocatus_by_berdnikov_dmytro_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function advocatus_by_berdnikov_dmytro_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function advocatus_by_berdnikov_dmytro_customize_preview_js()
{
    wp_enqueue_script('advocatus-by-berdnikov-dmytro-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'advocatus_by_berdnikov_dmytro_customize_preview_js');
