<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used to
 * add/remove/edit the functionality of the Gutentor_Template_Library Plugin
 *
 * @link       https://www.gutentor.com/
 * @since      1.0.0
 *
 * @package     Gutentor
 * @subpackage  Gutentor Template Library
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * functionality of the plugin
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package     Gutentor
 * @subpackage  Gutentor Template Library
 * @author     Gutentor_Template_Library <info@gutentor.com>
 */
class Gutentor_Template_Library {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Gutentor_Template_Library    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * Full Name of plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_full_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_full_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Main Instance
	 *
	 * Insures that only one instance of Gutentor_Template_Library exists in memory at any one
	 * time. Also prevents needing to define globals all over the place.
	 *
	 * @since    1.0.0
	 * @access   public
	 *
	 * @return object
	 */
	public static function instance() {

		// Store the instance locally to avoid private static replication
		static $instance = null;

		// Only run these methods if they haven't been ran previously
		if ( null === $instance ) {
			$instance = new Gutentor_Template_Library;

			do_action( 'GUTENTOR_TEMPLATE_LIBRARY_LOADED' );
		}

		// Always return the instance
		return $instance;
	}

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		if ( defined( 'GUTENTOR_TEMPLATE_LIBRARY_VERSION' ) ) {
			$this->version = GUTENTOR_TEMPLATE_LIBRARY_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = GUTENTOR_TEMPLATE_LIBRARY_PLUGIN_NAME;
		$this->plugin_full_name = esc_html__('Gutentor Template Library','gutentor-template-library');

		if(function_exists('register_block_type')){
			$this->load_dependencies();
			$this->set_locale();
		}
	}


	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Gutentor_Template_Library. Orchestrates the hooks of the plugin.
	 * - Gutentor_Template_Library_i18n. Defines internationalization functionality.
	 * - Gutentor_Admin. Defines all hooks for the admin area.
	 * - Gutentor_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {
		
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/i18n.php';

		/*API*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/api.php';

        /*Template Library Base*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-library/class-template-library-base.php';

		$this->loader = new Gutentor_Template_Library_Loader();
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Gutentor_Template_Library_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Gutentor_Template_Library_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Gutentor_Template_Library    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}