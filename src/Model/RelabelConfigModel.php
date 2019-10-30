<?php

/**
 * RelabelConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RelabelConfigModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'action' => 'string',
        'modulus' => 'int',
        'regex' => 'string',
        'replacement' => 'string',
        'separator' => 'string',
        'sourceLabels' => 'string[]',
        'targetLabel' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'action' => 'setAction',
        'modulus' => 'setModulus',
        'regex' => 'setRegex',
        'replacement' => 'setReplacement',
        'separator' => 'setSeparator',
        'sourceLabels' => 'setSourceLabels',
        'targetLabel' => 'setTargetLabel',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'action' => 'getAction',
        'modulus' => 'getModulus',
        'regex' => 'getRegex',
        'replacement' => 'getReplacement',
        'separator' => 'getSeparator',
        'sourceLabels' => 'getSourceLabels',
        'targetLabel' => 'getTargetLabel',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['modulus'] = isset($data['modulus']) ? $data['modulus'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['replacement'] = isset($data['replacement']) ? $data['replacement'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['sourceLabels'] = isset($data['sourceLabels']) ? $data['sourceLabels'] : null;
        $this->container['targetLabel'] = isset($data['targetLabel']) ? $data['targetLabel'] : null;
    }

    /**
     * Gets action
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     * @param string $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }


    /**
     * Gets modulus
     * @return int
     */
    public function getModulus()
    {
        return $this->container['modulus'];
    }

    /**
     * Sets modulus
     * @param int $modulus
     * @return $this
     */
    public function setModulus($modulus)
    {
        $this->container['modulus'] = $modulus;

        return $this;
    }


    /**
     * Gets regex
     * @return string
     */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
     * Sets regex
     * @param string $regex
     * @return $this
     */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;

        return $this;
    }


    /**
     * Gets replacement
     * @return string
     */
    public function getReplacement()
    {
        return $this->container['replacement'];
    }

    /**
     * Sets replacement
     * @param string $replacement
     * @return $this
     */
    public function setReplacement($replacement)
    {
        $this->container['replacement'] = $replacement;

        return $this;
    }


    /**
     * Gets separator
     * @return string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
     * Sets separator
     * @param string $separator
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

        return $this;
    }


    /**
     * Gets sourceLabels
     * @return string[]
     */
    public function getSourceLabels()
    {
        return $this->container['sourceLabels'];
    }

    /**
     * Sets sourceLabels
     * @param string[] $sourceLabels
     * @return $this
     */
    public function setSourceLabels($sourceLabels)
    {
        $this->container['sourceLabels'] = $sourceLabels;

        return $this;
    }


    /**
     * Gets targetLabel
     * @return string
     */
    public function getTargetLabel()
    {
        return $this->container['targetLabel'];
    }

    /**
     * Sets targetLabel
     * @param string $targetLabel
     * @return $this
     */
    public function setTargetLabel($targetLabel)
    {
        $this->container['targetLabel'] = $targetLabel;

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

