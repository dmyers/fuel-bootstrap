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
	 * Initialize bootstrap
	 */
	public static function init()
	{
		// See if Casset package is used.
		if (\Package::loaded('casset')) {
			\Casset::css('bootstrap.css');
			\Casset::js('bootstrap.min.js');
		} else {
			\Asset::css('bootstrap.min.css');
			\Asset::js('bootstrap.min.js');
		}
	}

}

class BootstrapException extends \FuelException {
}