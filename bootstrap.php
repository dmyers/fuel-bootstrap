<?php

Autoloader::add_core_namespace('Bootstrap');

Autoloader::add_classes(array(
	'Bootstrap\\Bootstrap'             => __DIR__.'/classes/bootstrap.php',
	'Bootstrap\\Alerts'                => __DIR__.'/classes/alerts.php',
	'Bootstrap\\Breadcrumbs'           => __DIR__.'/classes/breadcrumbs.php',
	'Bootstrap\\Navigation'            => __DIR__.'/classes/navigation.php',
	'Bootstrap\\Form'                  => __DIR__.'/classes/form.php',
	'Bootstrap\\Validation_Error'      => __DIR__.'/classes/validation/error.php',
	'Bootstrap\\Bootstrap_Addons_Twig' => __DIR__.'/classes/bootstrap/addons/twig.php',
));

// Initialize the bootstrap.
Bootstrap::init();
