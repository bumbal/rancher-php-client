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
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'failSwapOn',
        'generateServingCertificate',
        'image',
        'infraContainerImage',
        'winExtraArgs',
        'winExtraArgsArray',
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
        'clusterDnsServer',
        'clusterDomain',
        'extraArgs',
        'extraArgsArray',
        'extraBinds',
        'extraEnv',
        'failSwapOn',
        'generateServingCertificate',
        'image',
        'infraContainerImage',
        'winExtraArgs',
        'winExtraArgsArray',
        'winExtraBinds',
        'winExtraEnv',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterDnsServer' => 'string',
        'clusterDomain' => 'string',
        'extraArgs' => 'map[string,string]',
        'extraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'failSwapOn' => 'boolean',
        'generateServingCertificate' => 'boolean',
        'image' => 'string',
        'infraContainerImage' => 'string',
        'winExtraArgs' => 'map[string,string]',
        'winExtraArgsArray' => 'map[string,\Rancher\Model\Array[string]Model]',
        'winExtraBinds' => 'string[]',
        'winExtraEnv' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterDnsServer' => 'setClusterDnsServer',
        'clusterDomain' => 'setClusterDomain',
        'extraArgs' => 'setExtraArgs',
        'extraArgsArray' => 'setExtraArgsArray',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'failSwapOn' => 'setFailSwapOn',
        'generateServingCertificate' => 'setGenerateServingCertificate',
        'image' => 'setImage',
        'infraContainerImage' => 'setInfraContainerImage',
        'winExtraArgs' => 'setWinExtraArgs',
        'winExtraArgsArray' => 'setWinExtraArgsArray',
        'winExtraBinds' => 'setWinExtraBinds',
        'winExtraEnv' => 'setWinExtraEnv',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterDnsServer' => 'getClusterDnsServer',
        'clusterDomain' => 'getClusterDomain',
        'extraArgs' => 'getExtraArgs',
        'extraArgsArray' => 'getExtraArgsArray',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'failSwapOn' => 'getFailSwapOn',
        'generateServingCertificate' => 'getGenerateServingCertificate',
        'image' => 'getImage',
        'infraContainerImage' => 'getInfraContainerImage',
        'winExtraArgs' => 'getWinExtraArgs',
        'winExtraArgsArray' => 'getWinExtraArgsArray',
        'winExtraBinds' => 'getWinExtraBinds',
        'winExtraEnv' => 'getWinExtraEnv',
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
        $this->container['extraArgsArray'] = isset($data['extraArgsArray']) ? $data['extraArgsArray'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['failSwapOn'] = isset($data['failSwapOn']) ? $data['failSwapOn'] : null;
        $this->container['generateServingCertificate'] = isset($data['generateServingCertificate']) ? $data['generateServingCertificate'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['infraContainerImage'] = isset($data['infraContainerImage']) ? $data['infraContainerImage'] : null;
        $this->container['winExtraArgs'] = isset($data['winExtraArgs']) ? $data['winExtraArgs'] : null;
        $this->container['winExtraArgsArray'] = isset($data['winExtraArgsArray']) ? $data['winExtraArgsArray'] : null;
        $this->container['winExtraBinds'] = isset($data['winExtraBinds']) ? $data['winExtraBinds'] : null;
        $this->container['winExtraEnv'] = isset($data['winExtraEnv']) ? $data['winExtraEnv'] : null;
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
     * Gets extraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getExtraArgsArray()
    {
        return $this->container['extraArgsArray'];
    }

    /**
     * Sets extraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $extraArgsArray
     * @return $this
     */
    public function setExtraArgsArray($extraArgsArray)
    {
        $this->container['extraArgsArray'] = $extraArgsArray;

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
     * Gets generateServingCertificate
     * @return boolean
     */
    public function getGenerateServingCertificate()
    {
        return $this->container['generateServingCertificate'];
    }

    /**
     * Sets generateServingCertificate
     * @param boolean $generateServingCertificate
     * @return $this
     */
    public function setGenerateServingCertificate($generateServingCertificate)
    {
        $this->container['generateServingCertificate'] = $generateServingCertificate;

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
     * Gets winExtraArgsArray
     * @return \Rancher\Model\Array[string]Model[]
     */
    public function getWinExtraArgsArray()
    {
        return $this->container['winExtraArgsArray'];
    }

    /**
     * Sets winExtraArgsArray
     * @param \Rancher\Model\Array[string]Model[] $winExtraArgsArray
     * @return $this
     */
    public function setWinExtraArgsArray($winExtraArgsArray)
    {
        $this->container['winExtraArgsArray'] = $winExtraArgsArray;

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

