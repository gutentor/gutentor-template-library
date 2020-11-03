<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_12' ) ) {

    /**
     * Functions related to Demo 12
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_12 extends Gutentor_Template_Library_Base{

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
                    'title'                => __('Advanced Columns','gutentor' ),
                    'type'                => 'widget',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 1'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/#section-cfb98fd4-2372-4ee7-a956-d35424081d70',
                ),
                array(
                    'title'                => __('Advanced Columns','gutentor'),
                    'type'                => 'widget',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 2'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/contact/#section-3f3372ca-1c85-4895-837d-1c14a70e2d35',
                ),
                //Block Templates ends

                // Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-12',
					'title'          => __( 'Restaurant 1', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'restaurant' ),
					'categories'     => array( 'restaurant' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/home/screenshot.jpg',
				),
				// Template Kits ends

                //Page Templates Starts
                array(
                    'title'             => __('Home 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('restaurant','home','home 12' ),
                    'categories'        => array( 'cosmoswp', 'restaurant' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
               
                array(
                    'title'             => __( 'About 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 12' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/about/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
                array(
                    'title'             => __('Services 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('services'),
                    'categories'        => array('cosmoswp', 'services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/services/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/services/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/services/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
                array(
                    'title'             => __('Gallery 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('gallery'),
                    'categories'        => array('cosmoswp', 'gallery' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/gallery/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/gallery/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/gallery/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
                array(
                    'title'             => __('Team 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('team'),
                    'categories'        => array('cosmoswp', 'team' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/team/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/team/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/team/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
                array(
                    'title'             => __('Menu 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('menu'),
                    'categories'        => array('cosmoswp', 'menu' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/menu/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/menu/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/menu/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),         
                
                array(
                    'title'             => __( 'Contact 12', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 12' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-12/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-12/contact/',
                    'template_kit_id' => 'cosmoswp-demo-12',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_12::get_instance()->run();