<?php

namespace Rancher\Model;

use \ArrayAccess;

class DockerInfo implements ArrayAccess
{
    /**
     * Container with all data
     *
     * @var array
     */
    protected $container = [];

    protected static $typeMap = [
        'architecture' => 'string',
        'cgroupDriver' => 'string',
        'debug' => 'boolean',
        'dockerRootDir' => 'string',
        'driver' => 'string',
        'experimentalBuild' => 'boolean',
        'httpProxy' => 'string',
        'httpsProxy' => 'string',
        'id' => 'string',
        'indexServerAddress' => 'string',
        'kernelVersion' => 'string',
        'labels' => 'string[]',
        'loggingDriver' => 'string',
        'name' => 'string',
        'noProxy' => 'string',
        'operatingSystem' => 'string',
        'osType' => 'string',
        'serverVersion' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'architecture' => 'setArchitecture',
        'cgroupDriver' => 'setCgroupDriver',
        'debug' => 'setDebug',
        'dockerRootDir' => 'setDockerRootDir',
        'driver' => 'setDriver',
        'experimentalBuild' => 'setExperimentalBuild',
        'httpProxy' => 'setHttpProxy',
        'httpsProxy' => 'setHttpsProxy',
        'id' => 'setId',
        'indexServerAddress' => 'setIndexServerAddress',
        'kernelVersion' => 'setKernelVersion',
        'labels' => 'setLabels',
        'loggingDriver' => 'setLoggingDriver',
        'name' => 'setName',
        'noProxy' => 'setNoProxy',
        'operatingSystem' => 'setOperatingSystem',
        'osType' => 'setOsType',
        'serverVersion' => 'setServerVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'architecture' => 'getArchitecture',
        'cgroupDriver' => 'getCgroupDriver',
        'debug' => 'getDebug',
        'dockerRootDir' => 'getDockerRootDir',
        'driver' => 'getDriver',
        'experimentalBuild' => 'getExperimentalBuild',
        'httpProxy' => 'getHttpProxy',
        'httpsProxy' => 'getHttpsProxy',
        'id' => 'getId',
        'indexServerAddress' => 'getIndexServerAddress',
        'kernelVersion' => 'getKernelVersion',
        'labels' => 'getLabels',
        'loggingDriver' => 'getLoggingDriver',
        'name' => 'getName',
        'noProxy' => 'getNoProxy',
        'operatingSystem' => 'getOperatingSystem',
        'osType' => 'getOsType',
        'serverVersion' => 'getServerVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['cgroupDriver'] = isset($data['cgroupDriver']) ? $data['cgroupDriver'] : null;
        $this->container['debug'] = isset($data['debug']) ? $data['debug'] : null;
        $this->container['dockerRootDir'] = isset($data['dockerRootDir']) ? $data['dockerRootDir'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['experimentalBuild'] = isset($data['experimentalBuild']) ? $data['experimentalBuild'] : null;
        $this->container['httpProxy'] = isset($data['httpProxy']) ? $data['httpProxy'] : null;
        $this->container['httpsProxy'] = isset($data['httpsProxy']) ? $data['httpsProxy'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['indexServerAddress'] = isset($data['indexServerAddress']) ? $data['indexServerAddress'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['loggingDriver'] = isset($data['loggingDriver']) ? $data['loggingDriver'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['noProxy'] = isset($data['noProxy']) ? $data['noProxy'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['serverVersion'] = isset($data['serverVersion']) ? $data['serverVersion'] : null;
    }

    /**
     * Gets architecture
     * @return string
     */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
     * Sets architecture
     * @param string $architecture
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;

        return $this;
    }


    /**
     * Gets cgroupDriver
     * @return string
     */
    public function getCgroupDriver()
    {
        return $this->container['cgroupDriver'];
    }

    /**
     * Sets cgroupDriver
     * @param string $cgroupDriver
     * @return $this
     */
    public function setCgroupDriver($cgroupDriver)
    {
        $this->container['cgroupDriver'] = $cgroupDriver;

        return $this;
    }


    /**
     * Gets debug
     * @return boolean
     */
    public function getDebug()
    {
        return $this->container['debug'];
    }

    /**
     * Sets debug
     * @param boolean $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->container['debug'] = $debug;

        return $this;
    }


    /**
     * Gets dockerRootDir
     * @return string
     */
    public function getDockerRootDir()
    {
        return $this->container['dockerRootDir'];
    }

    /**
     * Sets dockerRootDir
     * @param string $dockerRootDir
     * @return $this
     */
    public function setDockerRootDir($dockerRootDir)
    {
        $this->container['dockerRootDir'] = $dockerRootDir;

        return $this;
    }


    /**
     * Gets driver
     * @return string
     */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
     * Sets driver
     * @param string $driver
     * @return $this
     */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;

        return $this;
    }


    /**
     * Gets experimentalBuild
     * @return boolean
     */
    public function getExperimentalBuild()
    {
        return $this->container['experimentalBuild'];
    }

    /**
     * Sets experimentalBuild
     * @param boolean $experimentalBuild
     * @return $this
     */
    public function setExperimentalBuild($experimentalBuild)
    {
        $this->container['experimentalBuild'] = $experimentalBuild;

        return $this;
    }


    /**
     * Gets httpProxy
     * @return string
     */
    public function getHttpProxy()
    {
        return $this->container['httpProxy'];
    }

    /**
     * Sets httpProxy
     * @param string $httpProxy
     * @return $this
     */
    public function setHttpProxy($httpProxy)
    {
        $this->container['httpProxy'] = $httpProxy;

        return $this;
    }


    /**
     * Gets httpsProxy
     * @return string
     */
    public function getHttpsProxy()
    {
        return $this->container['httpsProxy'];
    }

    /**
     * Sets httpsProxy
     * @param string $httpsProxy
     * @return $this
     */
    public function setHttpsProxy($httpsProxy)
    {
        $this->container['httpsProxy'] = $httpsProxy;

        return $this;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }


    /**
     * Gets indexServerAddress
     * @return string
     */
    public function getIndexServerAddress()
    {
        return $this->container['indexServerAddress'];
    }

    /**
     * Sets indexServerAddress
     * @param string $indexServerAddress
     * @return $this
     */
    public function setIndexServerAddress($indexServerAddress)
    {
        $this->container['indexServerAddress'] = $indexServerAddress;

        return $this;
    }


    /**
     * Gets kernelVersion
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
     * Sets kernelVersion
     * @param string $kernelVersion
     * @return $this
     */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;

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
     * Gets loggingDriver
     * @return string
     */
    public function getLoggingDriver()
    {
        return $this->container['loggingDriver'];
    }

    /**
     * Sets loggingDriver
     * @param string $loggingDriver
     * @return $this
     */
    public function setLoggingDriver($loggingDriver)
    {
        $this->container['loggingDriver'] = $loggingDriver;

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
     * Gets noProxy
     * @return string
     */
    public function getNoProxy()
    {
        return $this->container['noProxy'];
    }

    /**
     * Sets noProxy
     * @param string $noProxy
     * @return $this
     */
    public function setNoProxy($noProxy)
    {
        $this->container['noProxy'] = $noProxy;

        return $this;
    }


    /**
     * Gets operatingSystem
     * @return string
     */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
     * Sets operatingSystem
     * @param string $operatingSystem
     * @return $this
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;

        return $this;
    }


    /**
     * Gets osType
     * @return string
     */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
     * Sets osType
     * @param string $osType
     * @return $this
     */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;

        return $this;
    }


    /**
     * Gets serverVersion
     * @return string
     */
    public function getServerVersion()
    {
        return $this->container['serverVersion'];
    }

    /**
     * Sets serverVersion
     * @param string $serverVersion
     * @return $this
     */
    public function setServerVersion($serverVersion)
    {
        $this->container['serverVersion'] = $serverVersion;

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

