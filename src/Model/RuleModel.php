<?php

/**
 * RuleModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RuleModel implements ArrayAccess
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
        'alert',
        'annotations',
        'expr',
        'for',
        'labels',
        'record',
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
        'alert',
        'annotations',
        'expr',
        'for',
        'labels',
        'record',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'alert' => 'string',
        'annotations' => 'map[string,string]',
        'expr' => 'string',
        'for' => 'string',
        'labels' => 'map[string,string]',
        'record' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alert' => 'setAlert',
        'annotations' => 'setAnnotations',
        'expr' => 'setExpr',
        'for' => 'setFor',
        'labels' => 'setLabels',
        'record' => 'setRecord',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alert' => 'getAlert',
        'annotations' => 'getAnnotations',
        'expr' => 'getExpr',
        'for' => 'getFor',
        'labels' => 'getLabels',
        'record' => 'getRecord',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['expr'] = isset($data['expr']) ? $data['expr'] : null;
        $this->container['for'] = isset($data['for']) ? $data['for'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['record'] = isset($data['record']) ? $data['record'] : null;
    }

    /**
     * Gets alert
     * @return string
     */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
     * Sets alert
     * @param string $alert
     * @return $this
     */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets expr
     * @return string
     */
    public function getExpr()
    {
        return $this->container['expr'];
    }

    /**
     * Sets expr
     * @param string $expr
     * @return $this
     */
    public function setExpr($expr)
    {
        $this->container['expr'] = $expr;

        return $this;
    }


    /**
     * Gets for
     * @return string
     */
    public function getFor()
    {
        return $this->container['for'];
    }

    /**
     * Sets for
     * @param string $for
     * @return $this
     */
    public function setFor($for)
    {
        $this->container['for'] = $for;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets record
     * @return string
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * Sets record
     * @param string $record
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

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

