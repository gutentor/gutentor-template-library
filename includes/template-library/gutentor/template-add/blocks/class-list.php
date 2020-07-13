<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_List' ) ) {

	/**
	 * Functions related to About Block
	 * @package Gutentor
	 * @since 1.1.5
	 *
	 */

	class Gutentor_Template_Library_Block_List extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.1.5
		 * @var string
		 */
		protected $block_name = 'list';

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
					'title'				=> __( 'List Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'list', 'list 1' ),
					'categories'		=> array( 'list' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-1/gutentor_list.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-1/list.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/list/#section-8f4613b9-f012-4044-b04d-0f458132a42a',
				),
				array(
					'title'				=> __( 'List Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'list', 'list 2' ),
					'categories'		=> array( 'list' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-2/gutentor_list.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-2/list.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/list/#section-10536d92-1a4d-4288-b7f5-8bea7d6349ea',
				),
				array(
					'title'				=> __( 'List Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'list', 'list 3' ),
					'categories'		=> array( 'list' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-3/gutentor_list.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/list/list-3/list.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/list/#section-0808a464-478f-4450-a825-47c5120d2199',
				),

            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_List::get_instance()->run();