<?php

/**
 * EphemeralContainerModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class EphemeralContainerModel implements ArrayAccess
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
        'command',
        'env',
        'envFrom',
        'image',
        'imagePullPolicy',
        'lifecycle',
        'livenessProbe',
        'name',
        'ports',
        'readinessProbe',
        'resizePolicy',
        'resources',
        'securityContext',
        'startupProbe',
        'stdin',
        'stdinOnce',
        'targetContainerName',
        'terminationMessagePath',
        'terminationMessagePolicy',
        'tty',
        'volumeDevices',
        'volumeMounts',
        'workingDir',
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
        'command',
        'env',
        'envFrom',
        'image',
        'imagePullPolicy',
        'lifecycle',
        'livenessProbe',
        'name',
        'ports',
        'readinessProbe',
        'resizePolicy',
        'resources',
        'securityContext',
        'startupProbe',
        'stdin',
        'stdinOnce',
        'targetContainerName',
        'terminationMessagePath',
        'terminationMessagePolicy',
        'tty',
        'volumeDevices',
        'volumeMounts',
        'workingDir',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'args' => 'string[]',
        'command' => 'string[]',
        'env' => '\Rancher\Model\EnvVarModel[]',
        'envFrom' => '\Rancher\Model\EnvFromSourceModel[]',
        'image' => 'string',
        'imagePullPolicy' => 'string',
        'lifecycle' => '\Rancher\Model\LifecycleModel',
        'livenessProbe' => '\Rancher\Model\ProbeModel',
        'name' => 'string',
        'ports' => '\Rancher\Model\ContainerPortModel[]',
        'readinessProbe' => '\Rancher\Model\ProbeModel',
        'resizePolicy' => '\Rancher\Model\ContainerResizePolicyModel[]',
        'resources' => '\Rancher\Model\ResourceRequirementsModel',
        'securityContext' => '\Rancher\Model\SecurityContextModel',
        'startupProbe' => '\Rancher\Model\ProbeModel',
        'stdin' => 'boolean',
        'stdinOnce' => 'boolean',
        'targetContainerName' => 'string',
        'terminationMessagePath' => 'string',
        'terminationMessagePolicy' => 'string',
        'tty' => 'boolean',
        'volumeDevices' => '\Rancher\Model\VolumeDeviceModel[]',
        'volumeMounts' => '\Rancher\Model\VolumeMountModel[]',
        'workingDir' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'args' => 'setArgs',
        'command' => 'setCommand',
        'env' => 'setEnv',
        'envFrom' => 'setEnvFrom',
        'image' => 'setImage',
        'imagePullPolicy' => 'setImagePullPolicy',
        'lifecycle' => 'setLifecycle',
        'livenessProbe' => 'setLivenessProbe',
        'name' => 'setName',
        'ports' => 'setPorts',
        'readinessProbe' => 'setReadinessProbe',
        'resizePolicy' => 'setResizePolicy',
        'resources' => 'setResources',
        'securityContext' => 'setSecurityContext',
        'startupProbe' => 'setStartupProbe',
        'stdin' => 'setStdin',
        'stdinOnce' => 'setStdinOnce',
        'targetContainerName' => 'setTargetContainerName',
        'terminationMessagePath' => 'setTerminationMessagePath',
        'terminationMessagePolicy' => 'setTerminationMessagePolicy',
        'tty' => 'setTty',
        'volumeDevices' => 'setVolumeDevices',
        'volumeMounts' => 'setVolumeMounts',
        'workingDir' => 'setWorkingDir',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'args' => 'getArgs',
        'command' => 'getCommand',
        'env' => 'getEnv',
        'envFrom' => 'getEnvFrom',
        'image' => 'getImage',
        'imagePullPolicy' => 'getImagePullPolicy',
        'lifecycle' => 'getLifecycle',
        'livenessProbe' => 'getLivenessProbe',
        'name' => 'getName',
        'ports' => 'getPorts',
        'readinessProbe' => 'getReadinessProbe',
        'resizePolicy' => 'getResizePolicy',
        'resources' => 'getResources',
        'securityContext' => 'getSecurityContext',
        'startupProbe' => 'getStartupProbe',
        'stdin' => 'getStdin',
        'stdinOnce' => 'getStdinOnce',
        'targetContainerName' => 'getTargetContainerName',
        'terminationMessagePath' => 'getTerminationMessagePath',
        'terminationMessagePolicy' => 'getTerminationMessagePolicy',
        'tty' => 'getTty',
        'volumeDevices' => 'getVolumeDevices',
        'volumeMounts' => 'getVolumeMounts',
        'workingDir' => 'getWorkingDir',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['envFrom'] = isset($data['envFrom']) ? $data['envFrom'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imagePullPolicy'] = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        $this->container['lifecycle'] = isset($data['lifecycle']) ? $data['lifecycle'] : null;
        $this->container['livenessProbe'] = isset($data['livenessProbe']) ? $data['livenessProbe'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['readinessProbe'] = isset($data['readinessProbe']) ? $data['readinessProbe'] : null;
        $this->container['resizePolicy'] = isset($data['resizePolicy']) ? $data['resizePolicy'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['securityContext'] = isset($data['securityContext']) ? $data['securityContext'] : null;
        $this->container['startupProbe'] = isset($data['startupProbe']) ? $data['startupProbe'] : null;
        $this->container['stdin'] = isset($data['stdin']) ? $data['stdin'] : null;
        $this->container['stdinOnce'] = isset($data['stdinOnce']) ? $data['stdinOnce'] : null;
        $this->container['targetContainerName'] = isset($data['targetContainerName']) ? $data['targetContainerName'] : null;
        $this->container['terminationMessagePath'] = isset($data['terminationMessagePath']) ? $data['terminationMessagePath'] : null;
        $this->container['terminationMessagePolicy'] = isset($data['terminationMessagePolicy']) ? $data['terminationMessagePolicy'] : null;
        $this->container['tty'] = isset($data['tty']) ? $data['tty'] : null;
        $this->container['volumeDevices'] = isset($data['volumeDevices']) ? $data['volumeDevices'] : null;
        $this->container['volumeMounts'] = isset($data['volumeMounts']) ? $data['volumeMounts'] : null;
        $this->container['workingDir'] = isset($data['workingDir']) ? $data['workingDir'] : null;
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
     * @return \Rancher\Model\EnvVarModel[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     * @param \Rancher\Model\EnvVarModel[] $env
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }


    /**
     * Gets envFrom
     * @return \Rancher\Model\EnvFromSourceModel[]
     */
    public function getEnvFrom()
    {
        return $this->container['envFrom'];
    }

    /**
     * Sets envFrom
     * @param \Rancher\Model\EnvFromSourceModel[] $envFrom
     * @return $this
     */
    public function setEnvFrom($envFrom)
    {
        $this->container['envFrom'] = $envFrom;

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
     * Gets imagePullPolicy
     * @return string
     */
    public function getImagePullPolicy()
    {
        return $this->container['imagePullPolicy'];
    }

    /**
     * Sets imagePullPolicy
     * @param string $imagePullPolicy
     * @return $this
     */
    public function setImagePullPolicy($imagePullPolicy)
    {
        $this->container['imagePullPolicy'] = $imagePullPolicy;

        return $this;
    }


    /**
     * Gets lifecycle
     * @return \Rancher\Model\LifecycleModel
     */
    public function getLifecycle()
    {
        return $this->container['lifecycle'];
    }

    /**
     * Sets lifecycle
     * @param \Rancher\Model\LifecycleModel $lifecycle
     * @return $this
     */
    public function setLifecycle($lifecycle)
    {
        $this->container['lifecycle'] = $lifecycle;

        return $this;
    }


    /**
     * Gets livenessProbe
     * @return \Rancher\Model\ProbeModel
     */
    public function getLivenessProbe()
    {
        return $this->container['livenessProbe'];
    }

    /**
     * Sets livenessProbe
     * @param \Rancher\Model\ProbeModel $livenessProbe
     * @return $this
     */
    public function setLivenessProbe($livenessProbe)
    {
        $this->container['livenessProbe'] = $livenessProbe;

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
     * Gets ports
     * @return \Rancher\Model\ContainerPortModel[]
     */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
     * Sets ports
     * @param \Rancher\Model\ContainerPortModel[] $ports
     * @return $this
     */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;

        return $this;
    }


    /**
     * Gets readinessProbe
     * @return \Rancher\Model\ProbeModel
     */
    public function getReadinessProbe()
    {
        return $this->container['readinessProbe'];
    }

    /**
     * Sets readinessProbe
     * @param \Rancher\Model\ProbeModel $readinessProbe
     * @return $this
     */
    public function setReadinessProbe($readinessProbe)
    {
        $this->container['readinessProbe'] = $readinessProbe;

        return $this;
    }


    /**
     * Gets resizePolicy
     * @return \Rancher\Model\ContainerResizePolicyModel[]
     */
    public function getResizePolicy()
    {
        return $this->container['resizePolicy'];
    }

    /**
     * Sets resizePolicy
     * @param \Rancher\Model\ContainerResizePolicyModel[] $resizePolicy
     * @return $this
     */
    public function setResizePolicy($resizePolicy)
    {
        $this->container['resizePolicy'] = $resizePolicy;

        return $this;
    }


    /**
     * Gets resources
     * @return \Rancher\Model\ResourceRequirementsModel
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \Rancher\Model\ResourceRequirementsModel $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }


    /**
     * Gets securityContext
     * @return \Rancher\Model\SecurityContextModel
     */
    public function getSecurityContext()
    {
        return $this->container['securityContext'];
    }

    /**
     * Sets securityContext
     * @param \Rancher\Model\SecurityContextModel $securityContext
     * @return $this
     */
    public function setSecurityContext($securityContext)
    {
        $this->container['securityContext'] = $securityContext;

        return $this;
    }


    /**
     * Gets startupProbe
     * @return \Rancher\Model\ProbeModel
     */
    public function getStartupProbe()
    {
        return $this->container['startupProbe'];
    }

    /**
     * Sets startupProbe
     * @param \Rancher\Model\ProbeModel $startupProbe
     * @return $this
     */
    public function setStartupProbe($startupProbe)
    {
        $this->container['startupProbe'] = $startupProbe;

        return $this;
    }


    /**
     * Gets stdin
     * @return boolean
     */
    public function getStdin()
    {
        return $this->container['stdin'];
    }

    /**
     * Sets stdin
     * @param boolean $stdin
     * @return $this
     */
    public function setStdin($stdin)
    {
        $this->container['stdin'] = $stdin;

        return $this;
    }


    /**
     * Gets stdinOnce
     * @return boolean
     */
    public function getStdinOnce()
    {
        return $this->container['stdinOnce'];
    }

    /**
     * Sets stdinOnce
     * @param boolean $stdinOnce
     * @return $this
     */
    public function setStdinOnce($stdinOnce)
    {
        $this->container['stdinOnce'] = $stdinOnce;

        return $this;
    }


    /**
     * Gets targetContainerName
     * @return string
     */
    public function getTargetContainerName()
    {
        return $this->container['targetContainerName'];
    }

    /**
     * Sets targetContainerName
     * @param string $targetContainerName
     * @return $this
     */
    public function setTargetContainerName($targetContainerName)
    {
        $this->container['targetContainerName'] = $targetContainerName;

        return $this;
    }


    /**
     * Gets terminationMessagePath
     * @return string
     */
    public function getTerminationMessagePath()
    {
        return $this->container['terminationMessagePath'];
    }

    /**
     * Sets terminationMessagePath
     * @param string $terminationMessagePath
     * @return $this
     */
    public function setTerminationMessagePath($terminationMessagePath)
    {
        $this->container['terminationMessagePath'] = $terminationMessagePath;

        return $this;
    }


    /**
     * Gets terminationMessagePolicy
     * @return string
     */
    public function getTerminationMessagePolicy()
    {
        return $this->container['terminationMessagePolicy'];
    }

    /**
     * Sets terminationMessagePolicy
     * @param string $terminationMessagePolicy
     * @return $this
     */
    public function setTerminationMessagePolicy($terminationMessagePolicy)
    {
        $this->container['terminationMessagePolicy'] = $terminationMessagePolicy;

        return $this;
    }


    /**
     * Gets tty
     * @return boolean
     */
    public function getTty()
    {
        return $this->container['tty'];
    }

    /**
     * Sets tty
     * @param boolean $tty
     * @return $this
     */
    public function setTty($tty)
    {
        $this->container['tty'] = $tty;

        return $this;
    }


    /**
     * Gets volumeDevices
     * @return \Rancher\Model\VolumeDeviceModel[]
     */
    public function getVolumeDevices()
    {
        return $this->container['volumeDevices'];
    }

    /**
     * Sets volumeDevices
     * @param \Rancher\Model\VolumeDeviceModel[] $volumeDevices
     * @return $this
     */
    public function setVolumeDevices($volumeDevices)
    {
        $this->container['volumeDevices'] = $volumeDevices;

        return $this;
    }


    /**
     * Gets volumeMounts
     * @return \Rancher\Model\VolumeMountModel[]
     */
    public function getVolumeMounts()
    {
        return $this->container['volumeMounts'];
    }

    /**
     * Sets volumeMounts
     * @param \Rancher\Model\VolumeMountModel[] $volumeMounts
     * @return $this
     */
    public function setVolumeMounts($volumeMounts)
    {
        $this->container['volumeMounts'] = $volumeMounts;

        return $this;
    }


    /**
     * Gets workingDir
     * @return string
     */
    public function getWorkingDir()
    {
        return $this->container['workingDir'];
    }

    /**
     * Sets workingDir
     * @param string $workingDir
     * @return $this
     */
    public function setWorkingDir($workingDir)
    {
        $this->container['workingDir'] = $workingDir;

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

