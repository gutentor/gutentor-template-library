<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_15' ) ) {

    /**
     * Functions related to Demo 15
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_15 extends Gutentor_Template_Library_Base{

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

                array(
                    'title'                => __('Advanced Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 1'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/advance-column/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/advance-column/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/contact/#gme2c85f2',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 1'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-1/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/#gma681234',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 2'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-2/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/#gm8140a33',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 3'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/modules/dynamic-column/dynamic-column-3/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/#gm966b768',
                ),


                //Block Templates ends

                // Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-15',
					'title'          => __( 'Charity 1', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'charity', 'corporate' ),
					'categories'     => array( 'charity' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/home/screenshot.jpg',
				),
				// Template Kits ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 15', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('charity','home','home 15' ),
                    'categories'        => array( 'cosmoswp', 'charity' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/',
                    'template_kit_id' => 'cosmoswp-demo-15',
                ),
               
                array(
                    'title'             => __( 'About 15', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 15' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/about/',
                    'template_kit_id' => 'cosmoswp-demo-15',
                ),
                array(
                    'title'             => __('List 15', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('list'),
                    'categories'        => array('cosmoswp', 'list' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/list-page/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/list-page/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/causes/',
                    'template_kit_id' => 'cosmoswp-demo-15',
                ),
                array(
                    'title'             => __('Gallery 15', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('gallery'),
                    'categories'        => array('cosmoswp', 'gallery' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/gallery/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/gallery/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/gallery/',
                    'template_kit_id' => 'cosmoswp-demo-15',
                ),        
                
                array(
                    'title'             => __( 'Contact 15', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 15' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-15/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-15/contact/',
                    'template_kit_id' => 'cosmoswp-demo-15',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_15::get_instance()->run();