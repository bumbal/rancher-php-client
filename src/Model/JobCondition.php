<?php

namespace Rancher\Model;

use \ArrayAccess;

class JobCondition implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'lastProbeTime' => '\DateTime',
        'lastTransitionTime' => '\DateTime',
        'message' => 'string',
        'reason' => 'string',
        'status' => 'string',
        'type' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'lastProbeTime' => 'setLastProbeTime',
        'lastTransitionTime' => 'setLastTransitionTime',
        'message' => 'setMessage',
        'reason' => 'setReason',
        'status' => 'setStatus',
        'type' => 'setType',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'lastProbeTime' => 'getLastProbeTime',
        'lastTransitionTime' => 'getLastTransitionTime',
        'message' => 'getMessage',
        'reason' => 'getReason',
        'status' => 'getStatus',
        'type' => 'getType',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['lastProbeTime'] = isset($data['lastProbeTime']) ? $data['lastProbeTime'] : null;
        $this->container['lastTransitionTime'] = isset($data['lastTransitionTime']) ? $data['lastTransitionTime'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Gets lastProbeTime
     * @return \DateTime
     */
    public function getLastProbeTime()
    {
        return $this->container['lastProbeTime'];
    }

    /**
     * Sets lastProbeTime
     * @param \DateTime $lastProbeTime
     * @return $this
     */
    public function setLastProbeTime($lastProbeTime)
    {
        $this->container['lastProbeTime'] = $lastProbeTime;

        return $this;
    }


    /**
     * Gets lastTransitionTime
     * @return \DateTime
     */
    public function getLastTransitionTime()
    {
        return $this->container['lastTransitionTime'];
    }

    /**
     * Sets lastTransitionTime
     * @param \DateTime $lastTransitionTime
     * @return $this
     */
    public function setLastTransitionTime($lastTransitionTime)
    {
        $this->container['lastTransitionTime'] = $lastTransitionTime;

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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

