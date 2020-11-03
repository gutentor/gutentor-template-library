<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_18' ) ) {

    /**
     * Functions related to Demo 18
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_18 extends Gutentor_Template_Library_Base{

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
                    'template_url'     => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
                    'demo_url'         => 'https://www.demo.cosmoswp.com/demo-18/contact/#gm7efa130',
                ),
                

                // Dynamic Column

                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 1'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-1/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/#gmc485316',
                ),
                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 2'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-2/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/#gmffef7b5',
                ),
                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 3'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-3/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/about/#gm816270f',
                ),
                array(
                    'title'             => __('Dynamic Columns', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('dynamic-column', 'dynamic-column 4'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/dynamic-column/dynamic-column-4/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/about/#gma233efa',
                ),

                // Accordion
                array(
                    'title'             => __('Accordion Module', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('accordion-module'),
                    'categories'        => array('cosmoswp', 'accordion-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/accordion/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/accordion/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/#e69daa',
                ),
                
                // Tab Module
                array(
                    'title'             => __('Tab Module', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('tab-module'),
                    'categories'        => array('cosmoswp', 'tab-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/tab/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/tab/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/about/#8ac9e6',
                ),
                
                // Carousel
                array(
                    'title'             => __('Carousel', 'gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('carousel'),
                    'categories'        => array('cosmoswp', 'carousel'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/carousel/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/modules/carousel/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-18/#gme5b4412',
                ),

                  

                //Block Templates ends

                // Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-18',
					'title'          => __( 'Business 2', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'business', 'multipurpose' ),
					'categories'     => array( 'business' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/home/screenshot.jpg',
				),
				// Template Kits ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 18', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('home','home 18' ),
                    'categories'        => array( 'cosmoswp', 'business','multipurpose' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-18/',
                    'template_kit_id' => 'cosmoswp-demo-18',
                ),               
                array(
                    'title'             => __( 'About 18', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 18' ),
                    'categories'        => array( 'cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-18/about/',
                    'template_kit_id' => 'cosmoswp-demo-18',
                ),
                array(
                    'title'             => __( 'Services 18', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'services', 'services 18' ),
                    'categories'        => array( 'cosmoswp','services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/services/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/services/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-18/services/',
                    'template_kit_id' => 'cosmoswp-demo-18',
                ),
                array(
                    'title'             => __( 'Contact 18', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 18' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-18/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-18/contact/',
                    'template_kit_id' => 'cosmoswp-demo-18',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_18::get_instance()->run();