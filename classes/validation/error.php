<?php

/**
 * Validation Error Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Validation_Error extends \Fuel\Core\Validation_Error
{
	public function get_message($msg = false, $open = '', $close = '')
	{
		return parent::get_message($msg, '<span class="help-inline">', '</span>');
	}
}