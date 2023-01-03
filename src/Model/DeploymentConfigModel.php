<?php

/**
 * DeploymentConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class DeploymentConfigModel implements ArrayAccess
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
        'maxSurge',
        'maxUnavailable',
        'minReadySeconds',
        'progressDeadlineSeconds',
        'revisionHistoryLimit',
        'strategy',
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
        'maxSurge',
        'maxUnavailable',
        'minReadySeconds',
        'progressDeadlineSeconds',
        'revisionHistoryLimit',
        'strategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'maxSurge' => 'string',
        'maxUnavailable' => 'string',
        'minReadySeconds' => 'int',
        'progressDeadlineSeconds' => 'int',
        'revisionHistoryLimit' => 'int',
        'strategy' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'maxSurge' => 'setMaxSurge',
        'maxUnavailable' => 'setMaxUnavailable',
        'minReadySeconds' => 'setMinReadySeconds',
        'progressDeadlineSeconds' => 'setProgressDeadlineSeconds',
        'revisionHistoryLimit' => 'setRevisionHistoryLimit',
        'strategy' => 'setStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'maxSurge' => 'getMaxSurge',
        'maxUnavailable' => 'getMaxUnavailable',
        'minReadySeconds' => 'getMinReadySeconds',
        'progressDeadlineSeconds' => 'getProgressDeadlineSeconds',
        'revisionHistoryLimit' => 'getRevisionHistoryLimit',
        'strategy' => 'getStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['maxSurge'] = isset($data['maxSurge']) ? $data['maxSurge'] : null;
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
        $this->container['minReadySeconds'] = isset($data['minReadySeconds']) ? $data['minReadySeconds'] : null;
        $this->container['progressDeadlineSeconds'] = isset($data['progressDeadlineSeconds']) ? $data['progressDeadlineSeconds'] : null;
        $this->container['revisionHistoryLimit'] = isset($data['revisionHistoryLimit']) ? $data['revisionHistoryLimit'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
    }

    /**
     * Gets maxSurge
     * @return string
     */
    public function getMaxSurge()
    {
        return $this->container['maxSurge'];
    }

    /**
     * Sets maxSurge
     * @param string $maxSurge
     * @return $this
     */
    public function setMaxSurge($maxSurge)
    {
        $this->container['maxSurge'] = $maxSurge;

        return $this;
    }


    /**
     * Gets maxUnavailable
     * @return string
     */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
     * Sets maxUnavailable
     * @param string $maxUnavailable
     * @return $this
     */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->container['maxUnavailable'] = $maxUnavailable;

        return $this;
    }


    /**
     * Gets minReadySeconds
     * @return int
     */
    public function getMinReadySeconds()
    {
        return $this->container['minReadySeconds'];
    }

    /**
     * Sets minReadySeconds
     * @param int $minReadySeconds
     * @return $this
     */
    public function setMinReadySeconds($minReadySeconds)
    {
        $this->container['minReadySeconds'] = $minReadySeconds;

        return $this;
    }


    /**
     * Gets progressDeadlineSeconds
     * @return int
     */
    public function getProgressDeadlineSeconds()
    {
        return $this->container['progressDeadlineSeconds'];
    }

    /**
     * Sets progressDeadlineSeconds
     * @param int $progressDeadlineSeconds
     * @return $this
     */
    public function setProgressDeadlineSeconds($progressDeadlineSeconds)
    {
        $this->container['progressDeadlineSeconds'] = $progressDeadlineSeconds;

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

