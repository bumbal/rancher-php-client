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

    protected static $typeMap = [
        'notifier' => 'string',
        'recipient' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'notifier' => 'setNotifier',
        'recipient' => 'setRecipient',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'notifier' => 'getNotifier',
        'recipient' => 'getRecipient',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['notifier'] = isset($data['notifier']) ? $data['notifier'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
    }

    /**
     * Gets notifier
     * @return string
     */
    public function getNotifier()
    {
        return $this->container['notifier'];
    }

    /**
     * Sets notifier
     * @param string $notifier
     * @return $this
     */
    public function setNotifier($notifier)
    {
        $this->container['notifier'] = $notifier;

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

