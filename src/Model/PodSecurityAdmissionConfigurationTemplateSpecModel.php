<?php

/**
 * PodSecurityAdmissionConfigurationTemplateSpecModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodSecurityAdmissionConfigurationTemplateSpecModel implements ArrayAccess
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
        'defaults',
        'exemptions',
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
        'defaults',
        'exemptions',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaults' => '\Rancher\Model\PodSecurityAdmissionConfigurationTemplateDefaultsModel',
        'exemptions' => '\Rancher\Model\PodSecurityAdmissionConfigurationTemplateExemptionsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaults' => 'setDefaults',
        'exemptions' => 'setExemptions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaults' => 'getDefaults',
        'exemptions' => 'getExemptions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaults'] = isset($data['defaults']) ? $data['defaults'] : null;
        $this->container['exemptions'] = isset($data['exemptions']) ? $data['exemptions'] : null;
    }

    /**
     * Gets defaults
     * @return \Rancher\Model\PodSecurityAdmissionConfigurationTemplateDefaultsModel
     */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
     * Sets defaults
     * @param \Rancher\Model\PodSecurityAdmissionConfigurationTemplateDefaultsModel $defaults
     * @return $this
     */
    public function setDefaults($defaults)
    {
        $this->container['defaults'] = $defaults;

        return $this;
    }


    /**
     * Gets exemptions
     * @return \Rancher\Model\PodSecurityAdmissionConfigurationTemplateExemptionsModel
     */
    public function getExemptions()
    {
        return $this->container['exemptions'];
    }

    /**
     * Sets exemptions
     * @param \Rancher\Model\PodSecurityAdmissionConfigurationTemplateExemptionsModel $exemptions
     * @return $this
     */
    public function setExemptions($exemptions)
    {
        $this->container['exemptions'] = $exemptions;

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

