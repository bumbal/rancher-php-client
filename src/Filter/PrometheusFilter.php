<?php

/**
 * PrometheusFilter
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Filter;

use Rancher\AbstractFilter;

class PrometheusFilter extends AbstractFilter
{
    /**
     * Gets baseImage
     * @return string
     */
    public function getBaseImage()
    {
        return $this->container['baseImage'];
    }

    /**
     * Sets baseImage
     * @param string $baseImage
     * @param string $option
     * @return $this
     */
    public function setBaseImage($baseImage, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['baseImage'.$option] = $baseImage;

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
     * Gets enableAdminAPI
     * @return string
     */
    public function getEnableAdminAPI()
    {
        return $this->container['enableAdminAPI'];
    }

    /**
     * Sets enableAdminAPI
     * @param string $enableAdminAPI
     * @param string $option
     * @return $this
     */
    public function setEnableAdminAPI($enableAdminAPI, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['enableAdminAPI'.$option] = $enableAdminAPI;

        return $this;
    }


    /**
     * Gets evaluationInterval
     * @return string
     */
    public function getEvaluationInterval()
    {
        return $this->container['evaluationInterval'];
    }

    /**
     * Sets evaluationInterval
     * @param string $evaluationInterval
     * @param string $option
     * @return $this
     */
    public function setEvaluationInterval($evaluationInterval, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['evaluationInterval'.$option] = $evaluationInterval;

        return $this;
    }


    /**
     * Gets externalUrl
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->container['externalUrl'];
    }

    /**
     * Sets externalUrl
     * @param string $externalUrl
     * @param string $option
     * @return $this
     */
    public function setExternalUrl($externalUrl, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['externalUrl'.$option] = $externalUrl;

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
     * @param string $option
     * @return $this
     */
    public function setImage($image, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['image'.$option] = $image;

        return $this;
    }


    /**
     * Gets listenLocal
     * @return string
     */
    public function getListenLocal()
    {
        return $this->container['listenLocal'];
    }

    /**
     * Sets listenLocal
     * @param string $listenLocal
     * @param string $option
     * @return $this
     */
    public function setListenLocal($listenLocal, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['listenLocal'.$option] = $listenLocal;

        return $this;
    }


    /**
     * Gets logFormat
     * @return string
     */
    public function getLogFormat()
    {
        return $this->container['logFormat'];
    }

    /**
     * Sets logFormat
     * @param string $logFormat
     * @param string $option
     * @return $this
     */
    public function setLogFormat($logFormat, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['logFormat'.$option] = $logFormat;

        return $this;
    }


    /**
     * Gets logLevel
     * @return string
     */
    public function getLogLevel()
    {
        return $this->container['logLevel'];
    }

    /**
     * Sets logLevel
     * @param string $logLevel
     * @param string $option
     * @return $this
     */
    public function setLogLevel($logLevel, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['logLevel'.$option] = $logLevel;

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
     * Gets namespaceId
     * @return string
     */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
     * Sets namespaceId
     * @param string $namespaceId
     * @param string $option
     * @return $this
     */
    public function setNamespaceId($namespaceId, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['namespaceId'.$option] = $namespaceId;

        return $this;
    }


    /**
     * Gets portName
     * @return string
     */
    public function getPortName()
    {
        return $this->container['portName'];
    }

    /**
     * Sets portName
     * @param string $portName
     * @param string $option
     * @return $this
     */
    public function setPortName($portName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['portName'.$option] = $portName;

        return $this;
    }


    /**
     * Gets priorityClassName
     * @return string
     */
    public function getPriorityClassName()
    {
        return $this->container['priorityClassName'];
    }

    /**
     * Sets priorityClassName
     * @param string $priorityClassName
     * @param string $option
     * @return $this
     */
    public function setPriorityClassName($priorityClassName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['priorityClassName'.$option] = $priorityClassName;

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
     * Gets prometheusExternalLabelName
     * @return string
     */
    public function getPrometheusExternalLabelName()
    {
        return $this->container['prometheusExternalLabelName'];
    }

    /**
     * Sets prometheusExternalLabelName
     * @param string $prometheusExternalLabelName
     * @param string $option
     * @return $this
     */
    public function setPrometheusExternalLabelName($prometheusExternalLabelName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['prometheusExternalLabelName'.$option] = $prometheusExternalLabelName;

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
     * Gets replicaExternalLabelName
     * @return string
     */
    public function getReplicaExternalLabelName()
    {
        return $this->container['replicaExternalLabelName'];
    }

    /**
     * Sets replicaExternalLabelName
     * @param string $replicaExternalLabelName
     * @param string $option
     * @return $this
     */
    public function setReplicaExternalLabelName($replicaExternalLabelName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['replicaExternalLabelName'.$option] = $replicaExternalLabelName;

        return $this;
    }


    /**
     * Gets replicas
     * @return string
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     * @param string $replicas
     * @param string $option
     * @return $this
     */
    public function setReplicas($replicas, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['replicas'.$option] = $replicas;

        return $this;
    }


    /**
     * Gets retention
     * @return string
     */
    public function getRetention()
    {
        return $this->container['retention'];
    }

    /**
     * Sets retention
     * @param string $retention
     * @param string $option
     * @return $this
     */
    public function setRetention($retention, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['retention'.$option] = $retention;

        return $this;
    }


    /**
     * Gets retentionSize
     * @return string
     */
    public function getRetentionSize()
    {
        return $this->container['retentionSize'];
    }

    /**
     * Sets retentionSize
     * @param string $retentionSize
     * @param string $option
     * @return $this
     */
    public function setRetentionSize($retentionSize, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['retentionSize'.$option] = $retentionSize;

        return $this;
    }


    /**
     * Gets routePrefix
     * @return string
     */
    public function getRoutePrefix()
    {
        return $this->container['routePrefix'];
    }

    /**
     * Sets routePrefix
     * @param string $routePrefix
     * @param string $option
     * @return $this
     */
    public function setRoutePrefix($routePrefix, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['routePrefix'.$option] = $routePrefix;

        return $this;
    }


    /**
     * Gets scrapeInterval
     * @return string
     */
    public function getScrapeInterval()
    {
        return $this->container['scrapeInterval'];
    }

    /**
     * Sets scrapeInterval
     * @param string $scrapeInterval
     * @param string $option
     * @return $this
     */
    public function setScrapeInterval($scrapeInterval, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['scrapeInterval'.$option] = $scrapeInterval;

        return $this;
    }


    /**
     * Gets serviceAccountName
     * @return string
     */
    public function getServiceAccountName()
    {
        return $this->container['serviceAccountName'];
    }

    /**
     * Sets serviceAccountName
     * @param string $serviceAccountName
     * @param string $option
     * @return $this
     */
    public function setServiceAccountName($serviceAccountName, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['serviceAccountName'.$option] = $serviceAccountName;

        return $this;
    }


    /**
     * Gets sha
     * @return string
     */
    public function getSha()
    {
        return $this->container['sha'];
    }

    /**
     * Sets sha
     * @param string $sha
     * @param string $option
     * @return $this
     */
    public function setSha($sha, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['sha'.$option] = $sha;

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
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag
     * @param string $option
     * @return $this
     */
    public function setTag($tag, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['tag'.$option] = $tag;

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
     * @param string $option
     * @return $this
     */
    public function setVersion($version, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['version'.$option] = $version;

        return $this;
    }


    /**
     * Gets walCompression
     * @return string
     */
    public function getWalCompression()
    {
        return $this->container['walCompression'];
    }

    /**
     * Sets walCompression
     * @param string $walCompression
     * @param string $option
     * @return $this
     */
    public function setWalCompression($walCompression, $option = '')
    {
        if(!empty($option) && in_array($option, $this->allowedOptions))
        {
            $option = '_'.$option;
        }

        $this->container['walCompression'.$option] = $walCompression;

        return $this;
    }
}