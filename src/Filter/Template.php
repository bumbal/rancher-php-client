<?php

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class Template extends AbstractFilter
{
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
     * @param string $option
     * @return $this
     */
    public function setCatalogId($catalogId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['catalogId'.$option] = $catalogId;

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
     * @param string $option
     * @return $this
     */
    public function setCategory($category, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['category'.$option] = $category;

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
     * @param string $option
     * @return $this
     */
    public function setClusterCatalogId($clusterCatalogId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterCatalogId'.$option] = $clusterCatalogId;

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
     * @param string $option
     * @return $this
     */
    public function setClusterId($clusterId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['clusterId'.$option] = $clusterId;

        return $this;
    }


    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created
     * @param string $option
     * @return $this
     */
    public function setCreated($created, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['created'.$option] = $created;

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
     * @param string $option
     * @return $this
     */
    public function setCreatorId($creatorId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['creatorId'.$option] = $creatorId;

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
     * @param string $option
     * @return $this
     */
    public function setDefaultTemplateVersionId($defaultTemplateVersionId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultTemplateVersionId'.$option] = $defaultTemplateVersionId;

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
     * @param string $option
     * @return $this
     */
    public function setDefaultVersion($defaultVersion, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['defaultVersion'.$option] = $defaultVersion;

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
     * @param string $option
     * @return $this
     */
    public function setDescription($description, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['description'.$option] = $description;

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
     * @param string $option
     * @return $this
     */
    public function setFolderName($folderName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['folderName'.$option] = $folderName;

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
     * @param string $option
     * @return $this
     */
    public function setIcon($icon, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['icon'.$option] = $icon;

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
     * @param string $option
     * @return $this
     */
    public function setIconFilename($iconFilename, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['iconFilename'.$option] = $iconFilename;

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
     * @param string $option
     * @return $this
     */
    public function setId($id, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['id'.$option] = $id;

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
     * @param string $option
     * @return $this
     */
    public function setMaintainer($maintainer, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['maintainer'.$option] = $maintainer;

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
     * @param string $option
     * @return $this
     */
    public function setName($name, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['name'.$option] = $name;

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
     * @param string $option
     * @return $this
     */
    public function setPath($path, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['path'.$option] = $path;

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
     * @param string $option
     * @return $this
     */
    public function setProjectCatalogId($projectCatalogId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['projectCatalogId'.$option] = $projectCatalogId;

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
     * @param string $option
     * @return $this
     */
    public function setProjectId($projectId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['projectId'.$option] = $projectId;

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
     * @param string $option
     * @return $this
     */
    public function setProjectURL($projectURL, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['projectURL'.$option] = $projectURL;

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
     * @param string $option
     * @return $this
     */
    public function setReadme($readme, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['readme'.$option] = $readme;

        return $this;
    }


    /**
     * Gets removed
     * @return string
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed
     * @param string $removed
     * @param string $option
     * @return $this
     */
    public function setRemoved($removed, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['removed'.$option] = $removed;

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
     * @param string $option
     * @return $this
     */
    public function setState($state, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['state'.$option] = $state;

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
     * @param string $option
     * @return $this
     */
    public function setTransitioning($transitioning, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioning'.$option] = $transitioning;

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
     * @param string $option
     * @return $this
     */
    public function setTransitioningMessage($transitioningMessage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['transitioningMessage'.$option] = $transitioningMessage;

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
     * @param string $option
     * @return $this
     */
    public function setUpgradeFrom($upgradeFrom, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['upgradeFrom'.$option] = $upgradeFrom;

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
     * @param string $option
     * @return $this
     */
    public function setUuid($uuid, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['uuid'.$option] = $uuid;

        return $this;
    }
}