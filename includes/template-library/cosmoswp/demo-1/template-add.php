<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_CosmosWP_Demo_1' ) ) {

	/**
	 * Functions related to About Block
	 *
	 * @package Gutentor
	 * @since 1.1.0
	 */

	class Gutentor_Template_Library_CosmosWP_Demo_1 extends Gutentor_Template_Library_Base {

		/**
		 * Gets an instance of this object.
		 * Prevents duplicate instances which avoid artefacts and improves performance.
		 *
		 * @static
		 * @access public
		 * @since 1.1.0
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
		public function add_block_template_library( $templates_list ) {

			$block_library_list = array(

				// Block/Modules Templates Starts
				array(
					'title'          => __( 'About Block', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'about-block', 'about 3' ),
					'categories'     => array( 'cosmoswp', 'about' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/about/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/about/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/about/#section-2a6b9277-d4f1-4767-944c-5dcd80dc8ec5',
				),
				array(
					'title'          => __( 'Icon Box', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'icon-box', 'icon-box' ),
					'categories'     => array( 'cosmoswp', 'icon-box' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/icon-box/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/icon-box/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-50bb61c4-17ce-43e6-a31d-7c0097c3f4e7',
				),
				array(
					'title'          => __( 'Counter', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'counter', 'counter 3' ),
					'categories'     => array( 'cosmoswp', 'counter' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/counter/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/counter/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-be6e9959-dd4f-473b-b407-52d245e37172',
				),

				array(
					'title'          => __( 'Image Box', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'image-box', 'image-box 4' ),
					'categories'     => array( 'cosmoswp', 'image-box' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/image-box/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/image-box/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-7f016bc2-26cd-4e12-8070-23fde6abe445',
				),
				array(
					'title'          => __( 'Team', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'team', 'team 3' ),
					'categories'     => array( 'cosmoswp', 'team' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/team/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/team/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-41be7ade-1721-4cf9-b989-d56eb8be0f85',
				),
				array(
					'title'          => __( 'Call To Action', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'call-to-action', 'call-to-action 3' ),
					'categories'     => array( 'cosmoswp', 'call-to-action' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/call-to-action/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/call-to-action/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-388c17c0-984d-4720-b47d-cbee12299db3',
				),
				array(
					'title'          => __( 'Blog', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'blog', 'blog 2' ),
					'categories'     => array( 'cosmoswp', 'blog' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/blog/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/blog/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/#section-db90a0b0-1386-4383-8618-c57f8a8b8244',
				),

				array(
					'title'          => __( 'Advanced Columns', 'gutentor' ),
					'type'           => 'widget',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'advanced-columns', 'advanced-columns 1' ),
					'categories'     => array( 'cosmoswp', 'advanced-columns' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/advance-column/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/modules/advance-column/screenshot.jpg',
					'demo_url'       => 'https://www.demo.cosmoswp.com/demo-1/contact-us/#section-279e7f46-0555-46e0-b9c8-7ee298092bd1',
				),

				// Block Templates ends

				// Template Kits Starts
				array(
					'id'             => 'cosmoswp-demo-1',
					'title'          => __( 'Business 1', 'gutentor' ),
					'type'           => 'template-kit',
					'author'         => __( 'CosmosWP', 'gutentor' ),
					'keywords'       => array( 'business', 'corporate' ),
					'categories'     => array( 'business' ),
					'template_url'   => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/home/template.json',
					'screenshot_url' => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/home/screenshot.jpg',
				),
				// Template Kits ends

				// Page Templates Starts

				array(
					'title'           => __( 'Home 1', 'gutentor' ),
					'type'            => 'template',
					'author'          => __( 'CosmosWP', 'gutentor' ),
					'keywords'        => array( 'home-page', 'home page 1' ),
					'categories'      => array( 'cosmoswp', 'business' ),
					'template_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/home/template.json',
					'screenshot_url'  => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/home/screenshot.jpg',
					'demo_url'        => 'https://www.demo.cosmoswp.com/demo-1/',
					'template_kit_id' => 'cosmoswp-demo-1',
				),
				array(
					'title'           => __( 'About 1', 'gutentor' ),
					'type'            => 'template',
					'author'          => __( 'CosmosWP', 'gutentor' ),
					'keywords'        => array( 'about-page', 'about page 1' ),
					'categories'      => array( 'cosmoswp', 'about' ),
					'template_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/about/template.json',
					'screenshot_url'  => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/about/screenshot.jpg',
					'demo_url'        => 'https://www.demo.cosmoswp.com/demo-1/about',
					'template_kit_id' => 'cosmoswp-demo-1',

				),
				array(
					'title'           => __( 'Service 1', 'gutentor' ),
					'type'            => 'template',
					'author'          => __( 'CosmosWP', 'gutentor' ),
					'keywords'        => array( 'service', 'service 1' ),
					'categories'      => array( 'cosmoswp', 'services' ),
					'template_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/service/template.json',
					'screenshot_url'  => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/service/screenshot.jpg',
					'demo_url'        => 'https://www.demo.cosmoswp.com/demo-1/services/',
					'template_kit_id' => 'cosmoswp-demo-1',

				),
				array(
					'title'           => __( 'Contact 1', 'gutentor' ),
					'type'            => 'template',
					'author'          => __( 'CosmosWP', 'gutentor' ),
					'keywords'        => array( 'contact', 'contact 1' ),
					'categories'      => array( 'cosmoswp', 'contact' ),
					'template_url'    => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/contact/template.json',
					'screenshot_url'  => GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL . 'demo-1/template-data/templates/contact/screenshot.jpg',
					'demo_url'        => 'https://www.demo.cosmoswp.com/demo-1/contact-us/',
					'template_kit_id' => 'cosmoswp-demo-1',
				),
				// Page Templates Ends
			);

			return array_merge_recursive( $templates_list, $block_library_list );
		}
	}
}
Gutentor_Template_Library_CosmosWP_Demo_1::get_instance()->run();
