<?php

namespace Rancher\Model;

use \ArrayAccess;

class IngressBackend implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'serviceId' => 'string',
        'targetPort' => '\Rancher\Model\IntOrString',
        'workloadIds' => '\Rancher\Model\Reference[workload][]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'serviceId' => 'setServiceId',
        'targetPort' => 'setTargetPort',
        'workloadIds' => 'setWorkloadIds',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['targetPort'] = isset($data['targetPort']) ? $data['targetPort'] : null;
        $this->container['workloadIds'] = isset($data['workloadIds']) ? $data['workloadIds'] : null;
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
     * @return \Rancher\Model\IntOrString
     */
    public function getTargetPort()
    {
        return $this->container['targetPort'];
    }

    /**
     * Sets targetPort
     * @param \Rancher\Model\IntOrString $targetPort
     * @return $this
     */
    public function setTargetPort($targetPort)
    {
        $this->container['targetPort'] = $targetPort;

        return $this;
    }


    /**
     * Gets workloadIds
     * @return \Rancher\Model\Reference[workload][]
     */
    public function getWorkloadIds()
    {
        return $this->container['workloadIds'];
    }

    /**
     * Sets workloadIds
     * @param \Rancher\Model\Reference[workload][] $workloadIds
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

