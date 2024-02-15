<?php

/**
 * ScaleIOPersistentVolumeSourceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ScaleIOPersistentVolumeSourceModel implements ArrayAccess
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
        'fsType',
        'gateway',
        'protectionDomain',
        'readOnly',
        'secretRef',
        'sslEnabled',
        'storageMode',
        'storagePool',
        'system',
        'volumeName',
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
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'fsType' => 'string',
        'gateway' => 'string',
        'protectionDomain' => 'string',
        'readOnly' => 'boolean',
        'secretRef' => '\Rancher\Model\SecretReferenceModel',
        'sslEnabled' => 'boolean',
        'storageMode' => 'string',
        'storagePool' => 'string',
        'system' => 'string',
        'volumeName' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'fsType' => 'setFsType',
        'gateway' => 'setGateway',
        'protectionDomain' => 'setProtectionDomain',
        'readOnly' => 'setReadOnly',
        'secretRef' => 'setSecretRef',
        'sslEnabled' => 'setSslEnabled',
        'storageMode' => 'setStorageMode',
        'storagePool' => 'setStoragePool',
        'system' => 'setSystem',
        'volumeName' => 'setVolumeName',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'fsType' => 'getFsType',
        'gateway' => 'getGateway',
        'protectionDomain' => 'getProtectionDomain',
        'readOnly' => 'getReadOnly',
        'secretRef' => 'getSecretRef',
        'sslEnabled' => 'getSslEnabled',
        'storageMode' => 'getStorageMode',
        'storagePool' => 'getStoragePool',
        'system' => 'getSystem',
        'volumeName' => 'getVolumeName',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['fsType'] = isset($data['fsType']) ? $data['fsType'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
        $this->container['protectionDomain'] = isset($data['protectionDomain']) ? $data['protectionDomain'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['secretRef'] = isset($data['secretRef']) ? $data['secretRef'] : null;
        $this->container['sslEnabled'] = isset($data['sslEnabled']) ? $data['sslEnabled'] : null;
        $this->container['storageMode'] = isset($data['storageMode']) ? $data['storageMode'] : null;
        $this->container['storagePool'] = isset($data['storagePool']) ? $data['storagePool'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['volumeName'] = isset($data['volumeName']) ? $data['volumeName'] : null;
    }

    /**
     * Gets fsType
     * @return string
     */
    public function getFsType()
    {
        return $this->container['fsType'];
    }

    /**
     * Sets fsType
     * @param string $fsType
     * @return $this
     */
    public function setFsType($fsType)
    {
        $this->container['fsType'] = $fsType;

        return $this;
    }


    /**
     * Gets gateway
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     * @param string $gateway
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

        return $this;
    }


    /**
     * Gets protectionDomain
     * @return string
     */
    public function getProtectionDomain()
    {
        return $this->container['protectionDomain'];
    }

    /**
     * Sets protectionDomain
     * @param string $protectionDomain
     * @return $this
     */
    public function setProtectionDomain($protectionDomain)
    {
        $this->container['protectionDomain'] = $protectionDomain;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

        return $this;
    }


    /**
     * Gets secretRef
     * @return \Rancher\Model\SecretReferenceModel
     */
    public function getSecretRef()
    {
        return $this->container['secretRef'];
    }

    /**
     * Sets secretRef
     * @param \Rancher\Model\SecretReferenceModel $secretRef
     * @return $this
     */
    public function setSecretRef($secretRef)
    {
        $this->container['secretRef'] = $secretRef;

        return $this;
    }


    /**
     * Gets sslEnabled
     * @return boolean
     */
    public function getSslEnabled()
    {
        return $this->container['sslEnabled'];
    }

    /**
     * Sets sslEnabled
     * @param boolean $sslEnabled
     * @return $this
     */
    public function setSslEnabled($sslEnabled)
    {
        $this->container['sslEnabled'] = $sslEnabled;

        return $this;
    }


    /**
     * Gets storageMode
     * @return string
     */
    public function getStorageMode()
    {
        return $this->container['storageMode'];
    }

    /**
     * Sets storageMode
     * @param string $storageMode
     * @return $this
     */
    public function setStorageMode($storageMode)
    {
        $this->container['storageMode'] = $storageMode;

        return $this;
    }


    /**
     * Gets storagePool
     * @return string
     */
    public function getStoragePool()
    {
        return $this->container['storagePool'];
    }

    /**
     * Sets storagePool
     * @param string $storagePool
     * @return $this
     */
    public function setStoragePool($storagePool)
    {
        $this->container['storagePool'] = $storagePool;

        return $this;
    }


    /**
     * Gets system
     * @return string
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     * @param string $system
     * @return $this
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }


    /**
     * Gets volumeName
     * @return string
     */
    public function getVolumeName()
    {
        return $this->container['volumeName'];
    }

    /**
     * Sets volumeName
     * @param string $volumeName
     * @return $this
     */
    public function setVolumeName($volumeName)
    {
        $this->container['volumeName'] = $volumeName;

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

