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
	/**
	 * loaded navigation instance
	 */
	protected static $_instance = null;

	/**
	 * Initialize by loading config
	 */
	public static function _init()
	{
		\Config::load('navigation', true);
	}

	/**
	 * Returns a new Navigation object.
	 *
	 *     $navigation = Navigation::forge();
	 *
	 * @param	void
	 * @access	public
	 * @return  Navigation
	 */
	public static function forge()
	{
		return new static;
	}

	/**
	 * create or return the navigation instance
	 *
	 * @param	void
	 * @access	public
	 * @return	Navigation object
	 */
	public static function instance()
	{
		if (static::$_instance === null) {
			static::$_instance = static::forge();
		}

		return static::$_instance;
	}

	/**
	 * renders the navigation
	 *
	 * @param	void
	 * @access	public
	 * @return	void
	 */
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

			// Set link to active if it matches the current page URI.
			if (!isset($link['active'])) {
				$link['active'] = ($link['url'] == ltrim(\Input::uri(), '/'));
			}
		}

		return \View::forge('navigation', array('links' => $links));
	}
}
