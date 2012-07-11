# Fuel Bootstrap Package

A super simple [Twitter Bootstrap](http://twitter.github.com/bootstrap/) package for Fuel.

## About
* Version: 1.0.0
* Author: Derek Myers

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dmyers/fuel-bootstrap.git fuel/packages/bootstrap

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/bootstrap/

###Download

Alternatively you can download it and extract it into `fuel/packages/bootstrap/`.

## Usage

Simply use Fuel's built in Assets (or [Casset](https://github.com/canton7/fuelphp-casset/)), Form, Pagination, and Validation Errors classes as usual and they will use Twitter Bootstrap's css classnames for the styling. We have also included our own Alerts and Breadcrumbs classes with examples below.

```php
Alerts::success('Well done! You successfully read this important alert message.');
Alerts::danger('Oh snap! Change a few things up and try submitting again.');
Alerts::render();

Breadcrumbs::add('/', 'Home');
Breadcrumbs::add('library', 'Library');
Breadcrumbs::active('Data');
Breadcrumbs::render();
```

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/bootstrap/
