<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_11' ) ) {

    /**
     * Functions related to Demo 11
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_11 extends Gutentor_Template_Library_Base{

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
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 1' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/#section-8f2dcf3c-2c72-4028-9bf6-06f50dac3bfb',
                ),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 2' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/about/#section-5beec7e2-b1cb-4fbc-a99c-516e72d0dcb7',
                ),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 3' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/modules/advance-column/advance-column-3/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/contact/#section-8dcba83f-ad32-4663-9aea-afa5ea2ce35b',
                ),
                
  

                        

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 11', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('fitness','home','home 11' ),
                    'categories'        => array( 'cosmoswp', 'fitness' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/',
                ),
               
                array(
                    'title'             => __( 'About 11', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 11' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/about/',
                ),
                array(
                    'title'             => __('List 11', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('list'),
                    'categories'        => array('cosmoswp', 'list' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/list-page/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/list-page/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/classes/',
                ),
          
                
                array(
                    'title'             => __( 'Contact 11', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 11' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-11/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_11::get_instance()->run();