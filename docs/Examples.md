#Some examples how to use this API

Example to retrieve a project get return it's ID.

    $rancherClient = new RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $projectResource = new Project($rancherClient);
    $result = $projectResource->get("cluster:project")->getId() ;

    echo $result;