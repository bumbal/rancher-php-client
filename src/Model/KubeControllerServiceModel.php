<?php

/**
 * KubeControllerServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubeControllerServiceModel implements ArrayAccess
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
        'clusterCidr',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'serviceClusterIpRange',
        'winExtraArgs',
        'winExtraBinds',
        'winExtraEnv',
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
        'clusterCidr',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'serviceClusterIpRange',
        'winExtraArgs',
        'winExtraBinds',
        'winExtraEnv',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterCidr' => 'string',
        'extraArgs' => 'map[string,string]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'image' => 'string',
        'serviceClusterIpRange' => 'string',
        'winExtraArgs' => 'map[string,string]',
        'winExtraBinds' => 'string[]',
        'winExtraEnv' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterCidr' => 'setClusterCidr',
        'extraArgs' => 'setExtraArgs',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'image' => 'setImage',
        'serviceClusterIpRange' => 'setServiceClusterIpRange',
        'winExtraArgs' => 'setWinExtraArgs',
        'winExtraBinds' => 'setWinExtraBinds',
        'winExtraEnv' => 'setWinExtraEnv',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterCidr' => 'getClusterCidr',
        'extraArgs' => 'getExtraArgs',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'image' => 'getImage',
        'serviceClusterIpRange' => 'getServiceClusterIpRange',
        'winExtraArgs' => 'getWinExtraArgs',
        'winExtraBinds' => 'getWinExtraBinds',
        'winExtraEnv' => 'getWinExtraEnv',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterCidr'] = isset($data['clusterCidr']) ? $data['clusterCidr'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['serviceClusterIpRange'] = isset($data['serviceClusterIpRange']) ? $data['serviceClusterIpRange'] : null;
        $this->container['winExtraArgs'] = isset($data['winExtraArgs']) ? $data['winExtraArgs'] : null;
        $this->container['winExtraBinds'] = isset($data['winExtraBinds']) ? $data['winExtraBinds'] : null;
        $this->container['winExtraEnv'] = isset($data['winExtraEnv']) ? $data['winExtraEnv'] : null;
    }

    /**
     * Gets clusterCidr
     * @return string
     */
    public function getClusterCidr()
    {
        return $this->container['clusterCidr'];
    }

    /**
     * Sets clusterCidr
     * @param string $clusterCidr
     * @return $this
     */
    public function setClusterCidr($clusterCidr)
    {
        $this->container['clusterCidr'] = $clusterCidr;

        return $this;
    }


    /**
     * Gets extraArgs
     * @return string[]
     */
    public function getExtraArgs()
    {
        return $this->container['extraArgs'];
    }

    /**
     * Sets extraArgs
     * @param string[] $extraArgs
     * @return $this
     */
    public function setExtraArgs($extraArgs)
    {
        $this->container['extraArgs'] = $extraArgs;

        return $this;
    }


    /**
     * Gets extraBinds
     * @return string[]
     */
    public function getExtraBinds()
    {
        return $this->container['extraBinds'];
    }

    /**
     * Sets extraBinds
     * @param string[] $extraBinds
     * @return $this
     */
    public function setExtraBinds($extraBinds)
    {
        $this->container['extraBinds'] = $extraBinds;

        return $this;
    }


    /**
     * Gets extraEnv
     * @return string[]
     */
    public function getExtraEnv()
    {
        return $this->container['extraEnv'];
    }

    /**
     * Sets extraEnv
     * @param string[] $extraEnv
     * @return $this
     */
    public function setExtraEnv($extraEnv)
    {
        $this->container['extraEnv'] = $extraEnv;

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
     * Gets serviceClusterIpRange
     * @return string
     */
    public function getServiceClusterIpRange()
    {
        return $this->container['serviceClusterIpRange'];
    }

    /**
     * Sets serviceClusterIpRange
     * @param string $serviceClusterIpRange
     * @return $this
     */
    public function setServiceClusterIpRange($serviceClusterIpRange)
    {
        $this->container['serviceClusterIpRange'] = $serviceClusterIpRange;

        return $this;
    }


    /**
     * Gets winExtraArgs
     * @return string[]
     */
    public function getWinExtraArgs()
    {
        return $this->container['winExtraArgs'];
    }

    /**
     * Sets winExtraArgs
     * @param string[] $winExtraArgs
     * @return $this
     */
    public function setWinExtraArgs($winExtraArgs)
    {
        $this->container['winExtraArgs'] = $winExtraArgs;

        return $this;
    }


    /**
     * Gets winExtraBinds
     * @return string[]
     */
    public function getWinExtraBinds()
    {
        return $this->container['winExtraBinds'];
    }

    /**
     * Sets winExtraBinds
     * @param string[] $winExtraBinds
     * @return $this
     */
    public function setWinExtraBinds($winExtraBinds)
    {
        $this->container['winExtraBinds'] = $winExtraBinds;

        return $this;
    }


    /**
     * Gets winExtraEnv
     * @return string[]
     */
    public function getWinExtraEnv()
    {
        return $this->container['winExtraEnv'];
    }

    /**
     * Sets winExtraEnv
     * @param string[] $winExtraEnv
     * @return $this
     */
    public function setWinExtraEnv($winExtraEnv)
    {
        $this->container['winExtraEnv'] = $winExtraEnv;

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

