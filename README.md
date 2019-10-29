# rancher-php-client
A PHP client for Rancher

This client is largely based on the structure and code used by Swagger PHP.

    $rancherClient = new RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $projectResource = new Project($rancherClient);
    $result = $projectResource->get("cluster:project")->getId() ;

    echo $result;