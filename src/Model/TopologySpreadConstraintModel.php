<?php

/**
 * TopologySpreadConstraintModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TopologySpreadConstraintModel implements ArrayAccess
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
        'labelSelector',
        'matchLabelKeys',
        'maxSkew',
        'minDomains',
        'nodeAffinityPolicy',
        'nodeTaintsPolicy',
        'topologyKey',
        'whenUnsatisfiable',
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
        'labelSelector',
        'matchLabelKeys',
        'maxSkew',
        'minDomains',
        'nodeAffinityPolicy',
        'nodeTaintsPolicy',
        'topologyKey',
        'whenUnsatisfiable',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'labelSelector' => '\Rancher\Model\LabelSelectorModel',
        'matchLabelKeys' => 'string[]',
        'maxSkew' => 'int',
        'minDomains' => 'int',
        'nodeAffinityPolicy' => 'string',
        'nodeTaintsPolicy' => 'string',
        'topologyKey' => 'string',
        'whenUnsatisfiable' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'labelSelector' => 'setLabelSelector',
        'matchLabelKeys' => 'setMatchLabelKeys',
        'maxSkew' => 'setMaxSkew',
        'minDomains' => 'setMinDomains',
        'nodeAffinityPolicy' => 'setNodeAffinityPolicy',
        'nodeTaintsPolicy' => 'setNodeTaintsPolicy',
        'topologyKey' => 'setTopologyKey',
        'whenUnsatisfiable' => 'setWhenUnsatisfiable',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'labelSelector' => 'getLabelSelector',
        'matchLabelKeys' => 'getMatchLabelKeys',
        'maxSkew' => 'getMaxSkew',
        'minDomains' => 'getMinDomains',
        'nodeAffinityPolicy' => 'getNodeAffinityPolicy',
        'nodeTaintsPolicy' => 'getNodeTaintsPolicy',
        'topologyKey' => 'getTopologyKey',
        'whenUnsatisfiable' => 'getWhenUnsatisfiable',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['labelSelector'] = isset($data['labelSelector']) ? $data['labelSelector'] : null;
        $this->container['matchLabelKeys'] = isset($data['matchLabelKeys']) ? $data['matchLabelKeys'] : null;
        $this->container['maxSkew'] = isset($data['maxSkew']) ? $data['maxSkew'] : null;
        $this->container['minDomains'] = isset($data['minDomains']) ? $data['minDomains'] : null;
        $this->container['nodeAffinityPolicy'] = isset($data['nodeAffinityPolicy']) ? $data['nodeAffinityPolicy'] : null;
        $this->container['nodeTaintsPolicy'] = isset($data['nodeTaintsPolicy']) ? $data['nodeTaintsPolicy'] : null;
        $this->container['topologyKey'] = isset($data['topologyKey']) ? $data['topologyKey'] : null;
        $this->container['whenUnsatisfiable'] = isset($data['whenUnsatisfiable']) ? $data['whenUnsatisfiable'] : null;
    }

    /**
     * Gets labelSelector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getLabelSelector()
    {
        return $this->container['labelSelector'];
    }

    /**
     * Sets labelSelector
     * @param \Rancher\Model\LabelSelectorModel $labelSelector
     * @return $this
     */
    public function setLabelSelector($labelSelector)
    {
        $this->container['labelSelector'] = $labelSelector;

        return $this;
    }


    /**
     * Gets matchLabelKeys
     * @return string[]
     */
    public function getMatchLabelKeys()
    {
        return $this->container['matchLabelKeys'];
    }

    /**
     * Sets matchLabelKeys
     * @param string[] $matchLabelKeys
     * @return $this
     */
    public function setMatchLabelKeys($matchLabelKeys)
    {
        $this->container['matchLabelKeys'] = $matchLabelKeys;

        return $this;
    }


    /**
     * Gets maxSkew
     * @return int
     */
    public function getMaxSkew()
    {
        return $this->container['maxSkew'];
    }

    /**
     * Sets maxSkew
     * @param int $maxSkew
     * @return $this
     */
    public function setMaxSkew($maxSkew)
    {
        $this->container['maxSkew'] = $maxSkew;

        return $this;
    }


    /**
     * Gets minDomains
     * @return int
     */
    public function getMinDomains()
    {
        return $this->container['minDomains'];
    }

    /**
     * Sets minDomains
     * @param int $minDomains
     * @return $this
     */
    public function setMinDomains($minDomains)
    {
        $this->container['minDomains'] = $minDomains;

        return $this;
    }


    /**
     * Gets nodeAffinityPolicy
     * @return string
     */
    public function getNodeAffinityPolicy()
    {
        return $this->container['nodeAffinityPolicy'];
    }

    /**
     * Sets nodeAffinityPolicy
     * @param string $nodeAffinityPolicy
     * @return $this
     */
    public function setNodeAffinityPolicy($nodeAffinityPolicy)
    {
        $this->container['nodeAffinityPolicy'] = $nodeAffinityPolicy;

        return $this;
    }


    /**
     * Gets nodeTaintsPolicy
     * @return string
     */
    public function getNodeTaintsPolicy()
    {
        return $this->container['nodeTaintsPolicy'];
    }

    /**
     * Sets nodeTaintsPolicy
     * @param string $nodeTaintsPolicy
     * @return $this
     */
    public function setNodeTaintsPolicy($nodeTaintsPolicy)
    {
        $this->container['nodeTaintsPolicy'] = $nodeTaintsPolicy;

        return $this;
    }


    /**
     * Gets topologyKey
     * @return string
     */
    public function getTopologyKey()
    {
        return $this->container['topologyKey'];
    }

    /**
     * Sets topologyKey
     * @param string $topologyKey
     * @return $this
     */
    public function setTopologyKey($topologyKey)
    {
        $this->container['topologyKey'] = $topologyKey;

        return $this;
    }


    /**
     * Gets whenUnsatisfiable
     * @return string
     */
    public function getWhenUnsatisfiable()
    {
        return $this->container['whenUnsatisfiable'];
    }

    /**
     * Sets whenUnsatisfiable
     * @param string $whenUnsatisfiable
     * @return $this
     */
    public function setWhenUnsatisfiable($whenUnsatisfiable)
    {
        $this->container['whenUnsatisfiable'] = $whenUnsatisfiable;

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

