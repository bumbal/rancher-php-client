<?php

/**
 * AzureconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AzureconfigModel implements ArrayAccess
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
        'availabilitySet',
        'clientId',
        'clientSecret',
        'customData',
        'diskSize',
        'dns',
        'dockerPort',
        'environment',
        'faultDomainCount',
        'image',
        'location',
        'managedDisks',
        'noPublicIp',
        'openPort',
        'privateIpAddress',
        'resourceGroup',
        'size',
        'sshUser',
        'staticPublicIp',
        'storageType',
        'subnet',
        'subnetPrefix',
        'subscriptionId',
        'updateDomainCount',
        'usePrivateIp',
        'vnet',
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
        'availabilitySet',
        'clientId',
        'clientSecret',
        'customData',
        'diskSize',
        'dns',
        'dockerPort',
        'environment',
        'faultDomainCount',
        'image',
        'location',
        'managedDisks',
        'noPublicIp',
        'openPort',
        'privateIpAddress',
        'resourceGroup',
        'size',
        'sshUser',
        'staticPublicIp',
        'storageType',
        'subnet',
        'subnetPrefix',
        'subscriptionId',
        'updateDomainCount',
        'usePrivateIp',
        'vnet',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'availabilitySet' => 'string',
        'clientId' => 'string',
        'clientSecret' => '\Rancher\Model\PasswordModel',
        'customData' => 'string',
        'diskSize' => 'string',
        'dns' => 'string',
        'dockerPort' => 'string',
        'environment' => 'string',
        'faultDomainCount' => 'string',
        'image' => 'string',
        'location' => 'string',
        'managedDisks' => 'boolean',
        'noPublicIp' => 'boolean',
        'openPort' => 'string[]',
        'privateIpAddress' => 'string',
        'resourceGroup' => 'string',
        'size' => 'string',
        'sshUser' => 'string',
        'staticPublicIp' => 'boolean',
        'storageType' => 'string',
        'subnet' => 'string',
        'subnetPrefix' => 'string',
        'subscriptionId' => 'string',
        'updateDomainCount' => 'string',
        'usePrivateIp' => 'boolean',
        'vnet' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'availabilitySet' => 'setAvailabilitySet',
        'clientId' => 'setClientId',
        'clientSecret' => 'setClientSecret',
        'customData' => 'setCustomData',
        'diskSize' => 'setDiskSize',
        'dns' => 'setDns',
        'dockerPort' => 'setDockerPort',
        'environment' => 'setEnvironment',
        'faultDomainCount' => 'setFaultDomainCount',
        'image' => 'setImage',
        'location' => 'setLocation',
        'managedDisks' => 'setManagedDisks',
        'noPublicIp' => 'setNoPublicIp',
        'openPort' => 'setOpenPort',
        'privateIpAddress' => 'setPrivateIpAddress',
        'resourceGroup' => 'setResourceGroup',
        'size' => 'setSize',
        'sshUser' => 'setSshUser',
        'staticPublicIp' => 'setStaticPublicIp',
        'storageType' => 'setStorageType',
        'subnet' => 'setSubnet',
        'subnetPrefix' => 'setSubnetPrefix',
        'subscriptionId' => 'setSubscriptionId',
        'updateDomainCount' => 'setUpdateDomainCount',
        'usePrivateIp' => 'setUsePrivateIp',
        'vnet' => 'setVnet',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'availabilitySet' => 'getAvailabilitySet',
        'clientId' => 'getClientId',
        'clientSecret' => 'getClientSecret',
        'customData' => 'getCustomData',
        'diskSize' => 'getDiskSize',
        'dns' => 'getDns',
        'dockerPort' => 'getDockerPort',
        'environment' => 'getEnvironment',
        'faultDomainCount' => 'getFaultDomainCount',
        'image' => 'getImage',
        'location' => 'getLocation',
        'managedDisks' => 'getManagedDisks',
        'noPublicIp' => 'getNoPublicIp',
        'openPort' => 'getOpenPort',
        'privateIpAddress' => 'getPrivateIpAddress',
        'resourceGroup' => 'getResourceGroup',
        'size' => 'getSize',
        'sshUser' => 'getSshUser',
        'staticPublicIp' => 'getStaticPublicIp',
        'storageType' => 'getStorageType',
        'subnet' => 'getSubnet',
        'subnetPrefix' => 'getSubnetPrefix',
        'subscriptionId' => 'getSubscriptionId',
        'updateDomainCount' => 'getUpdateDomainCount',
        'usePrivateIp' => 'getUsePrivateIp',
        'vnet' => 'getVnet',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['availabilitySet'] = isset($data['availabilitySet']) ? $data['availabilitySet'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['customData'] = isset($data['customData']) ? $data['customData'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['dns'] = isset($data['dns']) ? $data['dns'] : null;
        $this->container['dockerPort'] = isset($data['dockerPort']) ? $data['dockerPort'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['faultDomainCount'] = isset($data['faultDomainCount']) ? $data['faultDomainCount'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['managedDisks'] = isset($data['managedDisks']) ? $data['managedDisks'] : null;
        $this->container['noPublicIp'] = isset($data['noPublicIp']) ? $data['noPublicIp'] : null;
        $this->container['openPort'] = isset($data['openPort']) ? $data['openPort'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['resourceGroup'] = isset($data['resourceGroup']) ? $data['resourceGroup'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sshUser'] = isset($data['sshUser']) ? $data['sshUser'] : null;
        $this->container['staticPublicIp'] = isset($data['staticPublicIp']) ? $data['staticPublicIp'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['subnet'] = isset($data['subnet']) ? $data['subnet'] : null;
        $this->container['subnetPrefix'] = isset($data['subnetPrefix']) ? $data['subnetPrefix'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['updateDomainCount'] = isset($data['updateDomainCount']) ? $data['updateDomainCount'] : null;
        $this->container['usePrivateIp'] = isset($data['usePrivateIp']) ? $data['usePrivateIp'] : null;
        $this->container['vnet'] = isset($data['vnet']) ? $data['vnet'] : null;
    }

    /**
     * Gets availabilitySet
     * @return string
     */
    public function getAvailabilitySet()
    {
        return $this->container['availabilitySet'];
    }

    /**
     * Sets availabilitySet
     * @param string $availabilitySet
     * @return $this
     */
    public function setAvailabilitySet($availabilitySet)
    {
        $this->container['availabilitySet'] = $availabilitySet;

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
     * @return \Rancher\Model\PasswordModel
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     * @param \Rancher\Model\PasswordModel $clientSecret
     * @return $this
     */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;

        return $this;
    }


    /**
     * Gets customData
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['customData'];
    }

    /**
     * Sets customData
     * @param string $customData
     * @return $this
     */
    public function setCustomData($customData)
    {
        $this->container['customData'] = $customData;

        return $this;
    }


    /**
     * Gets diskSize
     * @return string
     */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
     * Sets diskSize
     * @param string $diskSize
     * @return $this
     */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;

        return $this;
    }


    /**
     * Gets dns
     * @return string
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     * @param string $dns
     * @return $this
     */
    public function setDns($dns)
    {
        $this->container['dns'] = $dns;

        return $this;
    }


    /**
     * Gets dockerPort
     * @return string
     */
    public function getDockerPort()
    {
        return $this->container['dockerPort'];
    }

    /**
     * Sets dockerPort
     * @param string $dockerPort
     * @return $this
     */
    public function setDockerPort($dockerPort)
    {
        $this->container['dockerPort'] = $dockerPort;

        return $this;
    }


    /**
     * Gets environment
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     * @param string $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }


    /**
     * Gets faultDomainCount
     * @return string
     */
    public function getFaultDomainCount()
    {
        return $this->container['faultDomainCount'];
    }

    /**
     * Sets faultDomainCount
     * @param string $faultDomainCount
     * @return $this
     */
    public function setFaultDomainCount($faultDomainCount)
    {
        $this->container['faultDomainCount'] = $faultDomainCount;

        return $this;
    }


    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * Gets managedDisks
     * @return boolean
     */
    public function getManagedDisks()
    {
        return $this->container['managedDisks'];
    }

    /**
     * Sets managedDisks
     * @param boolean $managedDisks
     * @return $this
     */
    public function setManagedDisks($managedDisks)
    {
        $this->container['managedDisks'] = $managedDisks;

        return $this;
    }


    /**
     * Gets noPublicIp
     * @return boolean
     */
    public function getNoPublicIp()
    {
        return $this->container['noPublicIp'];
    }

    /**
     * Sets noPublicIp
     * @param boolean $noPublicIp
     * @return $this
     */
    public function setNoPublicIp($noPublicIp)
    {
        $this->container['noPublicIp'] = $noPublicIp;

        return $this;
    }


    /**
     * Gets openPort
     * @return string[]
     */
    public function getOpenPort()
    {
        return $this->container['openPort'];
    }

    /**
     * Sets openPort
     * @param string[] $openPort
     * @return $this
     */
    public function setOpenPort($openPort)
    {
        $this->container['openPort'] = $openPort;

        return $this;
    }


    /**
     * Gets privateIpAddress
     * @return string
     */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
     * Sets privateIpAddress
     * @param string $privateIpAddress
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;

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
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }


    /**
     * Gets sshUser
     * @return string
     */
    public function getSshUser()
    {
        return $this->container['sshUser'];
    }

    /**
     * Sets sshUser
     * @param string $sshUser
     * @return $this
     */
    public function setSshUser($sshUser)
    {
        $this->container['sshUser'] = $sshUser;

        return $this;
    }


    /**
     * Gets staticPublicIp
     * @return boolean
     */
    public function getStaticPublicIp()
    {
        return $this->container['staticPublicIp'];
    }

    /**
     * Sets staticPublicIp
     * @param boolean $staticPublicIp
     * @return $this
     */
    public function setStaticPublicIp($staticPublicIp)
    {
        $this->container['staticPublicIp'] = $staticPublicIp;

        return $this;
    }


    /**
     * Gets storageType
     * @return string
     */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
     * Sets storageType
     * @param string $storageType
     * @return $this
     */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;

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
     * Gets subnetPrefix
     * @return string
     */
    public function getSubnetPrefix()
    {
        return $this->container['subnetPrefix'];
    }

    /**
     * Sets subnetPrefix
     * @param string $subnetPrefix
     * @return $this
     */
    public function setSubnetPrefix($subnetPrefix)
    {
        $this->container['subnetPrefix'] = $subnetPrefix;

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
     * Gets updateDomainCount
     * @return string
     */
    public function getUpdateDomainCount()
    {
        return $this->container['updateDomainCount'];
    }

    /**
     * Sets updateDomainCount
     * @param string $updateDomainCount
     * @return $this
     */
    public function setUpdateDomainCount($updateDomainCount)
    {
        $this->container['updateDomainCount'] = $updateDomainCount;

        return $this;
    }


    /**
     * Gets usePrivateIp
     * @return boolean
     */
    public function getUsePrivateIp()
    {
        return $this->container['usePrivateIp'];
    }

    /**
     * Sets usePrivateIp
     * @param boolean $usePrivateIp
     * @return $this
     */
    public function setUsePrivateIp($usePrivateIp)
    {
        $this->container['usePrivateIp'] = $usePrivateIp;

        return $this;
    }


    /**
     * Gets vnet
     * @return string
     */
    public function getVnet()
    {
        return $this->container['vnet'];
    }

    /**
     * Sets vnet
     * @param string $vnet
     * @return $this
     */
    public function setVnet($vnet)
    {
        $this->container['vnet'] = $vnet;

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

