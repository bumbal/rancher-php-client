<?php

namespace Rancher\Model;

use \ArrayAccess;

class PipelineConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'branch' => '\Rancher\Model\Constraint',
        'notification' => '\Rancher\Model\PipelineNotification',
        'stages' => '\Rancher\Model\Stage[]',
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
     * @return \Rancher\Model\Constraint
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     * @param \Rancher\Model\Constraint $branch
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }


    /**
     * Gets notification
     * @return \Rancher\Model\PipelineNotification
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     * @param \Rancher\Model\PipelineNotification $notification
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }


    /**
     * Gets stages
     * @return \Rancher\Model\Stage[]
     */
    public function getStages()
    {
        return $this->container['stages'];
    }

    /**
     * Sets stages
     * @param \Rancher\Model\Stage[] $stages
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

