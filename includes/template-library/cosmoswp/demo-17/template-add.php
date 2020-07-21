<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_17' ) ) {

    /**
     * Functions related to Demo 17
     * @package Gutentor
     * @since 1.1.0
     *
     */

    class Gutentor_Template_Library_CosmosWP_Demo_17 extends Gutentor_Template_Library_Base{

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
                    'title'             => __('Post Feature Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('post-feature', 'post-feature 1'),
                    'categories'        => array('cosmoswp','post-feature'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-feature/post-feature-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-feature/post-feature-1/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#ad7cd367-8a84-42e1-94a9-4ab3b6aa9ab2',
                ),
                array(
                    'title'             => __('Post Feature Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('post-feature', 'post-feature 2'),
                    'categories'        => array('cosmoswp','post-feature'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-feature/post-feature-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-feature/post-feature-2/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#6c01049a-3b3a-4d77-86e3-30ee7a5307b4',
                ),
                array(
                    'title'             => __('Post Carousel','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('post-carousel', 'post-carousel 1'),
                    'categories'        => array('cosmoswp','post-carousel'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-carousel/post-carousel-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-carousel/post-carousel-1/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#80313d01-5a83-4a1b-80a1-33834ff54ff7',
                ),
                 array(
                    'title'             => __('Post Carousel','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('post-carousel', 'post-carousel 2'),
                    'categories'        => array('cosmoswp','post-carousel'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-carousel/post-carousel-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/post-carousel/post-carousel-2/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#347ed2fe-ccc7-459d-a61b-91922404d2d0',
                ),

                array(
                    'title'             => __('Advanced Post Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('advanced-post-module', 'advanced-post-module 1'),
                    'categories'        => array('cosmoswp','advanced-post-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-1/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#gc4ac73',
                ),
                array(
                    'title'             => __('Advanced Post Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('advanced-post-module', 'advanced-post-module 2'),
                    'categories'        => array('cosmoswp','advanced-post-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-2/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#gc189f6',
                ),
                 array(
                    'title'             => __('Advanced Post Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('advanced-post-module', 'advanced-post-module 3'),
                    'categories'        => array('cosmoswp','advanced-post-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-3/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#gf6810c',
                ),
                array(
                    'title'             => __('Advanced Post Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('advanced-post-module', 'advanced-post-module 4'),
                    'categories'        => array('cosmoswp','advanced-post-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-4/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#g20218b',
                ),
                array(
                    'title'             => __('Advanced Post Module','gutentor'),
                    'type'              => 'block',
                    'author'            => __('CosmosWP', 'gutentor'),
                    'keywords'          => array('advanced-post-module', 'advanced-post-module 5'),
                    'categories'        => array('cosmoswp','advanced-post-module'),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-5/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/modules/advanced-post-module/advanced-post-module-5/screenshot.jpg',
                    'demo_url'          => 'https://www.demo.cosmoswp.com/demo-17/#g0a617c',
                ),
  

                //Block Templates ends


                //Page Templates Starts
                array(
                    'title'             => __('Home 17', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array('edd','home','home 17' ),
                    'categories'        => array( 'cosmoswp', 'blog','magazine' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/home/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/home/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-17/',
                ),               
                array(
                    'title'             => __( 'About 17', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'about', 'about 17' ),
                    'categories'        => array( 'cosmoswp','about' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/about/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/about/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-17/about/',
                ),
                array(
                    'title'             => __( 'Contact 17', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 17' ),
                    'categories'        => array( 'cosmoswp','contact' ),
                    'template_url'        => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/contact/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-17/template-data/templates/contact/screenshot.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-17/contact/',
                ),
                //Page Templates Ends
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_CosmosWP_Demo_17::get_instance()->run();