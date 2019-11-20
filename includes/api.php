<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Gutentor_Template_Library_Api' ) ) {
	/**
	 * @package Gutentor
	 * @subpackage Gutentor Template Library Api
	 * @since 1.0.1
     *
     * Call like this
     * SITEURL/wp-json/gutentor-tlapi/v1/fetch_templates/
	 *
	 */
	class Gutentor_Template_Library_Api extends WP_Rest_Controller {

		/**
		 * Rest route namespace.
		 *
		 * @var Gutentor_Template_Library_Api
		 */
		public $namespace = 'gutentor-tlapi/';

		/**
		 * Rest route version.
		 *
		 * @var Gutentor_Template_Library_Api
		 */
		public $version = 'v1';

		/**
		 * Initialize the class
		 */
		public function run() {
			add_action( 'rest_api_init', array( $this, 'register_routes' ) );
        }

		/**
		 * Register REST API route
		 */
		public function register_routes() {
			$namespace = $this->namespace . $this->version;

			register_rest_route(
				$namespace,
				'/fetch_templates',
				array(
					array(
						'methods'	=> \WP_REST_Server::READABLE,
						'callback'	=> array( $this, 'fetch_templates' ),
					),
				)
			);
		}

		/**
		 * Function to fetch templates.
		 *
		 * @return array|bool|\WP_Error
		 */
		public function fetch_templates( \WP_REST_Request $request ) {

            $templates_list = array();

			$templates = apply_filters( 'gutentor_advanced_import_gutentor_template_library', $templates_list );

			return rest_ensure_response( $templates );
		}

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
		 * Throw error on object clone
		 *
		 * The whole idea of the singleton design pattern is that there is a single
		 * object therefore, we don't want the object to be cloned.
		 *
		 * @access public
		 * @since 1.0.0
		 * @return void
		 */
		public function __clone() {
			// Cloning instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'gutentor' ), '1.0.0' );
		}

		/**
		 * Disable unserializing of the class
		 *
		 * @access public
		 * @since 1.0.0
		 * @return void
		 */
		public function __wakeup() {
			// Unserializing instances of the class is forbidden.
			_doing_it_wrong( __FUNCTION__, esc_html__( 'Cheatin&#8217; huh?', 'gutentor' ), '1.0.0' );
		}
	}

}
Gutentor_Template_Library_Api::get_instance()->run();