<?php

/**
 * AgentDeploymentCustomizationModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class AgentDeploymentCustomizationModel implements ArrayAccess
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
        'appendTolerations',
        'overrideAffinity',
        'overrideResourceRequirements',
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
        'appendTolerations',
        'overrideAffinity',
        'overrideResourceRequirements',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'appendTolerations' => '\Rancher\Model\TolerationModel[]',
        'overrideAffinity' => '\Rancher\Model\AffinityModel',
        'overrideResourceRequirements' => '\Rancher\Model\ResourceRequirementsModel',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'appendTolerations' => 'setAppendTolerations',
        'overrideAffinity' => 'setOverrideAffinity',
        'overrideResourceRequirements' => 'setOverrideResourceRequirements',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'appendTolerations' => 'getAppendTolerations',
        'overrideAffinity' => 'getOverrideAffinity',
        'overrideResourceRequirements' => 'getOverrideResourceRequirements',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['appendTolerations'] = isset($data['appendTolerations']) ? $data['appendTolerations'] : null;
        $this->container['overrideAffinity'] = isset($data['overrideAffinity']) ? $data['overrideAffinity'] : null;
        $this->container['overrideResourceRequirements'] = isset($data['overrideResourceRequirements']) ? $data['overrideResourceRequirements'] : null;
    }

    /**
     * Gets appendTolerations
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getAppendTolerations()
    {
        return $this->container['appendTolerations'];
    }

    /**
     * Sets appendTolerations
     * @param \Rancher\Model\TolerationModel[] $appendTolerations
     * @return $this
     */
    public function setAppendTolerations($appendTolerations)
    {
        $this->container['appendTolerations'] = $appendTolerations;

        return $this;
    }


    /**
     * Gets overrideAffinity
     * @return \Rancher\Model\AffinityModel
     */
    public function getOverrideAffinity()
    {
        return $this->container['overrideAffinity'];
    }

    /**
     * Sets overrideAffinity
     * @param \Rancher\Model\AffinityModel $overrideAffinity
     * @return $this
     */
    public function setOverrideAffinity($overrideAffinity)
    {
        $this->container['overrideAffinity'] = $overrideAffinity;

        return $this;
    }


    /**
     * Gets overrideResourceRequirements
     * @return \Rancher\Model\ResourceRequirementsModel
     */
    public function getOverrideResourceRequirements()
    {
        return $this->container['overrideResourceRequirements'];
    }

    /**
     * Sets overrideResourceRequirements
     * @param \Rancher\Model\ResourceRequirementsModel $overrideResourceRequirements
     * @return $this
     */
    public function setOverrideResourceRequirements($overrideResourceRequirements)
    {
        $this->container['overrideResourceRequirements'] = $overrideResourceRequirements;

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

