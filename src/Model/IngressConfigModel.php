<?php

/**
 * IngressConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class IngressConfigModel implements ArrayAccess
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
        'defaultBackend',
        'defaultHttpBackendPriorityClassName',
        'defaultIngressClass',
        'dnsPolicy',
        'extraArgs',
        'extraEnvs',
        'extraVolumeMounts',
        'extraVolumes',
        'httpPort',
        'httpsPort',
        'networkMode',
        'nginxIngressControllerPriorityClassName',
        'nodeSelector',
        'options',
        'provider',
        'tolerations',
        'updateStrategy',
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
        'defaultBackend',
        'defaultHttpBackendPriorityClassName',
        'defaultIngressClass',
        'dnsPolicy',
        'extraArgs',
        'extraEnvs',
        'extraVolumeMounts',
        'extraVolumes',
        'httpPort',
        'httpsPort',
        'networkMode',
        'nginxIngressControllerPriorityClassName',
        'nodeSelector',
        'options',
        'provider',
        'tolerations',
        'updateStrategy',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'defaultBackend' => 'boolean',
        'defaultHttpBackendPriorityClassName' => 'string',
        'defaultIngressClass' => 'boolean',
        'dnsPolicy' => 'string',
        'extraArgs' => 'map[string,string]',
        'extraEnvs' => '\Rancher\Model\JsonModel[]',
        'extraVolumeMounts' => '\Rancher\Model\JsonModel[]',
        'extraVolumes' => '\Rancher\Model\JsonModel[]',
        'httpPort' => 'int',
        'httpsPort' => 'int',
        'networkMode' => 'string',
        'nginxIngressControllerPriorityClassName' => 'string',
        'nodeSelector' => 'map[string,string]',
        'options' => 'map[string,string]',
        'provider' => 'string',
        'tolerations' => '\Rancher\Model\TolerationModel[]',
        'updateStrategy' => '\Rancher\Model\DaemonSetUpdateStrategyModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'defaultBackend' => 'setDefaultBackend',
        'defaultHttpBackendPriorityClassName' => 'setDefaultHttpBackendPriorityClassName',
        'defaultIngressClass' => 'setDefaultIngressClass',
        'dnsPolicy' => 'setDnsPolicy',
        'extraArgs' => 'setExtraArgs',
        'extraEnvs' => 'setExtraEnvs',
        'extraVolumeMounts' => 'setExtraVolumeMounts',
        'extraVolumes' => 'setExtraVolumes',
        'httpPort' => 'setHttpPort',
        'httpsPort' => 'setHttpsPort',
        'networkMode' => 'setNetworkMode',
        'nginxIngressControllerPriorityClassName' => 'setNginxIngressControllerPriorityClassName',
        'nodeSelector' => 'setNodeSelector',
        'options' => 'setOptions',
        'provider' => 'setProvider',
        'tolerations' => 'setTolerations',
        'updateStrategy' => 'setUpdateStrategy',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'defaultBackend' => 'getDefaultBackend',
        'defaultHttpBackendPriorityClassName' => 'getDefaultHttpBackendPriorityClassName',
        'defaultIngressClass' => 'getDefaultIngressClass',
        'dnsPolicy' => 'getDnsPolicy',
        'extraArgs' => 'getExtraArgs',
        'extraEnvs' => 'getExtraEnvs',
        'extraVolumeMounts' => 'getExtraVolumeMounts',
        'extraVolumes' => 'getExtraVolumes',
        'httpPort' => 'getHttpPort',
        'httpsPort' => 'getHttpsPort',
        'networkMode' => 'getNetworkMode',
        'nginxIngressControllerPriorityClassName' => 'getNginxIngressControllerPriorityClassName',
        'nodeSelector' => 'getNodeSelector',
        'options' => 'getOptions',
        'provider' => 'getProvider',
        'tolerations' => 'getTolerations',
        'updateStrategy' => 'getUpdateStrategy',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['defaultBackend'] = isset($data['defaultBackend']) ? $data['defaultBackend'] : null;
        $this->container['defaultHttpBackendPriorityClassName'] = isset($data['defaultHttpBackendPriorityClassName']) ? $data['defaultHttpBackendPriorityClassName'] : null;
        $this->container['defaultIngressClass'] = isset($data['defaultIngressClass']) ? $data['defaultIngressClass'] : null;
        $this->container['dnsPolicy'] = isset($data['dnsPolicy']) ? $data['dnsPolicy'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraEnvs'] = isset($data['extraEnvs']) ? $data['extraEnvs'] : null;
        $this->container['extraVolumeMounts'] = isset($data['extraVolumeMounts']) ? $data['extraVolumeMounts'] : null;
        $this->container['extraVolumes'] = isset($data['extraVolumes']) ? $data['extraVolumes'] : null;
        $this->container['httpPort'] = isset($data['httpPort']) ? $data['httpPort'] : null;
        $this->container['httpsPort'] = isset($data['httpsPort']) ? $data['httpsPort'] : null;
        $this->container['networkMode'] = isset($data['networkMode']) ? $data['networkMode'] : null;
        $this->container['nginxIngressControllerPriorityClassName'] = isset($data['nginxIngressControllerPriorityClassName']) ? $data['nginxIngressControllerPriorityClassName'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['updateStrategy'] = isset($data['updateStrategy']) ? $data['updateStrategy'] : null;
    }

    /**
     * Gets defaultBackend
     * @return boolean
     */
    public function getDefaultBackend()
    {
        return $this->container['defaultBackend'];
    }

    /**
     * Sets defaultBackend
     * @param boolean $defaultBackend
     * @return $this
     */
    public function setDefaultBackend($defaultBackend)
    {
        $this->container['defaultBackend'] = $defaultBackend;

        return $this;
    }


    /**
     * Gets defaultHttpBackendPriorityClassName
     * @return string
     */
    public function getDefaultHttpBackendPriorityClassName()
    {
        return $this->container['defaultHttpBackendPriorityClassName'];
    }

    /**
     * Sets defaultHttpBackendPriorityClassName
     * @param string $defaultHttpBackendPriorityClassName
     * @return $this
     */
    public function setDefaultHttpBackendPriorityClassName($defaultHttpBackendPriorityClassName)
    {
        $this->container['defaultHttpBackendPriorityClassName'] = $defaultHttpBackendPriorityClassName;

        return $this;
    }


    /**
     * Gets defaultIngressClass
     * @return boolean
     */
    public function getDefaultIngressClass()
    {
        return $this->container['defaultIngressClass'];
    }

    /**
     * Sets defaultIngressClass
     * @param boolean $defaultIngressClass
     * @return $this
     */
    public function setDefaultIngressClass($defaultIngressClass)
    {
        $this->container['defaultIngressClass'] = $defaultIngressClass;

        return $this;
    }


    /**
     * Gets dnsPolicy
     * @return string
     */
    public function getDnsPolicy()
    {
        return $this->container['dnsPolicy'];
    }

    /**
     * Sets dnsPolicy
     * @param string $dnsPolicy
     * @return $this
     */
    public function setDnsPolicy($dnsPolicy)
    {
        $this->container['dnsPolicy'] = $dnsPolicy;

        return $this;
    }


    /**
     * Gets extraArgs
     * @return string[]
     */
    public function getExtraArgs()
    {
        return $this->container['extraArgs'];
    }

    /**
     * Sets extraArgs
     * @param string[] $extraArgs
     * @return $this
     */
    public function setExtraArgs($extraArgs)
    {
        $this->container['extraArgs'] = $extraArgs;

        return $this;
    }


    /**
     * Gets extraEnvs
     * @return \Rancher\Model\JsonModel[]
     */
    public function getExtraEnvs()
    {
        return $this->container['extraEnvs'];
    }

    /**
     * Sets extraEnvs
     * @param \Rancher\Model\JsonModel[] $extraEnvs
     * @return $this
     */
    public function setExtraEnvs($extraEnvs)
    {
        $this->container['extraEnvs'] = $extraEnvs;

        return $this;
    }


    /**
     * Gets extraVolumeMounts
     * @return \Rancher\Model\JsonModel[]
     */
    public function getExtraVolumeMounts()
    {
        return $this->container['extraVolumeMounts'];
    }

    /**
     * Sets extraVolumeMounts
     * @param \Rancher\Model\JsonModel[] $extraVolumeMounts
     * @return $this
     */
    public function setExtraVolumeMounts($extraVolumeMounts)
    {
        $this->container['extraVolumeMounts'] = $extraVolumeMounts;

        return $this;
    }


    /**
     * Gets extraVolumes
     * @return \Rancher\Model\JsonModel[]
     */
    public function getExtraVolumes()
    {
        return $this->container['extraVolumes'];
    }

    /**
     * Sets extraVolumes
     * @param \Rancher\Model\JsonModel[] $extraVolumes
     * @return $this
     */
    public function setExtraVolumes($extraVolumes)
    {
        $this->container['extraVolumes'] = $extraVolumes;

        return $this;
    }


    /**
     * Gets httpPort
     * @return int
     */
    public function getHttpPort()
    {
        return $this->container['httpPort'];
    }

    /**
     * Sets httpPort
     * @param int $httpPort
     * @return $this
     */
    public function setHttpPort($httpPort)
    {
        $this->container['httpPort'] = $httpPort;

        return $this;
    }


    /**
     * Gets httpsPort
     * @return int
     */
    public function getHttpsPort()
    {
        return $this->container['httpsPort'];
    }

    /**
     * Sets httpsPort
     * @param int $httpsPort
     * @return $this
     */
    public function setHttpsPort($httpsPort)
    {
        $this->container['httpsPort'] = $httpsPort;

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
     * Gets nginxIngressControllerPriorityClassName
     * @return string
     */
    public function getNginxIngressControllerPriorityClassName()
    {
        return $this->container['nginxIngressControllerPriorityClassName'];
    }

    /**
     * Sets nginxIngressControllerPriorityClassName
     * @param string $nginxIngressControllerPriorityClassName
     * @return $this
     */
    public function setNginxIngressControllerPriorityClassName($nginxIngressControllerPriorityClassName)
    {
        $this->container['nginxIngressControllerPriorityClassName'] = $nginxIngressControllerPriorityClassName;

        return $this;
    }


    /**
     * Gets nodeSelector
     * @return string[]
     */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
     * Sets nodeSelector
     * @param string[] $nodeSelector
     * @return $this
     */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;

        return $this;
    }


    /**
     * Gets options
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param string[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }


    /**
     * Gets provider
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     * @param string $provider
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }


    /**
     * Gets tolerations
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     * @param \Rancher\Model\TolerationModel[] $tolerations
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

        return $this;
    }


    /**
     * Gets updateStrategy
     * @return \Rancher\Model\DaemonSetUpdateStrategyModel
     */
    public function getUpdateStrategy()
    {
        return $this->container['updateStrategy'];
    }

    /**
     * Sets updateStrategy
     * @param \Rancher\Model\DaemonSetUpdateStrategyModel $updateStrategy
     * @return $this
     */
    public function setUpdateStrategy($updateStrategy)
    {
        $this->container['updateStrategy'] = $updateStrategy;

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

