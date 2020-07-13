<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Post_Feature_Module' ) ) {

	/**
	 * Functions related to Video_Popup
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Post_Feature_Module extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 1' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-1/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gm4a34785',
				),

				array(
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 2' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-2/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gmc16dffb',
				),
				array(
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 3' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-3/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gmd3c55a1',
				),
				array(
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 4' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-4/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gm59ac46a',
				),
				array(
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 5' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-5/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-5/template-5.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gmc7fbcc4',
				),
				array(
					'title'				=> __( 'Post Feature Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'post-feature', 'post-feature 6' ),
					'categories'		=> array( 'post-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-6/gutentor_p2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/post-feature/template-6/template-6.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/post-feature/post-feature/#gme2b7590',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Post_Feature_Module::get_instance()->run();