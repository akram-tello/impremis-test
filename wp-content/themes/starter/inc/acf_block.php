<?php 

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a block

        // HERO
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'hero', 'banner' ),
        ));

        // TEXT WITH MEDIA
        acf_register_block(array(
            'name'              => 'text-with-media',
            'title'             => __('Text with Media'),
            'description'       => __('A custom text with media block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'embed-photo',
            'keywords'          => array( 'text', 'media', 'text with media' ),
        ));

        // TESTIMONIAL
        acf_register_block(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonials'),
            'description'       => __('A custom testimonials block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'groups',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));

        // NEWSLETTER
        acf_register_block(array(
            'name'              => 'newsletter',
            'title'             => __('Newsletter'),
            'description'       => __('A custom newsletter block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'email-alt2',
            'keywords'          => array( 'newsletter', 'form', 'subscribe' ),
        ));

        // RTE
        acf_register_block(array(
            'name'              => 'rte',
            'title'             => __('RTE'),
            'description'       => __('A custom RTE block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'media-text',
            'keywords'          => array( 'rte', 'text', 'content' ),
        ));

        // PAGE HEADER used
        acf_register_block(array(
            'name'              => 'page-header',
            'title'             => __('Page Header'),
            'description'       => __('A custom Page Header block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'cover-image',
            'keywords'          => array( 'header', 'heading', 'banner' ),
        ));

        // LOGO CAROUSEL
        acf_register_block(array(
            'name'              => 'logos',
            'title'             => __('Logo Carousel'),
            'description'       => __('A custom Logo Carousel block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'images-alt',
            'keywords'          => array( 'logos', 'logo carousel' ),
        ));

        // FAQ
        acf_register_block(array(
            'name'              => 'faqs',
            'title'             => __('FAQ'),
            'description'       => __('A custom FAQs block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'list-view',
            'keywords'          => array( 'question', 'answer', 'faq' ),
        ));

        // CONTACT FORM
        acf_register_block(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('A custom Contact Form block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'forms',
            'keywords'          => array( 'forms', 'contact', 'contact form' ),
        ));

        // CTA
        acf_register_block(array(
            'name'              => 'cta',
            'title'             => __('CTA'),
            'description'       => __('A custom CTA block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'megaphone',
            'keywords'          => array( 'cta', 'call to action' ),
        ));

        //STORY 
        acf_register_block(array(
            'name'              => 'story',
            'title'             => __('Story'),
            'description'       => __('A custom Story block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'book-alt',
            'keywords'          => array( 'story', 'about' ),
        ));

        // MISSION & VISION
        acf_register_block(array(
            'name'              => 'section',
            'title'             => __('Section'),
            'description'       => __('A custom Mission & Vision block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'chart-bar',
            'keywords'          => array( 'mission', 'vision', 'about' ),
        ));

        // TEAM
        acf_register_block(array(
            'name'              => 'team',
            'title'             => __('Team'),
            'description'       => __('A custom Team block.'),
            'render_callback'   => 'impremis_block_callback',
            'category'          => 'impremis',
            'icon'              => 'groups',
            'keywords'          => array( 'team', 'about' ),
        ));
    }
}