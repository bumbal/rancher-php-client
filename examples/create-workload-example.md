## Create a Workload

Example of how to create a workload

```php
try
{
    $rancherClient = new Rancher\RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $workloadResource = new \Rancher\Resource\WorkloadResource($rancherClient, "c-abcdef:p-qwerty");

    $containerModel = new \Rancher\Model\ContainerModel();
    $containerModel->setName('container');
    $containerModel->setImage('ubuntu:xenial');
    $containerModel->setImagePullPolicy('Always');
    $containerModel->setTty(true);

    $workloadModel = new \Rancher\Model\WorkloadModel();
    $workloadModel->setName('testing');
    $workloadModel->setProjectId('p-qwerty');
    $workloadModel->setNamespaceId('test');
    $workloadModel->setContainers([$containerModel]);

    print_r($workloadResource->create($workloadModel));
}
catch (\Rancher\RancherException $e)
{
    print_r([$e->getStatusCode(), $e->getMessage()]);
}
```