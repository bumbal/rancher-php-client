## Retrieve a Project and echo it's ID

Example to retrieve a project get return it's ID.

```php
try
{
    $rancherClient = new Rancher\RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $projectResource = new Rancher\Resource\ProjectResource($rancherClient);
    print_r( $projectResource->get("c-abcdef:p-qwerty")->getId() );
}
catch (\Rancher\RancherException $e)
{
    print_r([$e->getStatusCode(), $e->getMessage()]);
}
```