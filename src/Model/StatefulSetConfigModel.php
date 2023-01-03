<?php

/**
 * StatefulSetConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StatefulSetConfigModel implements ArrayAccess
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
        'partition',
        'podManagementPolicy',
        'revisionHistoryLimit',
        'serviceName',
        'strategy',
        'volumeClaimTemplates',
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
        'partition',
        'podManagementPolicy',
        'revisionHistoryLimit',
        'serviceName',
        'strategy',
        'volumeClaimTemplates',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'partition' => 'int',
        'podManagementPolicy' => 'string',
        'revisionHistoryLimit' => 'int',
        'serviceName' => 'string',
        'strategy' => 'string',
        'volumeClaimTemplates' => '\Rancher\Model\PersistentVolumeClaimModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'partition' => 'setPartition',
        'podManagementPolicy' => 'setPodManagementPolicy',
        'revisionHistoryLimit' => 'setRevisionHistoryLimit',
        'serviceName' => 'setServiceName',
        'strategy' => 'setStrategy',
        'volumeClaimTemplates' => 'setVolumeClaimTemplates',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'partition' => 'getPartition',
        'podManagementPolicy' => 'getPodManagementPolicy',
        'revisionHistoryLimit' => 'getRevisionHistoryLimit',
        'serviceName' => 'getServiceName',
        'strategy' => 'getStrategy',
        'volumeClaimTemplates' => 'getVolumeClaimTemplates',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['podManagementPolicy'] = isset($data['podManagementPolicy']) ? $data['podManagementPolicy'] : null;
        $this->container['revisionHistoryLimit'] = isset($data['revisionHistoryLimit']) ? $data['revisionHistoryLimit'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['volumeClaimTemplates'] = isset($data['volumeClaimTemplates']) ? $data['volumeClaimTemplates'] : null;
    }

    /**
     * Gets partition
     * @return int
     */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
     * Sets partition
     * @param int $partition
     * @return $this
     */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;

        return $this;
    }


    /**
     * Gets podManagementPolicy
     * @return string
     */
    public function getPodManagementPolicy()
    {
        return $this->container['podManagementPolicy'];
    }

    /**
     * Sets podManagementPolicy
     * @param string $podManagementPolicy
     * @return $this
     */
    public function setPodManagementPolicy($podManagementPolicy)
    {
        $this->container['podManagementPolicy'] = $podManagementPolicy;

        return $this;
    }


    /**
     * Gets revisionHistoryLimit
     * @return int
     */
    public function getRevisionHistoryLimit()
    {
        return $this->container['revisionHistoryLimit'];
    }

    /**
     * Sets revisionHistoryLimit
     * @param int $revisionHistoryLimit
     * @return $this
     */
    public function setRevisionHistoryLimit($revisionHistoryLimit)
    {
        $this->container['revisionHistoryLimit'] = $revisionHistoryLimit;

        return $this;
    }


    /**
     * Gets serviceName
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }


    /**
     * Gets strategy
     * @return string
     */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
     * Sets strategy
     * @param string $strategy
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;

        return $this;
    }


    /**
     * Gets volumeClaimTemplates
     * @return \Rancher\Model\PersistentVolumeClaimModel[]
     */
    public function getVolumeClaimTemplates()
    {
        return $this->container['volumeClaimTemplates'];
    }

    /**
     * Sets volumeClaimTemplates
     * @param \Rancher\Model\PersistentVolumeClaimModel[] $volumeClaimTemplates
     * @return $this
     */
    public function setVolumeClaimTemplates($volumeClaimTemplates)
    {
        $this->container['volumeClaimTemplates'] = $volumeClaimTemplates;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
}

