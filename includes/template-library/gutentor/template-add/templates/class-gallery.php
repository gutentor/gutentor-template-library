<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Gallery' ) ) {

    /**
     * Functions related to Gallery Block
     * @package Gutentor
     * @since 1.1.5
     *
     */

    class Gutentor_Template_Library_Gallery extends Gutentor_Template_Library_Base{
        
        /**
         * Gets an instance of this object.
         * Prevents duplicate instances which avoid artefacts and improves performance.
         *
         * @static
         * @access public
         * @since 1.1.5
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

                // array(
                //     'title'             => __( 'Gallery', 'gutentor' ),
                //     'type'              => 'template',
                //     'author'            => __( 'CosmosWP', 'gutentor' ),
                //     'keywords'          => array( 'gallery', 'gallery 1' ),
                //     'categories'        => array( 'gallery' ),
                //     'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/gallery-page/gallery-1/template.json',
                //     'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/gallery-page/gallery-1/gallery-template.jpg',
                //     'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/portfolio/',
                // ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_Gallery::get_instance()->run();