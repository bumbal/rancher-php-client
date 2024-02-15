<?php

/**
 * PodSecurityAdmissionConfigurationTemplateDefaultsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PodSecurityAdmissionConfigurationTemplateDefaultsModel implements ArrayAccess
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
        'audit',
        'audit-version',
        'enforce',
        'enforce-version',
        'warn',
        'warn-version',
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
        'audit',
        'audit-version',
        'enforce',
        'enforce-version',
        'warn',
        'warn-version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'audit' => 'string',
        'audit-version' => 'string',
        'enforce' => 'string',
        'enforce-version' => 'string',
        'warn' => 'string',
        'warn-version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'audit' => 'setAudit',
        'audit-version' => 'setAudit-version',
        'enforce' => 'setEnforce',
        'enforce-version' => 'setEnforce-version',
        'warn' => 'setWarn',
        'warn-version' => 'setWarn-version',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'audit' => 'getAudit',
        'audit-version' => 'getAudit-version',
        'enforce' => 'getEnforce',
        'enforce-version' => 'getEnforce-version',
        'warn' => 'getWarn',
        'warn-version' => 'getWarn-version',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['audit'] = isset($data['audit']) ? $data['audit'] : null;
        $this->container['audit-version'] = isset($data['audit-version']) ? $data['audit-version'] : null;
        $this->container['enforce'] = isset($data['enforce']) ? $data['enforce'] : null;
        $this->container['enforce-version'] = isset($data['enforce-version']) ? $data['enforce-version'] : null;
        $this->container['warn'] = isset($data['warn']) ? $data['warn'] : null;
        $this->container['warn-version'] = isset($data['warn-version']) ? $data['warn-version'] : null;
    }

    /**
     * Gets audit
     * @return string
     */
    public function getAudit()
    {
        return $this->container['audit'];
    }

    /**
     * Sets audit
     * @param string $audit
     * @return $this
     */
    public function setAudit($audit)
    {
        $this->container['audit'] = $audit;

        return $this;
    }


    /**
     * Gets audit-version
     * @return string
     */
    public function getAudit-version()
    {
        return $this->container['audit-version'];
    }

    /**
     * Sets audit-version
     * @param string $audit-version
     * @return $this
     */
    public function setAudit-version($audit-version)
    {
        $this->container['audit-version'] = $audit-version;

        return $this;
    }


    /**
     * Gets enforce
     * @return string
     */
    public function getEnforce()
    {
        return $this->container['enforce'];
    }

    /**
     * Sets enforce
     * @param string $enforce
     * @return $this
     */
    public function setEnforce($enforce)
    {
        $this->container['enforce'] = $enforce;

        return $this;
    }


    /**
     * Gets enforce-version
     * @return string
     */
    public function getEnforce-version()
    {
        return $this->container['enforce-version'];
    }

    /**
     * Sets enforce-version
     * @param string $enforce-version
     * @return $this
     */
    public function setEnforce-version($enforce-version)
    {
        $this->container['enforce-version'] = $enforce-version;

        return $this;
    }


    /**
     * Gets warn
     * @return string
     */
    public function getWarn()
    {
        return $this->container['warn'];
    }

    /**
     * Sets warn
     * @param string $warn
     * @return $this
     */
    public function setWarn($warn)
    {
        $this->container['warn'] = $warn;

        return $this;
    }


    /**
     * Gets warn-version
     * @return string
     */
    public function getWarn-version()
    {
        return $this->container['warn-version'];
    }

    /**
     * Sets warn-version
     * @param string $warn-version
     * @return $this
     */
    public function setWarn-version($warn-version)
    {
        $this->container['warn-version'] = $warn-version;

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

