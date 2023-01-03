<?php

/**
 * AuditLogConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AuditLogConfigModel implements ArrayAccess
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
        'format',
        'maxAge',
        'maxBackup',
        'maxSize',
        'path',
        'policy',
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
        'format',
        'maxAge',
        'maxBackup',
        'maxSize',
        'path',
        'policy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'format' => 'string',
        'maxAge' => 'int',
        'maxBackup' => 'int',
        'maxSize' => 'int',
        'path' => 'string',
        'policy' => 'map[string,\Rancher\Model\JsonModel]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'format' => 'setFormat',
        'maxAge' => 'setMaxAge',
        'maxBackup' => 'setMaxBackup',
        'maxSize' => 'setMaxSize',
        'path' => 'setPath',
        'policy' => 'setPolicy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'format' => 'getFormat',
        'maxAge' => 'getMaxAge',
        'maxBackup' => 'getMaxBackup',
        'maxSize' => 'getMaxSize',
        'path' => 'getPath',
        'policy' => 'getPolicy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['maxAge'] = isset($data['maxAge']) ? $data['maxAge'] : null;
        $this->container['maxBackup'] = isset($data['maxBackup']) ? $data['maxBackup'] : null;
        $this->container['maxSize'] = isset($data['maxSize']) ? $data['maxSize'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }


    /**
     * Gets maxAge
     * @return int
     */
    public function getMaxAge()
    {
        return $this->container['maxAge'];
    }

    /**
     * Sets maxAge
     * @param int $maxAge
     * @return $this
     */
    public function setMaxAge($maxAge)
    {
        $this->container['maxAge'] = $maxAge;

        return $this;
    }


    /**
     * Gets maxBackup
     * @return int
     */
    public function getMaxBackup()
    {
        return $this->container['maxBackup'];
    }

    /**
     * Sets maxBackup
     * @param int $maxBackup
     * @return $this
     */
    public function setMaxBackup($maxBackup)
    {
        $this->container['maxBackup'] = $maxBackup;

        return $this;
    }


    /**
     * Gets maxSize
     * @return int
     */
    public function getMaxSize()
    {
        return $this->container['maxSize'];
    }

    /**
     * Sets maxSize
     * @param int $maxSize
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        $this->container['maxSize'] = $maxSize;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets policy
     * @return \Rancher\Model\JsonModel[]
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     * @param \Rancher\Model\JsonModel[] $policy
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;

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

