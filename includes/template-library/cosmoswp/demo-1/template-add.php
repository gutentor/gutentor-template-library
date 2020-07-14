<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_1' ) ) {

    /**
     * Functions related to About Block
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_1 extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'About Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'about-block', 'about 3' ),
					'categories'		=> array( 'cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/about/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/about/#section-2a6b9277-d4f1-4767-944c-5dcd80dc8ec5',
                ),
                array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box' ),
					'categories'		=> array( 'cosmoswp','icon-box' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/icon-box/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/icon-box/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-50bb61c4-17ce-43e6-a31d-7c0097c3f4e7',
				),
                array(
					'title'				=> __( 'Counter', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'counter', 'counter 3' ),
					'categories'		=> array( 'cosmoswp','counter' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/counter/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/counter/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-be6e9959-dd4f-473b-b407-52d245e37172',
                ),
                
                array(
					'title'				=> __( 'Image Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'image-box', 'image-box 4' ),
					'categories'		=> array( 'cosmoswp','image-box' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/image-box/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/image-box/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-7f016bc2-26cd-4e12-8070-23fde6abe445',
                ),
                	array(
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 3' ),
					'categories'		=> array( 'cosmoswp','team' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/team/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/team/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-41be7ade-1721-4cf9-b989-d56eb8be0f85',
				),
                
                //Block Templates ends


                //Page Templates Starts
                
                array(
                    'title'				=> __( 'Home 1', 'gutentor' ),
                    'type'				=> 'template',
                    'author'			=> __( 'CosmosWP', 'gutentor' ),
                    'keywords'			=> array( 'home-page', 'home page 1' ),
                    'categories'		=> array( 'cosmoswp','business' ),
                    'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-1/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-1/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/',
                ),
                array(
                    'title'				=> __( 'About 1', 'gutentor' ),
                    'type'				=> 'template',
                    'author'			=> __( 'CosmosWP', 'gutentor' ),
                    'keywords'			=> array( 'about-page', 'about page 1' ),
                    'categories'		=> array( 'cosmoswp','about' ),
                    'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-1/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL.'demo-1/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/about',
                ),
                   array(
                    'title'             => __( 'Service 1', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'service', 'service 1' ),
                    'categories'        => array('cosmoswp','services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/service/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/service/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/services/',
                ),
                array(
                    'title'             => __( 'Contact 1', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 1' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/contact-us/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_1::get_instance()->run();