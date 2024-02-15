<?php

/**
 * RecipientModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RecipientModel implements ArrayAccess
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
        'notifierId',
        'notifierType',
        'recipient',
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
        'notifierId',
        'notifierType',
        'recipient',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'notifierId' => 'string',
        'notifierType' => 'string',
        'recipient' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'notifierId' => 'setNotifierId',
        'notifierType' => 'setNotifierType',
        'recipient' => 'setRecipient',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'notifierId' => 'getNotifierId',
        'notifierType' => 'getNotifierType',
        'recipient' => 'getRecipient',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['notifierId'] = isset($data['notifierId']) ? $data['notifierId'] : null;
        $this->container['notifierType'] = isset($data['notifierType']) ? $data['notifierType'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
    }

    /**
     * Gets notifierId
     * @return string
     */
    public function getNotifierId()
    {
        return $this->container['notifierId'];
    }

    /**
     * Sets notifierId
     * @param string $notifierId
     * @return $this
     */
    public function setNotifierId($notifierId)
    {
        $this->container['notifierId'] = $notifierId;

        return $this;
    }


    /**
     * Gets notifierType
     * @return string
     */
    public function getNotifierType()
    {
        return $this->container['notifierType'];
    }

    /**
     * Sets notifierType
     * @param string $notifierType
     * @return $this
     */
    public function setNotifierType($notifierType)
    {
        $this->container['notifierType'] = $notifierType;

        return $this;
    }


    /**
     * Gets recipient
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     * @param string $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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

