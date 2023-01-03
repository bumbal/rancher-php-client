<?php

/**
 * TlsMatchAttributesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class TlsMatchAttributesModel implements ArrayAccess
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
        'destinationSubnets',
        'gateways',
        'port',
        'sniHosts',
        'sourceLabels',
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
        'destinationSubnets',
        'gateways',
        'port',
        'sniHosts',
        'sourceLabels',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'destinationSubnets' => 'string[]',
        'gateways' => 'string[]',
        'port' => 'int',
        'sniHosts' => 'string[]',
        'sourceLabels' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'destinationSubnets' => 'setDestinationSubnets',
        'gateways' => 'setGateways',
        'port' => 'setPort',
        'sniHosts' => 'setSniHosts',
        'sourceLabels' => 'setSourceLabels',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'destinationSubnets' => 'getDestinationSubnets',
        'gateways' => 'getGateways',
        'port' => 'getPort',
        'sniHosts' => 'getSniHosts',
        'sourceLabels' => 'getSourceLabels',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['destinationSubnets'] = isset($data['destinationSubnets']) ? $data['destinationSubnets'] : null;
        $this->container['gateways'] = isset($data['gateways']) ? $data['gateways'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['sniHosts'] = isset($data['sniHosts']) ? $data['sniHosts'] : null;
        $this->container['sourceLabels'] = isset($data['sourceLabels']) ? $data['sourceLabels'] : null;
    }

    /**
     * Gets destinationSubnets
     * @return string[]
     */
    public function getDestinationSubnets()
    {
        return $this->container['destinationSubnets'];
    }

    /**
     * Sets destinationSubnets
     * @param string[] $destinationSubnets
     * @return $this
     */
    public function setDestinationSubnets($destinationSubnets)
    {
        $this->container['destinationSubnets'] = $destinationSubnets;

        return $this;
    }


    /**
     * Gets gateways
     * @return string[]
     */
    public function getGateways()
    {
        return $this->container['gateways'];
    }

    /**
     * Sets gateways
     * @param string[] $gateways
     * @return $this
     */
    public function setGateways($gateways)
    {
        $this->container['gateways'] = $gateways;

        return $this;
    }


    /**
     * Gets port
     * @return int
     */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
     * Sets port
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->container['port'] = $port;

        return $this;
    }


    /**
     * Gets sniHosts
     * @return string[]
     */
    public function getSniHosts()
    {
        return $this->container['sniHosts'];
    }

    /**
     * Sets sniHosts
     * @param string[] $sniHosts
     * @return $this
     */
    public function setSniHosts($sniHosts)
    {
        $this->container['sniHosts'] = $sniHosts;

        return $this;
    }


    /**
     * Gets sourceLabels
     * @return string[]
     */
    public function getSourceLabels()
    {
        return $this->container['sourceLabels'];
    }

    /**
     * Sets sourceLabels
     * @param string[] $sourceLabels
     * @return $this
     */
    public function setSourceLabels($sourceLabels)
    {
        $this->container['sourceLabels'] = $sourceLabels;

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

