<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Woocommerce' ) ) {

	/**
	 * Functions related to Video_Popup
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Woocommerce extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Woocommerce Template 1', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce', 'woocommerce 1' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-1/#woo-template-1',
				),
				array(
					'title'				=> __( 'Woocommerce Template 1.1', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce', 'list-view' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1-1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1-1/template-1-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-1/#woo-template-1-1',
				),
				array(
					'title'				=> __( 'Woocommerce Template 1.2', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1-2/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1-2/template-1-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-1/#woo-template-1-2',
				),
				 array(
					'title'				=> __( 'Woocommerce Template 2', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce', 'woocommerce 2' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-2/#woo-template-2',
				),
				array(
					'title'				=> __( 'Woocommerce Template 2.1', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce', 'list-view' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-2-1/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-2-1/template-2-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-2/#woo-template-2-1',
				),
				array(
					'title'				=> __( 'Woocommerce Template 2.2', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'woocommerce' ),
					'categories'		=> array( 'woocommerce' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-2-2/gutentor_p1.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/woocommerce/template-2-2/template-2-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/woocommerce/template-2/#woo-template-2-2',
				),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Woocommerce::get_instance()->run();