<?php

/**
 * Bootstrap Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Bootstrap
{
	/**
	 * Initialize by loading config
	 */
	public static function _init()
	{
		\Config::load('bootstrap', true);
	}

	/**
	 * Initialize bootstrap
	 */
	public static function init()
	{
		$autoload = \Config::get('bootstrap.autoload', false);

		if (!$autoload) {
			return;
		}

		$path = \Config::get('bootstrap.path', '');
		$use_min = \Config::get('bootstrap.use_min', true);

		$css_file = $path.'bootstrap';
		$js_file = $path.'bootstrap';

		if ($use_min) {
			$css_file .= '.min';
			$js_file .= '.min';
		}

		$css_file .= '.css';
		$js_file .= '.js';

		// See if Casset package is used.
		if (\Package::loaded('casset')) {
			\Casset::css($css_file, !$use_min);
			\Casset::js($js_file, !$use_min);
		} else {
			\Asset::css($css_file);
			\Asset::js($js_file);
		}
	}

}

class BootstrapException extends \FuelException {
}