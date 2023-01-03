<?php

/**
 * PublishCatalogConfigModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PublishCatalogConfigModel implements ArrayAccess
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
        'catalogTemplate',
        'gitAuthor',
        'gitBranch',
        'gitEmail',
        'gitUrl',
        'path',
        'version',
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
        'catalogTemplate',
        'gitAuthor',
        'gitBranch',
        'gitEmail',
        'gitUrl',
        'path',
        'version',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'catalogTemplate' => 'string',
        'gitAuthor' => 'string',
        'gitBranch' => 'string',
        'gitEmail' => 'string',
        'gitUrl' => 'string',
        'path' => 'string',
        'version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'catalogTemplate' => 'setCatalogTemplate',
        'gitAuthor' => 'setGitAuthor',
        'gitBranch' => 'setGitBranch',
        'gitEmail' => 'setGitEmail',
        'gitUrl' => 'setGitUrl',
        'path' => 'setPath',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'catalogTemplate' => 'getCatalogTemplate',
        'gitAuthor' => 'getGitAuthor',
        'gitBranch' => 'getGitBranch',
        'gitEmail' => 'getGitEmail',
        'gitUrl' => 'getGitUrl',
        'path' => 'getPath',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['catalogTemplate'] = isset($data['catalogTemplate']) ? $data['catalogTemplate'] : null;
        $this->container['gitAuthor'] = isset($data['gitAuthor']) ? $data['gitAuthor'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['gitEmail'] = isset($data['gitEmail']) ? $data['gitEmail'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets catalogTemplate
     * @return string
     */
    public function getCatalogTemplate()
    {
        return $this->container['catalogTemplate'];
    }

    /**
     * Sets catalogTemplate
     * @param string $catalogTemplate
     * @return $this
     */
    public function setCatalogTemplate($catalogTemplate)
    {
        $this->container['catalogTemplate'] = $catalogTemplate;

        return $this;
    }


    /**
     * Gets gitAuthor
     * @return string
     */
    public function getGitAuthor()
    {
        return $this->container['gitAuthor'];
    }

    /**
     * Sets gitAuthor
     * @param string $gitAuthor
     * @return $this
     */
    public function setGitAuthor($gitAuthor)
    {
        $this->container['gitAuthor'] = $gitAuthor;

        return $this;
    }


    /**
     * Gets gitBranch
     * @return string
     */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
     * Sets gitBranch
     * @param string $gitBranch
     * @return $this
     */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;

        return $this;
    }


    /**
     * Gets gitEmail
     * @return string
     */
    public function getGitEmail()
    {
        return $this->container['gitEmail'];
    }

    /**
     * Sets gitEmail
     * @param string $gitEmail
     * @return $this
     */
    public function setGitEmail($gitEmail)
    {
        $this->container['gitEmail'] = $gitEmail;

        return $this;
    }


    /**
     * Gets gitUrl
     * @return string
     */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
     * Sets gitUrl
     * @param string $gitUrl
     * @return $this
     */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;

        return $this;
    }


    /**
     * Gets path
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }


    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

