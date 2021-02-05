<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_2' ) ) {

    /**
     * Functions related to Demo 2
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_2 extends Gutentor_Template_Library_Base{

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
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-426faae0-f5ae-4847-9a34-29e21ac86982',
				),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-20e08db8-5b25-4fe9-a9e0-33f38491f7c2',
                ),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-3/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/services/#section-cb8190ee-5c4f-453a-bb6b-7bc755c204cb',
				),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/advance-column/advance-column-4/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/contact/#section-0e9f01f6-da57-4c44-8e66-9c6d3b057499',
                ),
                array(
					'title'				=> __( 'Gallery', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'gallery', 'gallery 3' ),
					'categories'		=> array( 'cosmoswp','gallery' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/gallery/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/gallery/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-c3c91a4a-a996-4d7c-961c-3396ab51c822',
                ),
                array(
					'title'				=> __( 'Tabs', 'gutentor' ),
					'type'				=> 'widget',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'tabs' ),
					'categories'		=> array( 'cosmoswp','tabs' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/tabs/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/modules/tabs/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-0ef91242-a1e8-418f-a8b4-d8ac3fce90a4',
				),
                        

                //Block Templates ends

                // Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-2',
					'title'          => __( 'Agency 1', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'agency', 'home' ),
					'categories'     => array( 'agency' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/home/screenshot.jpg',
				),
                // Template Kits ends
                
                //Page Templates Starts
                array(
                    'title'             => __('Home 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'agency','home','home 2' ),
                    'categories'        => array( 'cosmoswp','agency' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),

                array(
                    'title'				=> __( 'About 2', 'gutentor' ),
                    'type'				=> 'template',
                    'author'			=> __( 'CosmosWP', 'gutentor' ),
                    'keywords'			=> array( 'about-page', 'about page 2' ),
                    'categories'		=> array( 'cosmoswp','about' ),
                    'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-2/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-2/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/about',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                array(
                    'title'             => __( 'Service 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'service', 'service 2' ),
                    'categories'        => array('cosmoswp','services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/service/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/service/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/services/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                array(
                    'title'             => __( 'Gallery 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'gallery', 'gallery 2' ),
                    'categories'        => array('cosmoswp','gallery' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/gallery/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/gallery/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/portfolio/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                array(
                    'title'             => __( 'Pricing 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'pricing', 'pricing 2' ),
                    'categories'        => array('cosmoswp','pricing' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/pricing/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/pricing/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/pricing/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                array(
                    'title'             => __( 'Contact 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 2' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/contact/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                array(
                    'title'             => __( 'Team 2', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'team', 'team 2' ),
                    'categories'        => array( 'cosmoswp','team' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/team/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-2/template-data/templates/team/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/team/',
                    'template_kit_id' => 'cosmoswp-demo-2',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_2::get_instance()->run();