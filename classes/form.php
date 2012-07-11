<?php

/**
 * Form Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Form extends \Fuel\Core\Form
{
	public static function button($field, $value = null, array $attributes = array())
	{
		if (isset($attributes['class'])) {
			$attributes['class'] = 'btn '.$attributes['class'];
		}

		return static::$instance->button($field, $value, $attributes);
	}

	public static function reset($field = 'reset', $value = 'Reset', array $attributes = array())
	{
		if (isset($attributes['class'])) {
			$attributes['class'] = 'btn '.$attributes['class'];
		}

		return static::$instance->reset($field, $value, $attributes);
	}

	public static function submit($field = 'submit', $value = 'Submit', array $attributes = array())
	{
		if (isset($attributes['class'])) {
			$attributes['class'] = 'btn '.$attributes['class'];
		}
		
		return static::$instance->submit($field, $value, $attributes);
	}
}