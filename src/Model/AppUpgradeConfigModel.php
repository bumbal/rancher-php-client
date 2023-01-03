<?php

/**
 * AppUpgradeConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AppUpgradeConfigModel implements ArrayAccess
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
        'externalId',
        'files',
        'forceUpgrade',
        'valuesYaml',
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
        'externalId',
        'files',
        'forceUpgrade',
        'valuesYaml',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'answers' => 'map[string,string]',
        'externalId' => 'string',
        'files' => 'map[string,string]',
        'forceUpgrade' => 'boolean',
        'valuesYaml' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'answers' => 'setAnswers',
        'externalId' => 'setExternalId',
        'files' => 'setFiles',
        'forceUpgrade' => 'setForceUpgrade',
        'valuesYaml' => 'setValuesYaml',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'answers' => 'getAnswers',
        'externalId' => 'getExternalId',
        'files' => 'getFiles',
        'forceUpgrade' => 'getForceUpgrade',
        'valuesYaml' => 'getValuesYaml',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['forceUpgrade'] = isset($data['forceUpgrade']) ? $data['forceUpgrade'] : null;
        $this->container['valuesYaml'] = isset($data['valuesYaml']) ? $data['valuesYaml'] : null;
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
     * Gets externalId
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     * @param string $externalId
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }


    /**
     * Gets files
     * @return string[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param string[] $files
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }


    /**
     * Gets forceUpgrade
     * @return boolean
     */
    public function getForceUpgrade()
    {
        return $this->container['forceUpgrade'];
    }

    /**
     * Sets forceUpgrade
     * @param boolean $forceUpgrade
     * @return $this
     */
    public function setForceUpgrade($forceUpgrade)
    {
        $this->container['forceUpgrade'] = $forceUpgrade;

        return $this;
    }


    /**
     * Gets valuesYaml
     * @return string
     */
    public function getValuesYaml()
    {
        return $this->container['valuesYaml'];
    }

    /**
     * Sets valuesYaml
     * @param string $valuesYaml
     * @return $this
     */
    public function setValuesYaml($valuesYaml)
    {
        $this->container['valuesYaml'] = $valuesYaml;

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

