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
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/class-template-library-base.php';

        /*Block Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-about-block.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-accordion.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-advanced-columns.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-author-profile.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-blog-post.php';/* ***Do not remove required for PHP BLOCK*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-call-to-action.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-content-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-count-down.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-counter-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-divider.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-featured-block.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-gallery.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-google-map.php';/* ***Do not remove required for PHP BLOCK*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-icon-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-image-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-image-slider.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-list.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-notification.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-opening-hours.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-pricing.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-progress-bar.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-restaurant-menu.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-show-more.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-single-column.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-social.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-tabs.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-team.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-testimonial.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-timeline.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/blocks/class-video-popup.php';

        /*Template Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-agency.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-business.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-construction.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-education.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-fitness.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-medical.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-multipurpose.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-travel.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-blog.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-photography.php';
        /*Inner Pages Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-about.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-service.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-contact.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-gallery.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-pricing.php';
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/templates/class-list.php';
		
		/*Modules*/
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/module/class-post-module.php';
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/module/class-post-feature.php';
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/module/class-advanced-post-module.php';
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/module/class-post-carousel.php';
		require_once GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-add/module/class-news-ticker.php';

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