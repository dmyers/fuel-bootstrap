<?php

Autoloader::add_core_namespace('Bootstrap');

Autoloader::add_classes(array(
	'Bootstrap\\Bootstrap'   => __DIR__.'/classes/bootstrap.php',
	'Bootstrap\\Alerts'      => __DIR__.'/classes/alerts.php',
	'Bootstrap\\Breadcrumbs' => __DIR__.'/classes/breadcrumbs.php',
	'Bootstrap\\Form'        => __DIR__.'/classes/form.php',
	'Bootstrap\\Pagination'  => __DIR__.'/classes/pagination.php',
));

// Initialize the bootstrap.
Bootstrap::init();
