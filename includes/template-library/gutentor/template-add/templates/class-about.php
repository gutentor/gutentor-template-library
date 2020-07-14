<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_About' ) ) {

    /**
     * Functions related to About Block
     * @package Gutentor
     * @since 1.1.5
     *
     */

    class Gutentor_Template_Library_About extends Gutentor_Template_Library_Base{
        
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 1.1.5
         * @return object
         */
        public static function get_instance() {

            // Store the instance locally to avoid private static replication
            static $instance = null;

            // Only run these methods if they haven't been ran previously
            if ( null === $instance ) {
                $instance = new self();
            }

            // Always return the instance
            return $instance;

        }

        /**
         * Load block library
         * Used for blog template loading
         *
         * @since      1.1.5
         * @package    Gutentor
         * @author     Gutentor <info@gutentor.com>
         *
         * @param $templates_list array
         * @return array
         */
        public function add_block_template_library( $templates_list ){

            $block_library_list = array(

                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 4' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-4/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-4/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/about/',
                // ),
                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 5' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-5/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-5/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-7/about/',
                // ),
                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 6' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-6/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-6/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/',
                // ),
                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 7' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-7/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-7/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/about/',
                // ),
                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 8' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-8/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-8/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/about/',
                // ),
                // array(
                //     'title'             => __( 'About', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'about', 'about 9' ),
                //     'categories'        => array( 'about' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-9/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/about-page/about-9/about.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/about/',
                // ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_About::get_instance()->run();