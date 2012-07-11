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
		} else {
			$attributes['class'] = 'btn';
		}

		return parent::button($field, $value, $attributes);
	}

	public static function reset($field = 'reset', $value = 'Reset', array $attributes = array())
	{
		if (isset($attributes['class'])) {
			$attributes['class'] = 'btn '.$attributes['class'];
		} else {
			$attributes['class'] = 'btn';
		}

		return parent::reset($field, $value, $attributes);
	}

	public static function submit($field = 'submit', $value = 'Submit', array $attributes = array())
	{
		if (isset($attributes['class'])) {
			$attributes['class'] = 'btn '.$attributes['class'];
		} else {
			$attributes['class'] = 'btn';
		}
		
		return parent::submit($field, $value, $attributes);
	}
}