<?php

/**
 * KubeAPIServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubeAPIServiceModel implements ArrayAccess
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
        'alwaysPullImages',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'podSecurityPolicy',
        'serviceClusterIpRange',
        'serviceNodePortRange',
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
        'alwaysPullImages',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'podSecurityPolicy',
        'serviceClusterIpRange',
        'serviceNodePortRange',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'alwaysPullImages' => 'boolean',
        'extraArgs' => 'map[string]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'image' => 'string',
        'podSecurityPolicy' => 'boolean',
        'serviceClusterIpRange' => 'string',
        'serviceNodePortRange' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alwaysPullImages' => 'setAlwaysPullImages',
        'extraArgs' => 'setExtraArgs',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'image' => 'setImage',
        'podSecurityPolicy' => 'setPodSecurityPolicy',
        'serviceClusterIpRange' => 'setServiceClusterIpRange',
        'serviceNodePortRange' => 'setServiceNodePortRange',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alwaysPullImages' => 'getAlwaysPullImages',
        'extraArgs' => 'getExtraArgs',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'image' => 'getImage',
        'podSecurityPolicy' => 'getPodSecurityPolicy',
        'serviceClusterIpRange' => 'getServiceClusterIpRange',
        'serviceNodePortRange' => 'getServiceNodePortRange',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alwaysPullImages'] = isset($data['alwaysPullImages']) ? $data['alwaysPullImages'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['podSecurityPolicy'] = isset($data['podSecurityPolicy']) ? $data['podSecurityPolicy'] : null;
        $this->container['serviceClusterIpRange'] = isset($data['serviceClusterIpRange']) ? $data['serviceClusterIpRange'] : null;
        $this->container['serviceNodePortRange'] = isset($data['serviceNodePortRange']) ? $data['serviceNodePortRange'] : null;
    }

    /**
     * Gets alwaysPullImages
     * @return boolean
     */
    public function getAlwaysPullImages()
    {
        return $this->container['alwaysPullImages'];
    }

    /**
     * Sets alwaysPullImages
     * @param boolean $alwaysPullImages
     * @return $this
     */
    public function setAlwaysPullImages($alwaysPullImages)
    {
        $this->container['alwaysPullImages'] = $alwaysPullImages;

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
     * Gets podSecurityPolicy
     * @return boolean
     */
    public function getPodSecurityPolicy()
    {
        return $this->container['podSecurityPolicy'];
    }

    /**
     * Sets podSecurityPolicy
     * @param boolean $podSecurityPolicy
     * @return $this
     */
    public function setPodSecurityPolicy($podSecurityPolicy)
    {
        $this->container['podSecurityPolicy'] = $podSecurityPolicy;

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
     * Gets serviceNodePortRange
     * @return string
     */
    public function getServiceNodePortRange()
    {
        return $this->container['serviceNodePortRange'];
    }

    /**
     * Sets serviceNodePortRange
     * @param string $serviceNodePortRange
     * @return $this
     */
    public function setServiceNodePortRange($serviceNodePortRange)
    {
        $this->container['serviceNodePortRange'] = $serviceNodePortRange;

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

