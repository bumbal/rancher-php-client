<?php

namespace Rancher\Model;

use \ArrayAccess;

class GlobalAwsOpts implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'disable-security-group-ingress' => 'boolean',
        'disable-strict-zone-check' => 'boolean',
        'elb-security-group' => 'string',
        'kubernetes-cluster-id' => 'string',
        'kubernetes-cluster-tag' => 'string',
        'role-arn' => 'string',
        'routetable-id' => 'string',
        'subnet-id' => 'string',
        'vpc' => 'string',
        'zone' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'disable-security-group-ingress' => 'setDisable-security-group-ingress',
        'disable-strict-zone-check' => 'setDisable-strict-zone-check',
        'elb-security-group' => 'setElb-security-group',
        'kubernetes-cluster-id' => 'setKubernetes-cluster-id',
        'kubernetes-cluster-tag' => 'setKubernetes-cluster-tag',
        'role-arn' => 'setRole-arn',
        'routetable-id' => 'setRoutetable-id',
        'subnet-id' => 'setSubnet-id',
        'vpc' => 'setVpc',
        'zone' => 'setZone',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'disable-security-group-ingress' => 'getDisable-security-group-ingress',
        'disable-strict-zone-check' => 'getDisable-strict-zone-check',
        'elb-security-group' => 'getElb-security-group',
        'kubernetes-cluster-id' => 'getKubernetes-cluster-id',
        'kubernetes-cluster-tag' => 'getKubernetes-cluster-tag',
        'role-arn' => 'getRole-arn',
        'routetable-id' => 'getRoutetable-id',
        'subnet-id' => 'getSubnet-id',
        'vpc' => 'getVpc',
        'zone' => 'getZone',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['disable-security-group-ingress'] = isset($data['disable-security-group-ingress']) ? $data['disable-security-group-ingress'] : null;
        $this->container['disable-strict-zone-check'] = isset($data['disable-strict-zone-check']) ? $data['disable-strict-zone-check'] : null;
        $this->container['elb-security-group'] = isset($data['elb-security-group']) ? $data['elb-security-group'] : null;
        $this->container['kubernetes-cluster-id'] = isset($data['kubernetes-cluster-id']) ? $data['kubernetes-cluster-id'] : null;
        $this->container['kubernetes-cluster-tag'] = isset($data['kubernetes-cluster-tag']) ? $data['kubernetes-cluster-tag'] : null;
        $this->container['role-arn'] = isset($data['role-arn']) ? $data['role-arn'] : null;
        $this->container['routetable-id'] = isset($data['routetable-id']) ? $data['routetable-id'] : null;
        $this->container['subnet-id'] = isset($data['subnet-id']) ? $data['subnet-id'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
    }

    /**
     * Gets disable-security-group-ingress
     * @return boolean
     */
    public function getDisable-security-group-ingress()
    {
        return $this->container['disable-security-group-ingress'];
    }

    /**
     * Sets disable-security-group-ingress
     * @param boolean $disable-security-group-ingress
     * @return $this
     */
    public function setDisable-security-group-ingress($disable-security-group-ingress)
    {
        $this->container['disable-security-group-ingress'] = $disable-security-group-ingress;

        return $this;
    }


    /**
     * Gets disable-strict-zone-check
     * @return boolean
     */
    public function getDisable-strict-zone-check()
    {
        return $this->container['disable-strict-zone-check'];
    }

    /**
     * Sets disable-strict-zone-check
     * @param boolean $disable-strict-zone-check
     * @return $this
     */
    public function setDisable-strict-zone-check($disable-strict-zone-check)
    {
        $this->container['disable-strict-zone-check'] = $disable-strict-zone-check;

        return $this;
    }


    /**
     * Gets elb-security-group
     * @return string
     */
    public function getElb-security-group()
    {
        return $this->container['elb-security-group'];
    }

    /**
     * Sets elb-security-group
     * @param string $elb-security-group
     * @return $this
     */
    public function setElb-security-group($elb-security-group)
    {
        $this->container['elb-security-group'] = $elb-security-group;

        return $this;
    }


    /**
     * Gets kubernetes-cluster-id
     * @return string
     */
    public function getKubernetes-cluster-id()
    {
        return $this->container['kubernetes-cluster-id'];
    }

    /**
     * Sets kubernetes-cluster-id
     * @param string $kubernetes-cluster-id
     * @return $this
     */
    public function setKubernetes-cluster-id($kubernetes-cluster-id)
    {
        $this->container['kubernetes-cluster-id'] = $kubernetes-cluster-id;

        return $this;
    }


    /**
     * Gets kubernetes-cluster-tag
     * @return string
     */
    public function getKubernetes-cluster-tag()
    {
        return $this->container['kubernetes-cluster-tag'];
    }

    /**
     * Sets kubernetes-cluster-tag
     * @param string $kubernetes-cluster-tag
     * @return $this
     */
    public function setKubernetes-cluster-tag($kubernetes-cluster-tag)
    {
        $this->container['kubernetes-cluster-tag'] = $kubernetes-cluster-tag;

        return $this;
    }


    /**
     * Gets role-arn
     * @return string
     */
    public function getRole-arn()
    {
        return $this->container['role-arn'];
    }

    /**
     * Sets role-arn
     * @param string $role-arn
     * @return $this
     */
    public function setRole-arn($role-arn)
    {
        $this->container['role-arn'] = $role-arn;

        return $this;
    }


    /**
     * Gets routetable-id
     * @return string
     */
    public function getRoutetable-id()
    {
        return $this->container['routetable-id'];
    }

    /**
     * Sets routetable-id
     * @param string $routetable-id
     * @return $this
     */
    public function setRoutetable-id($routetable-id)
    {
        $this->container['routetable-id'] = $routetable-id;

        return $this;
    }


    /**
     * Gets subnet-id
     * @return string
     */
    public function getSubnet-id()
    {
        return $this->container['subnet-id'];
    }

    /**
     * Sets subnet-id
     * @param string $subnet-id
     * @return $this
     */
    public function setSubnet-id($subnet-id)
    {
        $this->container['subnet-id'] = $subnet-id;

        return $this;
    }


    /**
     * Gets vpc
     * @return string
     */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
     * Sets vpc
     * @param string $vpc
     * @return $this
     */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;

        return $this;
    }


    /**
     * Gets zone
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     * @param string $zone
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

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

