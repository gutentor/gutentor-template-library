<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Team' ) ) {

	/**
	 * Functions related to Team
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Team extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'team';

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
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 1' ),
					'categories'		=> array( 'team' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-1/gutentor_team.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-1/team.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/team/#section-3ffc55c6-ddde-4e3e-b565-b2a06c13552e',
				),
				array(
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'Gutentor', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 2' ),
					'categories'		=> array( 'team' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-2/gutentor_team.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-2/team.jpg',
					'demo_url'    => 'https://www.demo.gutentor.com/free-block-demo/team/#section-4481ff58-fb08-4635-8e9f-6bac9d207119',
				),
				array(
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 3' ),
					'categories'		=> array( 'team' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-3/gutentor_team.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-3/team.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-1/#section-5ba57fd2-8f1b-4ee0-a312-472a5bde9dd2',
				),
				array(
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 4' ),
					'categories'		=> array( 'team' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-4/gutentor_team.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-4/team.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/#section-f87fd00e-5f5d-4836-9c22-13734023da5b',
				),
				array(
					'title'				=> __( 'Team', 'gutentor' ),
					'type'				=> 'block',
					'author'			=> __( 'CosmosWP', 'gutentor' ),
					'keywords'			=> array( 'team', 'team 5' ),
					'categories'		=> array( 'team' ),
					'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-5/gutentor_team.json',
					'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/team/team-5/team.jpg',
					'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/#section-93dce984-4c75-4454-80e6-27e8085ef49a',
				),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Team::get_instance()->run();