# Fuel AmazonS3 Package

A super simple AmazonS3 package for the Amazon's S3 PHP SDK for Fuel.

## About
* Version: 1.0.0
* Author: Derek Myers

## Installation

### Git Submodule

If you are installing this as a submodule (recommended) in your git repo root, run this command:

	$ git submodule add git://github.com/dmyers/fuel-amazons3.git fuel/packages/amazons3

Then you you need to initialize and update the submodule:

	$ git submodule update --init --recursive fuel/packages/amazons3/

###Download

Alternatively you can download it and extract it into `fuel/packages/amazons3/`.

## Usage

```php
$amazons3 = AmazonS3::instance();
var_dump($amazons3->listBuckets());
```

For more examples, check out the [Amazon S3 PHP SDK](https://github.com/tpyo/amazon-s3-php-class).

## Configuration

Configuration is easy. First thing you will need to do is to [signup for Amazon Web Services](https://aws-portal.amazon.com/gp/aws/developer/registration/index.html) (if you haven't already).

Next, copy the `config/amazons3.php` from the package up into your `app/config/` directory. Open it up and enter your API keys.

## Updates

In order to keep the package up to date simply run:

	$ git submodule update --recursive fuel/packages/amazons3/
