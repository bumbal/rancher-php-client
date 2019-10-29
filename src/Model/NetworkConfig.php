<?php

namespace Rancher\Model;

use \ArrayAccess;

class NetworkConfig implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'calicoNetworkProvider' => '\Rancher\Model\CalicoNetworkProvider',
        'canalNetworkProvider' => '\Rancher\Model\CanalNetworkProvider',
        'flannelNetworkProvider' => '\Rancher\Model\FlannelNetworkProvider',
        'options' => 'map[string]',
        'plugin' => 'string',
        'weaveNetworkProvider' => '\Rancher\Model\WeaveNetworkProvider',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'calicoNetworkProvider' => 'setCalicoNetworkProvider',
        'canalNetworkProvider' => 'setCanalNetworkProvider',
        'flannelNetworkProvider' => 'setFlannelNetworkProvider',
        'options' => 'setOptions',
        'plugin' => 'setPlugin',
        'weaveNetworkProvider' => 'setWeaveNetworkProvider',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'calicoNetworkProvider' => 'getCalicoNetworkProvider',
        'canalNetworkProvider' => 'getCanalNetworkProvider',
        'flannelNetworkProvider' => 'getFlannelNetworkProvider',
        'options' => 'getOptions',
        'plugin' => 'getPlugin',
        'weaveNetworkProvider' => 'getWeaveNetworkProvider',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['calicoNetworkProvider'] = isset($data['calicoNetworkProvider']) ? $data['calicoNetworkProvider'] : null;
        $this->container['canalNetworkProvider'] = isset($data['canalNetworkProvider']) ? $data['canalNetworkProvider'] : null;
        $this->container['flannelNetworkProvider'] = isset($data['flannelNetworkProvider']) ? $data['flannelNetworkProvider'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['weaveNetworkProvider'] = isset($data['weaveNetworkProvider']) ? $data['weaveNetworkProvider'] : null;
    }

    /**
     * Gets calicoNetworkProvider
     * @return \Rancher\Model\CalicoNetworkProvider
     */
    public function getCalicoNetworkProvider()
    {
        return $this->container['calicoNetworkProvider'];
    }

    /**
     * Sets calicoNetworkProvider
     * @param \Rancher\Model\CalicoNetworkProvider $calicoNetworkProvider
     * @return $this
     */
    public function setCalicoNetworkProvider($calicoNetworkProvider)
    {
        $this->container['calicoNetworkProvider'] = $calicoNetworkProvider;

        return $this;
    }


    /**
     * Gets canalNetworkProvider
     * @return \Rancher\Model\CanalNetworkProvider
     */
    public function getCanalNetworkProvider()
    {
        return $this->container['canalNetworkProvider'];
    }

    /**
     * Sets canalNetworkProvider
     * @param \Rancher\Model\CanalNetworkProvider $canalNetworkProvider
     * @return $this
     */
    public function setCanalNetworkProvider($canalNetworkProvider)
    {
        $this->container['canalNetworkProvider'] = $canalNetworkProvider;

        return $this;
    }


    /**
     * Gets flannelNetworkProvider
     * @return \Rancher\Model\FlannelNetworkProvider
     */
    public function getFlannelNetworkProvider()
    {
        return $this->container['flannelNetworkProvider'];
    }

    /**
     * Sets flannelNetworkProvider
     * @param \Rancher\Model\FlannelNetworkProvider $flannelNetworkProvider
     * @return $this
     */
    public function setFlannelNetworkProvider($flannelNetworkProvider)
    {
        $this->container['flannelNetworkProvider'] = $flannelNetworkProvider;

        return $this;
    }


    /**
     * Gets options
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param string[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }


    /**
     * Gets plugin
     * @return string
     */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
     * Sets plugin
     * @param string $plugin
     * @return $this
     */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;

        return $this;
    }


    /**
     * Gets weaveNetworkProvider
     * @return \Rancher\Model\WeaveNetworkProvider
     */
    public function getWeaveNetworkProvider()
    {
        return $this->container['weaveNetworkProvider'];
    }

    /**
     * Sets weaveNetworkProvider
     * @param \Rancher\Model\WeaveNetworkProvider $weaveNetworkProvider
     * @return $this
     */
    public function setWeaveNetworkProvider($weaveNetworkProvider)
    {
        $this->container['weaveNetworkProvider'] = $weaveNetworkProvider;

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

