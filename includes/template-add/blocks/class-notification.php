<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Notification' ) ) {

	/**
	 * Functions related to About Block
	 * @package Gutentor
	 * @since 1.1.5
	 *
	 */

	class Gutentor_Template_Library_Block_Notification extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.1.5
		 * @var string
		 */
		protected $block_name = 'notification';

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
					'title'				=> __( 'Notification Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'notification', 'notification 1' ),
					'categories'		=> array( 'notification' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-1/gutentor_notification.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-1/notification.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/notification/#section-24d95c46-83e8-4088-9d0b-df1bdff55fc7',
				),
				array(
					'title'				=> __( 'Notification Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'notification', 'notification 2' ),
					'categories'		=> array( 'notification' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-2/gutentor_notification.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-2/notification.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/notification/#section-13041e64-e723-4b90-b161-116337326d10',
				),
				array(
					'title'				=> __( 'Notification Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'notification', 'notification 3' ),
					'categories'		=> array( 'notification' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-3/gutentor_notification.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-3/notification.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/notification/#section-aafc81ad-fb2b-4753-bf93-8d14fa7753dc',
				),
				array(
					'title'				=> __( 'Notification Block', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'notification', 'notification 4' ),
					'categories'		=> array( 'notification' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-4/gutentor_notification.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_URL.'includes/template-data/blocks/notification/notification-4/notification.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/notification/#section-f0d29cf8-7fa6-4ab2-ab57-3ba2f7b5ff20',
				),

            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Notification::get_instance()->run();