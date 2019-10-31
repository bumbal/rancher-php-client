# Rancher PHP Client
A PHP client for Rancher

This client is largely based on the structure and code used by Swagger PHP. All files are generated from the schema files found within Rancher. Checkout the generator folder for more information.

*Disclaimer: I am in not way, shape or form associated with Rancher.*

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "freightlive/rancher-php-client": "*@dev"
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
    
    $namespaceResource = new \Rancher\Resource\NamespaceResource($rancherClient, "c-abcdef");
    $namespaceModel = new \Rancher\Model\NamespaceModel();
    $namespaceModel->setName('from-php-api');
    $namespaceModel->setDescription('Namespace generated with Rancher PHP Client');
    $namespaceModel->setProjectId('c-abcdef:p-qwerty');

    print_r($namespaceResource->create($namespaceModel));
}
catch (\Rancher\RancherException $e)
{
    echo $e->getMessage();
}

?>
```