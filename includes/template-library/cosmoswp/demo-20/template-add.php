<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_20' ) ) {

    /**
     * Functions related to Demo 20
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_20 extends Gutentor_Template_Library_Base{

        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 1.1.0
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

                //Block/Modules Templates Starts

                // Advance Column
                array(
                    'title'            => __('Advanced Columns', 'gutentor'),
                    'type'             => 'block',
                    'author'           => __('CosmosWP', 'gutentor'),
                    'keywords'         => array('advanced-columns', 'advanced columns 1'),
                    'categories'       => array('cosmoswp', 'advanced-columns'),
                    'template_url'     => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
                    'demo_url'         => 'https://www.demo.cosmoswp.com/demo-20/#gm09ae6c7',
                ),
                array(
                    'title'            => __('Advanced Columns', 'gutentor'),
                    'type'             => 'block',
                    'author'           => __('CosmosWP', 'gutentor'),
                    'keywords'         => array('advanced-columns', 'advanced columns 2'),
                    'categories'       => array('cosmoswp', 'advanced-columns'),
                    'template_url'     => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
                    'demo_url'         => 'https://www.demo.cosmoswp.com/demo-20/contact/#gm8f976d2',
                ),
                
                // Dynamic Column

                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 1'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/dynamic-column/dynamic-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/dynamic-column/dynamic-column-1/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-20/#gm4a394ed',
                ),
                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 2'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/dynamic-column/dynamic-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/dynamic-column/dynamic-column-2/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-20/#gmf2ef524',
                ),
             
                
                // Carousel
                array(
                    'title'             => __('Carousel', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('carousel'),
                    'categories'        => array('cosmoswp', 'carousel'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/carousel/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/modules/carousel/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-20/#gm215523b',
                ),
                  

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 20', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('home','home 20' ),
                    'categories'        => array( 'cosmoswp', 'agency','multipurpose' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-20/',
                ),               
                array(
                    'title'             => __( 'About 20', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 20' ),
                    'categories'        => array( 'cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-20/about/',
                ),
                array(
                    'title'             => __( 'Portfolio 20', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'portfolio', 'portfolio 20' ),
                    'categories'        => array( 'cosmoswp','portfolio' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/portfolio/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/portfolio/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-20/portfolio/',
                ),
                array(
                    'title'             => __( 'Services 20', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'services', 'services 20' ),
                    'categories'        => array( 'cosmoswp','services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/services/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/services/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-20/services/',
                ),
                array(
                    'title'             => __( 'Contact 20', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 20' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-20/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-20/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_20::get_instance()->run();