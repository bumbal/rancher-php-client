<?php

/**
 * CloudProviderModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CloudProviderModel implements ArrayAccess
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
        'awsCloudProvider',
        'azureCloudProvider',
        'customCloudProvider',
        'harvesterCloudProvider',
        'name',
        'openstackCloudProvider',
        'useInstanceMetadataHostname',
        'vsphereCloudProvider',
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
        'awsCloudProvider',
        'azureCloudProvider',
        'customCloudProvider',
        'harvesterCloudProvider',
        'name',
        'openstackCloudProvider',
        'useInstanceMetadataHostname',
        'vsphereCloudProvider',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'awsCloudProvider' => '\Rancher\Model\AwsCloudProviderModel',
        'azureCloudProvider' => '\Rancher\Model\AzureCloudProviderModel',
        'customCloudProvider' => 'string',
        'harvesterCloudProvider' => '\Rancher\Model\HarvesterCloudProviderModel',
        'name' => 'string',
        'openstackCloudProvider' => '\Rancher\Model\OpenstackCloudProviderModel',
        'useInstanceMetadataHostname' => 'boolean',
        'vsphereCloudProvider' => '\Rancher\Model\VsphereCloudProviderModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'awsCloudProvider' => 'setAwsCloudProvider',
        'azureCloudProvider' => 'setAzureCloudProvider',
        'customCloudProvider' => 'setCustomCloudProvider',
        'harvesterCloudProvider' => 'setHarvesterCloudProvider',
        'name' => 'setName',
        'openstackCloudProvider' => 'setOpenstackCloudProvider',
        'useInstanceMetadataHostname' => 'setUseInstanceMetadataHostname',
        'vsphereCloudProvider' => 'setVsphereCloudProvider',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'awsCloudProvider' => 'getAwsCloudProvider',
        'azureCloudProvider' => 'getAzureCloudProvider',
        'customCloudProvider' => 'getCustomCloudProvider',
        'harvesterCloudProvider' => 'getHarvesterCloudProvider',
        'name' => 'getName',
        'openstackCloudProvider' => 'getOpenstackCloudProvider',
        'useInstanceMetadataHostname' => 'getUseInstanceMetadataHostname',
        'vsphereCloudProvider' => 'getVsphereCloudProvider',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['awsCloudProvider'] = isset($data['awsCloudProvider']) ? $data['awsCloudProvider'] : null;
        $this->container['azureCloudProvider'] = isset($data['azureCloudProvider']) ? $data['azureCloudProvider'] : null;
        $this->container['customCloudProvider'] = isset($data['customCloudProvider']) ? $data['customCloudProvider'] : null;
        $this->container['harvesterCloudProvider'] = isset($data['harvesterCloudProvider']) ? $data['harvesterCloudProvider'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['openstackCloudProvider'] = isset($data['openstackCloudProvider']) ? $data['openstackCloudProvider'] : null;
        $this->container['useInstanceMetadataHostname'] = isset($data['useInstanceMetadataHostname']) ? $data['useInstanceMetadataHostname'] : null;
        $this->container['vsphereCloudProvider'] = isset($data['vsphereCloudProvider']) ? $data['vsphereCloudProvider'] : null;
    }

    /**
     * Gets awsCloudProvider
     * @return \Rancher\Model\AwsCloudProviderModel
     */
    public function getAwsCloudProvider()
    {
        return $this->container['awsCloudProvider'];
    }

    /**
     * Sets awsCloudProvider
     * @param \Rancher\Model\AwsCloudProviderModel $awsCloudProvider
     * @return $this
     */
    public function setAwsCloudProvider($awsCloudProvider)
    {
        $this->container['awsCloudProvider'] = $awsCloudProvider;

        return $this;
    }


    /**
     * Gets azureCloudProvider
     * @return \Rancher\Model\AzureCloudProviderModel
     */
    public function getAzureCloudProvider()
    {
        return $this->container['azureCloudProvider'];
    }

    /**
     * Sets azureCloudProvider
     * @param \Rancher\Model\AzureCloudProviderModel $azureCloudProvider
     * @return $this
     */
    public function setAzureCloudProvider($azureCloudProvider)
    {
        $this->container['azureCloudProvider'] = $azureCloudProvider;

        return $this;
    }


    /**
     * Gets customCloudProvider
     * @return string
     */
    public function getCustomCloudProvider()
    {
        return $this->container['customCloudProvider'];
    }

    /**
     * Sets customCloudProvider
     * @param string $customCloudProvider
     * @return $this
     */
    public function setCustomCloudProvider($customCloudProvider)
    {
        $this->container['customCloudProvider'] = $customCloudProvider;

        return $this;
    }


    /**
     * Gets harvesterCloudProvider
     * @return \Rancher\Model\HarvesterCloudProviderModel
     */
    public function getHarvesterCloudProvider()
    {
        return $this->container['harvesterCloudProvider'];
    }

    /**
     * Sets harvesterCloudProvider
     * @param \Rancher\Model\HarvesterCloudProviderModel $harvesterCloudProvider
     * @return $this
     */
    public function setHarvesterCloudProvider($harvesterCloudProvider)
    {
        $this->container['harvesterCloudProvider'] = $harvesterCloudProvider;

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
     * Gets openstackCloudProvider
     * @return \Rancher\Model\OpenstackCloudProviderModel
     */
    public function getOpenstackCloudProvider()
    {
        return $this->container['openstackCloudProvider'];
    }

    /**
     * Sets openstackCloudProvider
     * @param \Rancher\Model\OpenstackCloudProviderModel $openstackCloudProvider
     * @return $this
     */
    public function setOpenstackCloudProvider($openstackCloudProvider)
    {
        $this->container['openstackCloudProvider'] = $openstackCloudProvider;

        return $this;
    }


    /**
     * Gets useInstanceMetadataHostname
     * @return boolean
     */
    public function getUseInstanceMetadataHostname()
    {
        return $this->container['useInstanceMetadataHostname'];
    }

    /**
     * Sets useInstanceMetadataHostname
     * @param boolean $useInstanceMetadataHostname
     * @return $this
     */
    public function setUseInstanceMetadataHostname($useInstanceMetadataHostname)
    {
        $this->container['useInstanceMetadataHostname'] = $useInstanceMetadataHostname;

        return $this;
    }


    /**
     * Gets vsphereCloudProvider
     * @return \Rancher\Model\VsphereCloudProviderModel
     */
    public function getVsphereCloudProvider()
    {
        return $this->container['vsphereCloudProvider'];
    }

    /**
     * Sets vsphereCloudProvider
     * @param \Rancher\Model\VsphereCloudProviderModel $vsphereCloudProvider
     * @return $this
     */
    public function setVsphereCloudProvider($vsphereCloudProvider)
    {
        $this->container['vsphereCloudProvider'] = $vsphereCloudProvider;

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

