<?php

/**
 * Pagination Class
 *
 * @package		Bootstrap
 * @category	Package
 * @author		Derek Myers
 * @link		https://github.com/dmyers/fuel-bootstrap
 */
 
namespace Bootstrap;

class Pagination extends \Fuel\Core\Pagination
{
	public static function page_links()
	{
		if (static::$total_pages == 1)
		{
			return '';
		}

		$pagination = '';

		// Let's get the starting page number, this is determined using num_links
		$start = ((static::$current_page - static::$num_links) > 0) ? static::$current_page - (static::$num_links - 1) : 1;

		// Let's get the ending page number
		$end   = ((static::$current_page + static::$num_links) < static::$total_pages) ? static::$current_page + static::$num_links : static::$total_pages;

		for($i = $start; $i <= $end; $i++)
		{
			if (static::$current_page == $i)
			{
				$pagination .= '<li class="active">'.\Html::anchor('javascript:void(0);', static::$template['active_start'].$i.static::$template['active_end']).'</li>';
			}
			else
			{
				$url = ($i == 1) ? '' : '/'.$i;
				$pagination .= '<li>'.\Html::anchor(rtrim(static::$pagination_url, '/').$url, $i).'</li>';
			}
		}

		return static::$template['page_start'].$pagination.static::$template['page_end'];
	}
	
	public static function next_link($value)
	{
		if (static::$total_pages == 1)
		{
			return '';
		}

		if (static::$current_page == static::$total_pages)
		{
			return '<li class="disabled">'.\Html::anchor('javascript:void(0);', $value.static::$template['next_mark']).'</li>';
		}
		else
		{
			$next_page = static::$current_page + 1;
			return '<li>'.\Html::anchor(rtrim(static::$pagination_url, '/').'/'.$next_page, $value.static::$template['next_mark']).'</li>';
		}
	}

	public static function prev_link($value)
	{
		if (static::$total_pages == 1)
		{
			return '';
		}

		if (static::$current_page == 1)
		{
			return '<li class="disabled">'.\Html::anchor('javascript:void(0);', static::$template['previous_mark'].$value).'</li>';
		}
		else
		{
			$previous_page = static::$current_page - 1;
			$previous_page = ($previous_page == 1) ? '' : '/'.$previous_page;
			return '<li>'.\Html::anchor(rtrim(static::$pagination_url, '/').$previous_page, static::$template['previous_mark'].$value).'</li>';
		}
	}
}