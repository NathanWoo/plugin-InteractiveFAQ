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
// Preventing clients interact directly with the plugin