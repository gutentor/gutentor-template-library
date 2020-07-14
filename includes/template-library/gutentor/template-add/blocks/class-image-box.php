<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Image_Box' ) ) {

	/**
	 * Functions related to Image Box
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Image_Box extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'image-box';

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
					'title'				=> __( 'Image Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'image-box', 'image-box 1' ),
					'categories'		=> array( 'image-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-1/gutentor_image-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-1/image-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/image-block/#section-d7ae3fd8-b954-4468-ae14-e904aff1e84c',
				),
				array(
					'title'				=> __( 'Image Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'image-box', 'image-box 2' ),
					'categories'		=> array( 'image-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-2/gutentor_image-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-2/image-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/image-block/#section-9766124c-aac1-466c-b54d-5e9b69c70d7d',
				),
				array(
					'title'				=> __( 'Image Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'image-box', 'image-box 3' ),
					'categories'		=> array( 'image-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-3/gutentor_image-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/image-box/image-box-3/image-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/image-block/#section-34ccd79b-3557-4521-a4b9-0c595d430665',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Image_Box::get_instance()->run();