<?php

/**
 * NetworkConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class NetworkConfigModel implements ArrayAccess
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
        'aciNetworkProvider',
        'calicoNetworkProvider',
        'canalNetworkProvider',
        'flannelNetworkProvider',
        'mtu',
        'nodeSelector',
        'options',
        'plugin',
        'tolerations',
        'updateStrategy',
        'weaveNetworkProvider',
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
        'aciNetworkProvider',
        'calicoNetworkProvider',
        'canalNetworkProvider',
        'flannelNetworkProvider',
        'mtu',
        'nodeSelector',
        'options',
        'plugin',
        'tolerations',
        'updateStrategy',
        'weaveNetworkProvider',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'aciNetworkProvider' => '\Rancher\Model\AciNetworkProviderModel',
        'calicoNetworkProvider' => '\Rancher\Model\CalicoNetworkProviderModel',
        'canalNetworkProvider' => '\Rancher\Model\CanalNetworkProviderModel',
        'flannelNetworkProvider' => '\Rancher\Model\FlannelNetworkProviderModel',
        'mtu' => 'int',
        'nodeSelector' => 'map[string,string]',
        'options' => 'map[string,string]',
        'plugin' => 'string',
        'tolerations' => '\Rancher\Model\TolerationModel[]',
        'updateStrategy' => '\Rancher\Model\DaemonSetUpdateStrategyModel',
        'weaveNetworkProvider' => '\Rancher\Model\WeaveNetworkProviderModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'aciNetworkProvider' => 'setAciNetworkProvider',
        'calicoNetworkProvider' => 'setCalicoNetworkProvider',
        'canalNetworkProvider' => 'setCanalNetworkProvider',
        'flannelNetworkProvider' => 'setFlannelNetworkProvider',
        'mtu' => 'setMtu',
        'nodeSelector' => 'setNodeSelector',
        'options' => 'setOptions',
        'plugin' => 'setPlugin',
        'tolerations' => 'setTolerations',
        'updateStrategy' => 'setUpdateStrategy',
        'weaveNetworkProvider' => 'setWeaveNetworkProvider',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'aciNetworkProvider' => 'getAciNetworkProvider',
        'calicoNetworkProvider' => 'getCalicoNetworkProvider',
        'canalNetworkProvider' => 'getCanalNetworkProvider',
        'flannelNetworkProvider' => 'getFlannelNetworkProvider',
        'mtu' => 'getMtu',
        'nodeSelector' => 'getNodeSelector',
        'options' => 'getOptions',
        'plugin' => 'getPlugin',
        'tolerations' => 'getTolerations',
        'updateStrategy' => 'getUpdateStrategy',
        'weaveNetworkProvider' => 'getWeaveNetworkProvider',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['aciNetworkProvider'] = isset($data['aciNetworkProvider']) ? $data['aciNetworkProvider'] : null;
        $this->container['calicoNetworkProvider'] = isset($data['calicoNetworkProvider']) ? $data['calicoNetworkProvider'] : null;
        $this->container['canalNetworkProvider'] = isset($data['canalNetworkProvider']) ? $data['canalNetworkProvider'] : null;
        $this->container['flannelNetworkProvider'] = isset($data['flannelNetworkProvider']) ? $data['flannelNetworkProvider'] : null;
        $this->container['mtu'] = isset($data['mtu']) ? $data['mtu'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['updateStrategy'] = isset($data['updateStrategy']) ? $data['updateStrategy'] : null;
        $this->container['weaveNetworkProvider'] = isset($data['weaveNetworkProvider']) ? $data['weaveNetworkProvider'] : null;
    }

    /**
     * Gets aciNetworkProvider
     * @return \Rancher\Model\AciNetworkProviderModel
     */
    public function getAciNetworkProvider()
    {
        return $this->container['aciNetworkProvider'];
    }

    /**
     * Sets aciNetworkProvider
     * @param \Rancher\Model\AciNetworkProviderModel $aciNetworkProvider
     * @return $this
     */
    public function setAciNetworkProvider($aciNetworkProvider)
    {
        $this->container['aciNetworkProvider'] = $aciNetworkProvider;

        return $this;
    }


    /**
     * Gets calicoNetworkProvider
     * @return \Rancher\Model\CalicoNetworkProviderModel
     */
    public function getCalicoNetworkProvider()
    {
        return $this->container['calicoNetworkProvider'];
    }

    /**
     * Sets calicoNetworkProvider
     * @param \Rancher\Model\CalicoNetworkProviderModel $calicoNetworkProvider
     * @return $this
     */
    public function setCalicoNetworkProvider($calicoNetworkProvider)
    {
        $this->container['calicoNetworkProvider'] = $calicoNetworkProvider;

        return $this;
    }


    /**
     * Gets canalNetworkProvider
     * @return \Rancher\Model\CanalNetworkProviderModel
     */
    public function getCanalNetworkProvider()
    {
        return $this->container['canalNetworkProvider'];
    }

    /**
     * Sets canalNetworkProvider
     * @param \Rancher\Model\CanalNetworkProviderModel $canalNetworkProvider
     * @return $this
     */
    public function setCanalNetworkProvider($canalNetworkProvider)
    {
        $this->container['canalNetworkProvider'] = $canalNetworkProvider;

        return $this;
    }


    /**
     * Gets flannelNetworkProvider
     * @return \Rancher\Model\FlannelNetworkProviderModel
     */
    public function getFlannelNetworkProvider()
    {
        return $this->container['flannelNetworkProvider'];
    }

    /**
     * Sets flannelNetworkProvider
     * @param \Rancher\Model\FlannelNetworkProviderModel $flannelNetworkProvider
     * @return $this
     */
    public function setFlannelNetworkProvider($flannelNetworkProvider)
    {
        $this->container['flannelNetworkProvider'] = $flannelNetworkProvider;

        return $this;
    }


    /**
     * Gets mtu
     * @return int
     */
    public function getMtu()
    {
        return $this->container['mtu'];
    }

    /**
     * Sets mtu
     * @param int $mtu
     * @return $this
     */
    public function setMtu($mtu)
    {
        $this->container['mtu'] = $mtu;

        return $this;
    }


    /**
     * Gets nodeSelector
     * @return string[]
     */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
     * Sets nodeSelector
     * @param string[] $nodeSelector
     * @return $this
     */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;

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
     * Gets tolerations
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     * @param \Rancher\Model\TolerationModel[] $tolerations
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

        return $this;
    }


    /**
     * Gets updateStrategy
     * @return \Rancher\Model\DaemonSetUpdateStrategyModel
     */
    public function getUpdateStrategy()
    {
        return $this->container['updateStrategy'];
    }

    /**
     * Sets updateStrategy
     * @param \Rancher\Model\DaemonSetUpdateStrategyModel $updateStrategy
     * @return $this
     */
    public function setUpdateStrategy($updateStrategy)
    {
        $this->container['updateStrategy'] = $updateStrategy;

        return $this;
    }


    /**
     * Gets weaveNetworkProvider
     * @return \Rancher\Model\WeaveNetworkProviderModel
     */
    public function getWeaveNetworkProvider()
    {
        return $this->container['weaveNetworkProvider'];
    }

    /**
     * Sets weaveNetworkProvider
     * @param \Rancher\Model\WeaveNetworkProviderModel $weaveNetworkProvider
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

