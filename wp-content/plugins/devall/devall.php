<?php
/*
	Plugin Name: Devall
	Plugin URI: http://designbyparent.com
	description: A Plugin for the Devall Website
	Version: 1.2
	Author: Parent
	Author URI: http://designbyparent.com
	License: GPL2
*/

	include('classes/rwdcustomfield.php');

	$plugin_url = WP_PLUGIN_URL . '/devall';
	$options = array();

	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 'On');  //On or Off

	class DevallPlugin {

		private $plugin_url;

		function add_plugin_menu(){

			add_menu_page(
				'Devall',
				'Devall',
				'manage_options',
				'devall',
				array($this, 'options_page')
			);

		}

		function options_page(){

			if( !current_user_can( 'manage_options' ) ){
				wp_die( 'You do not have sufficient permissions to access this page' );
			}

			require( 'views/options.php' );

		}

		function script_enqueuer() {

			if(isset($_GET['page'])){

		    	if( $_GET['page'] == 'devall' ){



		    	}
					    	
		    }

		}

		function admin_styles(){
			wp_enqueue_style( 'devall_admin_styles', $this->plugin_url . '/assets/css/admin.css');
		}

		function customSetup(){

			// Custom fields for pages

			$rtcw_our_history = new RwdCustomField(NULL, 'page', 'Extra Images', array(
			    array(
			        'label' => 'Secondary Image',
			        'content_type' => 'image'
			    )
			));

		}

		function __construct($plugin_url){

			$this->plugin_url = $plugin_url;
			add_action( 'admin_menu', array($this, 'add_plugin_menu') );
			add_action( 'admin_head', array($this, 'admin_styles') );
			$this->customSetup();

		}

	}

	$devallPlugin = new DevallPlugin($plugin_url);

?>
