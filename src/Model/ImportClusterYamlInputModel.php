<?php

/**
 * ImportClusterYamlInputModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ImportClusterYamlInputModel implements ArrayAccess
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
        'defaultNamespace',
        'namespace',
        'projectId',
        'yaml',
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
        'defaultNamespace',
        'namespace',
        'projectId',
        'yaml',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultNamespace' => 'string',
        'namespace' => 'string',
        'projectId' => 'string',
        'yaml' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultNamespace' => 'setDefaultNamespace',
        'namespace' => 'setNamespace',
        'projectId' => 'setProjectId',
        'yaml' => 'setYaml',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultNamespace' => 'getDefaultNamespace',
        'namespace' => 'getNamespace',
        'projectId' => 'getProjectId',
        'yaml' => 'getYaml',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultNamespace'] = isset($data['defaultNamespace']) ? $data['defaultNamespace'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['yaml'] = isset($data['yaml']) ? $data['yaml'] : null;
    }

    /**
     * Gets defaultNamespace
     * @return string
     */
    public function getDefaultNamespace()
    {
        return $this->container['defaultNamespace'];
    }

    /**
     * Sets defaultNamespace
     * @param string $defaultNamespace
     * @return $this
     */
    public function setDefaultNamespace($defaultNamespace)
    {
        $this->container['defaultNamespace'] = $defaultNamespace;

        return $this;
    }


    /**
     * Gets namespace
     * @return string
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }


    /**
     * Gets yaml
     * @return string
     */
    public function getYaml()
    {
        return $this->container['yaml'];
    }

    /**
     * Sets yaml
     * @param string $yaml
     * @return $this
     */
    public function setYaml($yaml)
    {
        $this->container['yaml'] = $yaml;

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

