<?php

namespace Rancher\Model;

use \ArrayAccess;

class DaemonSetConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'maxUnavailable' => '\Rancher\Model\IntOrString',
        'minReadySeconds' => 'int',
        'revisionHistoryLimit' => 'int',
        'strategy' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'maxUnavailable' => 'setMaxUnavailable',
        'minReadySeconds' => 'setMinReadySeconds',
        'revisionHistoryLimit' => 'setRevisionHistoryLimit',
        'strategy' => 'setStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'maxUnavailable' => 'getMaxUnavailable',
        'minReadySeconds' => 'getMinReadySeconds',
        'revisionHistoryLimit' => 'getRevisionHistoryLimit',
        'strategy' => 'getStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
        $this->container['minReadySeconds'] = isset($data['minReadySeconds']) ? $data['minReadySeconds'] : null;
        $this->container['revisionHistoryLimit'] = isset($data['revisionHistoryLimit']) ? $data['revisionHistoryLimit'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
    }

    /**
     * Gets maxUnavailable
     * @return \Rancher\Model\IntOrString
     */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
     * Sets maxUnavailable
     * @param \Rancher\Model\IntOrString $maxUnavailable
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

