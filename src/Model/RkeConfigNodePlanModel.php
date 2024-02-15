<?php

/**
 * RkeConfigNodePlanModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RkeConfigNodePlanModel implements ArrayAccess
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
        'address',
        'annotations',
        'files',
        'labels',
        'portChecks',
        'processes',
        'taints',
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
        'address',
        'annotations',
        'files',
        'labels',
        'portChecks',
        'processes',
        'taints',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'address' => 'string',
        'annotations' => 'map[string,string]',
        'files' => '\Rancher\Model\FileModel[]',
        'labels' => 'map[string,string]',
        'portChecks' => '\Rancher\Model\PortCheckModel[]',
        'processes' => 'map[string,\Rancher\Model\ProcessModel]',
        'taints' => '\Rancher\Model\RkeTaintModel[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'address' => 'setAddress',
        'annotations' => 'setAnnotations',
        'files' => 'setFiles',
        'labels' => 'setLabels',
        'portChecks' => 'setPortChecks',
        'processes' => 'setProcesses',
        'taints' => 'setTaints',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'address' => 'getAddress',
        'annotations' => 'getAnnotations',
        'files' => 'getFiles',
        'labels' => 'getLabels',
        'portChecks' => 'getPortChecks',
        'processes' => 'getProcesses',
        'taints' => 'getTaints',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['portChecks'] = isset($data['portChecks']) ? $data['portChecks'] : null;
        $this->container['processes'] = isset($data['processes']) ? $data['processes'] : null;
        $this->container['taints'] = isset($data['taints']) ? $data['taints'] : null;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets files
     * @return \Rancher\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     * @param \Rancher\Model\FileModel[] $files
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }


    /**
     * Gets labels
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     * @param string[] $labels
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }


    /**
     * Gets portChecks
     * @return \Rancher\Model\PortCheckModel[]
     */
    public function getPortChecks()
    {
        return $this->container['portChecks'];
    }

    /**
     * Sets portChecks
     * @param \Rancher\Model\PortCheckModel[] $portChecks
     * @return $this
     */
    public function setPortChecks($portChecks)
    {
        $this->container['portChecks'] = $portChecks;

        return $this;
    }


    /**
     * Gets processes
     * @return \Rancher\Model\ProcessModel[]
     */
    public function getProcesses()
    {
        return $this->container['processes'];
    }

    /**
     * Sets processes
     * @param \Rancher\Model\ProcessModel[] $processes
     * @return $this
     */
    public function setProcesses($processes)
    {
        $this->container['processes'] = $processes;

        return $this;
    }


    /**
     * Gets taints
     * @return \Rancher\Model\RkeTaintModel[]
     */
    public function getTaints()
    {
        return $this->container['taints'];
    }

    /**
     * Sets taints
     * @param \Rancher\Model\RkeTaintModel[] $taints
     * @return $this
     */
    public function setTaints($taints)
    {
        $this->container['taints'] = $taints;

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

