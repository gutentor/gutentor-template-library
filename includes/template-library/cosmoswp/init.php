<?php

/**
 * The file that defines the all templates from CosmosWP
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
 * @author     Gutentor_Template_Library_CosmosWP <info@gutentor.com>
 */
class Gutentor_Template_Library_CosmosWP {

    /**
     * Main Instance
     *
     * Insures that only one instance of Gutentor_Template_Library_CosmosWP exists in memory at any one
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
            if ( !defined( 'GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH' ) ) {
                define( 'GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH', GUTENTOR_TEMPLATE_LIBRARY_PATH . 'includes/template-library/cosmoswp/' );
                define( 'GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_URL', GUTENTOR_TEMPLATE_LIBRARY_URL . 'includes/template-library/cosmoswp/' );
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
     * - Gutentor_Template_Library_CosmosWP. Orchestrates the hooks of the plugin.
     *
     * @since    1.1.0
     * @access   private
     */
    private function load_dependencies() {
        
        /*Block Library*/
        require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-1/template-add.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-2/template-add.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-3/template-add.php';
        require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-5/template-add.php';
       require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-6/template-add.php';
        /* require_once GUTENTOR_TEMPLATE_LIBRARY_COSMOSWP_PATH . 'demo-6/template-add.php';*/

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
Gutentor_Template_Library_CosmosWP::instance()->run();