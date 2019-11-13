<?php

/**
 * QueueConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class QueueConfigModel implements ArrayAccess
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
        'batchSendDeadline',
        'capacity',
        'maxBackoff',
        'maxRetries',
        'maxSamplesPerSend',
        'maxShards',
        'minBackoff',
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
        'batchSendDeadline',
        'capacity',
        'maxBackoff',
        'maxRetries',
        'maxSamplesPerSend',
        'maxShards',
        'minBackoff',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'batchSendDeadline' => 'string',
        'capacity' => 'int',
        'maxBackoff' => 'string',
        'maxRetries' => 'int',
        'maxSamplesPerSend' => 'int',
        'maxShards' => 'int',
        'minBackoff' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'batchSendDeadline' => 'setBatchSendDeadline',
        'capacity' => 'setCapacity',
        'maxBackoff' => 'setMaxBackoff',
        'maxRetries' => 'setMaxRetries',
        'maxSamplesPerSend' => 'setMaxSamplesPerSend',
        'maxShards' => 'setMaxShards',
        'minBackoff' => 'setMinBackoff',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'batchSendDeadline' => 'getBatchSendDeadline',
        'capacity' => 'getCapacity',
        'maxBackoff' => 'getMaxBackoff',
        'maxRetries' => 'getMaxRetries',
        'maxSamplesPerSend' => 'getMaxSamplesPerSend',
        'maxShards' => 'getMaxShards',
        'minBackoff' => 'getMinBackoff',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['batchSendDeadline'] = isset($data['batchSendDeadline']) ? $data['batchSendDeadline'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['maxBackoff'] = isset($data['maxBackoff']) ? $data['maxBackoff'] : null;
        $this->container['maxRetries'] = isset($data['maxRetries']) ? $data['maxRetries'] : null;
        $this->container['maxSamplesPerSend'] = isset($data['maxSamplesPerSend']) ? $data['maxSamplesPerSend'] : null;
        $this->container['maxShards'] = isset($data['maxShards']) ? $data['maxShards'] : null;
        $this->container['minBackoff'] = isset($data['minBackoff']) ? $data['minBackoff'] : null;
    }

    /**
     * Gets batchSendDeadline
     * @return string
     */
    public function getBatchSendDeadline()
    {
        return $this->container['batchSendDeadline'];
    }

    /**
     * Sets batchSendDeadline
     * @param string $batchSendDeadline
     * @return $this
     */
    public function setBatchSendDeadline($batchSendDeadline)
    {
        $this->container['batchSendDeadline'] = $batchSendDeadline;

        return $this;
    }


    /**
     * Gets capacity
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     * @param int $capacity
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }


    /**
     * Gets maxBackoff
     * @return string
     */
    public function getMaxBackoff()
    {
        return $this->container['maxBackoff'];
    }

    /**
     * Sets maxBackoff
     * @param string $maxBackoff
     * @return $this
     */
    public function setMaxBackoff($maxBackoff)
    {
        $this->container['maxBackoff'] = $maxBackoff;

        return $this;
    }


    /**
     * Gets maxRetries
     * @return int
     */
    public function getMaxRetries()
    {
        return $this->container['maxRetries'];
    }

    /**
     * Sets maxRetries
     * @param int $maxRetries
     * @return $this
     */
    public function setMaxRetries($maxRetries)
    {
        $this->container['maxRetries'] = $maxRetries;

        return $this;
    }


    /**
     * Gets maxSamplesPerSend
     * @return int
     */
    public function getMaxSamplesPerSend()
    {
        return $this->container['maxSamplesPerSend'];
    }

    /**
     * Sets maxSamplesPerSend
     * @param int $maxSamplesPerSend
     * @return $this
     */
    public function setMaxSamplesPerSend($maxSamplesPerSend)
    {
        $this->container['maxSamplesPerSend'] = $maxSamplesPerSend;

        return $this;
    }


    /**
     * Gets maxShards
     * @return int
     */
    public function getMaxShards()
    {
        return $this->container['maxShards'];
    }

    /**
     * Sets maxShards
     * @param int $maxShards
     * @return $this
     */
    public function setMaxShards($maxShards)
    {
        $this->container['maxShards'] = $maxShards;

        return $this;
    }


    /**
     * Gets minBackoff
     * @return string
     */
    public function getMinBackoff()
    {
        return $this->container['minBackoff'];
    }

    /**
     * Sets minBackoff
     * @param string $minBackoff
     * @return $this
     */
    public function setMinBackoff($minBackoff)
    {
        $this->container['minBackoff'] = $minBackoff;

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

