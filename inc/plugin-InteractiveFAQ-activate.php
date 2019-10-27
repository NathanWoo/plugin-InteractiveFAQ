<?php
/**
 * @package  InteractiveFAQ
 */

class SexInfoFAQPlugin
{
	public static function activate() {
		flush_rewrite_rules();
	}
}