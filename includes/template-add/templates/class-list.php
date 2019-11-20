<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_List' ) ) {

    /**
     * Functions related to List Page
     * @package Gutentor
     * @since 1.1.5
     *
     */

    class Gutentor_Template_Library_List extends Gutentor_Template_Library_Base{
        
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

                array(
                    'title'             => __( 'List', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'Gutentor', 'gutentor' ),
                    'keywords'          => array( 'list', 'list 1' ),
                    'categories'        => array( 'list' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-1/list.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/classes/',
                ),
                array(
                    'title'             => __( 'List', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'Gutentor', 'gutentor' ),
                    'keywords'          => array( 'list', 'list 2' ),
                    'categories'        => array( 'list' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-2/list.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/destinations/',
                ),
                array(
                    'title'             => __( 'List', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'Gutentor', 'gutentor' ),
                    'keywords'          => array( 'list', 'list 3' ),
                    'categories'        => array( 'list' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/templates/list-page/list-3/list.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/tours/',
                ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_List::get_instance()->run();