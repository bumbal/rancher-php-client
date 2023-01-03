<?php

/**
 * RulesAlertModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RulesAlertModel implements ArrayAccess
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
        'forGracePeriod',
        'forOutageTolerance',
        'resendDelay',
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
        'forGracePeriod',
        'forOutageTolerance',
        'resendDelay',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'forGracePeriod' => 'string',
        'forOutageTolerance' => 'string',
        'resendDelay' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'forGracePeriod' => 'setForGracePeriod',
        'forOutageTolerance' => 'setForOutageTolerance',
        'resendDelay' => 'setResendDelay',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'forGracePeriod' => 'getForGracePeriod',
        'forOutageTolerance' => 'getForOutageTolerance',
        'resendDelay' => 'getResendDelay',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['forGracePeriod'] = isset($data['forGracePeriod']) ? $data['forGracePeriod'] : null;
        $this->container['forOutageTolerance'] = isset($data['forOutageTolerance']) ? $data['forOutageTolerance'] : null;
        $this->container['resendDelay'] = isset($data['resendDelay']) ? $data['resendDelay'] : null;
    }

    /**
     * Gets forGracePeriod
     * @return string
     */
    public function getForGracePeriod()
    {
        return $this->container['forGracePeriod'];
    }

    /**
     * Sets forGracePeriod
     * @param string $forGracePeriod
     * @return $this
     */
    public function setForGracePeriod($forGracePeriod)
    {
        $this->container['forGracePeriod'] = $forGracePeriod;

        return $this;
    }


    /**
     * Gets forOutageTolerance
     * @return string
     */
    public function getForOutageTolerance()
    {
        return $this->container['forOutageTolerance'];
    }

    /**
     * Sets forOutageTolerance
     * @param string $forOutageTolerance
     * @return $this
     */
    public function setForOutageTolerance($forOutageTolerance)
    {
        $this->container['forOutageTolerance'] = $forOutageTolerance;

        return $this;
    }


    /**
     * Gets resendDelay
     * @return string
     */
    public function getResendDelay()
    {
        return $this->container['resendDelay'];
    }

    /**
     * Sets resendDelay
     * @param string $resendDelay
     * @return $this
     */
    public function setResendDelay($resendDelay)
    {
        $this->container['resendDelay'] = $resendDelay;

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

