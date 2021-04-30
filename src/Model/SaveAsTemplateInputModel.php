<?php

/**
 * SaveAsTemplateInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class SaveAsTemplateInputModel implements ArrayAccess
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
        'clusterTemplateName',
        'clusterTemplateRevisionName',
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
        'clusterTemplateName',
        'clusterTemplateRevisionName',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'clusterTemplateName' => 'string',
        'clusterTemplateRevisionName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'clusterTemplateName' => 'setClusterTemplateName',
        'clusterTemplateRevisionName' => 'setClusterTemplateRevisionName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'clusterTemplateName' => 'getClusterTemplateName',
        'clusterTemplateRevisionName' => 'getClusterTemplateRevisionName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['clusterTemplateName'] = isset($data['clusterTemplateName']) ? $data['clusterTemplateName'] : null;
        $this->container['clusterTemplateRevisionName'] = isset($data['clusterTemplateRevisionName']) ? $data['clusterTemplateRevisionName'] : null;
    }

    /**
     * Gets clusterTemplateName
     * @return string
     */
    public function getClusterTemplateName()
    {
        return $this->container['clusterTemplateName'];
    }

    /**
     * Sets clusterTemplateName
     * @param string $clusterTemplateName
     * @return $this
     */
    public function setClusterTemplateName($clusterTemplateName)
    {
        $this->container['clusterTemplateName'] = $clusterTemplateName;

        return $this;
    }


    /**
     * Gets clusterTemplateRevisionName
     * @return string
     */
    public function getClusterTemplateRevisionName()
    {
        return $this->container['clusterTemplateRevisionName'];
    }

    /**
     * Sets clusterTemplateRevisionName
     * @param string $clusterTemplateRevisionName
     * @return $this
     */
    public function setClusterTemplateRevisionName($clusterTemplateRevisionName)
    {
        $this->container['clusterTemplateRevisionName'] = $clusterTemplateRevisionName;

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

