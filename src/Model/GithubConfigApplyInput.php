<?php

namespace Rancher\Model;

use \ArrayAccess;

class GithubConfigApplyInput implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'code' => 'string',
        'enabled' => 'boolean',
        'githubConfig' => '\Rancher\Model\GithubConfig',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'code' => 'setCode',
        'enabled' => 'setEnabled',
        'githubConfig' => 'setGithubConfig',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'code' => 'getCode',
        'enabled' => 'getEnabled',
        'githubConfig' => 'getGithubConfig',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['githubConfig'] = isset($data['githubConfig']) ? $data['githubConfig'] : null;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }


    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets githubConfig
     * @return \Rancher\Model\GithubConfig
     */
    public function getGithubConfig()
    {
        return $this->container['githubConfig'];
    }

    /**
     * Sets githubConfig
     * @param \Rancher\Model\GithubConfig $githubConfig
     * @return $this
     */
    public function setGithubConfig($githubConfig)
    {
        $this->container['githubConfig'] = $githubConfig;

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

