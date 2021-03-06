<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Post_Module' ) ) {

	/**
	 * Functions related to Video_Popup
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Post_Module extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'p1';

		/**
		 * Gets an instance of this object.
		 * Prevents duplicate instances which avoid artefacts and improves performance.
		 *
		 * @static
		 * @access public
		 * @since 1.0.1
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
					'title'				=> __( 'Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-module', 'post-module 1' ),
					'categories'		=> array( 'post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/post-module/#6d2f0a30-c266-4cb6-8663-1b718547277d',
				),
				array(
					'title'				=> __( 'Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-module', 'list-view' ),
					'categories'		=> array( 'post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-1.1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-1.1/template-1.1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/post-module/#ab3c231c-153f-428c-8840-ca221bb0f6ae',
				),
				array(
					'title'				=> __( 'Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-module', 'post-module 2' ),
					'categories'		=> array( 'post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-2/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/post-module/#fea8aa8a-39da-4530-96b3-ccb189ad67b2',
				),
				array(
					'title'				=> __( 'Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-module', 'post-module 3' ),
					'categories'		=> array( 'post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-3/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-module/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/post-module/#29aa689d-c6bf-4105-bc2b-9df1f02c1219',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Post_Module::get_instance()->run();