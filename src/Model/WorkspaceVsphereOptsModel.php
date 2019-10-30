<?php

/**
 * WorkspaceVsphereOptsModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class WorkspaceVsphereOptsModel implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'datacenter' => 'string',
        'default-datastore' => 'string',
        'folder' => 'string',
        'resourcepool-path' => 'string',
        'server' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'datacenter' => 'setDatacenter',
        'default-datastore' => 'setDefault-datastore',
        'folder' => 'setFolder',
        'resourcepool-path' => 'setResourcepool-path',
        'server' => 'setServer',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'datacenter' => 'getDatacenter',
        'default-datastore' => 'getDefault-datastore',
        'folder' => 'getFolder',
        'resourcepool-path' => 'getResourcepool-path',
        'server' => 'getServer',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['datacenter'] = isset($data['datacenter']) ? $data['datacenter'] : null;
        $this->container['default-datastore'] = isset($data['default-datastore']) ? $data['default-datastore'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['resourcepool-path'] = isset($data['resourcepool-path']) ? $data['resourcepool-path'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
    }

    /**
     * Gets datacenter
     * @return string
     */
    public function getDatacenter()
    {
        return $this->container['datacenter'];
    }

    /**
     * Sets datacenter
     * @param string $datacenter
     * @return $this
     */
    public function setDatacenter($datacenter)
    {
        $this->container['datacenter'] = $datacenter;

        return $this;
    }


    /**
     * Gets default-datastore
     * @return string
     */
    public function getDefault-datastore()
    {
        return $this->container['default-datastore'];
    }

    /**
     * Sets default-datastore
     * @param string $default-datastore
     * @return $this
     */
    public function setDefault-datastore($default-datastore)
    {
        $this->container['default-datastore'] = $default-datastore;

        return $this;
    }


    /**
     * Gets folder
     * @return string
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }


    /**
     * Gets resourcepool-path
     * @return string
     */
    public function getResourcepool-path()
    {
        return $this->container['resourcepool-path'];
    }

    /**
     * Sets resourcepool-path
     * @param string $resourcepool-path
     * @return $this
     */
    public function setResourcepool-path($resourcepool-path)
    {
        $this->container['resourcepool-path'] = $resourcepool-path;

        return $this;
    }


    /**
     * Gets server
     * @return string
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     * @param string $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->container['server'] = $server;

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

