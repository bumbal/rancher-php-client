<?php

namespace Rancher\Model;

use \ArrayAccess;

class Prometheus implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'additionalAlertManagerConfigs' => '\Rancher\Model\SecretKeySelector',
        'additionalAlertRelabelConfigs' => '\Rancher\Model\SecretKeySelector',
        'additionalScrapeConfigs' => '\Rancher\Model\SecretKeySelector',
        'affinity' => '\Rancher\Model\Affinity',
        'alerting' => '\Rancher\Model\AlertingSpec',
        'annotations' => 'map[string]',
        'baseImage' => 'string',
        'configMaps' => 'string[]',
        'containers' => '\Rancher\Model\Container[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'evaluationInterval' => 'string',
        'externalLabels' => 'map[string]',
        'externalUrl' => 'string',
        'imagePullSecrets' => '\Rancher\Model\LocalObjectReference[]',
        'labels' => 'map[string]',
        'listenLocal' => 'boolean',
        'logLevel' => 'string',
        'name' => '\Rancher\Model\DnsLabelRestricted',
        'namespaceId' => 'string',
        'nodeSelector' => 'map[string]',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'podMetadata' => '\Rancher\Model\ObjectMeta',
        'priorityClassName' => 'string',
        'projectId' => 'string',
        'remoteRead' => '\Rancher\Model\RemoteReadSpec[]',
        'remoteWrite' => '\Rancher\Model\RemoteWriteSpec[]',
        'removed' => '\DateTime',
        'replicas' => 'int',
        'resources' => '\Rancher\Model\ResourceRequirements',
        'retention' => 'string',
        'routePrefix' => 'string',
        'ruleSelector' => '\Rancher\Model\LabelSelector',
        'scrapeInterval' => 'string',
        'secrets' => 'string[]',
        'securityContext' => '\Rancher\Model\PodSecurityContext',
        'serviceAccountName' => 'string',
        'serviceMonitorSelector' => '\Rancher\Model\LabelSelector',
        'sha' => 'string',
        'state' => 'string',
        'storage' => '\Rancher\Model\StorageSpec',
        'tag' => 'string',
        'tolerations' => '\Rancher\Model\Toleration[]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'version' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'additionalAlertManagerConfigs' => 'setAdditionalAlertManagerConfigs',
        'additionalAlertRelabelConfigs' => 'setAdditionalAlertRelabelConfigs',
        'additionalScrapeConfigs' => 'setAdditionalScrapeConfigs',
        'affinity' => 'setAffinity',
        'alerting' => 'setAlerting',
        'annotations' => 'setAnnotations',
        'baseImage' => 'setBaseImage',
        'configMaps' => 'setConfigMaps',
        'containers' => 'setContainers',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'evaluationInterval' => 'setEvaluationInterval',
        'externalLabels' => 'setExternalLabels',
        'externalUrl' => 'setExternalUrl',
        'imagePullSecrets' => 'setImagePullSecrets',
        'labels' => 'setLabels',
        'listenLocal' => 'setListenLocal',
        'logLevel' => 'setLogLevel',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeSelector' => 'setNodeSelector',
        'ownerReferences' => 'setOwnerReferences',
        'podMetadata' => 'setPodMetadata',
        'priorityClassName' => 'setPriorityClassName',
        'projectId' => 'setProjectId',
        'remoteRead' => 'setRemoteRead',
        'remoteWrite' => 'setRemoteWrite',
        'removed' => 'setRemoved',
        'replicas' => 'setReplicas',
        'resources' => 'setResources',
        'retention' => 'setRetention',
        'routePrefix' => 'setRoutePrefix',
        'ruleSelector' => 'setRuleSelector',
        'scrapeInterval' => 'setScrapeInterval',
        'secrets' => 'setSecrets',
        'securityContext' => 'setSecurityContext',
        'serviceAccountName' => 'setServiceAccountName',
        'serviceMonitorSelector' => 'setServiceMonitorSelector',
        'sha' => 'setSha',
        'state' => 'setState',
        'storage' => 'setStorage',
        'tag' => 'setTag',
        'tolerations' => 'setTolerations',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'additionalAlertManagerConfigs' => 'getAdditionalAlertManagerConfigs',
        'additionalAlertRelabelConfigs' => 'getAdditionalAlertRelabelConfigs',
        'additionalScrapeConfigs' => 'getAdditionalScrapeConfigs',
        'affinity' => 'getAffinity',
        'alerting' => 'getAlerting',
        'annotations' => 'getAnnotations',
        'baseImage' => 'getBaseImage',
        'configMaps' => 'getConfigMaps',
        'containers' => 'getContainers',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'evaluationInterval' => 'getEvaluationInterval',
        'externalLabels' => 'getExternalLabels',
        'externalUrl' => 'getExternalUrl',
        'imagePullSecrets' => 'getImagePullSecrets',
        'labels' => 'getLabels',
        'listenLocal' => 'getListenLocal',
        'logLevel' => 'getLogLevel',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeSelector' => 'getNodeSelector',
        'ownerReferences' => 'getOwnerReferences',
        'podMetadata' => 'getPodMetadata',
        'priorityClassName' => 'getPriorityClassName',
        'projectId' => 'getProjectId',
        'remoteRead' => 'getRemoteRead',
        'remoteWrite' => 'getRemoteWrite',
        'removed' => 'getRemoved',
        'replicas' => 'getReplicas',
        'resources' => 'getResources',
        'retention' => 'getRetention',
        'routePrefix' => 'getRoutePrefix',
        'ruleSelector' => 'getRuleSelector',
        'scrapeInterval' => 'getScrapeInterval',
        'secrets' => 'getSecrets',
        'securityContext' => 'getSecurityContext',
        'serviceAccountName' => 'getServiceAccountName',
        'serviceMonitorSelector' => 'getServiceMonitorSelector',
        'sha' => 'getSha',
        'state' => 'getState',
        'storage' => 'getStorage',
        'tag' => 'getTag',
        'tolerations' => 'getTolerations',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['additionalAlertManagerConfigs'] = isset($data['additionalAlertManagerConfigs']) ? $data['additionalAlertManagerConfigs'] : null;
        $this->container['additionalAlertRelabelConfigs'] = isset($data['additionalAlertRelabelConfigs']) ? $data['additionalAlertRelabelConfigs'] : null;
        $this->container['additionalScrapeConfigs'] = isset($data['additionalScrapeConfigs']) ? $data['additionalScrapeConfigs'] : null;
        $this->container['affinity'] = isset($data['affinity']) ? $data['affinity'] : null;
        $this->container['alerting'] = isset($data['alerting']) ? $data['alerting'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['baseImage'] = isset($data['baseImage']) ? $data['baseImage'] : null;
        $this->container['configMaps'] = isset($data['configMaps']) ? $data['configMaps'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['evaluationInterval'] = isset($data['evaluationInterval']) ? $data['evaluationInterval'] : null;
        $this->container['externalLabels'] = isset($data['externalLabels']) ? $data['externalLabels'] : null;
        $this->container['externalUrl'] = isset($data['externalUrl']) ? $data['externalUrl'] : null;
        $this->container['imagePullSecrets'] = isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['listenLocal'] = isset($data['listenLocal']) ? $data['listenLocal'] : null;
        $this->container['logLevel'] = isset($data['logLevel']) ? $data['logLevel'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podMetadata'] = isset($data['podMetadata']) ? $data['podMetadata'] : null;
        $this->container['priorityClassName'] = isset($data['priorityClassName']) ? $data['priorityClassName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['remoteRead'] = isset($data['remoteRead']) ? $data['remoteRead'] : null;
        $this->container['remoteWrite'] = isset($data['remoteWrite']) ? $data['remoteWrite'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['retention'] = isset($data['retention']) ? $data['retention'] : null;
        $this->container['routePrefix'] = isset($data['routePrefix']) ? $data['routePrefix'] : null;
        $this->container['ruleSelector'] = isset($data['ruleSelector']) ? $data['ruleSelector'] : null;
        $this->container['scrapeInterval'] = isset($data['scrapeInterval']) ? $data['scrapeInterval'] : null;
        $this->container['secrets'] = isset($data['secrets']) ? $data['secrets'] : null;
        $this->container['securityContext'] = isset($data['securityContext']) ? $data['securityContext'] : null;
        $this->container['serviceAccountName'] = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->container['serviceMonitorSelector'] = isset($data['serviceMonitorSelector']) ? $data['serviceMonitorSelector'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets additionalAlertManagerConfigs
     * @return \Rancher\Model\SecretKeySelector
     */
    public function getAdditionalAlertManagerConfigs()
    {
        return $this->container['additionalAlertManagerConfigs'];
    }

    /**
     * Sets additionalAlertManagerConfigs
     * @param \Rancher\Model\SecretKeySelector $additionalAlertManagerConfigs
     * @return $this
     */
    public function setAdditionalAlertManagerConfigs($additionalAlertManagerConfigs)
    {
        $this->container['additionalAlertManagerConfigs'] = $additionalAlertManagerConfigs;

        return $this;
    }


    /**
     * Gets additionalAlertRelabelConfigs
     * @return \Rancher\Model\SecretKeySelector
     */
    public function getAdditionalAlertRelabelConfigs()
    {
        return $this->container['additionalAlertRelabelConfigs'];
    }

    /**
     * Sets additionalAlertRelabelConfigs
     * @param \Rancher\Model\SecretKeySelector $additionalAlertRelabelConfigs
     * @return $this
     */
    public function setAdditionalAlertRelabelConfigs($additionalAlertRelabelConfigs)
    {
        $this->container['additionalAlertRelabelConfigs'] = $additionalAlertRelabelConfigs;

        return $this;
    }


    /**
     * Gets additionalScrapeConfigs
     * @return \Rancher\Model\SecretKeySelector
     */
    public function getAdditionalScrapeConfigs()
    {
        return $this->container['additionalScrapeConfigs'];
    }

    /**
     * Sets additionalScrapeConfigs
     * @param \Rancher\Model\SecretKeySelector $additionalScrapeConfigs
     * @return $this
     */
    public function setAdditionalScrapeConfigs($additionalScrapeConfigs)
    {
        $this->container['additionalScrapeConfigs'] = $additionalScrapeConfigs;

        return $this;
    }


    /**
     * Gets affinity
     * @return \Rancher\Model\Affinity
     */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
     * Sets affinity
     * @param \Rancher\Model\Affinity $affinity
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;

        return $this;
    }


    /**
     * Gets alerting
     * @return \Rancher\Model\AlertingSpec
     */
    public function getAlerting()
    {
        return $this->container['alerting'];
    }

    /**
     * Sets alerting
     * @param \Rancher\Model\AlertingSpec $alerting
     * @return $this
     */
    public function setAlerting($alerting)
    {
        $this->container['alerting'] = $alerting;

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
     * @return $this
     */
    public function setBaseImage($baseImage)
    {
        $this->container['baseImage'] = $baseImage;

        return $this;
    }


    /**
     * Gets configMaps
     * @return string[]
     */
    public function getConfigMaps()
    {
        return $this->container['configMaps'];
    }

    /**
     * Sets configMaps
     * @param string[] $configMaps
     * @return $this
     */
    public function setConfigMaps($configMaps)
    {
        $this->container['configMaps'] = $configMaps;

        return $this;
    }


    /**
     * Gets containers
     * @return \Rancher\Model\Container[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     * @param \Rancher\Model\Container[] $containers
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

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
     * @return $this
     */
    public function setEvaluationInterval($evaluationInterval)
    {
        $this->container['evaluationInterval'] = $evaluationInterval;

        return $this;
    }


    /**
     * Gets externalLabels
     * @return string[]
     */
    public function getExternalLabels()
    {
        return $this->container['externalLabels'];
    }

    /**
     * Sets externalLabels
     * @param string[] $externalLabels
     * @return $this
     */
    public function setExternalLabels($externalLabels)
    {
        $this->container['externalLabels'] = $externalLabels;

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
     * @return $this
     */
    public function setExternalUrl($externalUrl)
    {
        $this->container['externalUrl'] = $externalUrl;

        return $this;
    }


    /**
     * Gets imagePullSecrets
     * @return \Rancher\Model\LocalObjectReference[]
     */
    public function getImagePullSecrets()
    {
        return $this->container['imagePullSecrets'];
    }

    /**
     * Sets imagePullSecrets
     * @param \Rancher\Model\LocalObjectReference[] $imagePullSecrets
     * @return $this
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->container['imagePullSecrets'] = $imagePullSecrets;

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
     * Gets listenLocal
     * @return boolean
     */
    public function getListenLocal()
    {
        return $this->container['listenLocal'];
    }

    /**
     * Sets listenLocal
     * @param boolean $listenLocal
     * @return $this
     */
    public function setListenLocal($listenLocal)
    {
        $this->container['listenLocal'] = $listenLocal;

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
     * @return $this
     */
    public function setLogLevel($logLevel)
    {
        $this->container['logLevel'] = $logLevel;

        return $this;
    }


    /**
     * Gets name
     * @return \Rancher\Model\DnsLabelRestricted
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Rancher\Model\DnsLabelRestricted $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @return $this
     */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;

        return $this;
    }


    /**
     * Gets nodeSelector
     * @return string[]
     */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
     * Sets nodeSelector
     * @param string[] $nodeSelector
     * @return $this
     */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;

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
     * Gets podMetadata
     * @return \Rancher\Model\ObjectMeta
     */
    public function getPodMetadata()
    {
        return $this->container['podMetadata'];
    }

    /**
     * Sets podMetadata
     * @param \Rancher\Model\ObjectMeta $podMetadata
     * @return $this
     */
    public function setPodMetadata($podMetadata)
    {
        $this->container['podMetadata'] = $podMetadata;

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
     * @return $this
     */
    public function setPriorityClassName($priorityClassName)
    {
        $this->container['priorityClassName'] = $priorityClassName;

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
     * Gets remoteRead
     * @return \Rancher\Model\RemoteReadSpec[]
     */
    public function getRemoteRead()
    {
        return $this->container['remoteRead'];
    }

    /**
     * Sets remoteRead
     * @param \Rancher\Model\RemoteReadSpec[] $remoteRead
     * @return $this
     */
    public function setRemoteRead($remoteRead)
    {
        $this->container['remoteRead'] = $remoteRead;

        return $this;
    }


    /**
     * Gets remoteWrite
     * @return \Rancher\Model\RemoteWriteSpec[]
     */
    public function getRemoteWrite()
    {
        return $this->container['remoteWrite'];
    }

    /**
     * Sets remoteWrite
     * @param \Rancher\Model\RemoteWriteSpec[] $remoteWrite
     * @return $this
     */
    public function setRemoteWrite($remoteWrite)
    {
        $this->container['remoteWrite'] = $remoteWrite;

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
     * Gets replicas
     * @return int
     */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
     * Sets replicas
     * @param int $replicas
     * @return $this
     */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;

        return $this;
    }


    /**
     * Gets resources
     * @return \Rancher\Model\ResourceRequirements
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \Rancher\Model\ResourceRequirements $resources
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

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
     * @return $this
     */
    public function setRetention($retention)
    {
        $this->container['retention'] = $retention;

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
     * @return $this
     */
    public function setRoutePrefix($routePrefix)
    {
        $this->container['routePrefix'] = $routePrefix;

        return $this;
    }


    /**
     * Gets ruleSelector
     * @return \Rancher\Model\LabelSelector
     */
    public function getRuleSelector()
    {
        return $this->container['ruleSelector'];
    }

    /**
     * Sets ruleSelector
     * @param \Rancher\Model\LabelSelector $ruleSelector
     * @return $this
     */
    public function setRuleSelector($ruleSelector)
    {
        $this->container['ruleSelector'] = $ruleSelector;

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
     * @return $this
     */
    public function setScrapeInterval($scrapeInterval)
    {
        $this->container['scrapeInterval'] = $scrapeInterval;

        return $this;
    }


    /**
     * Gets secrets
     * @return string[]
     */
    public function getSecrets()
    {
        return $this->container['secrets'];
    }

    /**
     * Sets secrets
     * @param string[] $secrets
     * @return $this
     */
    public function setSecrets($secrets)
    {
        $this->container['secrets'] = $secrets;

        return $this;
    }


    /**
     * Gets securityContext
     * @return \Rancher\Model\PodSecurityContext
     */
    public function getSecurityContext()
    {
        return $this->container['securityContext'];
    }

    /**
     * Sets securityContext
     * @param \Rancher\Model\PodSecurityContext $securityContext
     * @return $this
     */
    public function setSecurityContext($securityContext)
    {
        $this->container['securityContext'] = $securityContext;

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
     * @return $this
     */
    public function setServiceAccountName($serviceAccountName)
    {
        $this->container['serviceAccountName'] = $serviceAccountName;

        return $this;
    }


    /**
     * Gets serviceMonitorSelector
     * @return \Rancher\Model\LabelSelector
     */
    public function getServiceMonitorSelector()
    {
        return $this->container['serviceMonitorSelector'];
    }

    /**
     * Sets serviceMonitorSelector
     * @param \Rancher\Model\LabelSelector $serviceMonitorSelector
     * @return $this
     */
    public function setServiceMonitorSelector($serviceMonitorSelector)
    {
        $this->container['serviceMonitorSelector'] = $serviceMonitorSelector;

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
     * @return $this
     */
    public function setSha($sha)
    {
        $this->container['sha'] = $sha;

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
     * Gets storage
     * @return \Rancher\Model\StorageSpec
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     * @param \Rancher\Model\StorageSpec $storage
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

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
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }


    /**
     * Gets tolerations
     * @return \Rancher\Model\Toleration[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     * @param \Rancher\Model\Toleration[] $tolerations
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

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

