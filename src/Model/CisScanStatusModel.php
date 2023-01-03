<?php

/**
 * CisScanStatusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CisScanStatusModel implements ArrayAccess
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
        'fail',
        'notApplicable',
        'pass',
        'skip',
        'total',
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
        'fail',
        'notApplicable',
        'pass',
        'skip',
        'total',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fail' => 'int',
        'notApplicable' => 'int',
        'pass' => 'int',
        'skip' => 'int',
        'total' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fail' => 'setFail',
        'notApplicable' => 'setNotApplicable',
        'pass' => 'setPass',
        'skip' => 'setSkip',
        'total' => 'setTotal',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fail' => 'getFail',
        'notApplicable' => 'getNotApplicable',
        'pass' => 'getPass',
        'skip' => 'getSkip',
        'total' => 'getTotal',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fail'] = isset($data['fail']) ? $data['fail'] : null;
        $this->container['notApplicable'] = isset($data['notApplicable']) ? $data['notApplicable'] : null;
        $this->container['pass'] = isset($data['pass']) ? $data['pass'] : null;
        $this->container['skip'] = isset($data['skip']) ? $data['skip'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Gets fail
     * @return int
     */
    public function getFail()
    {
        return $this->container['fail'];
    }

    /**
     * Sets fail
     * @param int $fail
     * @return $this
     */
    public function setFail($fail)
    {
        $this->container['fail'] = $fail;

        return $this;
    }


    /**
     * Gets notApplicable
     * @return int
     */
    public function getNotApplicable()
    {
        return $this->container['notApplicable'];
    }

    /**
     * Sets notApplicable
     * @param int $notApplicable
     * @return $this
     */
    public function setNotApplicable($notApplicable)
    {
        $this->container['notApplicable'] = $notApplicable;

        return $this;
    }


    /**
     * Gets pass
     * @return int
     */
    public function getPass()
    {
        return $this->container['pass'];
    }

    /**
     * Sets pass
     * @param int $pass
     * @return $this
     */
    public function setPass($pass)
    {
        $this->container['pass'] = $pass;

        return $this;
    }


    /**
     * Gets skip
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     * @param int $skip
     * @return $this
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }


    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param int $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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

