<?php

namespace Rancher\Model;

use \ArrayAccess;

class RancherKubernetesEngineConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'addonJobTimeout' => 'int',
        'addons' => 'string',
        'addonsInclude' => 'string[]',
        'authentication' => '\Rancher\Model\AuthnConfig',
        'authorization' => '\Rancher\Model\AuthzConfig',
        'bastionHost' => '\Rancher\Model\BastionHost',
        'cloudProvider' => '\Rancher\Model\CloudProvider',
        'clusterName' => 'string',
        'dns' => '\Rancher\Model\DnsConfig',
        'ignoreDockerVersion' => 'boolean',
        'ingress' => '\Rancher\Model\IngressConfig',
        'kubernetesVersion' => 'string',
        'monitoring' => '\Rancher\Model\MonitoringConfig',
        'network' => '\Rancher\Model\NetworkConfig',
        'nodes' => '\Rancher\Model\RkeConfigNode[]',
        'prefixPath' => 'string',
        'privateRegistries' => '\Rancher\Model\PrivateRegistry[]',
        'restore' => '\Rancher\Model\RestoreConfig',
        'rotateCertificates' => '\Rancher\Model\RotateCertificates',
        'services' => '\Rancher\Model\RkeConfigServices',
        'sshAgentAuth' => 'boolean',
        'sshCertPath' => 'string',
        'sshKeyPath' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'addonJobTimeout' => 'setAddonJobTimeout',
        'addons' => 'setAddons',
        'addonsInclude' => 'setAddonsInclude',
        'authentication' => 'setAuthentication',
        'authorization' => 'setAuthorization',
        'bastionHost' => 'setBastionHost',
        'cloudProvider' => 'setCloudProvider',
        'clusterName' => 'setClusterName',
        'dns' => 'setDns',
        'ignoreDockerVersion' => 'setIgnoreDockerVersion',
        'ingress' => 'setIngress',
        'kubernetesVersion' => 'setKubernetesVersion',
        'monitoring' => 'setMonitoring',
        'network' => 'setNetwork',
        'nodes' => 'setNodes',
        'prefixPath' => 'setPrefixPath',
        'privateRegistries' => 'setPrivateRegistries',
        'restore' => 'setRestore',
        'rotateCertificates' => 'setRotateCertificates',
        'services' => 'setServices',
        'sshAgentAuth' => 'setSshAgentAuth',
        'sshCertPath' => 'setSshCertPath',
        'sshKeyPath' => 'setSshKeyPath',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'addonJobTimeout' => 'getAddonJobTimeout',
        'addons' => 'getAddons',
        'addonsInclude' => 'getAddonsInclude',
        'authentication' => 'getAuthentication',
        'authorization' => 'getAuthorization',
        'bastionHost' => 'getBastionHost',
        'cloudProvider' => 'getCloudProvider',
        'clusterName' => 'getClusterName',
        'dns' => 'getDns',
        'ignoreDockerVersion' => 'getIgnoreDockerVersion',
        'ingress' => 'getIngress',
        'kubernetesVersion' => 'getKubernetesVersion',
        'monitoring' => 'getMonitoring',
        'network' => 'getNetwork',
        'nodes' => 'getNodes',
        'prefixPath' => 'getPrefixPath',
        'privateRegistries' => 'getPrivateRegistries',
        'restore' => 'getRestore',
        'rotateCertificates' => 'getRotateCertificates',
        'services' => 'getServices',
        'sshAgentAuth' => 'getSshAgentAuth',
        'sshCertPath' => 'getSshCertPath',
        'sshKeyPath' => 'getSshKeyPath',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['addonJobTimeout'] = isset($data['addonJobTimeout']) ? $data['addonJobTimeout'] : null;
        $this->container['addons'] = isset($data['addons']) ? $data['addons'] : null;
        $this->container['addonsInclude'] = isset($data['addonsInclude']) ? $data['addonsInclude'] : null;
        $this->container['authentication'] = isset($data['authentication']) ? $data['authentication'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['bastionHost'] = isset($data['bastionHost']) ? $data['bastionHost'] : null;
        $this->container['cloudProvider'] = isset($data['cloudProvider']) ? $data['cloudProvider'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['dns'] = isset($data['dns']) ? $data['dns'] : null;
        $this->container['ignoreDockerVersion'] = isset($data['ignoreDockerVersion']) ? $data['ignoreDockerVersion'] : null;
        $this->container['ingress'] = isset($data['ingress']) ? $data['ingress'] : null;
        $this->container['kubernetesVersion'] = isset($data['kubernetesVersion']) ? $data['kubernetesVersion'] : null;
        $this->container['monitoring'] = isset($data['monitoring']) ? $data['monitoring'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['prefixPath'] = isset($data['prefixPath']) ? $data['prefixPath'] : null;
        $this->container['privateRegistries'] = isset($data['privateRegistries']) ? $data['privateRegistries'] : null;
        $this->container['restore'] = isset($data['restore']) ? $data['restore'] : null;
        $this->container['rotateCertificates'] = isset($data['rotateCertificates']) ? $data['rotateCertificates'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['sshAgentAuth'] = isset($data['sshAgentAuth']) ? $data['sshAgentAuth'] : null;
        $this->container['sshCertPath'] = isset($data['sshCertPath']) ? $data['sshCertPath'] : null;
        $this->container['sshKeyPath'] = isset($data['sshKeyPath']) ? $data['sshKeyPath'] : null;
    }

    /**
     * Gets addonJobTimeout
     * @return int
     */
    public function getAddonJobTimeout()
    {
        return $this->container['addonJobTimeout'];
    }

    /**
     * Sets addonJobTimeout
     * @param int $addonJobTimeout
     * @return $this
     */
    public function setAddonJobTimeout($addonJobTimeout)
    {
        $this->container['addonJobTimeout'] = $addonJobTimeout;

        return $this;
    }


    /**
     * Gets addons
     * @return string
     */
    public function getAddons()
    {
        return $this->container['addons'];
    }

    /**
     * Sets addons
     * @param string $addons
     * @return $this
     */
    public function setAddons($addons)
    {
        $this->container['addons'] = $addons;

        return $this;
    }


    /**
     * Gets addonsInclude
     * @return string[]
     */
    public function getAddonsInclude()
    {
        return $this->container['addonsInclude'];
    }

    /**
     * Sets addonsInclude
     * @param string[] $addonsInclude
     * @return $this
     */
    public function setAddonsInclude($addonsInclude)
    {
        $this->container['addonsInclude'] = $addonsInclude;

        return $this;
    }


    /**
     * Gets authentication
     * @return \Rancher\Model\AuthnConfig
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     * @param \Rancher\Model\AuthnConfig $authentication
     * @return $this
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }


    /**
     * Gets authorization
     * @return \Rancher\Model\AuthzConfig
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     * @param \Rancher\Model\AuthzConfig $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }


    /**
     * Gets bastionHost
     * @return \Rancher\Model\BastionHost
     */
    public function getBastionHost()
    {
        return $this->container['bastionHost'];
    }

    /**
     * Sets bastionHost
     * @param \Rancher\Model\BastionHost $bastionHost
     * @return $this
     */
    public function setBastionHost($bastionHost)
    {
        $this->container['bastionHost'] = $bastionHost;

        return $this;
    }


    /**
     * Gets cloudProvider
     * @return \Rancher\Model\CloudProvider
     */
    public function getCloudProvider()
    {
        return $this->container['cloudProvider'];
    }

    /**
     * Sets cloudProvider
     * @param \Rancher\Model\CloudProvider $cloudProvider
     * @return $this
     */
    public function setCloudProvider($cloudProvider)
    {
        $this->container['cloudProvider'] = $cloudProvider;

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
     * Gets dns
     * @return \Rancher\Model\DnsConfig
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     * @param \Rancher\Model\DnsConfig $dns
     * @return $this
     */
    public function setDns($dns)
    {
        $this->container['dns'] = $dns;

        return $this;
    }


    /**
     * Gets ignoreDockerVersion
     * @return boolean
     */
    public function getIgnoreDockerVersion()
    {
        return $this->container['ignoreDockerVersion'];
    }

    /**
     * Sets ignoreDockerVersion
     * @param boolean $ignoreDockerVersion
     * @return $this
     */
    public function setIgnoreDockerVersion($ignoreDockerVersion)
    {
        $this->container['ignoreDockerVersion'] = $ignoreDockerVersion;

        return $this;
    }


    /**
     * Gets ingress
     * @return \Rancher\Model\IngressConfig
     */
    public function getIngress()
    {
        return $this->container['ingress'];
    }

    /**
     * Sets ingress
     * @param \Rancher\Model\IngressConfig $ingress
     * @return $this
     */
    public function setIngress($ingress)
    {
        $this->container['ingress'] = $ingress;

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
     * Gets monitoring
     * @return \Rancher\Model\MonitoringConfig
     */
    public function getMonitoring()
    {
        return $this->container['monitoring'];
    }

    /**
     * Sets monitoring
     * @param \Rancher\Model\MonitoringConfig $monitoring
     * @return $this
     */
    public function setMonitoring($monitoring)
    {
        $this->container['monitoring'] = $monitoring;

        return $this;
    }


    /**
     * Gets network
     * @return \Rancher\Model\NetworkConfig
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param \Rancher\Model\NetworkConfig $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }


    /**
     * Gets nodes
     * @return \Rancher\Model\RkeConfigNode[]
     */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
     * Sets nodes
     * @param \Rancher\Model\RkeConfigNode[] $nodes
     * @return $this
     */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;

        return $this;
    }


    /**
     * Gets prefixPath
     * @return string
     */
    public function getPrefixPath()
    {
        return $this->container['prefixPath'];
    }

    /**
     * Sets prefixPath
     * @param string $prefixPath
     * @return $this
     */
    public function setPrefixPath($prefixPath)
    {
        $this->container['prefixPath'] = $prefixPath;

        return $this;
    }


    /**
     * Gets privateRegistries
     * @return \Rancher\Model\PrivateRegistry[]
     */
    public function getPrivateRegistries()
    {
        return $this->container['privateRegistries'];
    }

    /**
     * Sets privateRegistries
     * @param \Rancher\Model\PrivateRegistry[] $privateRegistries
     * @return $this
     */
    public function setPrivateRegistries($privateRegistries)
    {
        $this->container['privateRegistries'] = $privateRegistries;

        return $this;
    }


    /**
     * Gets restore
     * @return \Rancher\Model\RestoreConfig
     */
    public function getRestore()
    {
        return $this->container['restore'];
    }

    /**
     * Sets restore
     * @param \Rancher\Model\RestoreConfig $restore
     * @return $this
     */
    public function setRestore($restore)
    {
        $this->container['restore'] = $restore;

        return $this;
    }


    /**
     * Gets rotateCertificates
     * @return \Rancher\Model\RotateCertificates
     */
    public function getRotateCertificates()
    {
        return $this->container['rotateCertificates'];
    }

    /**
     * Sets rotateCertificates
     * @param \Rancher\Model\RotateCertificates $rotateCertificates
     * @return $this
     */
    public function setRotateCertificates($rotateCertificates)
    {
        $this->container['rotateCertificates'] = $rotateCertificates;

        return $this;
    }


    /**
     * Gets services
     * @return \Rancher\Model\RkeConfigServices
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param \Rancher\Model\RkeConfigServices $services
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }


    /**
     * Gets sshAgentAuth
     * @return boolean
     */
    public function getSshAgentAuth()
    {
        return $this->container['sshAgentAuth'];
    }

    /**
     * Sets sshAgentAuth
     * @param boolean $sshAgentAuth
     * @return $this
     */
    public function setSshAgentAuth($sshAgentAuth)
    {
        $this->container['sshAgentAuth'] = $sshAgentAuth;

        return $this;
    }


    /**
     * Gets sshCertPath
     * @return string
     */
    public function getSshCertPath()
    {
        return $this->container['sshCertPath'];
    }

    /**
     * Sets sshCertPath
     * @param string $sshCertPath
     * @return $this
     */
    public function setSshCertPath($sshCertPath)
    {
        $this->container['sshCertPath'] = $sshCertPath;

        return $this;
    }


    /**
     * Gets sshKeyPath
     * @return string
     */
    public function getSshKeyPath()
    {
        return $this->container['sshKeyPath'];
    }

    /**
     * Sets sshKeyPath
     * @param string $sshKeyPath
     * @return $this
     */
    public function setSshKeyPath($sshKeyPath)
    {
        $this->container['sshKeyPath'] = $sshKeyPath;

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

