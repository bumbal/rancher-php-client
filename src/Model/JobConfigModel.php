<?php

/**
 * JobConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class JobConfigModel implements ArrayAccess
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
        'activeDeadlineSeconds',
        'backoffLimit',
        'completions',
        'manualSelector',
        'parallelism',
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
        'activeDeadlineSeconds',
        'backoffLimit',
        'completions',
        'manualSelector',
        'parallelism',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'activeDeadlineSeconds' => 'int',
        'backoffLimit' => 'int',
        'completions' => 'int',
        'manualSelector' => 'boolean',
        'parallelism' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'activeDeadlineSeconds' => 'setActiveDeadlineSeconds',
        'backoffLimit' => 'setBackoffLimit',
        'completions' => 'setCompletions',
        'manualSelector' => 'setManualSelector',
        'parallelism' => 'setParallelism',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'activeDeadlineSeconds' => 'getActiveDeadlineSeconds',
        'backoffLimit' => 'getBackoffLimit',
        'completions' => 'getCompletions',
        'manualSelector' => 'getManualSelector',
        'parallelism' => 'getParallelism',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['activeDeadlineSeconds'] = isset($data['activeDeadlineSeconds']) ? $data['activeDeadlineSeconds'] : null;
        $this->container['backoffLimit'] = isset($data['backoffLimit']) ? $data['backoffLimit'] : null;
        $this->container['completions'] = isset($data['completions']) ? $data['completions'] : null;
        $this->container['manualSelector'] = isset($data['manualSelector']) ? $data['manualSelector'] : null;
        $this->container['parallelism'] = isset($data['parallelism']) ? $data['parallelism'] : null;
    }

    /**
     * Gets activeDeadlineSeconds
     * @return int
     */
    public function getActiveDeadlineSeconds()
    {
        return $this->container['activeDeadlineSeconds'];
    }

    /**
     * Sets activeDeadlineSeconds
     * @param int $activeDeadlineSeconds
     * @return $this
     */
    public function setActiveDeadlineSeconds($activeDeadlineSeconds)
    {
        $this->container['activeDeadlineSeconds'] = $activeDeadlineSeconds;

        return $this;
    }


    /**
     * Gets backoffLimit
     * @return int
     */
    public function getBackoffLimit()
    {
        return $this->container['backoffLimit'];
    }

    /**
     * Sets backoffLimit
     * @param int $backoffLimit
     * @return $this
     */
    public function setBackoffLimit($backoffLimit)
    {
        $this->container['backoffLimit'] = $backoffLimit;

        return $this;
    }


    /**
     * Gets completions
     * @return int
     */
    public function getCompletions()
    {
        return $this->container['completions'];
    }

    /**
     * Sets completions
     * @param int $completions
     * @return $this
     */
    public function setCompletions($completions)
    {
        $this->container['completions'] = $completions;

        return $this;
    }


    /**
     * Gets manualSelector
     * @return boolean
     */
    public function getManualSelector()
    {
        return $this->container['manualSelector'];
    }

    /**
     * Sets manualSelector
     * @param boolean $manualSelector
     * @return $this
     */
    public function setManualSelector($manualSelector)
    {
        $this->container['manualSelector'] = $manualSelector;

        return $this;
    }


    /**
     * Gets parallelism
     * @return int
     */
    public function getParallelism()
    {
        return $this->container['parallelism'];
    }

    /**
     * Sets parallelism
     * @param int $parallelism
     * @return $this
     */
    public function setParallelism($parallelism)
    {
        $this->container['parallelism'] = $parallelism;

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

