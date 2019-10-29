# docker-php-client
A PHP client for Docker

This client is largely based on the structure used by Swagger PHP.

    $rancherClient = new RancherClient("https://your.racher.url/", "rocker_token", "rancher_secret");
    
    $projectResource = new Project($rancherClient);
    $result = $projectResource->get("cluster:project")->getId() ;

    echo $result;