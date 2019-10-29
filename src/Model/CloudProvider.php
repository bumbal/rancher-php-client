<?php

namespace Rancher\Model;

use \ArrayAccess;

class CloudProvider implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'awsCloudProvider' => '\Rancher\Model\AwsCloudProvider',
        'azureCloudProvider' => '\Rancher\Model\AzureCloudProvider',
        'customCloudProvider' => 'string',
        'name' => 'string',
        'openstackCloudProvider' => '\Rancher\Model\OpenstackCloudProvider',
        'vsphereCloudProvider' => '\Rancher\Model\VsphereCloudProvider',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'awsCloudProvider' => 'setAwsCloudProvider',
        'azureCloudProvider' => 'setAzureCloudProvider',
        'customCloudProvider' => 'setCustomCloudProvider',
        'name' => 'setName',
        'openstackCloudProvider' => 'setOpenstackCloudProvider',
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
        'name' => 'getName',
        'openstackCloudProvider' => 'getOpenstackCloudProvider',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['openstackCloudProvider'] = isset($data['openstackCloudProvider']) ? $data['openstackCloudProvider'] : null;
        $this->container['vsphereCloudProvider'] = isset($data['vsphereCloudProvider']) ? $data['vsphereCloudProvider'] : null;
    }

    /**
     * Gets awsCloudProvider
     * @return \Rancher\Model\AwsCloudProvider
     */
    public function getAwsCloudProvider()
    {
        return $this->container['awsCloudProvider'];
    }

    /**
     * Sets awsCloudProvider
     * @param \Rancher\Model\AwsCloudProvider $awsCloudProvider
     * @return $this
     */
    public function setAwsCloudProvider($awsCloudProvider)
    {
        $this->container['awsCloudProvider'] = $awsCloudProvider;

        return $this;
    }


    /**
     * Gets azureCloudProvider
     * @return \Rancher\Model\AzureCloudProvider
     */
    public function getAzureCloudProvider()
    {
        return $this->container['azureCloudProvider'];
    }

    /**
     * Sets azureCloudProvider
     * @param \Rancher\Model\AzureCloudProvider $azureCloudProvider
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
     * @return \Rancher\Model\OpenstackCloudProvider
     */
    public function getOpenstackCloudProvider()
    {
        return $this->container['openstackCloudProvider'];
    }

    /**
     * Sets openstackCloudProvider
     * @param \Rancher\Model\OpenstackCloudProvider $openstackCloudProvider
     * @return $this
     */
    public function setOpenstackCloudProvider($openstackCloudProvider)
    {
        $this->container['openstackCloudProvider'] = $openstackCloudProvider;

        return $this;
    }


    /**
     * Gets vsphereCloudProvider
     * @return \Rancher\Model\VsphereCloudProvider
     */
    public function getVsphereCloudProvider()
    {
        return $this->container['vsphereCloudProvider'];
    }

    /**
     * Sets vsphereCloudProvider
     * @param \Rancher\Model\VsphereCloudProvider $vsphereCloudProvider
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

