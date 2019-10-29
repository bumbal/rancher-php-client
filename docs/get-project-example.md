#Retrieve a Project and echo it's ID

Example to retrieve a project get return it's ID.

    $rancherClient = new RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $projectResource = new Project($rancherClient);
    
    echo $projectResource->get("cluster:project")->getId();