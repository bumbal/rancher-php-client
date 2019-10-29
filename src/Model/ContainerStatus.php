<?php

namespace Rancher\Model;

use \ArrayAccess;

class ContainerStatus implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'containerID' => 'string',
        'image' => 'string',
        'imageID' => 'string',
        'lastState' => '\Rancher\Model\ContainerState',
        'name' => 'string',
        'ready' => 'boolean',
        'restartCount' => 'int',
        'state' => '\Rancher\Model\ContainerState',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'containerID' => 'setContainerID',
        'image' => 'setImage',
        'imageID' => 'setImageID',
        'lastState' => 'setLastState',
        'name' => 'setName',
        'ready' => 'setReady',
        'restartCount' => 'setRestartCount',
        'state' => 'setState',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'containerID' => 'getContainerID',
        'image' => 'getImage',
        'imageID' => 'getImageID',
        'lastState' => 'getLastState',
        'name' => 'getName',
        'ready' => 'getReady',
        'restartCount' => 'getRestartCount',
        'state' => 'getState',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['containerID'] = isset($data['containerID']) ? $data['containerID'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageID'] = isset($data['imageID']) ? $data['imageID'] : null;
        $this->container['lastState'] = isset($data['lastState']) ? $data['lastState'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ready'] = isset($data['ready']) ? $data['ready'] : null;
        $this->container['restartCount'] = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }


    /**
     * Gets imageID
     * @return string
     */
    public function getImageID()
    {
        return $this->container['imageID'];
    }

    /**
     * Sets imageID
     * @param string $imageID
     * @return $this
     */
    public function setImageID($imageID)
    {
        $this->container['imageID'] = $imageID;

        return $this;
    }


    /**
     * Gets lastState
     * @return \Rancher\Model\ContainerState
     */
    public function getLastState()
    {
        return $this->container['lastState'];
    }

    /**
     * Sets lastState
     * @param \Rancher\Model\ContainerState $lastState
     * @return $this
     */
    public function setLastState($lastState)
    {
        $this->container['lastState'] = $lastState;

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
     * Gets ready
     * @return boolean
     */
    public function getReady()
    {
        return $this->container['ready'];
    }

    /**
     * Sets ready
     * @param boolean $ready
     * @return $this
     */
    public function setReady($ready)
    {
        $this->container['ready'] = $ready;

        return $this;
    }


    /**
     * Gets restartCount
     * @return int
     */
    public function getRestartCount()
    {
        return $this->container['restartCount'];
    }

    /**
     * Sets restartCount
     * @param int $restartCount
     * @return $this
     */
    public function setRestartCount($restartCount)
    {
        $this->container['restartCount'] = $restartCount;

        return $this;
    }


    /**
     * Gets state
     * @return \Rancher\Model\ContainerState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param \Rancher\Model\ContainerState $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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

