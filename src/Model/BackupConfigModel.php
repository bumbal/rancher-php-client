<?php

/**
 * BackupConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class BackupConfigModel implements ArrayAccess
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
        'enabled',
        'intervalHours',
        'retention',
        's3BackupConfig',
        'safeTimestamp',
        'timeout',
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
        'enabled',
        'intervalHours',
        'retention',
        's3BackupConfig',
        'safeTimestamp',
        'timeout',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'enabled' => 'boolean',
        'intervalHours' => 'int',
        'retention' => 'int',
        's3BackupConfig' => '\Rancher\Model\S3BackupConfigModel',
        'safeTimestamp' => 'boolean',
        'timeout' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'enabled' => 'setEnabled',
        'intervalHours' => 'setIntervalHours',
        'retention' => 'setRetention',
        's3BackupConfig' => 'setS3BackupConfig',
        'safeTimestamp' => 'setSafeTimestamp',
        'timeout' => 'setTimeout',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'enabled' => 'getEnabled',
        'intervalHours' => 'getIntervalHours',
        'retention' => 'getRetention',
        's3BackupConfig' => 'getS3BackupConfig',
        'safeTimestamp' => 'getSafeTimestamp',
        'timeout' => 'getTimeout',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['intervalHours'] = isset($data['intervalHours']) ? $data['intervalHours'] : null;
        $this->container['retention'] = isset($data['retention']) ? $data['retention'] : null;
        $this->container['s3BackupConfig'] = isset($data['s3BackupConfig']) ? $data['s3BackupConfig'] : null;
        $this->container['safeTimestamp'] = isset($data['safeTimestamp']) ? $data['safeTimestamp'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets intervalHours
     * @return int
     */
    public function getIntervalHours()
    {
        return $this->container['intervalHours'];
    }

    /**
     * Sets intervalHours
     * @param int $intervalHours
     * @return $this
     */
    public function setIntervalHours($intervalHours)
    {
        $this->container['intervalHours'] = $intervalHours;

        return $this;
    }


    /**
     * Gets retention
     * @return int
     */
    public function getRetention()
    {
        return $this->container['retention'];
    }

    /**
     * Sets retention
     * @param int $retention
     * @return $this
     */
    public function setRetention($retention)
    {
        $this->container['retention'] = $retention;

        return $this;
    }


    /**
     * Gets s3BackupConfig
     * @return \Rancher\Model\S3BackupConfigModel
     */
    public function getS3BackupConfig()
    {
        return $this->container['s3BackupConfig'];
    }

    /**
     * Sets s3BackupConfig
     * @param \Rancher\Model\S3BackupConfigModel $s3BackupConfig
     * @return $this
     */
    public function setS3BackupConfig($s3BackupConfig)
    {
        $this->container['s3BackupConfig'] = $s3BackupConfig;

        return $this;
    }


    /**
     * Gets safeTimestamp
     * @return boolean
     */
    public function getSafeTimestamp()
    {
        return $this->container['safeTimestamp'];
    }

    /**
     * Sets safeTimestamp
     * @param boolean $safeTimestamp
     * @return $this
     */
    public function setSafeTimestamp($safeTimestamp)
    {
        $this->container['safeTimestamp'] = $safeTimestamp;

        return $this;
    }


    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     * @param int $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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

