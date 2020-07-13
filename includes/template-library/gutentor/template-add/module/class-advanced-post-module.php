<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Advanced_Post_Module' ) ) {

	/**
	 * Functions related to Video_Popup
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Advanced_Post_Module extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 1' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-1/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gme4cebdd',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 2' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-2/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gm5982406',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 3' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-3/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gm0080bbc',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 4' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-4/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gm8476e89',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 5' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-5/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-5/template-5.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gmab48cbc',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 6' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-6/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-6/template-6.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gm4a1acab',
				),
				array(
					'title'				=> __( 'Advanced Post Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'advanced-post-module', 'advanced-post-module 7' ),
					'categories'		=> array( 'advanced-post-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-7/gutentor_p4.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/advanced-post-module/template-7/template-7.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/advanced-post-module/#gm96b3926',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Advanced_Post_Module::get_instance()->run();