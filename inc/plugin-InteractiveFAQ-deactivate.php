<?php
/**
 * @package  SexInfoPlugin
 */

class SexInfo_FAQGplugin
{
	public static function deactivate() {
		flush_rewrite_rules();
	}
}