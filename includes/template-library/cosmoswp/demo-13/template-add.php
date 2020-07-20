<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_13' ) ) {

    /**
     * Functions related to Demo 13
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_13 extends Gutentor_Template_Library_Base{

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
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-1/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/#section-4967c968-3787-40ef-a0ef-081f57d426ea',
                ),
                array(
                    'title'                => __('Advanced Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 2'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-2/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/#section-625c5b1a-e94e-4f69-b0b1-5d986e57d290',
                ),
                array(
                    'title'                => __('Advanced Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 3'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-3/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/contact/#section-ac32eefe-3b2e-46df-ad6e-8ce306cc0df1',
                ),
                array(
                    'title'                => __('Advanced Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('advanced-columns', 'advanced columns 4'),
                    'categories'        => array('cosmoswp', 'advanced-columns'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/advance-column/advance-column-4/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/about/#section-1c466acd-b40a-4797-b35f-449ca80bfda9',
                ),

                array(
                    'title'                => __('Content Box', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('content-box'),
                    'categories'        => array('cosmoswp', 'content-box'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/content-box/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/modules/content-box/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/about/#section-4c316332-5d70-4186-9606-224eebdad4e0',
                ),

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 13', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('restaurant','home','home 13' ),
                    'categories'        => array( 'cosmoswp', 'restaurant' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/',
                ),
               
                array(
                    'title'             => __( 'About 13', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 13' ),
                    'categories'        => array('cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/about/',
                ),
                array(
                    'title'             => __('Services 13', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('services'),
                    'categories'        => array('cosmoswp', 'services' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/services/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/services/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/practise-areas/',
                ),
                array(
                    'title'             => __('Gallery 13', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('gallery'),
                    'categories'        => array('cosmoswp', 'gallery' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/gallery/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/gallery/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/case-study/',
                ),

        
                
                array(
                    'title'             => __( 'Contact 13', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 13' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-13/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-13/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_13::get_instance()->run();