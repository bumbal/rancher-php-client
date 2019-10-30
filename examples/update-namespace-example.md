## Update a namespace

Example of how to update a name space

```php
try
{
    $rancherClient = new Rancher\RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $namespaceResource = new \Rancher\Resource\NamespaceResource($rancherClient, "c-abcdef");
    $namespaceModel = new \Rancher\Model\NamespaceModel();
    $namespaceModel->setDescription('Namespace generated with Rancher PHP Client!');

    print_r($namespaceResource->update('from-php-api', $namespaceModel));
}
catch (\Rancher\RancherException $e)
{
    echo $e->getMessage();
}
```