<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Contact' ) ) {

    /**
     * Functions related to Contact Block
     * @package Gutentor
     * @since 1.1.5
     *
     */

    class Gutentor_Template_Library_Contact extends Gutentor_Template_Library_Base{
        
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
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 1' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-1/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-1/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/contact-us/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 2' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-2/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-2/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 3' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-3/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-3/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 4' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-4/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-4/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 5' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-5/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-5/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 6' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-6/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-6/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-7/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 7' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-7/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-7/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 8' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-8/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-8/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/contact/',
                ),

                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 9' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-9/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-9/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/contact/',
                ),
                array(
                    'title'             => __( 'Contact', 'gutentor' ),
                    'type'              => 'template',
                    'author'            => __( 'CosmosWP', 'gutentor' ),
                    'keywords'          => array( 'contact', 'contact 10' ),
                    'categories'        => array( 'contact' ),
                    'template_url'      => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-10/template.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/templates/contact-page/contact-10/contact.jpg',
                    'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/contact/',
                ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
    }
}
Gutentor_Template_Library_Contact::get_instance()->run();