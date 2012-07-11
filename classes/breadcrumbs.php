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
	 * renders the breadcrumbs
	 *
	 * @param   array   array with tag attribute settings
	 * @access	public
	 * @return	void
	 */
	public static function render(array $attributes = array()))
	{
		if (empty(self::$breadcrumbs)) {
			return;
		}

		if (isset($attributes['class'])) {
			$attributes['class'] = 'breadcrumb '.$attributes['class'];
		} else {
			$attributes['class'] = 'breadcrumb';
		}

		echo \View::forge('breadcrumbs.php', array('links' => self::$breadcrumbs, 'attributes' => array_to_attr($attributes)))->render();
	}
}
