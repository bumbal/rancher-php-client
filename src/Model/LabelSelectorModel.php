<?php

/**
 * LabelSelectorModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class LabelSelectorModel implements ArrayAccess
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
        'matchExpressions',
        'matchLabels',
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
        'matchExpressions',
        'matchLabels',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'matchExpressions' => '\Rancher\Model\LabelSelectorRequirementModel[]',
        'matchLabels' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'matchExpressions' => 'setMatchExpressions',
        'matchLabels' => 'setMatchLabels',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'matchExpressions' => 'getMatchExpressions',
        'matchLabels' => 'getMatchLabels',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['matchExpressions'] = isset($data['matchExpressions']) ? $data['matchExpressions'] : null;
        $this->container['matchLabels'] = isset($data['matchLabels']) ? $data['matchLabels'] : null;
    }

    /**
     * Gets matchExpressions
     * @return \Rancher\Model\LabelSelectorRequirementModel[]
     */
    public function getMatchExpressions()
    {
        return $this->container['matchExpressions'];
    }

    /**
     * Sets matchExpressions
     * @param \Rancher\Model\LabelSelectorRequirementModel[] $matchExpressions
     * @return $this
     */
    public function setMatchExpressions($matchExpressions)
    {
        $this->container['matchExpressions'] = $matchExpressions;

        return $this;
    }


    /**
     * Gets matchLabels
     * @return string[]
     */
    public function getMatchLabels()
    {
        return $this->container['matchLabels'];
    }

    /**
     * Sets matchLabels
     * @param string[] $matchLabels
     * @return $this
     */
    public function setMatchLabels($matchLabels)
    {
        $this->container['matchLabels'] = $matchLabels;

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

