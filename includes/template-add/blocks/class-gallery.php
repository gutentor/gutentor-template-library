<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Gallery' ) ) {

	/**
	 * Functions related to Gallery
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Gallery extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'gallery';

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
					'title'				=> __( 'Gallery', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'gallery', 'gallery 1' ),
					'categories'		=> array( 'gallery' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-1/gutentor_gallery.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-1/gallery.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/gallery/#section-5c3dc2b1-32ed-4696-b5fa-abff0dff6dc4',
				),
				array(
					'title'				=> __( 'Gallery', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'gallery', 'gallery 2' ),
					'categories'		=> array( 'gallery' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-2/gutentor_gallery.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-2/gallery.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/gallery/#section-55f5836a-bcb5-4347-8878-5be8bc0e0bda',
				),
				array(
					'title'				=> __( 'Gallery', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'gallery', 'gallery 3' ),
					'categories'		=> array( 'gallery' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-3/gutentor_gallery.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/gallery/gallery-3/gallery.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-bb3df405-4baf-46f6-ac64-cc976a0ca1f6',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Gallery::get_instance()->run();