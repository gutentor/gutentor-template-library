<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Gutentor_Template_Library_Block_Advanced_Columns' ) ) {

	/**
	 * Functions related to Advanced Columns
	 * @package Gutentor
	 * @since 1.0.1
	 *
	 */

	class Gutentor_Template_Library_Block_Advanced_Columns extends Gutentor_Template_Library_Base{

		/**
		 * Name of the block.
		 *
		 * @access protected
		 * @since 1.0.1
		 * @var string
		 */
		protected $block_name = 'advanced-columns';

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

                
				
		
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 3' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-3/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-3/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/#section-267ec38a-40a2-493f-ad1b-1f249dbc66a9',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 4' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-4/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-4/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/services/#section-51a4aceb-e17a-4196-92aa-42e663339dbe',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 5' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-5/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-5/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-2/contact/#section-0e9f01f6-da57-4c44-8e66-9c6d3b057499',
				// ),




				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 6' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-6/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-6/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/#section-3753ec3e-56f6-485f-8fb8-123241372e30',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 7' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-7/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-7/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-3/#section-ff179439-9a55-44bd-9a65-32e1b2a5a086',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 8' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-8/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-8/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/doctors/#section-8292a581-853b-47f8-9a96-e1ff7ead5a8b',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 9' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-9/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-9/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-5/contact/#section-5e0db84c-a7ff-4577-8867-a7bb977b2742',
				// ),
    //             array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 10' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-10/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-10/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/#section-27983c35-24ea-4958-82df-4dd6971b1eef',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 11' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-11/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-11/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-6/contact/#section-137b39f1-61d7-4424-9826-6948613d5d19',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 12' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-12/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-12/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-7/about/#section-0c25a0fa-8cbf-41a6-b2c9-37866ee90da1',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 13' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-13/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-13/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-7/contact/#section-0df27728-26a7-42a9-838b-76cdbaaea9bb',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 14' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-14/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-14/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/#section-9d3e0c55-226d-407b-b253-ca4a62ab99f6',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 15' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-15/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-15/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/about/#section-7b23b5d1-d85d-48a6-86c0-925679bc87ae',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 16' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-16/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-16/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-8/contact/#section-29814a67-ab42-4bf9-8310-9f0d5eddfd15',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 17' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-17/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-17/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-9/contact/#section-16963b4f-67b0-464c-b896-850a2f3b3cba',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 18' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-18/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-18/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/#section-59cbade3-a94f-4d94-b5f9-770e0724385f',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 19' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-19/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-19/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/#section-e472b5c3-21f2-49c2-9630-8156d414d824',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 20' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-20/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-20/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-10/contact/#section-c24b759d-aecc-41cc-9903-782b9e4529ba',
				// ),
				// array(
				// 	'title'				=> __( 'Advanced Columns', 'gutentor' ),
				// 	'type'				=> 'block',
				// 	'author'			=> __( 'CosmosWP', 'gutentor' ),
				// 	'keywords'			=> array( 'advanced-columns', 'advanced-columns 21' ),
				// 	'categories'		=> array( 'advanced-columns' ),
				// 	'template_url'		=> GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-21/gutentor_advanced-columns.json',
				// 	'screenshot_url'    => GUTENTOR_TEMPLATE_LIBRARY_GUTENTOR_URL.'template-data/blocks/advance-column/advance-column-21/advance-column.jpg',
				// 	'demo_url'    => 'https://www.demo.cosmoswp.com/demo-11/#section-f12b0d86-663c-4d5b-8cec-130f9cc4f953',
				// ),
                
            );

            return array_merge_recursive( $templates_list, $block_library_list );
        }
	}
}
Gutentor_Template_Library_Block_Advanced_Columns::get_instance()->run();