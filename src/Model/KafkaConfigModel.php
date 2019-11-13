<?php

/**
 * KafkaConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class KafkaConfigModel implements ArrayAccess
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
        'brokerEndpoints',
        'certificate',
        'clientCert',
        'clientKey',
        'saslPassword',
        'saslScramMechanism',
        'saslType',
        'saslUsername',
        'topic',
        'zookeeperEndpoint',
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
        'brokerEndpoints',
        'certificate',
        'clientCert',
        'clientKey',
        'saslPassword',
        'saslScramMechanism',
        'saslType',
        'saslUsername',
        'topic',
        'zookeeperEndpoint',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'brokerEndpoints' => 'string[]',
        'certificate' => 'string',
        'clientCert' => 'string',
        'clientKey' => 'string',
        'saslPassword' => '\Rancher\Model\PasswordModel',
        'saslScramMechanism' => 'string',
        'saslType' => 'string',
        'saslUsername' => 'string',
        'topic' => 'string',
        'zookeeperEndpoint' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'brokerEndpoints' => 'setBrokerEndpoints',
        'certificate' => 'setCertificate',
        'clientCert' => 'setClientCert',
        'clientKey' => 'setClientKey',
        'saslPassword' => 'setSaslPassword',
        'saslScramMechanism' => 'setSaslScramMechanism',
        'saslType' => 'setSaslType',
        'saslUsername' => 'setSaslUsername',
        'topic' => 'setTopic',
        'zookeeperEndpoint' => 'setZookeeperEndpoint',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'brokerEndpoints' => 'getBrokerEndpoints',
        'certificate' => 'getCertificate',
        'clientCert' => 'getClientCert',
        'clientKey' => 'getClientKey',
        'saslPassword' => 'getSaslPassword',
        'saslScramMechanism' => 'getSaslScramMechanism',
        'saslType' => 'getSaslType',
        'saslUsername' => 'getSaslUsername',
        'topic' => 'getTopic',
        'zookeeperEndpoint' => 'getZookeeperEndpoint',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['brokerEndpoints'] = isset($data['brokerEndpoints']) ? $data['brokerEndpoints'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['clientCert'] = isset($data['clientCert']) ? $data['clientCert'] : null;
        $this->container['clientKey'] = isset($data['clientKey']) ? $data['clientKey'] : null;
        $this->container['saslPassword'] = isset($data['saslPassword']) ? $data['saslPassword'] : null;
        $this->container['saslScramMechanism'] = isset($data['saslScramMechanism']) ? $data['saslScramMechanism'] : null;
        $this->container['saslType'] = isset($data['saslType']) ? $data['saslType'] : null;
        $this->container['saslUsername'] = isset($data['saslUsername']) ? $data['saslUsername'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['zookeeperEndpoint'] = isset($data['zookeeperEndpoint']) ? $data['zookeeperEndpoint'] : null;
    }

    /**
     * Gets brokerEndpoints
     * @return string[]
     */
    public function getBrokerEndpoints()
    {
        return $this->container['brokerEndpoints'];
    }

    /**
     * Sets brokerEndpoints
     * @param string[] $brokerEndpoints
     * @return $this
     */
    public function setBrokerEndpoints($brokerEndpoints)
    {
        $this->container['brokerEndpoints'] = $brokerEndpoints;

        return $this;
    }


    /**
     * Gets certificate
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     * @param string $certificate
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }


    /**
     * Gets clientCert
     * @return string
     */
    public function getClientCert()
    {
        return $this->container['clientCert'];
    }

    /**
     * Sets clientCert
     * @param string $clientCert
     * @return $this
     */
    public function setClientCert($clientCert)
    {
        $this->container['clientCert'] = $clientCert;

        return $this;
    }


    /**
     * Gets clientKey
     * @return string
     */
    public function getClientKey()
    {
        return $this->container['clientKey'];
    }

    /**
     * Sets clientKey
     * @param string $clientKey
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->container['clientKey'] = $clientKey;

        return $this;
    }


    /**
     * Gets saslPassword
     * @return \Rancher\Model\PasswordModel
     */
    public function getSaslPassword()
    {
        return $this->container['saslPassword'];
    }

    /**
     * Sets saslPassword
     * @param \Rancher\Model\PasswordModel $saslPassword
     * @return $this
     */
    public function setSaslPassword($saslPassword)
    {
        $this->container['saslPassword'] = $saslPassword;

        return $this;
    }


    /**
     * Gets saslScramMechanism
     * @return string
     */
    public function getSaslScramMechanism()
    {
        return $this->container['saslScramMechanism'];
    }

    /**
     * Sets saslScramMechanism
     * @param string $saslScramMechanism
     * @return $this
     */
    public function setSaslScramMechanism($saslScramMechanism)
    {
        $this->container['saslScramMechanism'] = $saslScramMechanism;

        return $this;
    }


    /**
     * Gets saslType
     * @return string
     */
    public function getSaslType()
    {
        return $this->container['saslType'];
    }

    /**
     * Sets saslType
     * @param string $saslType
     * @return $this
     */
    public function setSaslType($saslType)
    {
        $this->container['saslType'] = $saslType;

        return $this;
    }


    /**
     * Gets saslUsername
     * @return string
     */
    public function getSaslUsername()
    {
        return $this->container['saslUsername'];
    }

    /**
     * Sets saslUsername
     * @param string $saslUsername
     * @return $this
     */
    public function setSaslUsername($saslUsername)
    {
        $this->container['saslUsername'] = $saslUsername;

        return $this;
    }


    /**
     * Gets topic
     * @return string
     */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
     * Sets topic
     * @param string $topic
     * @return $this
     */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;

        return $this;
    }


    /**
     * Gets zookeeperEndpoint
     * @return string
     */
    public function getZookeeperEndpoint()
    {
        return $this->container['zookeeperEndpoint'];
    }

    /**
     * Sets zookeeperEndpoint
     * @param string $zookeeperEndpoint
     * @return $this
     */
    public function setZookeeperEndpoint($zookeeperEndpoint)
    {
        $this->container['zookeeperEndpoint'] = $zookeeperEndpoint;

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

