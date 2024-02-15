<?php

/**
 * ClaimSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ClaimSourceModel implements ArrayAccess
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
        'resourceClaimName',
        'resourceClaimTemplateName',
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
        'resourceClaimName',
        'resourceClaimTemplateName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'resourceClaimName' => 'string',
        'resourceClaimTemplateName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'resourceClaimName' => 'setResourceClaimName',
        'resourceClaimTemplateName' => 'setResourceClaimTemplateName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'resourceClaimName' => 'getResourceClaimName',
        'resourceClaimTemplateName' => 'getResourceClaimTemplateName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['resourceClaimName'] = isset($data['resourceClaimName']) ? $data['resourceClaimName'] : null;
        $this->container['resourceClaimTemplateName'] = isset($data['resourceClaimTemplateName']) ? $data['resourceClaimTemplateName'] : null;
    }

    /**
     * Gets resourceClaimName
     * @return string
     */
    public function getResourceClaimName()
    {
        return $this->container['resourceClaimName'];
    }

    /**
     * Sets resourceClaimName
     * @param string $resourceClaimName
     * @return $this
     */
    public function setResourceClaimName($resourceClaimName)
    {
        $this->container['resourceClaimName'] = $resourceClaimName;

        return $this;
    }


    /**
     * Gets resourceClaimTemplateName
     * @return string
     */
    public function getResourceClaimTemplateName()
    {
        return $this->container['resourceClaimTemplateName'];
    }

    /**
     * Sets resourceClaimTemplateName
     * @param string $resourceClaimTemplateName
     * @return $this
     */
    public function setResourceClaimTemplateName($resourceClaimTemplateName)
    {
        $this->container['resourceClaimTemplateName'] = $resourceClaimTemplateName;

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

