<?php

/**
 * Navigation Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Navigation
{
	protected static $_instance = null;

	public static function _init()
	{
		\Config::load('navigation', true);
	}

	public static function forge()
	{
		return new static;
	}

	public static function instance()
	{
		if (static::$_instance === null) {
			static::$_instance = static::forge();
		}

		return static::$_instance;
	}

	public static function render($type = 'default')
	{
		if (empty($type)) {
			return;
		}
		
		$links = \Config::get('navigation.' . $type, false);

		if (empty($links)) {
			return;
		}

		foreach ($links as $key => &$link) {
			if (empty($link['url'])) {
				$link['url'] = \Inflector::friendly_title($link['title'], '-', true);
			}

			if (!isset($link['active'])) {
				$link['active'] = ($link['url'] == ltrim(\Input::uri(), '/'));
			}
		}

		return \View::forge('navigation', array('links' => $links));
	}
}
