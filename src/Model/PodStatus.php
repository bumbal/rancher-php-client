<?php

namespace Rancher\Model;

use \ArrayAccess;

class PodStatus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'conditions' => '\Rancher\Model\PodCondition[]',
        'containerStatuses' => '\Rancher\Model\ContainerStatus[]',
        'initContainerStatuses' => '\Rancher\Model\ContainerStatus[]',
        'message' => 'string',
        'nodeIp' => 'string',
        'nominatedNodeName' => 'string',
        'phase' => 'string',
        'podIp' => 'string',
        'qosClass' => 'string',
        'reason' => 'string',
        'startTime' => '\DateTime',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'conditions' => 'setConditions',
        'containerStatuses' => 'setContainerStatuses',
        'initContainerStatuses' => 'setInitContainerStatuses',
        'message' => 'setMessage',
        'nodeIp' => 'setNodeIp',
        'nominatedNodeName' => 'setNominatedNodeName',
        'phase' => 'setPhase',
        'podIp' => 'setPodIp',
        'qosClass' => 'setQosClass',
        'reason' => 'setReason',
        'startTime' => 'setStartTime',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'conditions' => 'getConditions',
        'containerStatuses' => 'getContainerStatuses',
        'initContainerStatuses' => 'getInitContainerStatuses',
        'message' => 'getMessage',
        'nodeIp' => 'getNodeIp',
        'nominatedNodeName' => 'getNominatedNodeName',
        'phase' => 'getPhase',
        'podIp' => 'getPodIp',
        'qosClass' => 'getQosClass',
        'reason' => 'getReason',
        'startTime' => 'getStartTime',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['containerStatuses'] = isset($data['containerStatuses']) ? $data['containerStatuses'] : null;
        $this->container['initContainerStatuses'] = isset($data['initContainerStatuses']) ? $data['initContainerStatuses'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['nominatedNodeName'] = isset($data['nominatedNodeName']) ? $data['nominatedNodeName'] : null;
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['qosClass'] = isset($data['qosClass']) ? $data['qosClass'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
    }

    /**
     * Gets conditions
     * @return \Rancher\Model\PodCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     * @param \Rancher\Model\PodCondition[] $conditions
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

        return $this;
    }


    /**
     * Gets containerStatuses
     * @return \Rancher\Model\ContainerStatus[]
     */
    public function getContainerStatuses()
    {
        return $this->container['containerStatuses'];
    }

    /**
     * Sets containerStatuses
     * @param \Rancher\Model\ContainerStatus[] $containerStatuses
     * @return $this
     */
    public function setContainerStatuses($containerStatuses)
    {
        $this->container['containerStatuses'] = $containerStatuses;

        return $this;
    }


    /**
     * Gets initContainerStatuses
     * @return \Rancher\Model\ContainerStatus[]
     */
    public function getInitContainerStatuses()
    {
        return $this->container['initContainerStatuses'];
    }

    /**
     * Sets initContainerStatuses
     * @param \Rancher\Model\ContainerStatus[] $initContainerStatuses
     * @return $this
     */
    public function setInitContainerStatuses($initContainerStatuses)
    {
        $this->container['initContainerStatuses'] = $initContainerStatuses;

        return $this;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }


    /**
     * Gets nodeIp
     * @return string
     */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
     * Sets nodeIp
     * @param string $nodeIp
     * @return $this
     */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;

        return $this;
    }


    /**
     * Gets nominatedNodeName
     * @return string
     */
    public function getNominatedNodeName()
    {
        return $this->container['nominatedNodeName'];
    }

    /**
     * Sets nominatedNodeName
     * @param string $nominatedNodeName
     * @return $this
     */
    public function setNominatedNodeName($nominatedNodeName)
    {
        $this->container['nominatedNodeName'] = $nominatedNodeName;

        return $this;
    }


    /**
     * Gets phase
     * @return string
     */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
     * Sets phase
     * @param string $phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;

        return $this;
    }


    /**
     * Gets podIp
     * @return string
     */
    public function getPodIp()
    {
        return $this->container['podIp'];
    }

    /**
     * Sets podIp
     * @param string $podIp
     * @return $this
     */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;

        return $this;
    }


    /**
     * Gets qosClass
     * @return string
     */
    public function getQosClass()
    {
        return $this->container['qosClass'];
    }

    /**
     * Sets qosClass
     * @param string $qosClass
     * @return $this
     */
    public function setQosClass($qosClass)
    {
        $this->container['qosClass'] = $qosClass;

        return $this;
    }


    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }


    /**
     * Gets startTime
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     * @param \DateTime $startTime
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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

