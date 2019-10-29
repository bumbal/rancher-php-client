<?php

namespace Rancher\Model;

use \ArrayAccess;

class AzureKubernetesServiceConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'aadClientAppId' => 'string',
        'aadServerAppId' => 'string',
        'aadServerAppSecret' => 'string',
        'aadTenantId' => 'string',
        'adminUsername' => 'string',
        'agentDnsPrefix' => 'string',
        'agentOsdiskSize' => 'int',
        'agentPoolName' => 'string',
        'agentStorageProfile' => 'string',
        'agentVmSize' => 'string',
        'authBaseUrl' => 'string',
        'baseUrl' => 'string',
        'clientId' => 'string',
        'clientSecret' => '\Rancher\Model\Password',
        'count' => 'int',
        'displayName' => 'string',
        'dnsServiceIp' => 'string',
        'dockerBridgeCidr' => 'string',
        'driverName' => 'string',
        'enableHttpApplicationRouting' => 'boolean',
        'enableMonitoring' => 'boolean',
        'kubernetesVersion' => 'string',
        'location' => 'string',
        'logAnalyticsWorkspace' => 'string',
        'logAnalyticsWorkspaceResourceGroup' => 'string',
        'masterDnsPrefix' => 'string',
        'maxPods' => 'int',
        'name' => 'string',
        'networkPlugin' => 'string',
        'networkPolicy' => 'string',
        'podCidr' => 'string',
        'resourceGroup' => 'string',
        'serviceCidr' => 'string',
        'sshPublicKeyContents' => 'string',
        'subnet' => 'string',
        'subscriptionId' => 'string',
        'tags' => 'string[]',
        'tenantId' => 'string',
        'virtualNetwork' => 'string',
        'virtualNetworkResourceGroup' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aadClientAppId' => 'setAadClientAppId',
        'aadServerAppId' => 'setAadServerAppId',
        'aadServerAppSecret' => 'setAadServerAppSecret',
        'aadTenantId' => 'setAadTenantId',
        'adminUsername' => 'setAdminUsername',
        'agentDnsPrefix' => 'setAgentDnsPrefix',
        'agentOsdiskSize' => 'setAgentOsdiskSize',
        'agentPoolName' => 'setAgentPoolName',
        'agentStorageProfile' => 'setAgentStorageProfile',
        'agentVmSize' => 'setAgentVmSize',
        'authBaseUrl' => 'setAuthBaseUrl',
        'baseUrl' => 'setBaseUrl',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'count' => 'setCount',
        'displayName' => 'setDisplayName',
        'dnsServiceIp' => 'setDnsServiceIp',
        'dockerBridgeCidr' => 'setDockerBridgeCidr',
        'driverName' => 'setDriverName',
        'enableHttpApplicationRouting' => 'setEnableHttpApplicationRouting',
        'enableMonitoring' => 'setEnableMonitoring',
        'kubernetesVersion' => 'setKubernetesVersion',
        'location' => 'setLocation',
        'logAnalyticsWorkspace' => 'setLogAnalyticsWorkspace',
        'logAnalyticsWorkspaceResourceGroup' => 'setLogAnalyticsWorkspaceResourceGroup',
        'masterDnsPrefix' => 'setMasterDnsPrefix',
        'maxPods' => 'setMaxPods',
        'name' => 'setName',
        'networkPlugin' => 'setNetworkPlugin',
        'networkPolicy' => 'setNetworkPolicy',
        'podCidr' => 'setPodCidr',
        'resourceGroup' => 'setResourceGroup',
        'serviceCidr' => 'setServiceCidr',
        'sshPublicKeyContents' => 'setSshPublicKeyContents',
        'subnet' => 'setSubnet',
        'subscriptionId' => 'setSubscriptionId',
        'tags' => 'setTags',
        'tenantId' => 'setTenantId',
        'virtualNetwork' => 'setVirtualNetwork',
        'virtualNetworkResourceGroup' => 'setVirtualNetworkResourceGroup',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aadClientAppId' => 'getAadClientAppId',
        'aadServerAppId' => 'getAadServerAppId',
        'aadServerAppSecret' => 'getAadServerAppSecret',
        'aadTenantId' => 'getAadTenantId',
        'adminUsername' => 'getAdminUsername',
        'agentDnsPrefix' => 'getAgentDnsPrefix',
        'agentOsdiskSize' => 'getAgentOsdiskSize',
        'agentPoolName' => 'getAgentPoolName',
        'agentStorageProfile' => 'getAgentStorageProfile',
        'agentVmSize' => 'getAgentVmSize',
        'authBaseUrl' => 'getAuthBaseUrl',
        'baseUrl' => 'getBaseUrl',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'count' => 'getCount',
        'displayName' => 'getDisplayName',
        'dnsServiceIp' => 'getDnsServiceIp',
        'dockerBridgeCidr' => 'getDockerBridgeCidr',
        'driverName' => 'getDriverName',
        'enableHttpApplicationRouting' => 'getEnableHttpApplicationRouting',
        'enableMonitoring' => 'getEnableMonitoring',
        'kubernetesVersion' => 'getKubernetesVersion',
        'location' => 'getLocation',
        'logAnalyticsWorkspace' => 'getLogAnalyticsWorkspace',
        'logAnalyticsWorkspaceResourceGroup' => 'getLogAnalyticsWorkspaceResourceGroup',
        'masterDnsPrefix' => 'getMasterDnsPrefix',
        'maxPods' => 'getMaxPods',
        'name' => 'getName',
        'networkPlugin' => 'getNetworkPlugin',
        'networkPolicy' => 'getNetworkPolicy',
        'podCidr' => 'getPodCidr',
        'resourceGroup' => 'getResourceGroup',
        'serviceCidr' => 'getServiceCidr',
        'sshPublicKeyContents' => 'getSshPublicKeyContents',
        'subnet' => 'getSubnet',
        'subscriptionId' => 'getSubscriptionId',
        'tags' => 'getTags',
        'tenantId' => 'getTenantId',
        'virtualNetwork' => 'getVirtualNetwork',
        'virtualNetworkResourceGroup' => 'getVirtualNetworkResourceGroup',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aadClientAppId'] = isset($data['aadClientAppId']) ? $data['aadClientAppId'] : null;
        $this->container['aadServerAppId'] = isset($data['aadServerAppId']) ? $data['aadServerAppId'] : null;
        $this->container['aadServerAppSecret'] = isset($data['aadServerAppSecret']) ? $data['aadServerAppSecret'] : null;
        $this->container['aadTenantId'] = isset($data['aadTenantId']) ? $data['aadTenantId'] : null;
        $this->container['adminUsername'] = isset($data['adminUsername']) ? $data['adminUsername'] : null;
        $this->container['agentDnsPrefix'] = isset($data['agentDnsPrefix']) ? $data['agentDnsPrefix'] : null;
        $this->container['agentOsdiskSize'] = isset($data['agentOsdiskSize']) ? $data['agentOsdiskSize'] : null;
        $this->container['agentPoolName'] = isset($data['agentPoolName']) ? $data['agentPoolName'] : null;
        $this->container['agentStorageProfile'] = isset($data['agentStorageProfile']) ? $data['agentStorageProfile'] : null;
        $this->container['agentVmSize'] = isset($data['agentVmSize']) ? $data['agentVmSize'] : null;
        $this->container['authBaseUrl'] = isset($data['authBaseUrl']) ? $data['authBaseUrl'] : null;
        $this->container['baseUrl'] = isset($data['baseUrl']) ? $data['baseUrl'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['dnsServiceIp'] = isset($data['dnsServiceIp']) ? $data['dnsServiceIp'] : null;
        $this->container['dockerBridgeCidr'] = isset($data['dockerBridgeCidr']) ? $data['dockerBridgeCidr'] : null;
        $this->container['driverName'] = isset($data['driverName']) ? $data['driverName'] : null;
        $this->container['enableHttpApplicationRouting'] = isset($data['enableHttpApplicationRouting']) ? $data['enableHttpApplicationRouting'] : null;
        $this->container['enableMonitoring'] = isset($data['enableMonitoring']) ? $data['enableMonitoring'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['logAnalyticsWorkspace'] = isset($data['logAnalyticsWorkspace']) ? $data['logAnalyticsWorkspace'] : null;
        $this->container['logAnalyticsWorkspaceResourceGroup'] = isset($data['logAnalyticsWorkspaceResourceGroup']) ? $data['logAnalyticsWorkspaceResourceGroup'] : null;
        $this->container['masterDnsPrefix'] = isset($data['masterDnsPrefix']) ? $data['masterDnsPrefix'] : null;
        $this->container['maxPods'] = isset($data['maxPods']) ? $data['maxPods'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['networkPlugin'] = isset($data['networkPlugin']) ? $data['networkPlugin'] : null;
        $this->container['networkPolicy'] = isset($data['networkPolicy']) ? $data['networkPolicy'] : null;
        $this->container['podCidr'] = isset($data['podCidr']) ? $data['podCidr'] : null;
        $this->container['resourceGroup'] = isset($data['resourceGroup']) ? $data['resourceGroup'] : null;
        $this->container['serviceCidr'] = isset($data['serviceCidr']) ? $data['serviceCidr'] : null;
        $this->container['sshPublicKeyContents'] = isset($data['sshPublicKeyContents']) ? $data['sshPublicKeyContents'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['virtualNetwork'] = isset($data['virtualNetwork']) ? $data['virtualNetwork'] : null;
        $this->container['virtualNetworkResourceGroup'] = isset($data['virtualNetworkResourceGroup']) ? $data['virtualNetworkResourceGroup'] : null;
    }

    /**
     * Gets aadClientAppId
     * @return string
     */
    public function getAadClientAppId()
    {
        return $this->container['aadClientAppId'];
    }

    /**
     * Sets aadClientAppId
     * @param string $aadClientAppId
     * @return $this
     */
    public function setAadClientAppId($aadClientAppId)
    {
        $this->container['aadClientAppId'] = $aadClientAppId;

        return $this;
    }


    /**
     * Gets aadServerAppId
     * @return string
     */
    public function getAadServerAppId()
    {
        return $this->container['aadServerAppId'];
    }

    /**
     * Sets aadServerAppId
     * @param string $aadServerAppId
     * @return $this
     */
    public function setAadServerAppId($aadServerAppId)
    {
        $this->container['aadServerAppId'] = $aadServerAppId;

        return $this;
    }


    /**
     * Gets aadServerAppSecret
     * @return string
     */
    public function getAadServerAppSecret()
    {
        return $this->container['aadServerAppSecret'];
    }

    /**
     * Sets aadServerAppSecret
     * @param string $aadServerAppSecret
     * @return $this
     */
    public function setAadServerAppSecret($aadServerAppSecret)
    {
        $this->container['aadServerAppSecret'] = $aadServerAppSecret;

        return $this;
    }


    /**
     * Gets aadTenantId
     * @return string
     */
    public function getAadTenantId()
    {
        return $this->container['aadTenantId'];
    }

    /**
     * Sets aadTenantId
     * @param string $aadTenantId
     * @return $this
     */
    public function setAadTenantId($aadTenantId)
    {
        $this->container['aadTenantId'] = $aadTenantId;

        return $this;
    }


    /**
     * Gets adminUsername
     * @return string
     */
    public function getAdminUsername()
    {
        return $this->container['adminUsername'];
    }

    /**
     * Sets adminUsername
     * @param string $adminUsername
     * @return $this
     */
    public function setAdminUsername($adminUsername)
    {
        $this->container['adminUsername'] = $adminUsername;

        return $this;
    }


    /**
     * Gets agentDnsPrefix
     * @return string
     */
    public function getAgentDnsPrefix()
    {
        return $this->container['agentDnsPrefix'];
    }

    /**
     * Sets agentDnsPrefix
     * @param string $agentDnsPrefix
     * @return $this
     */
    public function setAgentDnsPrefix($agentDnsPrefix)
    {
        $this->container['agentDnsPrefix'] = $agentDnsPrefix;

        return $this;
    }


    /**
     * Gets agentOsdiskSize
     * @return int
     */
    public function getAgentOsdiskSize()
    {
        return $this->container['agentOsdiskSize'];
    }

    /**
     * Sets agentOsdiskSize
     * @param int $agentOsdiskSize
     * @return $this
     */
    public function setAgentOsdiskSize($agentOsdiskSize)
    {
        $this->container['agentOsdiskSize'] = $agentOsdiskSize;

        return $this;
    }


    /**
     * Gets agentPoolName
     * @return string
     */
    public function getAgentPoolName()
    {
        return $this->container['agentPoolName'];
    }

    /**
     * Sets agentPoolName
     * @param string $agentPoolName
     * @return $this
     */
    public function setAgentPoolName($agentPoolName)
    {
        $this->container['agentPoolName'] = $agentPoolName;

        return $this;
    }


    /**
     * Gets agentStorageProfile
     * @return string
     */
    public function getAgentStorageProfile()
    {
        return $this->container['agentStorageProfile'];
    }

    /**
     * Sets agentStorageProfile
     * @param string $agentStorageProfile
     * @return $this
     */
    public function setAgentStorageProfile($agentStorageProfile)
    {
        $this->container['agentStorageProfile'] = $agentStorageProfile;

        return $this;
    }


    /**
     * Gets agentVmSize
     * @return string
     */
    public function getAgentVmSize()
    {
        return $this->container['agentVmSize'];
    }

    /**
     * Sets agentVmSize
     * @param string $agentVmSize
     * @return $this
     */
    public function setAgentVmSize($agentVmSize)
    {
        $this->container['agentVmSize'] = $agentVmSize;

        return $this;
    }


    /**
     * Gets authBaseUrl
     * @return string
     */
    public function getAuthBaseUrl()
    {
        return $this->container['authBaseUrl'];
    }

    /**
     * Sets authBaseUrl
     * @param string $authBaseUrl
     * @return $this
     */
    public function setAuthBaseUrl($authBaseUrl)
    {
        $this->container['authBaseUrl'] = $authBaseUrl;

        return $this;
    }


    /**
     * Gets baseUrl
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->container['baseUrl'];
    }

    /**
     * Sets baseUrl
     * @param string $baseUrl
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        $this->container['baseUrl'] = $baseUrl;

        return $this;
    }


    /**
     * Gets clientId
     * @return string
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     * @param string $clientId
     * @return $this
     */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;

        return $this;
    }


    /**
     * Gets clientSecret
     * @return \Rancher\Model\Password
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param \Rancher\Model\Password $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }


    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }


    /**
     * Gets displayName
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     * @param string $displayName
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }


    /**
     * Gets dnsServiceIp
     * @return string
     */
    public function getDnsServiceIp()
    {
        return $this->container['dnsServiceIp'];
    }

    /**
     * Sets dnsServiceIp
     * @param string $dnsServiceIp
     * @return $this
     */
    public function setDnsServiceIp($dnsServiceIp)
    {
        $this->container['dnsServiceIp'] = $dnsServiceIp;

        return $this;
    }


    /**
     * Gets dockerBridgeCidr
     * @return string
     */
    public function getDockerBridgeCidr()
    {
        return $this->container['dockerBridgeCidr'];
    }

    /**
     * Sets dockerBridgeCidr
     * @param string $dockerBridgeCidr
     * @return $this
     */
    public function setDockerBridgeCidr($dockerBridgeCidr)
    {
        $this->container['dockerBridgeCidr'] = $dockerBridgeCidr;

        return $this;
    }


    /**
     * Gets driverName
     * @return string
     */
    public function getDriverName()
    {
        return $this->container['driverName'];
    }

    /**
     * Sets driverName
     * @param string $driverName
     * @return $this
     */
    public function setDriverName($driverName)
    {
        $this->container['driverName'] = $driverName;

        return $this;
    }


    /**
     * Gets enableHttpApplicationRouting
     * @return boolean
     */
    public function getEnableHttpApplicationRouting()
    {
        return $this->container['enableHttpApplicationRouting'];
    }

    /**
     * Sets enableHttpApplicationRouting
     * @param boolean $enableHttpApplicationRouting
     * @return $this
     */
    public function setEnableHttpApplicationRouting($enableHttpApplicationRouting)
    {
        $this->container['enableHttpApplicationRouting'] = $enableHttpApplicationRouting;

        return $this;
    }


    /**
     * Gets enableMonitoring
     * @return boolean
     */
    public function getEnableMonitoring()
    {
        return $this->container['enableMonitoring'];
    }

    /**
     * Sets enableMonitoring
     * @param boolean $enableMonitoring
     * @return $this
     */
    public function setEnableMonitoring($enableMonitoring)
    {
        $this->container['enableMonitoring'] = $enableMonitoring;

        return $this;
    }


    /**
     * Gets kubernetesVersion
     * @return string
     */
    public function getKubernetesVersion()
    {
        return $this->container['kubernetesVersion'];
    }

    /**
     * Sets kubernetesVersion
     * @param string $kubernetesVersion
     * @return $this
     */
    public function setKubernetesVersion($kubernetesVersion)
    {
        $this->container['kubernetesVersion'] = $kubernetesVersion;

        return $this;
    }


    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }


    /**
     * Gets logAnalyticsWorkspace
     * @return string
     */
    public function getLogAnalyticsWorkspace()
    {
        return $this->container['logAnalyticsWorkspace'];
    }

    /**
     * Sets logAnalyticsWorkspace
     * @param string $logAnalyticsWorkspace
     * @return $this
     */
    public function setLogAnalyticsWorkspace($logAnalyticsWorkspace)
    {
        $this->container['logAnalyticsWorkspace'] = $logAnalyticsWorkspace;

        return $this;
    }


    /**
     * Gets logAnalyticsWorkspaceResourceGroup
     * @return string
     */
    public function getLogAnalyticsWorkspaceResourceGroup()
    {
        return $this->container['logAnalyticsWorkspaceResourceGroup'];
    }

    /**
     * Sets logAnalyticsWorkspaceResourceGroup
     * @param string $logAnalyticsWorkspaceResourceGroup
     * @return $this
     */
    public function setLogAnalyticsWorkspaceResourceGroup($logAnalyticsWorkspaceResourceGroup)
    {
        $this->container['logAnalyticsWorkspaceResourceGroup'] = $logAnalyticsWorkspaceResourceGroup;

        return $this;
    }


    /**
     * Gets masterDnsPrefix
     * @return string
     */
    public function getMasterDnsPrefix()
    {
        return $this->container['masterDnsPrefix'];
    }

    /**
     * Sets masterDnsPrefix
     * @param string $masterDnsPrefix
     * @return $this
     */
    public function setMasterDnsPrefix($masterDnsPrefix)
    {
        $this->container['masterDnsPrefix'] = $masterDnsPrefix;

        return $this;
    }


    /**
     * Gets maxPods
     * @return int
     */
    public function getMaxPods()
    {
        return $this->container['maxPods'];
    }

    /**
     * Sets maxPods
     * @param int $maxPods
     * @return $this
     */
    public function setMaxPods($maxPods)
    {
        $this->container['maxPods'] = $maxPods;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets networkPlugin
     * @return string
     */
    public function getNetworkPlugin()
    {
        return $this->container['networkPlugin'];
    }

    /**
     * Sets networkPlugin
     * @param string $networkPlugin
     * @return $this
     */
    public function setNetworkPlugin($networkPlugin)
    {
        $this->container['networkPlugin'] = $networkPlugin;

        return $this;
    }


    /**
     * Gets networkPolicy
     * @return string
     */
    public function getNetworkPolicy()
    {
        return $this->container['networkPolicy'];
    }

    /**
     * Sets networkPolicy
     * @param string $networkPolicy
     * @return $this
     */
    public function setNetworkPolicy($networkPolicy)
    {
        $this->container['networkPolicy'] = $networkPolicy;

        return $this;
    }


    /**
     * Gets podCidr
     * @return string
     */
    public function getPodCidr()
    {
        return $this->container['podCidr'];
    }

    /**
     * Sets podCidr
     * @param string $podCidr
     * @return $this
     */
    public function setPodCidr($podCidr)
    {
        $this->container['podCidr'] = $podCidr;

        return $this;
    }


    /**
     * Gets resourceGroup
     * @return string
     */
    public function getResourceGroup()
    {
        return $this->container['resourceGroup'];
    }

    /**
     * Sets resourceGroup
     * @param string $resourceGroup
     * @return $this
     */
    public function setResourceGroup($resourceGroup)
    {
        $this->container['resourceGroup'] = $resourceGroup;

        return $this;
    }


    /**
     * Gets serviceCidr
     * @return string
     */
    public function getServiceCidr()
    {
        return $this->container['serviceCidr'];
    }

    /**
     * Sets serviceCidr
     * @param string $serviceCidr
     * @return $this
     */
    public function setServiceCidr($serviceCidr)
    {
        $this->container['serviceCidr'] = $serviceCidr;

        return $this;
    }


    /**
     * Gets sshPublicKeyContents
     * @return string
     */
    public function getSshPublicKeyContents()
    {
        return $this->container['sshPublicKeyContents'];
    }

    /**
     * Sets sshPublicKeyContents
     * @param string $sshPublicKeyContents
     * @return $this
     */
    public function setSshPublicKeyContents($sshPublicKeyContents)
    {
        $this->container['sshPublicKeyContents'] = $sshPublicKeyContents;

        return $this;
    }


    /**
     * Gets subnet
     * @return string
     */
    public function getSubnet()
    {
        return $this->container['subnet'];
    }

    /**
     * Sets subnet
     * @param string $subnet
     * @return $this
     */
    public function setSubnet($subnet)
    {
        $this->container['subnet'] = $subnet;

        return $this;
    }


    /**
     * Gets subscriptionId
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
     * Sets subscriptionId
     * @param string $subscriptionId
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;

        return $this;
    }


    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }


    /**
     * Gets tenantId
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
     * Sets tenantId
     * @param string $tenantId
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;

        return $this;
    }


    /**
     * Gets virtualNetwork
     * @return string
     */
    public function getVirtualNetwork()
    {
        return $this->container['virtualNetwork'];
    }

    /**
     * Sets virtualNetwork
     * @param string $virtualNetwork
     * @return $this
     */
    public function setVirtualNetwork($virtualNetwork)
    {
        $this->container['virtualNetwork'] = $virtualNetwork;

        return $this;
    }


    /**
     * Gets virtualNetworkResourceGroup
     * @return string
     */
    public function getVirtualNetworkResourceGroup()
    {
        return $this->container['virtualNetworkResourceGroup'];
    }

    /**
     * Sets virtualNetworkResourceGroup
     * @param string $virtualNetworkResourceGroup
     * @return $this
     */
    public function setVirtualNetworkResourceGroup($virtualNetworkResourceGroup)
    {
        $this->container['virtualNetworkResourceGroup'] = $virtualNetworkResourceGroup;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

