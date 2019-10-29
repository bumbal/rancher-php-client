# Rancher PHP Client
A PHP client for Rancher

This client is largely based on the structure and code used by Swagger PHP. All files are generated from the schema files found within Rancher. Checkout the generator folder for more information.

    $rancherClient = new RancherClient("https://your.racher.url/", "rancher_token", "rancher_secret");
    
    $projectResource = new Project($rancherClient);
    $result = $projectResource->get("cluster:project")->getId() ;

    echo $result;