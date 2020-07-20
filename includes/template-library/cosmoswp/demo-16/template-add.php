<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_16' ) ) {

    /**
     * Functions related to Demo 16
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_16 extends Gutentor_Template_Library_Base{

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
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 1'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-1/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gma54a463',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 2'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-2/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gm5832415',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 3'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-3/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gm0eb7199',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 4'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-4/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gm4038f7b',
                ),
                array(
                    'title'                => __('Dynamic Columns', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('dynamic-column', 'dynamic-column 5'),
                    'categories'        => array('cosmoswp', 'dynamic-column'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-5/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/dynamic-column/dynamic-column-5/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gm681b5d2',
                ),
                
                array(
                    'title'                => __('Carousel', 'gutentor'),
                    'type'                => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'            => array('carousel'),
                    'categories'        => array('cosmoswp', 'carousel'),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/carousel/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/modules/carousel/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/#gm9699916',
                ),


                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 16', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('edd','home','home 16' ),
                    'categories'        => array( 'cosmoswp', 'edd' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/',
                ),               
                array(
                    'title'             => __( 'Contact 16', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 16' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-16/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-16/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_16::get_instance()->run();