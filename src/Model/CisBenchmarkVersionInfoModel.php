<?php

/**
 * CisBenchmarkVersionInfoModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class CisBenchmarkVersionInfoModel implements ArrayAccess
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
        'managed',
        'minKubernetesVersion',
        'notApplicableChecks',
        'skippedChecks',
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
        'managed',
        'minKubernetesVersion',
        'notApplicableChecks',
        'skippedChecks',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'managed' => 'boolean',
        'minKubernetesVersion' => 'string',
        'notApplicableChecks' => 'map[string,string]',
        'skippedChecks' => 'map[string,string]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'managed' => 'setManaged',
        'minKubernetesVersion' => 'setMinKubernetesVersion',
        'notApplicableChecks' => 'setNotApplicableChecks',
        'skippedChecks' => 'setSkippedChecks',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'managed' => 'getManaged',
        'minKubernetesVersion' => 'getMinKubernetesVersion',
        'notApplicableChecks' => 'getNotApplicableChecks',
        'skippedChecks' => 'getSkippedChecks',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['managed'] = isset($data['managed']) ? $data['managed'] : null;
        $this->container['minKubernetesVersion'] = isset($data['minKubernetesVersion']) ? $data['minKubernetesVersion'] : null;
        $this->container['notApplicableChecks'] = isset($data['notApplicableChecks']) ? $data['notApplicableChecks'] : null;
        $this->container['skippedChecks'] = isset($data['skippedChecks']) ? $data['skippedChecks'] : null;
    }

    /**
     * Gets managed
     * @return boolean
     */
    public function getManaged()
    {
        return $this->container['managed'];
    }

    /**
     * Sets managed
     * @param boolean $managed
     * @return $this
     */
    public function setManaged($managed)
    {
        $this->container['managed'] = $managed;

        return $this;
    }


    /**
     * Gets minKubernetesVersion
     * @return string
     */
    public function getMinKubernetesVersion()
    {
        return $this->container['minKubernetesVersion'];
    }

    /**
     * Sets minKubernetesVersion
     * @param string $minKubernetesVersion
     * @return $this
     */
    public function setMinKubernetesVersion($minKubernetesVersion)
    {
        $this->container['minKubernetesVersion'] = $minKubernetesVersion;

        return $this;
    }


    /**
     * Gets notApplicableChecks
     * @return string[]
     */
    public function getNotApplicableChecks()
    {
        return $this->container['notApplicableChecks'];
    }

    /**
     * Sets notApplicableChecks
     * @param string[] $notApplicableChecks
     * @return $this
     */
    public function setNotApplicableChecks($notApplicableChecks)
    {
        $this->container['notApplicableChecks'] = $notApplicableChecks;

        return $this;
    }


    /**
     * Gets skippedChecks
     * @return string[]
     */
    public function getSkippedChecks()
    {
        return $this->container['skippedChecks'];
    }

    /**
     * Sets skippedChecks
     * @param string[] $skippedChecks
     * @return $this
     */
    public function setSkippedChecks($skippedChecks)
    {
        $this->container['skippedChecks'] = $skippedChecks;

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

