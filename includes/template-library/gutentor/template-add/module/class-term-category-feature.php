<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists('Gutentor_Template_Library_Block_Term_Category_Feature' ) ) {

	/**
	 * Functions related to Term Category Feature
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Term_Category_Feature extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Term Category Feature', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'term', 'category' ),
					'categories'		=> array( 'term-category-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-1/gutentor_t2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/term-category-feature/#term-category1',
				),
				array(
					'title'				=> __( 'Term Category Feature', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'term', 'category' ),
					'categories'		=> array( 'term-category-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-2/gutentor_t2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/term-category-feature/#term-category2',
				),
				array(
					'title'				=> __( 'Term Category Feature', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'term', 'category' ),
					'categories'		=> array( 'term-category-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-3/gutentor_t2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/term-category-feature/#term-category3',
				),
				array(
					'title'				=> __( 'Term Category Feature', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'term', 'category' ),
					'categories'		=> array( 'term-category-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-4/gutentor_t2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/term-category-feature/#term-category4'
				),
				array(
					'title'				=> __( 'Term Category Feature', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'term', 'category' ),
					'categories'		=> array( 'term-category-feature' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-5/gutentor_t2.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/term-category-feature/template-5/template-5.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/term-category-feature/#term-category5'
				),
				
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Term_Category_Feature::get_instance()->run();