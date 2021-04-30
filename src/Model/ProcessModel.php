<?php

/**
 * ProcessModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ProcessModel implements ArrayAccess
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
        'args',
        'binds',
        'command',
        'env',
        'healthCheck',
        'image',
        'imageRegistryAuthConfig',
        'labels',
        'name',
        'networkMode',
        'pidMode',
        'privileged',
        'publish',
        'restartPolicy',
        'user',
        'volumesFrom',
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
        'args',
        'binds',
        'command',
        'env',
        'healthCheck',
        'image',
        'imageRegistryAuthConfig',
        'labels',
        'name',
        'networkMode',
        'pidMode',
        'privileged',
        'publish',
        'restartPolicy',
        'user',
        'volumesFrom',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'args' => 'string[]',
        'binds' => 'string[]',
        'command' => 'string[]',
        'env' => 'string[]',
        'healthCheck' => '\Rancher\Model\HealthCheckModel',
        'image' => 'string',
        'imageRegistryAuthConfig' => 'string',
        'labels' => 'map[string,string]',
        'name' => 'string',
        'networkMode' => 'string',
        'pidMode' => 'string',
        'privileged' => 'boolean',
        'publish' => 'string[]',
        'restartPolicy' => 'string',
        'user' => 'string',
        'volumesFrom' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'args' => 'setArgs',
        'binds' => 'setBinds',
        'command' => 'setCommand',
        'env' => 'setEnv',
        'healthCheck' => 'setHealthCheck',
        'image' => 'setImage',
        'imageRegistryAuthConfig' => 'setImageRegistryAuthConfig',
        'labels' => 'setLabels',
        'name' => 'setName',
        'networkMode' => 'setNetworkMode',
        'pidMode' => 'setPidMode',
        'privileged' => 'setPrivileged',
        'publish' => 'setPublish',
        'restartPolicy' => 'setRestartPolicy',
        'user' => 'setUser',
        'volumesFrom' => 'setVolumesFrom',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'args' => 'getArgs',
        'binds' => 'getBinds',
        'command' => 'getCommand',
        'env' => 'getEnv',
        'healthCheck' => 'getHealthCheck',
        'image' => 'getImage',
        'imageRegistryAuthConfig' => 'getImageRegistryAuthConfig',
        'labels' => 'getLabels',
        'name' => 'getName',
        'networkMode' => 'getNetworkMode',
        'pidMode' => 'getPidMode',
        'privileged' => 'getPrivileged',
        'publish' => 'getPublish',
        'restartPolicy' => 'getRestartPolicy',
        'user' => 'getUser',
        'volumesFrom' => 'getVolumesFrom',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['binds'] = isset($data['binds']) ? $data['binds'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['healthCheck'] = isset($data['healthCheck']) ? $data['healthCheck'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imageRegistryAuthConfig'] = isset($data['imageRegistryAuthConfig']) ? $data['imageRegistryAuthConfig'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['networkMode'] = isset($data['networkMode']) ? $data['networkMode'] : null;
        $this->container['pidMode'] = isset($data['pidMode']) ? $data['pidMode'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['publish'] = isset($data['publish']) ? $data['publish'] : null;
        $this->container['restartPolicy'] = isset($data['restartPolicy']) ? $data['restartPolicy'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['volumesFrom'] = isset($data['volumesFrom']) ? $data['volumesFrom'] : null;
    }

    /**
     * Gets args
     * @return string[]
     */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
     * Sets args
     * @param string[] $args
     * @return $this
     */
    public function setArgs($args)
    {
        $this->container['args'] = $args;

        return $this;
    }


    /**
     * Gets binds
     * @return string[]
     */
    public function getBinds()
    {
        return $this->container['binds'];
    }

    /**
     * Sets binds
     * @param string[] $binds
     * @return $this
     */
    public function setBinds($binds)
    {
        $this->container['binds'] = $binds;

        return $this;
    }


    /**
     * Gets command
     * @return string[]
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     * @param string[] $command
     * @return $this
     */
    public function setCommand($command)
    {
        $this->container['command'] = $command;

        return $this;
    }


    /**
     * Gets env
     * @return string[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     * @param string[] $env
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }


    /**
     * Gets healthCheck
     * @return \Rancher\Model\HealthCheckModel
     */
    public function getHealthCheck()
    {
        return $this->container['healthCheck'];
    }

    /**
     * Sets healthCheck
     * @param \Rancher\Model\HealthCheckModel $healthCheck
     * @return $this
     */
    public function setHealthCheck($healthCheck)
    {
        $this->container['healthCheck'] = $healthCheck;

        return $this;
    }


    /**
     * Gets image
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     * @param string $image
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }


    /**
     * Gets imageRegistryAuthConfig
     * @return string
     */
    public function getImageRegistryAuthConfig()
    {
        return $this->container['imageRegistryAuthConfig'];
    }

    /**
     * Sets imageRegistryAuthConfig
     * @param string $imageRegistryAuthConfig
     * @return $this
     */
    public function setImageRegistryAuthConfig($imageRegistryAuthConfig)
    {
        $this->container['imageRegistryAuthConfig'] = $imageRegistryAuthConfig;

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
     * Gets networkMode
     * @return string
     */
    public function getNetworkMode()
    {
        return $this->container['networkMode'];
    }

    /**
     * Sets networkMode
     * @param string $networkMode
     * @return $this
     */
    public function setNetworkMode($networkMode)
    {
        $this->container['networkMode'] = $networkMode;

        return $this;
    }


    /**
     * Gets pidMode
     * @return string
     */
    public function getPidMode()
    {
        return $this->container['pidMode'];
    }

    /**
     * Sets pidMode
     * @param string $pidMode
     * @return $this
     */
    public function setPidMode($pidMode)
    {
        $this->container['pidMode'] = $pidMode;

        return $this;
    }


    /**
     * Gets privileged
     * @return boolean
     */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
     * Sets privileged
     * @param boolean $privileged
     * @return $this
     */
    public function setPrivileged($privileged)
    {
        $this->container['privileged'] = $privileged;

        return $this;
    }


    /**
     * Gets publish
     * @return string[]
     */
    public function getPublish()
    {
        return $this->container['publish'];
    }

    /**
     * Sets publish
     * @param string[] $publish
     * @return $this
     */
    public function setPublish($publish)
    {
        $this->container['publish'] = $publish;

        return $this;
    }


    /**
     * Gets restartPolicy
     * @return string
     */
    public function getRestartPolicy()
    {
        return $this->container['restartPolicy'];
    }

    /**
     * Sets restartPolicy
     * @param string $restartPolicy
     * @return $this
     */
    public function setRestartPolicy($restartPolicy)
    {
        $this->container['restartPolicy'] = $restartPolicy;

        return $this;
    }


    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }


    /**
     * Gets volumesFrom
     * @return string[]
     */
    public function getVolumesFrom()
    {
        return $this->container['volumesFrom'];
    }

    /**
     * Sets volumesFrom
     * @param string[] $volumesFrom
     * @return $this
     */
    public function setVolumesFrom($volumesFrom)
    {
        $this->container['volumesFrom'] = $volumesFrom;

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

