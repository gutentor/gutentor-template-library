<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_9' ) ) {

    /**
     * Functions related to Demo 9
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_9 extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 1' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/advance-column/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/advance-column/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/contact/#section-6be744a6-1054-467e-b9d3-227fb0e431a8',
                ),
                array(
					'title'				=> __('Content Box', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array('content-box' ),
					'categories'		=> array( 'cosmoswp', 'content-box' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/content-box/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/content-box/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/#section-b121569b-2c21-4091-a06c-67c7e363d465',
				),
                array(
					'title'				=> __('Team', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array('team' ),
					'categories'		=> array( 'cosmoswp', 'team' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/team/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/modules/team/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/#section-6eed5d72-a112-41d5-8651-a65b69a04307',
                ),
                //Block Templates ends

                // Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-9',
					'title'          => __( 'Construction 1', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'construction' ),
					'categories'     => array( 'construction' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/home/screenshot.jpg',
				),
				// Template Kits ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 9', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('construction','home','home 9' ),
                    'categories'        => array( 'cosmoswp', 'construction' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/',
                    'template_kit_id' => 'cosmoswp-demo-9',
                ),
               
                array(
                    'title'             => __( 'About 9', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 9' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/about/',
                    'template_kit_id' => 'cosmoswp-demo-9',
                ),
                array(
                    'title'             => __( 'Service 9', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('services', 'service 9' ),
                    'categories'        => array('cosmoswp', 'services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/service/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/service/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/services/',
                    'template_kit_id' => 'cosmoswp-demo-9',
                ),
                
                array(
                    'title'             => __( 'Contact 9', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 9' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-9/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/contact/',
                    'template_kit_id' => 'cosmoswp-demo-9',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_9::get_instance()->run();