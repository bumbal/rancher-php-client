<?php

/**
 * StepModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class StepModel implements ArrayAccess
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
        'applyAppConfig',
        'applyYamlConfig',
        'cpuLimit',
        'cpuRequest',
        'env',
        'envFrom',
        'memoryLimit',
        'memoryRequest',
        'privileged',
        'publishCatalogConfig',
        'publishImageConfig',
        'runScriptConfig',
        'sourceCodeConfig',
        'when',
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
        'applyAppConfig',
        'applyYamlConfig',
        'cpuLimit',
        'cpuRequest',
        'env',
        'envFrom',
        'memoryLimit',
        'memoryRequest',
        'privileged',
        'publishCatalogConfig',
        'publishImageConfig',
        'runScriptConfig',
        'sourceCodeConfig',
        'when',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'applyAppConfig' => '\Rancher\Model\ApplyAppConfigModel',
        'applyYamlConfig' => '\Rancher\Model\ApplyYamlConfigModel',
        'cpuLimit' => 'string',
        'cpuRequest' => 'string',
        'env' => 'map[string]',
        'envFrom' => '\Rancher\Model\EnvFromModel[]',
        'memoryLimit' => 'string',
        'memoryRequest' => 'string',
        'privileged' => 'boolean',
        'publishCatalogConfig' => '\Rancher\Model\PublishCatalogConfigModel',
        'publishImageConfig' => '\Rancher\Model\PublishImageConfigModel',
        'runScriptConfig' => '\Rancher\Model\RunScriptConfigModel',
        'sourceCodeConfig' => '\Rancher\Model\SourceCodeConfigModel',
        'when' => '\Rancher\Model\ConstraintsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'applyAppConfig' => 'setApplyAppConfig',
        'applyYamlConfig' => 'setApplyYamlConfig',
        'cpuLimit' => 'setCpuLimit',
        'cpuRequest' => 'setCpuRequest',
        'env' => 'setEnv',
        'envFrom' => 'setEnvFrom',
        'memoryLimit' => 'setMemoryLimit',
        'memoryRequest' => 'setMemoryRequest',
        'privileged' => 'setPrivileged',
        'publishCatalogConfig' => 'setPublishCatalogConfig',
        'publishImageConfig' => 'setPublishImageConfig',
        'runScriptConfig' => 'setRunScriptConfig',
        'sourceCodeConfig' => 'setSourceCodeConfig',
        'when' => 'setWhen',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'applyAppConfig' => 'getApplyAppConfig',
        'applyYamlConfig' => 'getApplyYamlConfig',
        'cpuLimit' => 'getCpuLimit',
        'cpuRequest' => 'getCpuRequest',
        'env' => 'getEnv',
        'envFrom' => 'getEnvFrom',
        'memoryLimit' => 'getMemoryLimit',
        'memoryRequest' => 'getMemoryRequest',
        'privileged' => 'getPrivileged',
        'publishCatalogConfig' => 'getPublishCatalogConfig',
        'publishImageConfig' => 'getPublishImageConfig',
        'runScriptConfig' => 'getRunScriptConfig',
        'sourceCodeConfig' => 'getSourceCodeConfig',
        'when' => 'getWhen',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['applyAppConfig'] = isset($data['applyAppConfig']) ? $data['applyAppConfig'] : null;
        $this->container['applyYamlConfig'] = isset($data['applyYamlConfig']) ? $data['applyYamlConfig'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['cpuRequest'] = isset($data['cpuRequest']) ? $data['cpuRequest'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['envFrom'] = isset($data['envFrom']) ? $data['envFrom'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['memoryRequest'] = isset($data['memoryRequest']) ? $data['memoryRequest'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : null;
        $this->container['publishCatalogConfig'] = isset($data['publishCatalogConfig']) ? $data['publishCatalogConfig'] : null;
        $this->container['publishImageConfig'] = isset($data['publishImageConfig']) ? $data['publishImageConfig'] : null;
        $this->container['runScriptConfig'] = isset($data['runScriptConfig']) ? $data['runScriptConfig'] : null;
        $this->container['sourceCodeConfig'] = isset($data['sourceCodeConfig']) ? $data['sourceCodeConfig'] : null;
        $this->container['when'] = isset($data['when']) ? $data['when'] : null;
    }

    /**
     * Gets applyAppConfig
     * @return \Rancher\Model\ApplyAppConfigModel
     */
    public function getApplyAppConfig()
    {
        return $this->container['applyAppConfig'];
    }

    /**
     * Sets applyAppConfig
     * @param \Rancher\Model\ApplyAppConfigModel $applyAppConfig
     * @return $this
     */
    public function setApplyAppConfig($applyAppConfig)
    {
        $this->container['applyAppConfig'] = $applyAppConfig;

        return $this;
    }


    /**
     * Gets applyYamlConfig
     * @return \Rancher\Model\ApplyYamlConfigModel
     */
    public function getApplyYamlConfig()
    {
        return $this->container['applyYamlConfig'];
    }

    /**
     * Sets applyYamlConfig
     * @param \Rancher\Model\ApplyYamlConfigModel $applyYamlConfig
     * @return $this
     */
    public function setApplyYamlConfig($applyYamlConfig)
    {
        $this->container['applyYamlConfig'] = $applyYamlConfig;

        return $this;
    }


    /**
     * Gets cpuLimit
     * @return string
     */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
     * Sets cpuLimit
     * @param string $cpuLimit
     * @return $this
     */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;

        return $this;
    }


    /**
     * Gets cpuRequest
     * @return string
     */
    public function getCpuRequest()
    {
        return $this->container['cpuRequest'];
    }

    /**
     * Sets cpuRequest
     * @param string $cpuRequest
     * @return $this
     */
    public function setCpuRequest($cpuRequest)
    {
        $this->container['cpuRequest'] = $cpuRequest;

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
     * Gets envFrom
     * @return \Rancher\Model\EnvFromModel[]
     */
    public function getEnvFrom()
    {
        return $this->container['envFrom'];
    }

    /**
     * Sets envFrom
     * @param \Rancher\Model\EnvFromModel[] $envFrom
     * @return $this
     */
    public function setEnvFrom($envFrom)
    {
        $this->container['envFrom'] = $envFrom;

        return $this;
    }


    /**
     * Gets memoryLimit
     * @return string
     */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
     * Sets memoryLimit
     * @param string $memoryLimit
     * @return $this
     */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;

        return $this;
    }


    /**
     * Gets memoryRequest
     * @return string
     */
    public function getMemoryRequest()
    {
        return $this->container['memoryRequest'];
    }

    /**
     * Sets memoryRequest
     * @param string $memoryRequest
     * @return $this
     */
    public function setMemoryRequest($memoryRequest)
    {
        $this->container['memoryRequest'] = $memoryRequest;

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
     * Gets publishCatalogConfig
     * @return \Rancher\Model\PublishCatalogConfigModel
     */
    public function getPublishCatalogConfig()
    {
        return $this->container['publishCatalogConfig'];
    }

    /**
     * Sets publishCatalogConfig
     * @param \Rancher\Model\PublishCatalogConfigModel $publishCatalogConfig
     * @return $this
     */
    public function setPublishCatalogConfig($publishCatalogConfig)
    {
        $this->container['publishCatalogConfig'] = $publishCatalogConfig;

        return $this;
    }


    /**
     * Gets publishImageConfig
     * @return \Rancher\Model\PublishImageConfigModel
     */
    public function getPublishImageConfig()
    {
        return $this->container['publishImageConfig'];
    }

    /**
     * Sets publishImageConfig
     * @param \Rancher\Model\PublishImageConfigModel $publishImageConfig
     * @return $this
     */
    public function setPublishImageConfig($publishImageConfig)
    {
        $this->container['publishImageConfig'] = $publishImageConfig;

        return $this;
    }


    /**
     * Gets runScriptConfig
     * @return \Rancher\Model\RunScriptConfigModel
     */
    public function getRunScriptConfig()
    {
        return $this->container['runScriptConfig'];
    }

    /**
     * Sets runScriptConfig
     * @param \Rancher\Model\RunScriptConfigModel $runScriptConfig
     * @return $this
     */
    public function setRunScriptConfig($runScriptConfig)
    {
        $this->container['runScriptConfig'] = $runScriptConfig;

        return $this;
    }


    /**
     * Gets sourceCodeConfig
     * @return \Rancher\Model\SourceCodeConfigModel
     */
    public function getSourceCodeConfig()
    {
        return $this->container['sourceCodeConfig'];
    }

    /**
     * Sets sourceCodeConfig
     * @param \Rancher\Model\SourceCodeConfigModel $sourceCodeConfig
     * @return $this
     */
    public function setSourceCodeConfig($sourceCodeConfig)
    {
        $this->container['sourceCodeConfig'] = $sourceCodeConfig;

        return $this;
    }


    /**
     * Gets when
     * @return \Rancher\Model\ConstraintsModel
     */
    public function getWhen()
    {
        return $this->container['when'];
    }

    /**
     * Sets when
     * @param \Rancher\Model\ConstraintsModel $when
     * @return $this
     */
    public function setWhen($when)
    {
        $this->container['when'] = $when;

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

