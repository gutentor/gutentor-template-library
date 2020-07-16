<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_About_Block' ) ) {

	/**
	 * Functions related to About Block
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_About_Block extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'about-block';

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
                    'title'				=> __( 'About Block', 'gutentor' ),
                    'type'				=> 'block',
                    'author'			=> __( 'Gutentor', 'gutentor' ),
                    'keywords'			=> array( 'about-block', 'about 1' ),
                    'categories'		=> array( 'about' ),
                    'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/about-block/about-1/gutentor_about-block.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/about-block/about-1/about-block.jpg',
                    'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/about/#section-1699fc93-7cc0-4c85-a359-39d052779978',
                ),
                array(
                    'title'				=> __( 'About Block', 'gutentor' ),
                    'type'				=> 'block',
                    'author'			=> __( 'Gutentor', 'gutentor' ),
                    'keywords'			=> array( 'about-block', 'about 2' ),
                    'categories'		=> array( 'about' ),
                    'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/about-block/about-2/gutentor_about-block.json',
                    'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/about-block/about-2/about-block.jpg',
                    'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/about/#section-c38c2c61-c22a-44d1-bfde-1031df8a48ff',
                ),
           
				
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_About_Block::get_instance()->run();