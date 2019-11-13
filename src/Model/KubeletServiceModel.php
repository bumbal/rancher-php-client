<?php

/**
 * KubeletServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubeletServiceModel implements ArrayAccess
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
        'clusterDnsServer',
        'clusterDomain',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'failSwapOn',
        'image',
        'infraContainerImage',
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
        'clusterDnsServer',
        'clusterDomain',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'failSwapOn',
        'image',
        'infraContainerImage',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterDnsServer' => 'string',
        'clusterDomain' => 'string',
        'extraArgs' => 'map[string]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'failSwapOn' => 'boolean',
        'image' => 'string',
        'infraContainerImage' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterDnsServer' => 'setClusterDnsServer',
        'clusterDomain' => 'setClusterDomain',
        'extraArgs' => 'setExtraArgs',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'failSwapOn' => 'setFailSwapOn',
        'image' => 'setImage',
        'infraContainerImage' => 'setInfraContainerImage',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterDnsServer' => 'getClusterDnsServer',
        'clusterDomain' => 'getClusterDomain',
        'extraArgs' => 'getExtraArgs',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'failSwapOn' => 'getFailSwapOn',
        'image' => 'getImage',
        'infraContainerImage' => 'getInfraContainerImage',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterDnsServer'] = isset($data['clusterDnsServer']) ? $data['clusterDnsServer'] : null;
        $this->container['clusterDomain'] = isset($data['clusterDomain']) ? $data['clusterDomain'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['failSwapOn'] = isset($data['failSwapOn']) ? $data['failSwapOn'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['infraContainerImage'] = isset($data['infraContainerImage']) ? $data['infraContainerImage'] : null;
    }

    /**
     * Gets clusterDnsServer
     * @return string
     */
    public function getClusterDnsServer()
    {
        return $this->container['clusterDnsServer'];
    }

    /**
     * Sets clusterDnsServer
     * @param string $clusterDnsServer
     * @return $this
     */
    public function setClusterDnsServer($clusterDnsServer)
    {
        $this->container['clusterDnsServer'] = $clusterDnsServer;

        return $this;
    }


    /**
     * Gets clusterDomain
     * @return string
     */
    public function getClusterDomain()
    {
        return $this->container['clusterDomain'];
    }

    /**
     * Sets clusterDomain
     * @param string $clusterDomain
     * @return $this
     */
    public function setClusterDomain($clusterDomain)
    {
        $this->container['clusterDomain'] = $clusterDomain;

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
     * Gets failSwapOn
     * @return boolean
     */
    public function getFailSwapOn()
    {
        return $this->container['failSwapOn'];
    }

    /**
     * Sets failSwapOn
     * @param boolean $failSwapOn
     * @return $this
     */
    public function setFailSwapOn($failSwapOn)
    {
        $this->container['failSwapOn'] = $failSwapOn;

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
     * Gets infraContainerImage
     * @return string
     */
    public function getInfraContainerImage()
    {
        return $this->container['infraContainerImage'];
    }

    /**
     * Sets infraContainerImage
     * @param string $infraContainerImage
     * @return $this
     */
    public function setInfraContainerImage($infraContainerImage)
    {
        $this->container['infraContainerImage'] = $infraContainerImage;

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

