## Create a namespace

Example of how to create a name space

```php
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
    print_r([$e->getStatusCode(), $e->getMessage()]);
}
```