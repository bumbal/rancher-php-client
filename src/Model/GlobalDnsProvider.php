<?php

namespace Rancher\Model;

use \ArrayAccess;

class GlobalDnsProvider implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'alidnsProviderConfig' => '\Rancher\Model\AlidnsProviderConfig',
        'annotations' => 'map[string]',
        'cloudflareProviderConfig' => '\Rancher\Model\CloudflareProviderConfig',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'labels' => 'map[string]',
        'members' => '\Rancher\Model\Member[]',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'removed' => '\DateTime',
        'rootDomain' => 'string',
        'route53ProviderConfig' => '\Rancher\Model\Route53ProviderConfig',
        'uuid' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alidnsProviderConfig' => 'setAlidnsProviderConfig',
        'annotations' => 'setAnnotations',
        'cloudflareProviderConfig' => 'setCloudflareProviderConfig',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'labels' => 'setLabels',
        'members' => 'setMembers',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'rootDomain' => 'setRootDomain',
        'route53ProviderConfig' => 'setRoute53ProviderConfig',
        'uuid' => 'setUuid',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alidnsProviderConfig' => 'getAlidnsProviderConfig',
        'annotations' => 'getAnnotations',
        'cloudflareProviderConfig' => 'getCloudflareProviderConfig',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'labels' => 'getLabels',
        'members' => 'getMembers',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'rootDomain' => 'getRootDomain',
        'route53ProviderConfig' => 'getRoute53ProviderConfig',
        'uuid' => 'getUuid',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alidnsProviderConfig'] = isset($data['alidnsProviderConfig']) ? $data['alidnsProviderConfig'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['cloudflareProviderConfig'] = isset($data['cloudflareProviderConfig']) ? $data['cloudflareProviderConfig'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['rootDomain'] = isset($data['rootDomain']) ? $data['rootDomain'] : null;
        $this->container['route53ProviderConfig'] = isset($data['route53ProviderConfig']) ? $data['route53ProviderConfig'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
    }

    /**
     * Gets alidnsProviderConfig
     * @return \Rancher\Model\AlidnsProviderConfig
     */
    public function getAlidnsProviderConfig()
    {
        return $this->container['alidnsProviderConfig'];
    }

    /**
     * Sets alidnsProviderConfig
     * @param \Rancher\Model\AlidnsProviderConfig $alidnsProviderConfig
     * @return $this
     */
    public function setAlidnsProviderConfig($alidnsProviderConfig)
    {
        $this->container['alidnsProviderConfig'] = $alidnsProviderConfig;

        return $this;
    }


    /**
     * Gets annotations
     * @return string[]
     */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     * @param string[] $annotations
     * @return $this
     */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;

        return $this;
    }


    /**
     * Gets cloudflareProviderConfig
     * @return \Rancher\Model\CloudflareProviderConfig
     */
    public function getCloudflareProviderConfig()
    {
        return $this->container['cloudflareProviderConfig'];
    }

    /**
     * Sets cloudflareProviderConfig
     * @param \Rancher\Model\CloudflareProviderConfig $cloudflareProviderConfig
     * @return $this
     */
    public function setCloudflareProviderConfig($cloudflareProviderConfig)
    {
        $this->container['cloudflareProviderConfig'] = $cloudflareProviderConfig;

        return $this;
    }


    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }


    /**
     * Gets creatorId
     * @return string
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     * @param string $creatorId
     * @return $this
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

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
     * Gets members
     * @return \Rancher\Model\Member[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     * @param \Rancher\Model\Member[] $members
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

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
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReference[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReference[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets removed
     * @return \DateTime
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param \DateTime $removed
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }


    /**
     * Gets rootDomain
     * @return string
     */
    public function getRootDomain()
    {
        return $this->container['rootDomain'];
    }

    /**
     * Sets rootDomain
     * @param string $rootDomain
     * @return $this
     */
    public function setRootDomain($rootDomain)
    {
        $this->container['rootDomain'] = $rootDomain;

        return $this;
    }


    /**
     * Gets route53ProviderConfig
     * @return \Rancher\Model\Route53ProviderConfig
     */
    public function getRoute53ProviderConfig()
    {
        return $this->container['route53ProviderConfig'];
    }

    /**
     * Sets route53ProviderConfig
     * @param \Rancher\Model\Route53ProviderConfig $route53ProviderConfig
     * @return $this
     */
    public function setRoute53ProviderConfig($route53ProviderConfig)
    {
        $this->container['route53ProviderConfig'] = $route53ProviderConfig;

        return $this;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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

