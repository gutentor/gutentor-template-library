<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists('Gutentor_Template_Library_Block_Filter_Module' ) ) {

	/**
	 * Functions related to Filter Module
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Filter_Module extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Filter Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'filter' ),
					'categories'		=> array( 'filter-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-1/gutentor_m11.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/filter-module/#filter-module1',
				),
				array(
					'title'				=> __( 'Filter Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'filter' ),
					'categories'		=> array( 'filter-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-2/gutentor_m11.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/filter-module/#filter-module2',
				),
				array(
					'title'				=> __( 'Filter Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'filter' ),
					'categories'		=> array( 'filter-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-3/gutentor_m11.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/filter-module/#filter-module3',
				),
				array(
					'title'				=> __( 'Filter Module', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'filter' ),
					'categories'		=> array( 'filter-module' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-4/gutentor_m11.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/filter-module/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/module-elements/filter-module/#filter-module4'
				),
				
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Filter_Module::get_instance()->run();