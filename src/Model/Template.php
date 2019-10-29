<?php

namespace Rancher\Model;

use \ArrayAccess;

class Template implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'annotations' => 'map[string]',
        'catalogId' => 'string',
        'categories' => 'string[]',
        'category' => 'string',
        'clusterCatalogId' => 'string',
        'clusterId' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'defaultTemplateVersionId' => 'string',
        'defaultVersion' => 'string',
        'description' => 'string',
        'folderName' => 'string',
        'icon' => 'string',
        'iconFilename' => 'string',
        'id' => 'string',
        'labels' => 'map[string]',
        'maintainer' => 'string',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'path' => 'string',
        'projectCatalogId' => 'string',
        'projectId' => 'string',
        'projectURL' => 'string',
        'readme' => 'string',
        'removed' => '\DateTime',
        'state' => 'string',
        'status' => '\Rancher\Model\TemplateStatus',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'upgradeFrom' => 'string',
        'uuid' => 'string',
        'versionLinks' => 'map[string]',
        'versions' => '\Rancher\Model\TemplateVersionSpec[]',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'annotations' => 'setAnnotations',
        'catalogId' => 'setCatalogId',
        'categories' => 'setCategories',
        'category' => 'setCategory',
        'clusterCatalogId' => 'setClusterCatalogId',
        'clusterId' => 'setClusterId',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'defaultTemplateVersionId' => 'setDefaultTemplateVersionId',
        'defaultVersion' => 'setDefaultVersion',
        'description' => 'setDescription',
        'folderName' => 'setFolderName',
        'icon' => 'setIcon',
        'iconFilename' => 'setIconFilename',
        'id' => 'setId',
        'labels' => 'setLabels',
        'maintainer' => 'setMaintainer',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'path' => 'setPath',
        'projectCatalogId' => 'setProjectCatalogId',
        'projectId' => 'setProjectId',
        'projectURL' => 'setProjectURL',
        'readme' => 'setReadme',
        'removed' => 'setRemoved',
        'state' => 'setState',
        'status' => 'setStatus',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'upgradeFrom' => 'setUpgradeFrom',
        'uuid' => 'setUuid',
        'versionLinks' => 'setVersionLinks',
        'versions' => 'setVersions',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'annotations' => 'getAnnotations',
        'catalogId' => 'getCatalogId',
        'categories' => 'getCategories',
        'category' => 'getCategory',
        'clusterCatalogId' => 'getClusterCatalogId',
        'clusterId' => 'getClusterId',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'defaultTemplateVersionId' => 'getDefaultTemplateVersionId',
        'defaultVersion' => 'getDefaultVersion',
        'description' => 'getDescription',
        'folderName' => 'getFolderName',
        'icon' => 'getIcon',
        'iconFilename' => 'getIconFilename',
        'id' => 'getId',
        'labels' => 'getLabels',
        'maintainer' => 'getMaintainer',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'path' => 'getPath',
        'projectCatalogId' => 'getProjectCatalogId',
        'projectId' => 'getProjectId',
        'projectURL' => 'getProjectURL',
        'readme' => 'getReadme',
        'removed' => 'getRemoved',
        'state' => 'getState',
        'status' => 'getStatus',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'upgradeFrom' => 'getUpgradeFrom',
        'uuid' => 'getUuid',
        'versionLinks' => 'getVersionLinks',
        'versions' => 'getVersions',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['catalogId'] = isset($data['catalogId']) ? $data['catalogId'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['clusterCatalogId'] = isset($data['clusterCatalogId']) ? $data['clusterCatalogId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['defaultTemplateVersionId'] = isset($data['defaultTemplateVersionId']) ? $data['defaultTemplateVersionId'] : null;
        $this->container['defaultVersion'] = isset($data['defaultVersion']) ? $data['defaultVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folderName'] = isset($data['folderName']) ? $data['folderName'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['iconFilename'] = isset($data['iconFilename']) ? $data['iconFilename'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['maintainer'] = isset($data['maintainer']) ? $data['maintainer'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['projectCatalogId'] = isset($data['projectCatalogId']) ? $data['projectCatalogId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectURL'] = isset($data['projectURL']) ? $data['projectURL'] : null;
        $this->container['readme'] = isset($data['readme']) ? $data['readme'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['upgradeFrom'] = isset($data['upgradeFrom']) ? $data['upgradeFrom'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['versionLinks'] = isset($data['versionLinks']) ? $data['versionLinks'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
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
     * Gets catalogId
     * @return string
     */
    public function getCatalogId()
    {
        return $this->container['catalogId'];
    }

    /**
     * Sets catalogId
     * @param string $catalogId
     * @return $this
     */
    public function setCatalogId($catalogId)
    {
        $this->container['catalogId'] = $catalogId;

        return $this;
    }


    /**
     * Gets categories
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param string[] $categories
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }


    /**
     * Gets category
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }


    /**
     * Gets clusterCatalogId
     * @return string
     */
    public function getClusterCatalogId()
    {
        return $this->container['clusterCatalogId'];
    }

    /**
     * Sets clusterCatalogId
     * @param string $clusterCatalogId
     * @return $this
     */
    public function setClusterCatalogId($clusterCatalogId)
    {
        $this->container['clusterCatalogId'] = $clusterCatalogId;

        return $this;
    }


    /**
     * Gets clusterId
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
     * Sets clusterId
     * @param string $clusterId
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;

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
     * Gets defaultTemplateVersionId
     * @return string
     */
    public function getDefaultTemplateVersionId()
    {
        return $this->container['defaultTemplateVersionId'];
    }

    /**
     * Sets defaultTemplateVersionId
     * @param string $defaultTemplateVersionId
     * @return $this
     */
    public function setDefaultTemplateVersionId($defaultTemplateVersionId)
    {
        $this->container['defaultTemplateVersionId'] = $defaultTemplateVersionId;

        return $this;
    }


    /**
     * Gets defaultVersion
     * @return string
     */
    public function getDefaultVersion()
    {
        return $this->container['defaultVersion'];
    }

    /**
     * Sets defaultVersion
     * @param string $defaultVersion
     * @return $this
     */
    public function setDefaultVersion($defaultVersion)
    {
        $this->container['defaultVersion'] = $defaultVersion;

        return $this;
    }


    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }


    /**
     * Gets folderName
     * @return string
     */
    public function getFolderName()
    {
        return $this->container['folderName'];
    }

    /**
     * Sets folderName
     * @param string $folderName
     * @return $this
     */
    public function setFolderName($folderName)
    {
        $this->container['folderName'] = $folderName;

        return $this;
    }


    /**
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }


    /**
     * Gets iconFilename
     * @return string
     */
    public function getIconFilename()
    {
        return $this->container['iconFilename'];
    }

    /**
     * Sets iconFilename
     * @param string $iconFilename
     * @return $this
     */
    public function setIconFilename($iconFilename)
    {
        $this->container['iconFilename'] = $iconFilename;

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
     * Gets maintainer
     * @return string
     */
    public function getMaintainer()
    {
        return $this->container['maintainer'];
    }

    /**
     * Sets maintainer
     * @param string $maintainer
     * @return $this
     */
    public function setMaintainer($maintainer)
    {
        $this->container['maintainer'] = $maintainer;

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
     * Gets projectCatalogId
     * @return string
     */
    public function getProjectCatalogId()
    {
        return $this->container['projectCatalogId'];
    }

    /**
     * Sets projectCatalogId
     * @param string $projectCatalogId
     * @return $this
     */
    public function setProjectCatalogId($projectCatalogId)
    {
        $this->container['projectCatalogId'] = $projectCatalogId;

        return $this;
    }


    /**
     * Gets projectId
     * @return string
     */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
     * Sets projectId
     * @param string $projectId
     * @return $this
     */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;

        return $this;
    }


    /**
     * Gets projectURL
     * @return string
     */
    public function getProjectURL()
    {
        return $this->container['projectURL'];
    }

    /**
     * Sets projectURL
     * @param string $projectURL
     * @return $this
     */
    public function setProjectURL($projectURL)
    {
        $this->container['projectURL'] = $projectURL;

        return $this;
    }


    /**
     * Gets readme
     * @return string
     */
    public function getReadme()
    {
        return $this->container['readme'];
    }

    /**
     * Sets readme
     * @param string $readme
     * @return $this
     */
    public function setReadme($readme)
    {
        $this->container['readme'] = $readme;

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
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }


    /**
     * Gets status
     * @return \Rancher\Model\TemplateStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Rancher\Model\TemplateStatus $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }


    /**
     * Gets transitioning
     * @return string
     */
    public function getTransitioning()
    {
        return $this->container['transitioning'];
    }

    /**
     * Sets transitioning
     * @param string $transitioning
     * @return $this
     */
    public function setTransitioning($transitioning)
    {
        $this->container['transitioning'] = $transitioning;

        return $this;
    }


    /**
     * Gets transitioningMessage
     * @return string
     */
    public function getTransitioningMessage()
    {
        return $this->container['transitioningMessage'];
    }

    /**
     * Sets transitioningMessage
     * @param string $transitioningMessage
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage)
    {
        $this->container['transitioningMessage'] = $transitioningMessage;

        return $this;
    }


    /**
     * Gets upgradeFrom
     * @return string
     */
    public function getUpgradeFrom()
    {
        return $this->container['upgradeFrom'];
    }

    /**
     * Sets upgradeFrom
     * @param string $upgradeFrom
     * @return $this
     */
    public function setUpgradeFrom($upgradeFrom)
    {
        $this->container['upgradeFrom'] = $upgradeFrom;

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
     * Gets versionLinks
     * @return string[]
     */
    public function getVersionLinks()
    {
        return $this->container['versionLinks'];
    }

    /**
     * Sets versionLinks
     * @param string[] $versionLinks
     * @return $this
     */
    public function setVersionLinks($versionLinks)
    {
        $this->container['versionLinks'] = $versionLinks;

        return $this;
    }


    /**
     * Gets versions
     * @return \Rancher\Model\TemplateVersionSpec[]
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     * @param \Rancher\Model\TemplateVersionSpec[] $versions
     * @return $this
     */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;

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

