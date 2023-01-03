<?php

/**
 * ContainerModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class ContainerModel implements ArrayAccess
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
        'allowPrivilegeEscalation',
        'capAdd',
        'capDrop',
        'command',
        'entrypoint',
        'environment',
        'environmentFrom',
        'exitCode',
        'image',
        'imagePullPolicy',
        'initContainer',
        'livenessProbe',
        'name',
        'ports',
        'postStart',
        'preStop',
        'privileged',
        'procMount',
        'readOnly',
        'readinessProbe',
        'resources',
        'restartCount',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'startupProbe',
        'state',
        'stdin',
        'stdinOnce',
        'terminationMessagePath',
        'terminationMessagePolicy',
        'transitioning',
        'transitioningMessage',
        'tty',
        'uid',
        'volumeDevices',
        'volumeMounts',
        'windowsOptions',
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
        'allowPrivilegeEscalation',
        'capAdd',
        'capDrop',
        'command',
        'entrypoint',
        'environment',
        'environmentFrom',
        'exitCode',
        'image',
        'imagePullPolicy',
        'initContainer',
        'livenessProbe',
        'name',
        'ports',
        'postStart',
        'preStop',
        'privileged',
        'procMount',
        'readOnly',
        'readinessProbe',
        'resources',
        'restartCount',
        'runAsGroup',
        'runAsNonRoot',
        'seccompProfile',
        'startupProbe',
        'state',
        'stdin',
        'stdinOnce',
        'terminationMessagePath',
        'terminationMessagePolicy',
        'transitioning',
        'transitioningMessage',
        'tty',
        'uid',
        'volumeDevices',
        'volumeMounts',
        'windowsOptions',
        'workingDir',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'allowPrivilegeEscalation' => 'boolean',
        'capAdd' => 'string[]',
        'capDrop' => 'string[]',
        'command' => 'string[]',
        'entrypoint' => 'string[]',
        'environment' => 'map[string,string]',
        'environmentFrom' => '\Rancher\Model\EnvironmentFromModel[]',
        'exitCode' => 'int',
        'image' => 'string',
        'imagePullPolicy' => 'string',
        'initContainer' => 'boolean',
        'livenessProbe' => '\Rancher\Model\ProbeModel',
        'name' => 'string',
        'ports' => '\Rancher\Model\ContainerPortModel[]',
        'postStart' => '\Rancher\Model\HandlerModel',
        'preStop' => '\Rancher\Model\HandlerModel',
        'privileged' => 'boolean',
        'procMount' => 'string',
        'readOnly' => 'boolean',
        'readinessProbe' => '\Rancher\Model\ProbeModel',
        'resources' => '\Rancher\Model\ResourceRequirementsModel',
        'restartCount' => 'int',
        'runAsGroup' => 'int',
        'runAsNonRoot' => 'boolean',
        'seccompProfile' => '\Rancher\Model\SeccompProfileModel',
        'startupProbe' => '\Rancher\Model\ProbeModel',
        'state' => 'string',
        'stdin' => 'boolean',
        'stdinOnce' => 'boolean',
        'terminationMessagePath' => 'string',
        'terminationMessagePolicy' => 'string',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'tty' => 'boolean',
        'uid' => 'int',
        'volumeDevices' => '\Rancher\Model\VolumeDeviceModel[]',
        'volumeMounts' => '\Rancher\Model\VolumeMountModel[]',
        'windowsOptions' => '\Rancher\Model\WindowsSecurityContextOptionsModel',
        'workingDir' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'allowPrivilegeEscalation' => 'setAllowPrivilegeEscalation',
        'capAdd' => 'setCapAdd',
        'capDrop' => 'setCapDrop',
        'command' => 'setCommand',
        'entrypoint' => 'setEntrypoint',
        'environment' => 'setEnvironment',
        'environmentFrom' => 'setEnvironmentFrom',
        'exitCode' => 'setExitCode',
        'image' => 'setImage',
        'imagePullPolicy' => 'setImagePullPolicy',
        'initContainer' => 'setInitContainer',
        'livenessProbe' => 'setLivenessProbe',
        'name' => 'setName',
        'ports' => 'setPorts',
        'postStart' => 'setPostStart',
        'preStop' => 'setPreStop',
        'privileged' => 'setPrivileged',
        'procMount' => 'setProcMount',
        'readOnly' => 'setReadOnly',
        'readinessProbe' => 'setReadinessProbe',
        'resources' => 'setResources',
        'restartCount' => 'setRestartCount',
        'runAsGroup' => 'setRunAsGroup',
        'runAsNonRoot' => 'setRunAsNonRoot',
        'seccompProfile' => 'setSeccompProfile',
        'startupProbe' => 'setStartupProbe',
        'state' => 'setState',
        'stdin' => 'setStdin',
        'stdinOnce' => 'setStdinOnce',
        'terminationMessagePath' => 'setTerminationMessagePath',
        'terminationMessagePolicy' => 'setTerminationMessagePolicy',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'tty' => 'setTty',
        'uid' => 'setUid',
        'volumeDevices' => 'setVolumeDevices',
        'volumeMounts' => 'setVolumeMounts',
        'windowsOptions' => 'setWindowsOptions',
        'workingDir' => 'setWorkingDir',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'allowPrivilegeEscalation' => 'getAllowPrivilegeEscalation',
        'capAdd' => 'getCapAdd',
        'capDrop' => 'getCapDrop',
        'command' => 'getCommand',
        'entrypoint' => 'getEntrypoint',
        'environment' => 'getEnvironment',
        'environmentFrom' => 'getEnvironmentFrom',
        'exitCode' => 'getExitCode',
        'image' => 'getImage',
        'imagePullPolicy' => 'getImagePullPolicy',
        'initContainer' => 'getInitContainer',
        'livenessProbe' => 'getLivenessProbe',
        'name' => 'getName',
        'ports' => 'getPorts',
        'postStart' => 'getPostStart',
        'preStop' => 'getPreStop',
        'privileged' => 'getPrivileged',
        'procMount' => 'getProcMount',
        'readOnly' => 'getReadOnly',
        'readinessProbe' => 'getReadinessProbe',
        'resources' => 'getResources',
        'restartCount' => 'getRestartCount',
        'runAsGroup' => 'getRunAsGroup',
        'runAsNonRoot' => 'getRunAsNonRoot',
        'seccompProfile' => 'getSeccompProfile',
        'startupProbe' => 'getStartupProbe',
        'state' => 'getState',
        'stdin' => 'getStdin',
        'stdinOnce' => 'getStdinOnce',
        'terminationMessagePath' => 'getTerminationMessagePath',
        'terminationMessagePolicy' => 'getTerminationMessagePolicy',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'tty' => 'getTty',
        'uid' => 'getUid',
        'volumeDevices' => 'getVolumeDevices',
        'volumeMounts' => 'getVolumeMounts',
        'windowsOptions' => 'getWindowsOptions',
        'workingDir' => 'getWorkingDir',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['allowPrivilegeEscalation'] = isset($data['allowPrivilegeEscalation']) ? $data['allowPrivilegeEscalation'] : null;
        $this->container['capAdd'] = isset($data['capAdd']) ? $data['capAdd'] : null;
        $this->container['capDrop'] = isset($data['capDrop']) ? $data['capDrop'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['environmentFrom'] = isset($data['environmentFrom']) ? $data['environmentFrom'] : null;
        $this->container['exitCode'] = isset($data['exitCode']) ? $data['exitCode'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imagePullPolicy'] = isset($data['imagePullPolicy']) ? $data['imagePullPolicy'] : null;
        $this->container['initContainer'] = isset($data['initContainer']) ? $data['initContainer'] : null;
        $this->container['livenessProbe'] = isset($data['livenessProbe']) ? $data['livenessProbe'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['postStart'] = isset($data['postStart']) ? $data['postStart'] : null;
        $this->container['preStop'] = isset($data['preStop']) ? $data['preStop'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['procMount'] = isset($data['procMount']) ? $data['procMount'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['readinessProbe'] = isset($data['readinessProbe']) ? $data['readinessProbe'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['restartCount'] = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->container['runAsGroup'] = isset($data['runAsGroup']) ? $data['runAsGroup'] : null;
        $this->container['runAsNonRoot'] = isset($data['runAsNonRoot']) ? $data['runAsNonRoot'] : null;
        $this->container['seccompProfile'] = isset($data['seccompProfile']) ? $data['seccompProfile'] : null;
        $this->container['startupProbe'] = isset($data['startupProbe']) ? $data['startupProbe'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stdin'] = isset($data['stdin']) ? $data['stdin'] : null;
        $this->container['stdinOnce'] = isset($data['stdinOnce']) ? $data['stdinOnce'] : null;
        $this->container['terminationMessagePath'] = isset($data['terminationMessagePath']) ? $data['terminationMessagePath'] : null;
        $this->container['terminationMessagePolicy'] = isset($data['terminationMessagePolicy']) ? $data['terminationMessagePolicy'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['tty'] = isset($data['tty']) ? $data['tty'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['volumeDevices'] = isset($data['volumeDevices']) ? $data['volumeDevices'] : null;
        $this->container['volumeMounts'] = isset($data['volumeMounts']) ? $data['volumeMounts'] : null;
        $this->container['windowsOptions'] = isset($data['windowsOptions']) ? $data['windowsOptions'] : null;
        $this->container['workingDir'] = isset($data['workingDir']) ? $data['workingDir'] : null;
    }

    /**
     * Gets allowPrivilegeEscalation
     * @return boolean
     */
    public function getAllowPrivilegeEscalation()
    {
        return $this->container['allowPrivilegeEscalation'];
    }

    /**
     * Sets allowPrivilegeEscalation
     * @param boolean $allowPrivilegeEscalation
     * @return $this
     */
    public function setAllowPrivilegeEscalation($allowPrivilegeEscalation)
    {
        $this->container['allowPrivilegeEscalation'] = $allowPrivilegeEscalation;

        return $this;
    }


    /**
     * Gets capAdd
     * @return string[]
     */
    public function getCapAdd()
    {
        return $this->container['capAdd'];
    }

    /**
     * Sets capAdd
     * @param string[] $capAdd
     * @return $this
     */
    public function setCapAdd($capAdd)
    {
        $this->container['capAdd'] = $capAdd;

        return $this;
    }


    /**
     * Gets capDrop
     * @return string[]
     */
    public function getCapDrop()
    {
        return $this->container['capDrop'];
    }

    /**
     * Sets capDrop
     * @param string[] $capDrop
     * @return $this
     */
    public function setCapDrop($capDrop)
    {
        $this->container['capDrop'] = $capDrop;

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
     * Gets entrypoint
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint
     * @param string[] $entrypoint
     * @return $this
     */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;

        return $this;
    }


    /**
     * Gets environment
     * @return string[]
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     * @param string[] $environment
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $this->container['environment'] = $environment;

        return $this;
    }


    /**
     * Gets environmentFrom
     * @return \Rancher\Model\EnvironmentFromModel[]
     */
    public function getEnvironmentFrom()
    {
        return $this->container['environmentFrom'];
    }

    /**
     * Sets environmentFrom
     * @param \Rancher\Model\EnvironmentFromModel[] $environmentFrom
     * @return $this
     */
    public function setEnvironmentFrom($environmentFrom)
    {
        $this->container['environmentFrom'] = $environmentFrom;

        return $this;
    }


    /**
     * Gets exitCode
     * @return int
     */
    public function getExitCode()
    {
        return $this->container['exitCode'];
    }

    /**
     * Sets exitCode
     * @param int $exitCode
     * @return $this
     */
    public function setExitCode($exitCode)
    {
        $this->container['exitCode'] = $exitCode;

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
     * Gets initContainer
     * @return boolean
     */
    public function getInitContainer()
    {
        return $this->container['initContainer'];
    }

    /**
     * Sets initContainer
     * @param boolean $initContainer
     * @return $this
     */
    public function setInitContainer($initContainer)
    {
        $this->container['initContainer'] = $initContainer;

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
     * Gets postStart
     * @return \Rancher\Model\HandlerModel
     */
    public function getPostStart()
    {
        return $this->container['postStart'];
    }

    /**
     * Sets postStart
     * @param \Rancher\Model\HandlerModel $postStart
     * @return $this
     */
    public function setPostStart($postStart)
    {
        $this->container['postStart'] = $postStart;

        return $this;
    }


    /**
     * Gets preStop
     * @return \Rancher\Model\HandlerModel
     */
    public function getPreStop()
    {
        return $this->container['preStop'];
    }

    /**
     * Sets preStop
     * @param \Rancher\Model\HandlerModel $preStop
     * @return $this
     */
    public function setPreStop($preStop)
    {
        $this->container['preStop'] = $preStop;

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
     * Gets procMount
     * @return string
     */
    public function getProcMount()
    {
        return $this->container['procMount'];
    }

    /**
     * Sets procMount
     * @param string $procMount
     * @return $this
     */
    public function setProcMount($procMount)
    {
        $this->container['procMount'] = $procMount;

        return $this;
    }


    /**
     * Gets readOnly
     * @return boolean
     */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
     * Sets readOnly
     * @param boolean $readOnly
     * @return $this
     */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;

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
     * Gets restartCount
     * @return int
     */
    public function getRestartCount()
    {
        return $this->container['restartCount'];
    }

    /**
     * Sets restartCount
     * @param int $restartCount
     * @return $this
     */
    public function setRestartCount($restartCount)
    {
        $this->container['restartCount'] = $restartCount;

        return $this;
    }


    /**
     * Gets runAsGroup
     * @return int
     */
    public function getRunAsGroup()
    {
        return $this->container['runAsGroup'];
    }

    /**
     * Sets runAsGroup
     * @param int $runAsGroup
     * @return $this
     */
    public function setRunAsGroup($runAsGroup)
    {
        $this->container['runAsGroup'] = $runAsGroup;

        return $this;
    }


    /**
     * Gets runAsNonRoot
     * @return boolean
     */
    public function getRunAsNonRoot()
    {
        return $this->container['runAsNonRoot'];
    }

    /**
     * Sets runAsNonRoot
     * @param boolean $runAsNonRoot
     * @return $this
     */
    public function setRunAsNonRoot($runAsNonRoot)
    {
        $this->container['runAsNonRoot'] = $runAsNonRoot;

        return $this;
    }


    /**
     * Gets seccompProfile
     * @return \Rancher\Model\SeccompProfileModel
     */
    public function getSeccompProfile()
    {
        return $this->container['seccompProfile'];
    }

    /**
     * Sets seccompProfile
     * @param \Rancher\Model\SeccompProfileModel $seccompProfile
     * @return $this
     */
    public function setSeccompProfile($seccompProfile)
    {
        $this->container['seccompProfile'] = $seccompProfile;

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
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

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
     * Gets uid
     * @return int
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     * @param int $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

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
     * Gets windowsOptions
     * @return \Rancher\Model\WindowsSecurityContextOptionsModel
     */
    public function getWindowsOptions()
    {
        return $this->container['windowsOptions'];
    }

    /**
     * Sets windowsOptions
     * @param \Rancher\Model\WindowsSecurityContextOptionsModel $windowsOptions
     * @return $this
     */
    public function setWindowsOptions($windowsOptions)
    {
        $this->container['windowsOptions'] = $windowsOptions;

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

