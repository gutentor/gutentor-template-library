<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_8' ) ) {

    /**
     * Functions related to Demo 8
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_8 extends Gutentor_Template_Library_Base{

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
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/#section-6cd54882-9e10-49d7-8031-7eb894854a35',
                ),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 2' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/#section-426bffa3-d08b-46e8-89ed-b71b9a286355',
				),
                array(
					'title'				=> __( 'Advanced Columns', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'advanced-columns', 'advanced columns 3' ),
					'categories'		=> array( 'cosmoswp','advanced-columns' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/modules/advance-column/advance-column-3/screenshot.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/contact/#section-3af04caf-6314-427f-9782-5e76ba152f1e',
                ),
            
  

                        

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 8', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('photography','home','home 8' ),
                    'categories'        => array( 'cosmoswp', 'photography' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/',
                ),
               
                array(
                    'title'             => __( 'About 8', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 8' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/',
                ),
                
                array(
                    'title'             => __( 'Contact 8', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 8' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-8/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_8::get_instance()->run();