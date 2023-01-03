<?php

/**
 * IngressBackendModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class IngressBackendModel implements ArrayAccess
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
        'resource',
        'serviceId',
        'targetPort',
        'workloadIds',
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
        'resource',
        'serviceId',
        'targetPort',
        'workloadIds',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'resource' => '\Rancher\Model\TypedLocalObjectReferenceModel',
        'serviceId' => 'string',
        'targetPort' => 'string',
        'workloadIds' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'resource' => 'setResource',
        'serviceId' => 'setServiceId',
        'targetPort' => 'setTargetPort',
        'workloadIds' => 'setWorkloadIds',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'resource' => 'getResource',
        'serviceId' => 'getServiceId',
        'targetPort' => 'getTargetPort',
        'workloadIds' => 'getWorkloadIds',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
        $this->container['workloadIds'] = isset($data['workloadIds']) ? $data['workloadIds'] : null;
    }

    /**
     * Gets resource
     * @return \Rancher\Model\TypedLocalObjectReferenceModel
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     * @param \Rancher\Model\TypedLocalObjectReferenceModel $resource
     * @return $this
     */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;

        return $this;
    }


    /**
     * Gets serviceId
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     * @param string $serviceId
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;

        return $this;
    }


    /**
     * Gets targetPort
     * @return string
     */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
     * Sets targetPort
     * @param string $targetPort
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;

        return $this;
    }


    /**
     * Gets workloadIds
     * @return string[]
     */
    public function getWorkloadIds()
    {
        return $this->container['workloadIds'];
    }

    /**
     * Sets workloadIds
     * @param string[] $workloadIds
     * @return $this
     */
    public function setWorkloadIds($workloadIds)
    {
        $this->container['workloadIds'] = $workloadIds;

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

