<?php
defined ( 'SYSPATH' ) or die ( 'No direct access allowed.' );

/**
 * Smarty module for Kohana 3
 * 
 * Can be used with either Smarty2 or Smarty3
 *
 * @package    Ksmarty
 * @author     Reza Esmaili
 * @copyright  (c) 2009 Reza Esmaili
 * @license    http://kohanaphp.com/license.html
 */

abstract class Ksmarty {
	
	protected static $instance;
	
	/**
	 * Ksmarty singleton instance 
	 *
	 * @return  singleton
	 */
	public static function instance() {
		// Check if the instance already exists
		if (Ksmarty::$instance === NULL) {
			
			// Load Smarty
			if (! class_exists ( 'Smarty', FALSE )) {
				require Kohana::find_file ( 'vendor', 'smarty/Smarty.class' );
			}
			
			// Initialize Smarty
			$s = new Smarty ();
			
			// Apply configuration data
			$s->compile_dir = Kohana::$config->load ( 'smarty' )->compile_dir;
			$s->plugins_dir = Kohana::$config->load ( 'smarty' )->plugins_dir;
			$s->cache_dir = Kohana::$config->load ( 'smarty' )->cache_dir;
			$s->config_dir = Kohana::$config->load ( 'smarty' )->config_dir;
			
			$s->debug_tpl = Kohana::$config->load ( 'smarty' )->debug_tpl;
			$s->debugging_ctrl = Kohana::$config->load ( 'smarty' )->debugging_ctrl;
			$s->debugging = Kohana::$config->load ( 'smarty' )->debugging;
			$s->caching = Kohana::$config->load ( 'smarty' )->caching;
			$s->force_compile = Kohana::$config->load ( 'smarty' )->force_compile;
			//$s->security = Kohana::$config->load ( 'smarty' )->security;
			
			// Register the autoload filters
			$s->autoload_filters = array ('pre' => Kohana::$config->load ( 'smarty' )->pre_filters, 'post' => Kohana::$config->load ( 'smarty' )->post_filters, 'output' => Kohana::$config->load ( 'smarty' )->output_filters );
			
			// Create the instance singleton
			Ksmarty::$instance = $s;
		}
		
		// Return the singleton
		return Ksmarty::$instance;
	}
} // End Ksmarty
