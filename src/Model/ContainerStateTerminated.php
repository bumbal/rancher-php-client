<?php

namespace Rancher\Model;

use \ArrayAccess;

class ContainerStateTerminated implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'containerID' => 'string',
        'exitCode' => 'int',
        'finishedAt' => '\DateTime',
        'message' => 'string',
        'reason' => 'string',
        'signal' => 'int',
        'startedAt' => '\DateTime',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'containerID' => 'setContainerID',
        'exitCode' => 'setExitCode',
        'finishedAt' => 'setFinishedAt',
        'message' => 'setMessage',
        'reason' => 'setReason',
        'signal' => 'setSignal',
        'startedAt' => 'setStartedAt',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'containerID' => 'getContainerID',
        'exitCode' => 'getExitCode',
        'finishedAt' => 'getFinishedAt',
        'message' => 'getMessage',
        'reason' => 'getReason',
        'signal' => 'getSignal',
        'startedAt' => 'getStartedAt',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['containerID'] = isset($data['containerID']) ? $data['containerID'] : null;
        $this->container['exitCode'] = isset($data['exitCode']) ? $data['exitCode'] : null;
        $this->container['finishedAt'] = isset($data['finishedAt']) ? $data['finishedAt'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['signal'] = isset($data['signal']) ? $data['signal'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
    }

    /**
     * Gets containerID
     * @return string
     */
    public function getContainerID()
    {
        return $this->container['containerID'];
    }

    /**
     * Sets containerID
     * @param string $containerID
     * @return $this
     */
    public function setContainerID($containerID)
    {
        $this->container['containerID'] = $containerID;

        return $this;
    }


    /**
     * Gets exitCode
     * @return int
     */
    public function getExitCode()
    {
        return $this->container['exitCode'];
    }

    /**
     * Sets exitCode
     * @param int $exitCode
     * @return $this
     */
    public function setExitCode($exitCode)
    {
        $this->container['exitCode'] = $exitCode;

        return $this;
    }


    /**
     * Gets finishedAt
     * @return \DateTime
     */
    public function getFinishedAt()
    {
        return $this->container['finishedAt'];
    }

    /**
     * Sets finishedAt
     * @param \DateTime $finishedAt
     * @return $this
     */
    public function setFinishedAt($finishedAt)
    {
        $this->container['finishedAt'] = $finishedAt;

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
     * Gets signal
     * @return int
     */
    public function getSignal()
    {
        return $this->container['signal'];
    }

    /**
     * Sets signal
     * @param int $signal
     * @return $this
     */
    public function setSignal($signal)
    {
        $this->container['signal'] = $signal;

        return $this;
    }


    /**
     * Gets startedAt
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
     * Sets startedAt
     * @param \DateTime $startedAt
     * @return $this
     */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;

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

