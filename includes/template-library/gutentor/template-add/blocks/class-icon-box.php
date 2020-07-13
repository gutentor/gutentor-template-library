<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Icon_Box' ) ) {

	/**
	 * Functions related to Icon Box
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Icon_Box extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'icon-box';

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
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 1' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-1/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-1/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-18862d51-0408-4a36-88a7-006d9bb90e3b',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 2' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-2/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-2/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-b52e1194-a4a6-4501-94d9-94bcb91549e3',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 3' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-3/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-3/icon-box.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/icon-box/#section-971dbb03-7d2f-4f25-84ad-72a8c94d6c3a',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 4' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-4/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-4/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-37c6cbb0-3005-4caf-b4c0-624d84d938b4',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 5' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-5/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-5/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-b16ddc45-5786-4125-85ff-7e5cf595163a',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 6' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-6/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-6/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/#section-81b2878b-6404-4567-bdd9-7930a3a1b88a',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 7' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-7/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-7/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/services/#section-b5ce6999-a9c3-4a41-9ee5-004c629d296a',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 8' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-8/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-8/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/#section-09120d56-55fa-4aad-947e-8c71a71d8522',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 9' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-9/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-9/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/#section-319f93aa-d8a0-48ad-afc2-8b091c271162',
				),
				array(
					'title'				=> __( 'Icon Box', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'icon-box', 'icon-box 10' ),
					'categories'		=> array( 'icon-box' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-10/gutentor_icon-box.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/icon-box/icon-box-10/icon-box.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/#section-d2551c3a-af95-4482-a5fe-06b82b6b4a7e',
				),
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Icon_Box::get_instance()->run();