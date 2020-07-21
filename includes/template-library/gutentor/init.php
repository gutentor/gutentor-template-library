<?php

/**
 * The file that defines the all templates from gutentor
 *
 * @link       https://www.gutentor.com/
 * @since      1.1.0
 *
 * @package     Gutentor
 * @subpackage  Gutentor Template Library
 */

/**
 * The file that defines the all templates from gutentor
 *
 * @since      1.1.0
 * @package     Gutentor
 * @subpackage  Gutentor Template Library
 * @author     Gutentor_Template_Library_Gutentor <info@gutentor.com>
 */
class Gutentor_Template_Library_Gutentor {

    /**
     * Main Instance
     *
     * Insures that only one instance of Gutentor_Template_Library_Gutentor exists in memory at any one
     * time. Also prevents needing to define globals all over the place.
     *
     * @since    1.1.0
     * @access   public
     *
     * @return object
     */
    public static function instance() {

        // Store the instance locally to avoid private static replication.
        static $instance = null;

        // Only run these methods if they haven't been ran previously.
        if ( null === $instance ) {
            $instance = new self();
            if ( !defined( 'GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH' ) ) {
                define( 'GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH', GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-library/gutentor/' );
                define( 'GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL', GUTENTOR_TEMPLATE_LIBRARY_URL . 'includes/template-library/gutentor/' );
            }
        }

        // Always return the instance
        return $instance;
    }

    /**
     * Define the core functionality of the class.
     *
     * @since    1.1.0
     */
    public function run() {
        $this->load_dependencies();
    }


    /**
     * Load the required dependencies for this class.
     *
     * Include the following files that make up the plugin:
     *
     * - Gutentor_Template_Library_Gutentor. Orchestrates the hooks of the plugin.
     *
     * @since    1.1.0
     * @access   private
     */
    private function load_dependencies() {
        
        /*Block Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-about-block.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-accordion.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-author-profile.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-blog-post.php';/* ***Do not remove required for PHP BLOCK*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-call-to-action.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-count-down.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-counter-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-featured-block.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-gallery.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-google-map.php';/* ***Do not remove required for PHP BLOCK*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-icon-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-image-box.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-image-slider.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-list.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-notification.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-opening-hours.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-pricing.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-progress-bar.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-restaurant-menu.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-show-more.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-social.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-tabs.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-team.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-testimonial.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-timeline.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/blocks/class-video-popup.php';

        /*Template Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-agency.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-business.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-construction.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-education.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-fitness.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-medical.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-multipurpose.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/templates/class-travel.php';

        /*Modules*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-post-module.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-post-feature.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-advanced-post-module.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-post-carousel.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-news-ticker.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_PATH . 'template-add/module/class-accordion-module.php';
    }
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
Gutentor_Template_Library_Gutentor::instance()->run();