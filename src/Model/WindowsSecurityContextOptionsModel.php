<?php

/**
 * WindowsSecurityContextOptionsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WindowsSecurityContextOptionsModel implements ArrayAccess
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
        'gmsaCredentialSpec',
        'gmsaCredentialSpecName',
        'runAsUserName',
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
        'gmsaCredentialSpec',
        'gmsaCredentialSpecName',
        'runAsUserName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'gmsaCredentialSpec' => 'string',
        'gmsaCredentialSpecName' => 'string',
        'runAsUserName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'gmsaCredentialSpec' => 'setGmsaCredentialSpec',
        'gmsaCredentialSpecName' => 'setGmsaCredentialSpecName',
        'runAsUserName' => 'setRunAsUserName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'gmsaCredentialSpec' => 'getGmsaCredentialSpec',
        'gmsaCredentialSpecName' => 'getGmsaCredentialSpecName',
        'runAsUserName' => 'getRunAsUserName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['gmsaCredentialSpec'] = isset($data['gmsaCredentialSpec']) ? $data['gmsaCredentialSpec'] : null;
        $this->container['gmsaCredentialSpecName'] = isset($data['gmsaCredentialSpecName']) ? $data['gmsaCredentialSpecName'] : null;
        $this->container['runAsUserName'] = isset($data['runAsUserName']) ? $data['runAsUserName'] : null;
    }

    /**
     * Gets gmsaCredentialSpec
     * @return string
     */
    public function getGmsaCredentialSpec()
    {
        return $this->container['gmsaCredentialSpec'];
    }

    /**
     * Sets gmsaCredentialSpec
     * @param string $gmsaCredentialSpec
     * @return $this
     */
    public function setGmsaCredentialSpec($gmsaCredentialSpec)
    {
        $this->container['gmsaCredentialSpec'] = $gmsaCredentialSpec;

        return $this;
    }


    /**
     * Gets gmsaCredentialSpecName
     * @return string
     */
    public function getGmsaCredentialSpecName()
    {
        return $this->container['gmsaCredentialSpecName'];
    }

    /**
     * Sets gmsaCredentialSpecName
     * @param string $gmsaCredentialSpecName
     * @return $this
     */
    public function setGmsaCredentialSpecName($gmsaCredentialSpecName)
    {
        $this->container['gmsaCredentialSpecName'] = $gmsaCredentialSpecName;

        return $this;
    }


    /**
     * Gets runAsUserName
     * @return string
     */
    public function getRunAsUserName()
    {
        return $this->container['runAsUserName'];
    }

    /**
     * Sets runAsUserName
     * @param string $runAsUserName
     * @return $this
     */
    public function setRunAsUserName($runAsUserName)
    {
        $this->container['runAsUserName'] = $runAsUserName;

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

