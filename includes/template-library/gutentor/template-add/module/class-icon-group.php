<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists('Gutentor_Template_Library_Block_Icon_Group' ) ) {

	/**
	 * Functions related to Icon Group
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Icon_Group extends Gutentor_Template_Library_Base{

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
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 1' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-1/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-1/template-1.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gma8b12fa',
				),
				array(
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 2' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-2/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-2/template-2.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gmbf91079',
				),
				array(
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 3' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-3/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-3/template-3.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gm4c4500a',
				),
				array(
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 4' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-4/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-4/template-4.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gm4a6eb62',
				),
				array(
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 5' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-5/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-5/template-5.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gm5ec193c',
				),
				array(
					'title'				=> __( 'Icon Group', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-group', 'icon-group 6' ),
					'categories'		=> array( 'icon-group' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-6/gutentor_m8.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-6/template-6.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gm8014735',
				),
				array(
						'title'				=> __( 'Icon Group', 'gutentor' ),
						'type'				=> 'block',
						'author'			=> __( 'Gutentor', 'gutentor' ),
						'keywords'			=> array( 'icon-group', 'icon-group 7' ),
						'categories'		=> array( 'icon-group' ),
						'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-7/gutentor_m8.json',
						'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/module/icon-group/template-7/template-7.jpg',
						'demo_url'    => 'https://www.demo.gutentor.com/icon-group/#gm0e04cf9',
					),
				
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Icon_Group::get_instance()->run();