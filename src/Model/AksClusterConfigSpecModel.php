<?php

/**
 * AksClusterConfigSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AksClusterConfigSpecModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    /**
     * Properties that can be created
     *
     * @var array
     */
    protected static $canBeCreated = [
        'authBaseUrl',
        'authorizedIpRanges',
        'azureCredentialSecret',
        'baseUrl',
        'clusterName',
        'dnsPrefix',
        'dnsServiceIp',
        'dockerBridgeCidr',
        'httpApplicationRouting',
        'imported',
        'kubernetesVersion',
        'linuxAdminUsername',
        'loadBalancerSku',
        'logAnalyticsWorkspaceGroup',
        'logAnalyticsWorkspaceName',
        'managedIdentity',
        'monitoring',
        'networkPlugin',
        'networkPolicy',
        'nodePools',
        'nodeResourceGroup',
        'outboundType',
        'podCidr',
        'privateCluster',
        'privateDnsZone',
        'resourceGroup',
        'resourceLocation',
        'serviceCidr',
        'sshPublicKey',
        'subnet',
        'tags',
        'userAssignedIdentity',
        'virtualNetwork',
        'virtualNetworkResourceGroup',
    ];

    public static function canBeCreated()
    {
        return self::$canBeCreated;
    }

    /**
     * Properties that can be updated
     *
     * @var array
     */
    protected static $canBeUpdated = [
        'authBaseUrl',
        'authorizedIpRanges',
        'azureCredentialSecret',
        'baseUrl',
        'dnsPrefix',
        'dnsServiceIp',
        'dockerBridgeCidr',
        'httpApplicationRouting',
        'kubernetesVersion',
        'linuxAdminUsername',
        'loadBalancerSku',
        'logAnalyticsWorkspaceGroup',
        'logAnalyticsWorkspaceName',
        'managedIdentity',
        'monitoring',
        'networkPlugin',
        'networkPolicy',
        'nodePools',
        'nodeResourceGroup',
        'outboundType',
        'podCidr',
        'privateCluster',
        'privateDnsZone',
        'serviceCidr',
        'sshPublicKey',
        'subnet',
        'tags',
        'userAssignedIdentity',
        'virtualNetwork',
        'virtualNetworkResourceGroup',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'authBaseUrl' => 'string',
        'authorizedIpRanges' => 'string[]',
        'azureCredentialSecret' => 'string',
        'baseUrl' => 'string',
        'clusterName' => 'string',
        'dnsPrefix' => 'string',
        'dnsServiceIp' => 'string',
        'dockerBridgeCidr' => 'string',
        'httpApplicationRouting' => 'boolean',
        'imported' => 'boolean',
        'kubernetesVersion' => 'string',
        'linuxAdminUsername' => 'string',
        'loadBalancerSku' => 'string',
        'logAnalyticsWorkspaceGroup' => 'string',
        'logAnalyticsWorkspaceName' => 'string',
        'managedIdentity' => 'boolean',
        'monitoring' => 'boolean',
        'networkPlugin' => 'string',
        'networkPolicy' => 'string',
        'nodePools' => '\Rancher\Model\AksNodePoolModel[]',
        'nodeResourceGroup' => 'string',
        'outboundType' => 'string',
        'podCidr' => 'string',
        'privateCluster' => 'boolean',
        'privateDnsZone' => 'string',
        'resourceGroup' => 'string',
        'resourceLocation' => 'string',
        'serviceCidr' => 'string',
        'sshPublicKey' => 'string',
        'subnet' => 'string',
        'tags' => 'map[string,string]',
        'userAssignedIdentity' => 'string',
        'virtualNetwork' => 'string',
        'virtualNetworkResourceGroup' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'authBaseUrl' => 'setAuthBaseUrl',
        'authorizedIpRanges' => 'setAuthorizedIpRanges',
        'azureCredentialSecret' => 'setAzureCredentialSecret',
        'baseUrl' => 'setBaseUrl',
        'clusterName' => 'setClusterName',
        'dnsPrefix' => 'setDnsPrefix',
        'dnsServiceIp' => 'setDnsServiceIp',
        'dockerBridgeCidr' => 'setDockerBridgeCidr',
        'httpApplicationRouting' => 'setHttpApplicationRouting',
        'imported' => 'setImported',
        'kubernetesVersion' => 'setKubernetesVersion',
        'linuxAdminUsername' => 'setLinuxAdminUsername',
        'loadBalancerSku' => 'setLoadBalancerSku',
        'logAnalyticsWorkspaceGroup' => 'setLogAnalyticsWorkspaceGroup',
        'logAnalyticsWorkspaceName' => 'setLogAnalyticsWorkspaceName',
        'managedIdentity' => 'setManagedIdentity',
        'monitoring' => 'setMonitoring',
        'networkPlugin' => 'setNetworkPlugin',
        'networkPolicy' => 'setNetworkPolicy',
        'nodePools' => 'setNodePools',
        'nodeResourceGroup' => 'setNodeResourceGroup',
        'outboundType' => 'setOutboundType',
        'podCidr' => 'setPodCidr',
        'privateCluster' => 'setPrivateCluster',
        'privateDnsZone' => 'setPrivateDnsZone',
        'resourceGroup' => 'setResourceGroup',
        'resourceLocation' => 'setResourceLocation',
        'serviceCidr' => 'setServiceCidr',
        'sshPublicKey' => 'setSshPublicKey',
        'subnet' => 'setSubnet',
        'tags' => 'setTags',
        'userAssignedIdentity' => 'setUserAssignedIdentity',
        'virtualNetwork' => 'setVirtualNetwork',
        'virtualNetworkResourceGroup' => 'setVirtualNetworkResourceGroup',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'authBaseUrl' => 'getAuthBaseUrl',
        'authorizedIpRanges' => 'getAuthorizedIpRanges',
        'azureCredentialSecret' => 'getAzureCredentialSecret',
        'baseUrl' => 'getBaseUrl',
        'clusterName' => 'getClusterName',
        'dnsPrefix' => 'getDnsPrefix',
        'dnsServiceIp' => 'getDnsServiceIp',
        'dockerBridgeCidr' => 'getDockerBridgeCidr',
        'httpApplicationRouting' => 'getHttpApplicationRouting',
        'imported' => 'getImported',
        'kubernetesVersion' => 'getKubernetesVersion',
        'linuxAdminUsername' => 'getLinuxAdminUsername',
        'loadBalancerSku' => 'getLoadBalancerSku',
        'logAnalyticsWorkspaceGroup' => 'getLogAnalyticsWorkspaceGroup',
        'logAnalyticsWorkspaceName' => 'getLogAnalyticsWorkspaceName',
        'managedIdentity' => 'getManagedIdentity',
        'monitoring' => 'getMonitoring',
        'networkPlugin' => 'getNetworkPlugin',
        'networkPolicy' => 'getNetworkPolicy',
        'nodePools' => 'getNodePools',
        'nodeResourceGroup' => 'getNodeResourceGroup',
        'outboundType' => 'getOutboundType',
        'podCidr' => 'getPodCidr',
        'privateCluster' => 'getPrivateCluster',
        'privateDnsZone' => 'getPrivateDnsZone',
        'resourceGroup' => 'getResourceGroup',
        'resourceLocation' => 'getResourceLocation',
        'serviceCidr' => 'getServiceCidr',
        'sshPublicKey' => 'getSshPublicKey',
        'subnet' => 'getSubnet',
        'tags' => 'getTags',
        'userAssignedIdentity' => 'getUserAssignedIdentity',
        'virtualNetwork' => 'getVirtualNetwork',
        'virtualNetworkResourceGroup' => 'getVirtualNetworkResourceGroup',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['authBaseUrl'] = isset($data['authBaseUrl']) ? $data['authBaseUrl'] : null;
        $this->container['authorizedIpRanges'] = isset($data['authorizedIpRanges']) ? $data['authorizedIpRanges'] : null;
        $this->container['azureCredentialSecret'] = isset($data['azureCredentialSecret']) ? $data['azureCredentialSecret'] : null;
        $this->container['baseUrl'] = isset($data['baseUrl']) ? $data['baseUrl'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['dnsPrefix'] = isset($data['dnsPrefix']) ? $data['dnsPrefix'] : null;
        $this->container['dnsServiceIp'] = isset($data['dnsServiceIp']) ? $data['dnsServiceIp'] : null;
        $this->container['dockerBridgeCidr'] = isset($data['dockerBridgeCidr']) ? $data['dockerBridgeCidr'] : null;
        $this->container['httpApplicationRouting'] = isset($data['httpApplicationRouting']) ? $data['httpApplicationRouting'] : null;
        $this->container['imported'] = isset($data['imported']) ? $data['imported'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['linuxAdminUsername'] = isset($data['linuxAdminUsername']) ? $data['linuxAdminUsername'] : null;
        $this->container['loadBalancerSku'] = isset($data['loadBalancerSku']) ? $data['loadBalancerSku'] : null;
        $this->container['logAnalyticsWorkspaceGroup'] = isset($data['logAnalyticsWorkspaceGroup']) ? $data['logAnalyticsWorkspaceGroup'] : null;
        $this->container['logAnalyticsWorkspaceName'] = isset($data['logAnalyticsWorkspaceName']) ? $data['logAnalyticsWorkspaceName'] : null;
        $this->container['managedIdentity'] = isset($data['managedIdentity']) ? $data['managedIdentity'] : null;
        $this->container['monitoring'] = isset($data['monitoring']) ? $data['monitoring'] : null;
        $this->container['networkPlugin'] = isset($data['networkPlugin']) ? $data['networkPlugin'] : null;
        $this->container['networkPolicy'] = isset($data['networkPolicy']) ? $data['networkPolicy'] : null;
        $this->container['nodePools'] = isset($data['nodePools']) ? $data['nodePools'] : null;
        $this->container['nodeResourceGroup'] = isset($data['nodeResourceGroup']) ? $data['nodeResourceGroup'] : null;
        $this->container['outboundType'] = isset($data['outboundType']) ? $data['outboundType'] : null;
        $this->container['podCidr'] = isset($data['podCidr']) ? $data['podCidr'] : null;
        $this->container['privateCluster'] = isset($data['privateCluster']) ? $data['privateCluster'] : null;
        $this->container['privateDnsZone'] = isset($data['privateDnsZone']) ? $data['privateDnsZone'] : null;
        $this->container['resourceGroup'] = isset($data['resourceGroup']) ? $data['resourceGroup'] : null;
        $this->container['resourceLocation'] = isset($data['resourceLocation']) ? $data['resourceLocation'] : null;
        $this->container['serviceCidr'] = isset($data['serviceCidr']) ? $data['serviceCidr'] : null;
        $this->container['sshPublicKey'] = isset($data['sshPublicKey']) ? $data['sshPublicKey'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['userAssignedIdentity'] = isset($data['userAssignedIdentity']) ? $data['userAssignedIdentity'] : null;
        $this->container['virtualNetwork'] = isset($data['virtualNetwork']) ? $data['virtualNetwork'] : null;
        $this->container['virtualNetworkResourceGroup'] = isset($data['virtualNetworkResourceGroup']) ? $data['virtualNetworkResourceGroup'] : null;
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
     * Gets authorizedIpRanges
     * @return string[]
     */
    public function getAuthorizedIpRanges()
    {
        return $this->container['authorizedIpRanges'];
    }

    /**
     * Sets authorizedIpRanges
     * @param string[] $authorizedIpRanges
     * @return $this
     */
    public function setAuthorizedIpRanges($authorizedIpRanges)
    {
        $this->container['authorizedIpRanges'] = $authorizedIpRanges;

        return $this;
    }


    /**
     * Gets azureCredentialSecret
     * @return string
     */
    public function getAzureCredentialSecret()
    {
        return $this->container['azureCredentialSecret'];
    }

    /**
     * Sets azureCredentialSecret
     * @param string $azureCredentialSecret
     * @return $this
     */
    public function setAzureCredentialSecret($azureCredentialSecret)
    {
        $this->container['azureCredentialSecret'] = $azureCredentialSecret;

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
     * Gets clusterName
     * @return string
     */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
     * Sets clusterName
     * @param string $clusterName
     * @return $this
     */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;

        return $this;
    }


    /**
     * Gets dnsPrefix
     * @return string
     */
    public function getDnsPrefix()
    {
        return $this->container['dnsPrefix'];
    }

    /**
     * Sets dnsPrefix
     * @param string $dnsPrefix
     * @return $this
     */
    public function setDnsPrefix($dnsPrefix)
    {
        $this->container['dnsPrefix'] = $dnsPrefix;

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
     * Gets httpApplicationRouting
     * @return boolean
     */
    public function getHttpApplicationRouting()
    {
        return $this->container['httpApplicationRouting'];
    }

    /**
     * Sets httpApplicationRouting
     * @param boolean $httpApplicationRouting
     * @return $this
     */
    public function setHttpApplicationRouting($httpApplicationRouting)
    {
        $this->container['httpApplicationRouting'] = $httpApplicationRouting;

        return $this;
    }


    /**
     * Gets imported
     * @return boolean
     */
    public function getImported()
    {
        return $this->container['imported'];
    }

    /**
     * Sets imported
     * @param boolean $imported
     * @return $this
     */
    public function setImported($imported)
    {
        $this->container['imported'] = $imported;

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
     * Gets linuxAdminUsername
     * @return string
     */
    public function getLinuxAdminUsername()
    {
        return $this->container['linuxAdminUsername'];
    }

    /**
     * Sets linuxAdminUsername
     * @param string $linuxAdminUsername
     * @return $this
     */
    public function setLinuxAdminUsername($linuxAdminUsername)
    {
        $this->container['linuxAdminUsername'] = $linuxAdminUsername;

        return $this;
    }


    /**
     * Gets loadBalancerSku
     * @return string
     */
    public function getLoadBalancerSku()
    {
        return $this->container['loadBalancerSku'];
    }

    /**
     * Sets loadBalancerSku
     * @param string $loadBalancerSku
     * @return $this
     */
    public function setLoadBalancerSku($loadBalancerSku)
    {
        $this->container['loadBalancerSku'] = $loadBalancerSku;

        return $this;
    }


    /**
     * Gets logAnalyticsWorkspaceGroup
     * @return string
     */
    public function getLogAnalyticsWorkspaceGroup()
    {
        return $this->container['logAnalyticsWorkspaceGroup'];
    }

    /**
     * Sets logAnalyticsWorkspaceGroup
     * @param string $logAnalyticsWorkspaceGroup
     * @return $this
     */
    public function setLogAnalyticsWorkspaceGroup($logAnalyticsWorkspaceGroup)
    {
        $this->container['logAnalyticsWorkspaceGroup'] = $logAnalyticsWorkspaceGroup;

        return $this;
    }


    /**
     * Gets logAnalyticsWorkspaceName
     * @return string
     */
    public function getLogAnalyticsWorkspaceName()
    {
        return $this->container['logAnalyticsWorkspaceName'];
    }

    /**
     * Sets logAnalyticsWorkspaceName
     * @param string $logAnalyticsWorkspaceName
     * @return $this
     */
    public function setLogAnalyticsWorkspaceName($logAnalyticsWorkspaceName)
    {
        $this->container['logAnalyticsWorkspaceName'] = $logAnalyticsWorkspaceName;

        return $this;
    }


    /**
     * Gets managedIdentity
     * @return boolean
     */
    public function getManagedIdentity()
    {
        return $this->container['managedIdentity'];
    }

    /**
     * Sets managedIdentity
     * @param boolean $managedIdentity
     * @return $this
     */
    public function setManagedIdentity($managedIdentity)
    {
        $this->container['managedIdentity'] = $managedIdentity;

        return $this;
    }


    /**
     * Gets monitoring
     * @return boolean
     */
    public function getMonitoring()
    {
        return $this->container['monitoring'];
    }

    /**
     * Sets monitoring
     * @param boolean $monitoring
     * @return $this
     */
    public function setMonitoring($monitoring)
    {
        $this->container['monitoring'] = $monitoring;

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
     * Gets nodePools
     * @return \Rancher\Model\AksNodePoolModel[]
     */
    public function getNodePools()
    {
        return $this->container['nodePools'];
    }

    /**
     * Sets nodePools
     * @param \Rancher\Model\AksNodePoolModel[] $nodePools
     * @return $this
     */
    public function setNodePools($nodePools)
    {
        $this->container['nodePools'] = $nodePools;

        return $this;
    }


    /**
     * Gets nodeResourceGroup
     * @return string
     */
    public function getNodeResourceGroup()
    {
        return $this->container['nodeResourceGroup'];
    }

    /**
     * Sets nodeResourceGroup
     * @param string $nodeResourceGroup
     * @return $this
     */
    public function setNodeResourceGroup($nodeResourceGroup)
    {
        $this->container['nodeResourceGroup'] = $nodeResourceGroup;

        return $this;
    }


    /**
     * Gets outboundType
     * @return string
     */
    public function getOutboundType()
    {
        return $this->container['outboundType'];
    }

    /**
     * Sets outboundType
     * @param string $outboundType
     * @return $this
     */
    public function setOutboundType($outboundType)
    {
        $this->container['outboundType'] = $outboundType;

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
     * Gets privateCluster
     * @return boolean
     */
    public function getPrivateCluster()
    {
        return $this->container['privateCluster'];
    }

    /**
     * Sets privateCluster
     * @param boolean $privateCluster
     * @return $this
     */
    public function setPrivateCluster($privateCluster)
    {
        $this->container['privateCluster'] = $privateCluster;

        return $this;
    }


    /**
     * Gets privateDnsZone
     * @return string
     */
    public function getPrivateDnsZone()
    {
        return $this->container['privateDnsZone'];
    }

    /**
     * Sets privateDnsZone
     * @param string $privateDnsZone
     * @return $this
     */
    public function setPrivateDnsZone($privateDnsZone)
    {
        $this->container['privateDnsZone'] = $privateDnsZone;

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
     * Gets resourceLocation
     * @return string
     */
    public function getResourceLocation()
    {
        return $this->container['resourceLocation'];
    }

    /**
     * Sets resourceLocation
     * @param string $resourceLocation
     * @return $this
     */
    public function setResourceLocation($resourceLocation)
    {
        $this->container['resourceLocation'] = $resourceLocation;

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
     * Gets sshPublicKey
     * @return string
     */
    public function getSshPublicKey()
    {
        return $this->container['sshPublicKey'];
    }

    /**
     * Sets sshPublicKey
     * @param string $sshPublicKey
     * @return $this
     */
    public function setSshPublicKey($sshPublicKey)
    {
        $this->container['sshPublicKey'] = $sshPublicKey;

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
     * Gets userAssignedIdentity
     * @return string
     */
    public function getUserAssignedIdentity()
    {
        return $this->container['userAssignedIdentity'];
    }

    /**
     * Sets userAssignedIdentity
     * @param string $userAssignedIdentity
     * @return $this
     */
    public function setUserAssignedIdentity($userAssignedIdentity)
    {
        $this->container['userAssignedIdentity'] = $userAssignedIdentity;

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

