<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Base' ) ) {

    /**
     * Base Class For Gutentor for common functions
     * @package Gutentor
     * @subpackage Gutentor Template Library
     * @since 1.0.0
     *
     */
    class Gutentor_Template_Library_Base{

        /**
         * Run Block
         *
         * @access public
         * @since 1.0.0
         * @return void
         */
        public function run(){

            if( method_exists( $this, 'add_block_template_library' ) ){
                add_filter( 'gutentor_advanced_import_gutentor_template_library', array( $this, 'add_block_template_library' ) );
            }
        }
    }
}