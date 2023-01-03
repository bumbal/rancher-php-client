<?php

/**
 * MetricModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class MetricModel implements ArrayAccess
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
        'containerResource',
        'describedObject',
        'name',
        'selector',
        'target',
        'type',
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
        'containerResource',
        'describedObject',
        'name',
        'selector',
        'target',
        'type',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'containerResource' => '\Rancher\Model\ContainerResourceMetricSourceModel',
        'current' => '\Rancher\Model\MetricValueStatusModel',
        'describedObject' => '\Rancher\Model\CrossVersionObjectReferenceModel',
        'name' => 'string',
        'selector' => '\Rancher\Model\LabelSelectorModel',
        'target' => '\Rancher\Model\MetricTargetModel',
        'type' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'containerResource' => 'setContainerResource',
        'current' => 'setCurrent',
        'describedObject' => 'setDescribedObject',
        'name' => 'setName',
        'selector' => 'setSelector',
        'target' => 'setTarget',
        'type' => 'setType',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'containerResource' => 'getContainerResource',
        'current' => 'getCurrent',
        'describedObject' => 'getDescribedObject',
        'name' => 'getName',
        'selector' => 'getSelector',
        'target' => 'getTarget',
        'type' => 'getType',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['containerResource'] = isset($data['containerResource']) ? $data['containerResource'] : null;
        $this->container['current'] = isset($data['current']) ? $data['current'] : null;
        $this->container['describedObject'] = isset($data['describedObject']) ? $data['describedObject'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['selector'] = isset($data['selector']) ? $data['selector'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Gets containerResource
     * @return \Rancher\Model\ContainerResourceMetricSourceModel
     */
    public function getContainerResource()
    {
        return $this->container['containerResource'];
    }

    /**
     * Sets containerResource
     * @param \Rancher\Model\ContainerResourceMetricSourceModel $containerResource
     * @return $this
     */
    public function setContainerResource($containerResource)
    {
        $this->container['containerResource'] = $containerResource;

        return $this;
    }


    /**
     * Gets current
     * @return \Rancher\Model\MetricValueStatusModel
     */
    public function getCurrent()
    {
        return $this->container['current'];
    }

    /**
     * Sets current
     * @param \Rancher\Model\MetricValueStatusModel $current
     * @return $this
     */
    public function setCurrent($current)
    {
        $this->container['current'] = $current;

        return $this;
    }


    /**
     * Gets describedObject
     * @return \Rancher\Model\CrossVersionObjectReferenceModel
     */
    public function getDescribedObject()
    {
        return $this->container['describedObject'];
    }

    /**
     * Sets describedObject
     * @param \Rancher\Model\CrossVersionObjectReferenceModel $describedObject
     * @return $this
     */
    public function setDescribedObject($describedObject)
    {
        $this->container['describedObject'] = $describedObject;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets selector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getSelector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     * @param \Rancher\Model\LabelSelectorModel $selector
     * @return $this
     */
    public function setSelector($selector)
    {
        $this->container['selector'] = $selector;

        return $this;
    }


    /**
     * Gets target
     * @return \Rancher\Model\MetricTargetModel
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param \Rancher\Model\MetricTargetModel $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

