<?php

/**
 * ContainerResourceLimitModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ContainerResourceLimitModel implements ArrayAccess
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
        'limitsCpu',
        'limitsMemory',
        'requestsCpu',
        'requestsMemory',
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
        'limitsCpu',
        'limitsMemory',
        'requestsCpu',
        'requestsMemory',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'limitsCpu' => 'string',
        'limitsMemory' => 'string',
        'requestsCpu' => 'string',
        'requestsMemory' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'limitsCpu' => 'setLimitsCpu',
        'limitsMemory' => 'setLimitsMemory',
        'requestsCpu' => 'setRequestsCpu',
        'requestsMemory' => 'setRequestsMemory',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'limitsCpu' => 'getLimitsCpu',
        'limitsMemory' => 'getLimitsMemory',
        'requestsCpu' => 'getRequestsCpu',
        'requestsMemory' => 'getRequestsMemory',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['limitsCpu'] = isset($data['limitsCpu']) ? $data['limitsCpu'] : null;
        $this->container['limitsMemory'] = isset($data['limitsMemory']) ? $data['limitsMemory'] : null;
        $this->container['requestsCpu'] = isset($data['requestsCpu']) ? $data['requestsCpu'] : null;
        $this->container['requestsMemory'] = isset($data['requestsMemory']) ? $data['requestsMemory'] : null;
    }

    /**
     * Gets limitsCpu
     * @return string
     */
    public function getLimitsCpu()
    {
        return $this->container['limitsCpu'];
    }

    /**
     * Sets limitsCpu
     * @param string $limitsCpu
     * @return $this
     */
    public function setLimitsCpu($limitsCpu)
    {
        $this->container['limitsCpu'] = $limitsCpu;

        return $this;
    }


    /**
     * Gets limitsMemory
     * @return string
     */
    public function getLimitsMemory()
    {
        return $this->container['limitsMemory'];
    }

    /**
     * Sets limitsMemory
     * @param string $limitsMemory
     * @return $this
     */
    public function setLimitsMemory($limitsMemory)
    {
        $this->container['limitsMemory'] = $limitsMemory;

        return $this;
    }


    /**
     * Gets requestsCpu
     * @return string
     */
    public function getRequestsCpu()
    {
        return $this->container['requestsCpu'];
    }

    /**
     * Sets requestsCpu
     * @param string $requestsCpu
     * @return $this
     */
    public function setRequestsCpu($requestsCpu)
    {
        $this->container['requestsCpu'] = $requestsCpu;

        return $this;
    }


    /**
     * Gets requestsMemory
     * @return string
     */
    public function getRequestsMemory()
    {
        return $this->container['requestsMemory'];
    }

    /**
     * Sets requestsMemory
     * @param string $requestsMemory
     * @return $this
     */
    public function setRequestsMemory($requestsMemory)
    {
        $this->container['requestsMemory'] = $requestsMemory;

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

