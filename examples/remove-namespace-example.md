## Remove a namespace

Example of how to remove a name space

```php
try
{
    $rancherClient = new Rancher\RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $namespaceResource = new \Rancher\Resource\NamespaceResource($rancherClient, "c-abcdef");
    print_r($namespaceResource->remove('from-php-api'));
}
catch (\Rancher\RancherException $e)
{
    print_r([$e->getStatusCode(), $e->getMessage()]);
}
```