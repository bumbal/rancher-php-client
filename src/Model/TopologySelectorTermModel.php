<?php

/**
 * TopologySelectorTermModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TopologySelectorTermModel implements ArrayAccess
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
        'matchLabelExpressions',
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
        'matchLabelExpressions',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'matchLabelExpressions' => '\Rancher\Model\TopologySelectorLabelRequirementModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'matchLabelExpressions' => 'setMatchLabelExpressions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'matchLabelExpressions' => 'getMatchLabelExpressions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['matchLabelExpressions'] = isset($data['matchLabelExpressions']) ? $data['matchLabelExpressions'] : null;
    }

    /**
     * Gets matchLabelExpressions
     * @return \Rancher\Model\TopologySelectorLabelRequirementModel[]
     */
    public function getMatchLabelExpressions()
    {
        return $this->container['matchLabelExpressions'];
    }

    /**
     * Sets matchLabelExpressions
     * @param \Rancher\Model\TopologySelectorLabelRequirementModel[] $matchLabelExpressions
     * @return $this
     */
    public function setMatchLabelExpressions($matchLabelExpressions)
    {
        $this->container['matchLabelExpressions'] = $matchLabelExpressions;

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

