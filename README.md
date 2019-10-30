# Rancher PHP Client
A PHP client for Rancher

This client is largely based on the structure and code used by Swagger PHP. All files are generated from the schema files found within Rancher. Checkout the generator folder for more information.

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "bumbal/rancher-php-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

try
{
    $rancherClient = new Rancher\RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");

    $projectResource = new Rancher\Resource\ProjectResource($rancherClient);

    echo $projectResource->get("c-clusterid:p-projectid")->getDescription() . "\n";
}
catch (Rancher\RancherException $e)
{
    echo $e->getMessage();
}

?>
```