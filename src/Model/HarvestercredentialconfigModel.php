<?php

/**
 * HarvestercredentialconfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class HarvestercredentialconfigModel implements ArrayAccess
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
        'clusterId',
        'clusterType',
        'kubeconfigContent',
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
        'clusterId',
        'clusterType',
        'kubeconfigContent',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterId' => 'string',
        'clusterType' => 'string',
        'kubeconfigContent' => '\Rancher\Model\PasswordModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterId' => 'setClusterId',
        'clusterType' => 'setClusterType',
        'kubeconfigContent' => 'setKubeconfigContent',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterId' => 'getClusterId',
        'clusterType' => 'getClusterType',
        'kubeconfigContent' => 'getKubeconfigContent',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['kubeconfigContent'] = isset($data['kubeconfigContent']) ? $data['kubeconfigContent'] : null;
    }

    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

        return $this;
    }


    /**
     * Gets clusterType
     * @return string
     */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
     * Sets clusterType
     * @param string $clusterType
     * @return $this
     */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;

        return $this;
    }


    /**
     * Gets kubeconfigContent
     * @return \Rancher\Model\PasswordModel
     */
    public function getKubeconfigContent()
    {
        return $this->container['kubeconfigContent'];
    }

    /**
     * Sets kubeconfigContent
     * @param \Rancher\Model\PasswordModel $kubeconfigContent
     * @return $this
     */
    public function setKubeconfigContent($kubeconfigContent)
    {
        $this->container['kubeconfigContent'] = $kubeconfigContent;

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

