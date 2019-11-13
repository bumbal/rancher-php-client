<?php

/**
 * ApplyAppConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ApplyAppConfigModel implements ArrayAccess
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
        'answers',
        'catalogTemplate',
        'name',
        'targetNamespace',
        'version',
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
        'answers',
        'catalogTemplate',
        'name',
        'targetNamespace',
        'version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'answers' => 'map[string]',
        'catalogTemplate' => 'string',
        'name' => 'string',
        'targetNamespace' => 'string',
        'version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'answers' => 'setAnswers',
        'catalogTemplate' => 'setCatalogTemplate',
        'name' => 'setName',
        'targetNamespace' => 'setTargetNamespace',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'answers' => 'getAnswers',
        'catalogTemplate' => 'getCatalogTemplate',
        'name' => 'getName',
        'targetNamespace' => 'getTargetNamespace',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['catalogTemplate'] = isset($data['catalogTemplate']) ? $data['catalogTemplate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['targetNamespace'] = isset($data['targetNamespace']) ? $data['targetNamespace'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets answers
     * @return string[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param string[] $answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }


    /**
     * Gets catalogTemplate
     * @return string
     */
    public function getCatalogTemplate()
    {
        return $this->container['catalogTemplate'];
    }

    /**
     * Sets catalogTemplate
     * @param string $catalogTemplate
     * @return $this
     */
    public function setCatalogTemplate($catalogTemplate)
    {
        $this->container['catalogTemplate'] = $catalogTemplate;

        return $this;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }


    /**
     * Gets targetNamespace
     * @return string
     */
    public function getTargetNamespace()
    {
        return $this->container['targetNamespace'];
    }

    /**
     * Sets targetNamespace
     * @param string $targetNamespace
     * @return $this
     */
    public function setTargetNamespace($targetNamespace)
    {
        $this->container['targetNamespace'] = $targetNamespace;

        return $this;
    }


    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

