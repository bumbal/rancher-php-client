<?php

/**
 * PipelineConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PipelineConfigModel implements ArrayAccess
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
        'branch',
        'notification',
        'stages',
        'timeout',
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
        'branch',
        'notification',
        'stages',
        'timeout',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'branch' => '\Rancher\Model\ConstraintModel',
        'notification' => '\Rancher\Model\PipelineNotificationModel',
        'stages' => '\Rancher\Model\StageModel[]',
        'timeout' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'branch' => 'setBranch',
        'notification' => 'setNotification',
        'stages' => 'setStages',
        'timeout' => 'setTimeout',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'branch' => 'getBranch',
        'notification' => 'getNotification',
        'stages' => 'getStages',
        'timeout' => 'getTimeout',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['stages'] = isset($data['stages']) ? $data['stages'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * Gets branch
     * @return \Rancher\Model\ConstraintModel
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     * @param \Rancher\Model\ConstraintModel $branch
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }


    /**
     * Gets notification
     * @return \Rancher\Model\PipelineNotificationModel
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     * @param \Rancher\Model\PipelineNotificationModel $notification
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }


    /**
     * Gets stages
     * @return \Rancher\Model\StageModel[]
     */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
     * Sets stages
     * @param \Rancher\Model\StageModel[] $stages
     * @return $this
     */
    public function setStages($stages)
    {
        $this->container['stages'] = $stages;

        return $this;
    }


    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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

