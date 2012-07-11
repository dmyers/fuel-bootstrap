<?php

/**
 * Twig Exetnsion Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Bootstrap_Addons_Twig extends \Twig_Extension
{
	/**
	 * Gets the name of the extension.
	 *
	 * @return  string
	 */
	public function getName()
	{
		return 'bootstrap';
	}

	/**
	 * Sets up all of the functions this extension makes available.
	 *
	 * @return  array
	 */
	public function getFunctions()
	{
		return array(
			'render_alerts'      => new \Twig_Function_Function('Alerts::render'),
			'render_breadcrumbs' => new \Twig_Function_Function('Breadcrumbs::render'),
			'render_navigation'  => new \Twig_Function_Function('Navigation::render'),
		);
	}
}
