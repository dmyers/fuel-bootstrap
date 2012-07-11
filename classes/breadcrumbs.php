<?php

/**
 * Breadcrumbs Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Breadcrumbs
{
	/**
	 * loaded breadcrumbs instance
	 */
	protected static $_instance = null;
	
	/**
	 * array of breadcrumbs
	 */
	public static $breadcrumbs = array();

	/**
	 * Returns a new Breadcrumbs object.
	 *
	 *     $breadcrumbs = Breadcrumbs::forge();
	 *
	 * @param	void
	 * @access	public
	 * @return  Breadcrumbs
	 */
	public static function forge()
	{
		return new static;
	}

	/**
	 * create or return the breadcrumbs instance
	 *
	 * @param	void
	 * @access	public
	 * @return	Breadcrumbs object
	 */
	public static function instance()
	{
		if (static::$_instance === null) {
			static::$_instance = static::forge();
		}

		return static::$_instance;
	}

	/**
	 * adds new breadcrumb
	 *
	 * @param	string	title for breadcrumb
	 * @param	string	url for breadcrumb
	 * @param	bool	whether breadcrumb is active
	 * @access	public
	 * @return	void
	 */
	public static function add($title, $url = false, $active = false)
	{
		self::$breadcrumbs[] = array(
			'title'  => $title,
			'url'    => $url,
			'active' => $active,
		);
	}

	/**
	 * adds new active breadcrumb without url
	 *
	 * @param	string	title for breadcrumb
	 * @access	public
	 * @return	void
	 */
	public static function active($title)
	{
		self::add($title, false, true);
	}

	/**
	 * renders the alerts
	 *
	 * @param	void
	 * @access	public
	 * @return	void
	 */
	public static function render()
	{
		if (empty(self::$breadcrumbs)) {
			return;
		}

		return \View::forge('breadcrumbs.php', array('links' => self::$breadcrumbs));
	}
}
