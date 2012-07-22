<?php

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(
	/**
	 * Each of the navigations you have should be under a unique
	 * name which is used for rendering. Supports nesting further as well.
	 * IE: footer.menu_1, footer.menu_2
	 *
	 * Params:
	 * 		title - title for the link
	 * 		url - url for the link, title will be used if omitted (optional)
	 *      class - class names to use for link, title will be used if omitted (optional)
	 *      active - if the link should always be active (optional)
	 */
	'default' => array(
		array(
			'title' => 'Home',
			'url'   => '/',
			'class' => 'link',
		),
		array(
			'title' => 'Link',
		),
		array(
			'title' => 'Link',
		),
		array(
			'title' => 'Link',
		),
	),
);
