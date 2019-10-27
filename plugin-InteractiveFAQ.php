<?php
/**
 * Plugin Name: 	Interactive FAQ
 * Description: 	This interactive FAQ enable editors to manage the FAQ se			ction of their website more easily 
 * Version: 		1.0
 * Requires at least: 	5.2
 * Requires PHP:	7.2
 * Author:		Nathan Wu and Jennice Xu
 * License:		GPL v2 or later
 * License URI:		https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain:		plugin-InteractiveFAQ

Interactive FAQ is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Interactive FAQ is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Interactive FAQ. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
 */


// Step 1. Setting up security protection.
//if (! defined('ABSPATH') ){
//	die;
//}

defined('ABSPATH') or die("Access permission denied.");

if (! function_exists("add_action")){
	echo "Access permission denied";
	exit;
}

class TestingClass {
	function register(){
		add_action('admin_enqueue_scripts', array($this, 'enqueue'));
	}

	function activate() {
		$this->custom_post_type();;
		flush_rewrite_rules();
		// generate TCP
		// flush rewrite rules
	}

	function deactivate() {
		flush_rewrite_rules();
		// flush rewrite rules
	}

	function uninstall() {
		// delete CPT
		//delete all the plugin data from the DB
	}

	protected function create_post_type(){
		add_action('init', array($this, 'custom_post_type'));
	}

	function custom_post_type (){
		register_post_type('FAQ', ['public' => true, 'label' => 'FAQ']);
	}

	function enqueue() {
		wp_enqueue_style('myplugintyle', plugins_url('assets/mystyle.css', __FILE__ ) );
		wp_enqueue_script('myplugintyle', plugins_url('assets/myscript.js', __FILE__ ) );
	}

	
}

if (class_exists('TestingClass')){
	// $TestingClass1 = new TestingClass();
	// $TestingClass1 -> register();
}


// customFunction("This is my arg");

// Wordpress triggers plugin at these time:
// activation 
register_activation_hook(__FILE__ , array($TestingClass1, 'activate'));
// deactivation
register_deactivation_hook(__FILE__ , array($TestingClass1, 'deactivate'));
// unistalled
register_uninstall_hook(__FILE__ , array($TestingClass1, 'uninstall'));

// Preventing clients interact directly with the plugin