<?php

/**
 * KubeAPIServiceModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KubeAPIServiceModel implements ArrayAccess
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
        'admissionConfiguration',
        'alwaysPullImages',
        'auditLog',
        'eventRateLimit',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'podSecurityPolicy',
        'secretsEncryptionConfig',
        'serviceClusterIpRange',
        'serviceNodePortRange',
        'winExtraArgs',
        'winExtraBinds',
        'winExtraEnv',
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
        'admissionConfiguration',
        'alwaysPullImages',
        'auditLog',
        'eventRateLimit',
        'extraArgs',
        'extraBinds',
        'extraEnv',
        'image',
        'podSecurityPolicy',
        'secretsEncryptionConfig',
        'serviceClusterIpRange',
        'serviceNodePortRange',
        'winExtraArgs',
        'winExtraBinds',
        'winExtraEnv',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'admissionConfiguration' => 'map[string,\Rancher\Model\JsonModel]',
        'alwaysPullImages' => 'boolean',
        'auditLog' => '\Rancher\Model\AuditLogModel',
        'eventRateLimit' => '\Rancher\Model\EventRateLimitModel',
        'extraArgs' => 'map[string,string]',
        'extraBinds' => 'string[]',
        'extraEnv' => 'string[]',
        'image' => 'string',
        'podSecurityPolicy' => 'boolean',
        'secretsEncryptionConfig' => '\Rancher\Model\SecretsEncryptionConfigModel',
        'serviceClusterIpRange' => 'string',
        'serviceNodePortRange' => 'string',
        'winExtraArgs' => 'map[string,string]',
        'winExtraBinds' => 'string[]',
        'winExtraEnv' => 'string[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'admissionConfiguration' => 'setAdmissionConfiguration',
        'alwaysPullImages' => 'setAlwaysPullImages',
        'auditLog' => 'setAuditLog',
        'eventRateLimit' => 'setEventRateLimit',
        'extraArgs' => 'setExtraArgs',
        'extraBinds' => 'setExtraBinds',
        'extraEnv' => 'setExtraEnv',
        'image' => 'setImage',
        'podSecurityPolicy' => 'setPodSecurityPolicy',
        'secretsEncryptionConfig' => 'setSecretsEncryptionConfig',
        'serviceClusterIpRange' => 'setServiceClusterIpRange',
        'serviceNodePortRange' => 'setServiceNodePortRange',
        'winExtraArgs' => 'setWinExtraArgs',
        'winExtraBinds' => 'setWinExtraBinds',
        'winExtraEnv' => 'setWinExtraEnv',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'admissionConfiguration' => 'getAdmissionConfiguration',
        'alwaysPullImages' => 'getAlwaysPullImages',
        'auditLog' => 'getAuditLog',
        'eventRateLimit' => 'getEventRateLimit',
        'extraArgs' => 'getExtraArgs',
        'extraBinds' => 'getExtraBinds',
        'extraEnv' => 'getExtraEnv',
        'image' => 'getImage',
        'podSecurityPolicy' => 'getPodSecurityPolicy',
        'secretsEncryptionConfig' => 'getSecretsEncryptionConfig',
        'serviceClusterIpRange' => 'getServiceClusterIpRange',
        'serviceNodePortRange' => 'getServiceNodePortRange',
        'winExtraArgs' => 'getWinExtraArgs',
        'winExtraBinds' => 'getWinExtraBinds',
        'winExtraEnv' => 'getWinExtraEnv',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['admissionConfiguration'] = isset($data['admissionConfiguration']) ? $data['admissionConfiguration'] : null;
        $this->container['alwaysPullImages'] = isset($data['alwaysPullImages']) ? $data['alwaysPullImages'] : null;
        $this->container['auditLog'] = isset($data['auditLog']) ? $data['auditLog'] : null;
        $this->container['eventRateLimit'] = isset($data['eventRateLimit']) ? $data['eventRateLimit'] : null;
        $this->container['extraArgs'] = isset($data['extraArgs']) ? $data['extraArgs'] : null;
        $this->container['extraBinds'] = isset($data['extraBinds']) ? $data['extraBinds'] : null;
        $this->container['extraEnv'] = isset($data['extraEnv']) ? $data['extraEnv'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['podSecurityPolicy'] = isset($data['podSecurityPolicy']) ? $data['podSecurityPolicy'] : null;
        $this->container['secretsEncryptionConfig'] = isset($data['secretsEncryptionConfig']) ? $data['secretsEncryptionConfig'] : null;
        $this->container['serviceClusterIpRange'] = isset($data['serviceClusterIpRange']) ? $data['serviceClusterIpRange'] : null;
        $this->container['serviceNodePortRange'] = isset($data['serviceNodePortRange']) ? $data['serviceNodePortRange'] : null;
        $this->container['winExtraArgs'] = isset($data['winExtraArgs']) ? $data['winExtraArgs'] : null;
        $this->container['winExtraBinds'] = isset($data['winExtraBinds']) ? $data['winExtraBinds'] : null;
        $this->container['winExtraEnv'] = isset($data['winExtraEnv']) ? $data['winExtraEnv'] : null;
    }

    /**
     * Gets admissionConfiguration
     * @return \Rancher\Model\JsonModel[]
     */
    public function getAdmissionConfiguration()
    {
        return $this->container['admissionConfiguration'];
    }

    /**
     * Sets admissionConfiguration
     * @param \Rancher\Model\JsonModel[] $admissionConfiguration
     * @return $this
     */
    public function setAdmissionConfiguration($admissionConfiguration)
    {
        $this->container['admissionConfiguration'] = $admissionConfiguration;

        return $this;
    }


    /**
     * Gets alwaysPullImages
     * @return boolean
     */
    public function getAlwaysPullImages()
    {
        return $this->container['alwaysPullImages'];
    }

    /**
     * Sets alwaysPullImages
     * @param boolean $alwaysPullImages
     * @return $this
     */
    public function setAlwaysPullImages($alwaysPullImages)
    {
        $this->container['alwaysPullImages'] = $alwaysPullImages;

        return $this;
    }


    /**
     * Gets auditLog
     * @return \Rancher\Model\AuditLogModel
     */
    public function getAuditLog()
    {
        return $this->container['auditLog'];
    }

    /**
     * Sets auditLog
     * @param \Rancher\Model\AuditLogModel $auditLog
     * @return $this
     */
    public function setAuditLog($auditLog)
    {
        $this->container['auditLog'] = $auditLog;

        return $this;
    }


    /**
     * Gets eventRateLimit
     * @return \Rancher\Model\EventRateLimitModel
     */
    public function getEventRateLimit()
    {
        return $this->container['eventRateLimit'];
    }

    /**
     * Sets eventRateLimit
     * @param \Rancher\Model\EventRateLimitModel $eventRateLimit
     * @return $this
     */
    public function setEventRateLimit($eventRateLimit)
    {
        $this->container['eventRateLimit'] = $eventRateLimit;

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
     * Gets extraBinds
     * @return string[]
     */
    public function getExtraBinds()
    {
        return $this->container['extraBinds'];
    }

    /**
     * Sets extraBinds
     * @param string[] $extraBinds
     * @return $this
     */
    public function setExtraBinds($extraBinds)
    {
        $this->container['extraBinds'] = $extraBinds;

        return $this;
    }


    /**
     * Gets extraEnv
     * @return string[]
     */
    public function getExtraEnv()
    {
        return $this->container['extraEnv'];
    }

    /**
     * Sets extraEnv
     * @param string[] $extraEnv
     * @return $this
     */
    public function setExtraEnv($extraEnv)
    {
        $this->container['extraEnv'] = $extraEnv;

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
     * Gets podSecurityPolicy
     * @return boolean
     */
    public function getPodSecurityPolicy()
    {
        return $this->container['podSecurityPolicy'];
    }

    /**
     * Sets podSecurityPolicy
     * @param boolean $podSecurityPolicy
     * @return $this
     */
    public function setPodSecurityPolicy($podSecurityPolicy)
    {
        $this->container['podSecurityPolicy'] = $podSecurityPolicy;

        return $this;
    }


    /**
     * Gets secretsEncryptionConfig
     * @return \Rancher\Model\SecretsEncryptionConfigModel
     */
    public function getSecretsEncryptionConfig()
    {
        return $this->container['secretsEncryptionConfig'];
    }

    /**
     * Sets secretsEncryptionConfig
     * @param \Rancher\Model\SecretsEncryptionConfigModel $secretsEncryptionConfig
     * @return $this
     */
    public function setSecretsEncryptionConfig($secretsEncryptionConfig)
    {
        $this->container['secretsEncryptionConfig'] = $secretsEncryptionConfig;

        return $this;
    }


    /**
     * Gets serviceClusterIpRange
     * @return string
     */
    public function getServiceClusterIpRange()
    {
        return $this->container['serviceClusterIpRange'];
    }

    /**
     * Sets serviceClusterIpRange
     * @param string $serviceClusterIpRange
     * @return $this
     */
    public function setServiceClusterIpRange($serviceClusterIpRange)
    {
        $this->container['serviceClusterIpRange'] = $serviceClusterIpRange;

        return $this;
    }


    /**
     * Gets serviceNodePortRange
     * @return string
     */
    public function getServiceNodePortRange()
    {
        return $this->container['serviceNodePortRange'];
    }

    /**
     * Sets serviceNodePortRange
     * @param string $serviceNodePortRange
     * @return $this
     */
    public function setServiceNodePortRange($serviceNodePortRange)
    {
        $this->container['serviceNodePortRange'] = $serviceNodePortRange;

        return $this;
    }


    /**
     * Gets winExtraArgs
     * @return string[]
     */
    public function getWinExtraArgs()
    {
        return $this->container['winExtraArgs'];
    }

    /**
     * Sets winExtraArgs
     * @param string[] $winExtraArgs
     * @return $this
     */
    public function setWinExtraArgs($winExtraArgs)
    {
        $this->container['winExtraArgs'] = $winExtraArgs;

        return $this;
    }


    /**
     * Gets winExtraBinds
     * @return string[]
     */
    public function getWinExtraBinds()
    {
        return $this->container['winExtraBinds'];
    }

    /**
     * Sets winExtraBinds
     * @param string[] $winExtraBinds
     * @return $this
     */
    public function setWinExtraBinds($winExtraBinds)
    {
        $this->container['winExtraBinds'] = $winExtraBinds;

        return $this;
    }


    /**
     * Gets winExtraEnv
     * @return string[]
     */
    public function getWinExtraEnv()
    {
        return $this->container['winExtraEnv'];
    }

    /**
     * Sets winExtraEnv
     * @param string[] $winExtraEnv
     * @return $this
     */
    public function setWinExtraEnv($winExtraEnv)
    {
        $this->container['winExtraEnv'] = $winExtraEnv;

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

