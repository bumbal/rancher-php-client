<?php

/**
 * PrometheusModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class PrometheusModel implements ArrayAccess
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
        'additionalAlertManagerConfigs',
        'additionalAlertRelabelConfigs',
        'additionalScrapeConfigs',
        'affinity',
        'alerting',
        'allowOverlappingBlocks',
        'annotations',
        'arbitraryFSAccessThroughSMs',
        'baseImage',
        'configMaps',
        'containers',
        'description',
        'disableCompaction',
        'enableAdminAPI',
        'enforcedNamespaceLabel',
        'enforcedSampleLimit',
        'enforcedTargetLimit',
        'evaluationInterval',
        'externalLabels',
        'externalUrl',
        'ignoreNamespaceSelectors',
        'image',
        'imagePullSecrets',
        'initContainers',
        'labels',
        'listenLocal',
        'logFormat',
        'logLevel',
        'name',
        'namespaceId',
        'nodeSelector',
        'overrideHonorLabels',
        'overrideHonorTimestamps',
        'podMetadata',
        'podMonitorNamespaceSelector',
        'podMonitorSelector',
        'portName',
        'priorityClassName',
        'probeNamespaceSelector',
        'probeSelector',
        'projectId',
        'prometheusExternalLabelName',
        'prometheusRulesExcludedFromEnforce',
        'query',
        'queryLogFile',
        'remoteRead',
        'remoteWrite',
        'replicaExternalLabelName',
        'replicas',
        'resources',
        'retention',
        'retentionSize',
        'routePrefix',
        'ruleSelector',
        'rules',
        'scrapeInterval',
        'scrapeTimeout',
        'secrets',
        'securityContext',
        'serviceAccountName',
        'serviceMonitorSelector',
        'sha',
        'shards',
        'storage',
        'tag',
        'tolerations',
        'topologySpreadConstraints',
        'version',
        'volumeMounts',
        'volumes',
        'walCompression',
        'web',
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
        'additionalAlertManagerConfigs',
        'additionalAlertRelabelConfigs',
        'additionalScrapeConfigs',
        'affinity',
        'alerting',
        'allowOverlappingBlocks',
        'annotations',
        'arbitraryFSAccessThroughSMs',
        'baseImage',
        'configMaps',
        'containers',
        'description',
        'disableCompaction',
        'enableAdminAPI',
        'enforcedNamespaceLabel',
        'enforcedSampleLimit',
        'enforcedTargetLimit',
        'evaluationInterval',
        'externalLabels',
        'externalUrl',
        'ignoreNamespaceSelectors',
        'image',
        'imagePullSecrets',
        'initContainers',
        'labels',
        'listenLocal',
        'logFormat',
        'logLevel',
        'nodeSelector',
        'overrideHonorLabels',
        'overrideHonorTimestamps',
        'podMetadata',
        'podMonitorNamespaceSelector',
        'podMonitorSelector',
        'portName',
        'priorityClassName',
        'probeNamespaceSelector',
        'probeSelector',
        'prometheusExternalLabelName',
        'prometheusRulesExcludedFromEnforce',
        'query',
        'queryLogFile',
        'remoteRead',
        'remoteWrite',
        'replicaExternalLabelName',
        'replicas',
        'resources',
        'retention',
        'retentionSize',
        'routePrefix',
        'ruleSelector',
        'rules',
        'scrapeInterval',
        'scrapeTimeout',
        'secrets',
        'securityContext',
        'serviceAccountName',
        'serviceMonitorSelector',
        'sha',
        'shards',
        'storage',
        'tag',
        'tolerations',
        'topologySpreadConstraints',
        'version',
        'volumeMounts',
        'volumes',
        'walCompression',
        'web',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'additionalAlertManagerConfigs' => '\Rancher\Model\SecretKeySelectorModel',
        'additionalAlertRelabelConfigs' => '\Rancher\Model\SecretKeySelectorModel',
        'additionalScrapeConfigs' => '\Rancher\Model\SecretKeySelectorModel',
        'affinity' => '\Rancher\Model\AffinityModel',
        'alerting' => '\Rancher\Model\AlertingSpecModel',
        'allowOverlappingBlocks' => 'boolean',
        'annotations' => 'map[string,string]',
        'arbitraryFSAccessThroughSMs' => '\Rancher\Model\ArbitraryFSAccessThroughSMsConfigModel',
        'baseImage' => 'string',
        'configMaps' => 'string[]',
        'containers' => '\Rancher\Model\ContainerModel[]',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'disableCompaction' => 'boolean',
        'enableAdminAPI' => 'boolean',
        'enforcedNamespaceLabel' => 'string',
        'enforcedSampleLimit' => 'int',
        'enforcedTargetLimit' => 'int',
        'evaluationInterval' => 'string',
        'externalLabels' => 'map[string,string]',
        'externalUrl' => 'string',
        'ignoreNamespaceSelectors' => 'boolean',
        'image' => 'string',
        'imagePullSecrets' => '\Rancher\Model\LocalObjectReferenceModel[]',
        'initContainers' => '\Rancher\Model\ContainerModel[]',
        'labels' => 'map[string,string]',
        'listenLocal' => 'boolean',
        'logFormat' => 'string',
        'logLevel' => 'string',
        'name' => 'string',
        'namespaceId' => 'string',
        'nodeSelector' => 'map[string,string]',
        'overrideHonorLabels' => 'boolean',
        'overrideHonorTimestamps' => 'boolean',
        'ownerReferences' => '\Rancher\Model\OwnerReferenceModel[]',
        'podMetadata' => '\Rancher\Model\EmbeddedObjectMetadataModel',
        'podMonitorNamespaceSelector' => '\Rancher\Model\LabelSelectorModel',
        'podMonitorSelector' => '\Rancher\Model\LabelSelectorModel',
        'portName' => 'string',
        'priorityClassName' => 'string',
        'probeNamespaceSelector' => '\Rancher\Model\LabelSelectorModel',
        'probeSelector' => '\Rancher\Model\LabelSelectorModel',
        'projectId' => 'string',
        'prometheusExternalLabelName' => 'string',
        'prometheusRulesExcludedFromEnforce' => '\Rancher\Model\PrometheusRuleExcludeConfigModel[]',
        'query' => '\Rancher\Model\QuerySpecModel',
        'queryLogFile' => 'string',
        'remoteRead' => '\Rancher\Model\RemoteReadSpecModel[]',
        'remoteWrite' => '\Rancher\Model\RemoteWriteSpecModel[]',
        'removed' => '\DateTime',
        'replicaExternalLabelName' => 'string',
        'replicas' => 'int',
        'resources' => '\Rancher\Model\ResourceRequirementsModel',
        'retention' => 'string',
        'retentionSize' => 'string',
        'routePrefix' => 'string',
        'ruleSelector' => '\Rancher\Model\LabelSelectorModel',
        'rules' => '\Rancher\Model\RulesModel',
        'scrapeInterval' => 'string',
        'scrapeTimeout' => 'string',
        'secrets' => 'string[]',
        'securityContext' => '\Rancher\Model\PodSecurityContextModel',
        'serviceAccountName' => 'string',
        'serviceMonitorSelector' => '\Rancher\Model\LabelSelectorModel',
        'sha' => 'string',
        'shards' => 'int',
        'state' => 'string',
        'storage' => '\Rancher\Model\StorageSpecModel',
        'tag' => 'string',
        'tolerations' => '\Rancher\Model\TolerationModel[]',
        'topologySpreadConstraints' => '\Rancher\Model\TopologySpreadConstraintModel[]',
        'transitioning' => 'string',
        'transitioningMessage' => 'string',
        'uuid' => 'string',
        'version' => 'string',
        'volumeMounts' => '\Rancher\Model\VolumeMountModel[]',
        'volumes' => '\Rancher\Model\VolumeModel[]',
        'walCompression' => 'boolean',
        'web' => '\Rancher\Model\WebSpecModel',
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
        'allowOverlappingBlocks' => 'setAllowOverlappingBlocks',
        'annotations' => 'setAnnotations',
        'arbitraryFSAccessThroughSMs' => 'setArbitraryFSAccessThroughSMs',
        'baseImage' => 'setBaseImage',
        'configMaps' => 'setConfigMaps',
        'containers' => 'setContainers',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'disableCompaction' => 'setDisableCompaction',
        'enableAdminAPI' => 'setEnableAdminAPI',
        'enforcedNamespaceLabel' => 'setEnforcedNamespaceLabel',
        'enforcedSampleLimit' => 'setEnforcedSampleLimit',
        'enforcedTargetLimit' => 'setEnforcedTargetLimit',
        'evaluationInterval' => 'setEvaluationInterval',
        'externalLabels' => 'setExternalLabels',
        'externalUrl' => 'setExternalUrl',
        'ignoreNamespaceSelectors' => 'setIgnoreNamespaceSelectors',
        'image' => 'setImage',
        'imagePullSecrets' => 'setImagePullSecrets',
        'initContainers' => 'setInitContainers',
        'labels' => 'setLabels',
        'listenLocal' => 'setListenLocal',
        'logFormat' => 'setLogFormat',
        'logLevel' => 'setLogLevel',
        'name' => 'setName',
        'namespaceId' => 'setNamespaceId',
        'nodeSelector' => 'setNodeSelector',
        'overrideHonorLabels' => 'setOverrideHonorLabels',
        'overrideHonorTimestamps' => 'setOverrideHonorTimestamps',
        'ownerReferences' => 'setOwnerReferences',
        'podMetadata' => 'setPodMetadata',
        'podMonitorNamespaceSelector' => 'setPodMonitorNamespaceSelector',
        'podMonitorSelector' => 'setPodMonitorSelector',
        'portName' => 'setPortName',
        'priorityClassName' => 'setPriorityClassName',
        'probeNamespaceSelector' => 'setProbeNamespaceSelector',
        'probeSelector' => 'setProbeSelector',
        'projectId' => 'setProjectId',
        'prometheusExternalLabelName' => 'setPrometheusExternalLabelName',
        'prometheusRulesExcludedFromEnforce' => 'setPrometheusRulesExcludedFromEnforce',
        'query' => 'setQuery',
        'queryLogFile' => 'setQueryLogFile',
        'remoteRead' => 'setRemoteRead',
        'remoteWrite' => 'setRemoteWrite',
        'removed' => 'setRemoved',
        'replicaExternalLabelName' => 'setReplicaExternalLabelName',
        'replicas' => 'setReplicas',
        'resources' => 'setResources',
        'retention' => 'setRetention',
        'retentionSize' => 'setRetentionSize',
        'routePrefix' => 'setRoutePrefix',
        'ruleSelector' => 'setRuleSelector',
        'rules' => 'setRules',
        'scrapeInterval' => 'setScrapeInterval',
        'scrapeTimeout' => 'setScrapeTimeout',
        'secrets' => 'setSecrets',
        'securityContext' => 'setSecurityContext',
        'serviceAccountName' => 'setServiceAccountName',
        'serviceMonitorSelector' => 'setServiceMonitorSelector',
        'sha' => 'setSha',
        'shards' => 'setShards',
        'state' => 'setState',
        'storage' => 'setStorage',
        'tag' => 'setTag',
        'tolerations' => 'setTolerations',
        'topologySpreadConstraints' => 'setTopologySpreadConstraints',
        'transitioning' => 'setTransitioning',
        'transitioningMessage' => 'setTransitioningMessage',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
        'volumeMounts' => 'setVolumeMounts',
        'volumes' => 'setVolumes',
        'walCompression' => 'setWalCompression',
        'web' => 'setWeb',
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
        'allowOverlappingBlocks' => 'getAllowOverlappingBlocks',
        'annotations' => 'getAnnotations',
        'arbitraryFSAccessThroughSMs' => 'getArbitraryFSAccessThroughSMs',
        'baseImage' => 'getBaseImage',
        'configMaps' => 'getConfigMaps',
        'containers' => 'getContainers',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'disableCompaction' => 'getDisableCompaction',
        'enableAdminAPI' => 'getEnableAdminAPI',
        'enforcedNamespaceLabel' => 'getEnforcedNamespaceLabel',
        'enforcedSampleLimit' => 'getEnforcedSampleLimit',
        'enforcedTargetLimit' => 'getEnforcedTargetLimit',
        'evaluationInterval' => 'getEvaluationInterval',
        'externalLabels' => 'getExternalLabels',
        'externalUrl' => 'getExternalUrl',
        'ignoreNamespaceSelectors' => 'getIgnoreNamespaceSelectors',
        'image' => 'getImage',
        'imagePullSecrets' => 'getImagePullSecrets',
        'initContainers' => 'getInitContainers',
        'labels' => 'getLabels',
        'listenLocal' => 'getListenLocal',
        'logFormat' => 'getLogFormat',
        'logLevel' => 'getLogLevel',
        'name' => 'getName',
        'namespaceId' => 'getNamespaceId',
        'nodeSelector' => 'getNodeSelector',
        'overrideHonorLabels' => 'getOverrideHonorLabels',
        'overrideHonorTimestamps' => 'getOverrideHonorTimestamps',
        'ownerReferences' => 'getOwnerReferences',
        'podMetadata' => 'getPodMetadata',
        'podMonitorNamespaceSelector' => 'getPodMonitorNamespaceSelector',
        'podMonitorSelector' => 'getPodMonitorSelector',
        'portName' => 'getPortName',
        'priorityClassName' => 'getPriorityClassName',
        'probeNamespaceSelector' => 'getProbeNamespaceSelector',
        'probeSelector' => 'getProbeSelector',
        'projectId' => 'getProjectId',
        'prometheusExternalLabelName' => 'getPrometheusExternalLabelName',
        'prometheusRulesExcludedFromEnforce' => 'getPrometheusRulesExcludedFromEnforce',
        'query' => 'getQuery',
        'queryLogFile' => 'getQueryLogFile',
        'remoteRead' => 'getRemoteRead',
        'remoteWrite' => 'getRemoteWrite',
        'removed' => 'getRemoved',
        'replicaExternalLabelName' => 'getReplicaExternalLabelName',
        'replicas' => 'getReplicas',
        'resources' => 'getResources',
        'retention' => 'getRetention',
        'retentionSize' => 'getRetentionSize',
        'routePrefix' => 'getRoutePrefix',
        'ruleSelector' => 'getRuleSelector',
        'rules' => 'getRules',
        'scrapeInterval' => 'getScrapeInterval',
        'scrapeTimeout' => 'getScrapeTimeout',
        'secrets' => 'getSecrets',
        'securityContext' => 'getSecurityContext',
        'serviceAccountName' => 'getServiceAccountName',
        'serviceMonitorSelector' => 'getServiceMonitorSelector',
        'sha' => 'getSha',
        'shards' => 'getShards',
        'state' => 'getState',
        'storage' => 'getStorage',
        'tag' => 'getTag',
        'tolerations' => 'getTolerations',
        'topologySpreadConstraints' => 'getTopologySpreadConstraints',
        'transitioning' => 'getTransitioning',
        'transitioningMessage' => 'getTransitioningMessage',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
        'volumeMounts' => 'getVolumeMounts',
        'volumes' => 'getVolumes',
        'walCompression' => 'getWalCompression',
        'web' => 'getWeb',
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
        $this->container['allowOverlappingBlocks'] = isset($data['allowOverlappingBlocks']) ? $data['allowOverlappingBlocks'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['arbitraryFSAccessThroughSMs'] = isset($data['arbitraryFSAccessThroughSMs']) ? $data['arbitraryFSAccessThroughSMs'] : null;
        $this->container['baseImage'] = isset($data['baseImage']) ? $data['baseImage'] : null;
        $this->container['configMaps'] = isset($data['configMaps']) ? $data['configMaps'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disableCompaction'] = isset($data['disableCompaction']) ? $data['disableCompaction'] : null;
        $this->container['enableAdminAPI'] = isset($data['enableAdminAPI']) ? $data['enableAdminAPI'] : null;
        $this->container['enforcedNamespaceLabel'] = isset($data['enforcedNamespaceLabel']) ? $data['enforcedNamespaceLabel'] : null;
        $this->container['enforcedSampleLimit'] = isset($data['enforcedSampleLimit']) ? $data['enforcedSampleLimit'] : null;
        $this->container['enforcedTargetLimit'] = isset($data['enforcedTargetLimit']) ? $data['enforcedTargetLimit'] : null;
        $this->container['evaluationInterval'] = isset($data['evaluationInterval']) ? $data['evaluationInterval'] : null;
        $this->container['externalLabels'] = isset($data['externalLabels']) ? $data['externalLabels'] : null;
        $this->container['externalUrl'] = isset($data['externalUrl']) ? $data['externalUrl'] : null;
        $this->container['ignoreNamespaceSelectors'] = isset($data['ignoreNamespaceSelectors']) ? $data['ignoreNamespaceSelectors'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['imagePullSecrets'] = isset($data['imagePullSecrets']) ? $data['imagePullSecrets'] : null;
        $this->container['initContainers'] = isset($data['initContainers']) ? $data['initContainers'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['listenLocal'] = isset($data['listenLocal']) ? $data['listenLocal'] : null;
        $this->container['logFormat'] = isset($data['logFormat']) ? $data['logFormat'] : null;
        $this->container['logLevel'] = isset($data['logLevel']) ? $data['logLevel'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['overrideHonorLabels'] = isset($data['overrideHonorLabels']) ? $data['overrideHonorLabels'] : null;
        $this->container['overrideHonorTimestamps'] = isset($data['overrideHonorTimestamps']) ? $data['overrideHonorTimestamps'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['podMetadata'] = isset($data['podMetadata']) ? $data['podMetadata'] : null;
        $this->container['podMonitorNamespaceSelector'] = isset($data['podMonitorNamespaceSelector']) ? $data['podMonitorNamespaceSelector'] : null;
        $this->container['podMonitorSelector'] = isset($data['podMonitorSelector']) ? $data['podMonitorSelector'] : null;
        $this->container['portName'] = isset($data['portName']) ? $data['portName'] : null;
        $this->container['priorityClassName'] = isset($data['priorityClassName']) ? $data['priorityClassName'] : null;
        $this->container['probeNamespaceSelector'] = isset($data['probeNamespaceSelector']) ? $data['probeNamespaceSelector'] : null;
        $this->container['probeSelector'] = isset($data['probeSelector']) ? $data['probeSelector'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['prometheusExternalLabelName'] = isset($data['prometheusExternalLabelName']) ? $data['prometheusExternalLabelName'] : null;
        $this->container['prometheusRulesExcludedFromEnforce'] = isset($data['prometheusRulesExcludedFromEnforce']) ? $data['prometheusRulesExcludedFromEnforce'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['queryLogFile'] = isset($data['queryLogFile']) ? $data['queryLogFile'] : null;
        $this->container['remoteRead'] = isset($data['remoteRead']) ? $data['remoteRead'] : null;
        $this->container['remoteWrite'] = isset($data['remoteWrite']) ? $data['remoteWrite'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['replicaExternalLabelName'] = isset($data['replicaExternalLabelName']) ? $data['replicaExternalLabelName'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['retention'] = isset($data['retention']) ? $data['retention'] : null;
        $this->container['retentionSize'] = isset($data['retentionSize']) ? $data['retentionSize'] : null;
        $this->container['routePrefix'] = isset($data['routePrefix']) ? $data['routePrefix'] : null;
        $this->container['ruleSelector'] = isset($data['ruleSelector']) ? $data['ruleSelector'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['scrapeInterval'] = isset($data['scrapeInterval']) ? $data['scrapeInterval'] : null;
        $this->container['scrapeTimeout'] = isset($data['scrapeTimeout']) ? $data['scrapeTimeout'] : null;
        $this->container['secrets'] = isset($data['secrets']) ? $data['secrets'] : null;
        $this->container['securityContext'] = isset($data['securityContext']) ? $data['securityContext'] : null;
        $this->container['serviceAccountName'] = isset($data['serviceAccountName']) ? $data['serviceAccountName'] : null;
        $this->container['serviceMonitorSelector'] = isset($data['serviceMonitorSelector']) ? $data['serviceMonitorSelector'] : null;
        $this->container['sha'] = isset($data['sha']) ? $data['sha'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tolerations'] = isset($data['tolerations']) ? $data['tolerations'] : null;
        $this->container['topologySpreadConstraints'] = isset($data['topologySpreadConstraints']) ? $data['topologySpreadConstraints'] : null;
        $this->container['transitioning'] = isset($data['transitioning']) ? $data['transitioning'] : null;
        $this->container['transitioningMessage'] = isset($data['transitioningMessage']) ? $data['transitioningMessage'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['volumeMounts'] = isset($data['volumeMounts']) ? $data['volumeMounts'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['walCompression'] = isset($data['walCompression']) ? $data['walCompression'] : null;
        $this->container['web'] = isset($data['web']) ? $data['web'] : null;
    }

    /**
     * Gets additionalAlertManagerConfigs
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getAdditionalAlertManagerConfigs()
    {
        return $this->container['additionalAlertManagerConfigs'];
    }

    /**
     * Sets additionalAlertManagerConfigs
     * @param \Rancher\Model\SecretKeySelectorModel $additionalAlertManagerConfigs
     * @return $this
     */
    public function setAdditionalAlertManagerConfigs($additionalAlertManagerConfigs)
    {
        $this->container['additionalAlertManagerConfigs'] = $additionalAlertManagerConfigs;

        return $this;
    }


    /**
     * Gets additionalAlertRelabelConfigs
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getAdditionalAlertRelabelConfigs()
    {
        return $this->container['additionalAlertRelabelConfigs'];
    }

    /**
     * Sets additionalAlertRelabelConfigs
     * @param \Rancher\Model\SecretKeySelectorModel $additionalAlertRelabelConfigs
     * @return $this
     */
    public function setAdditionalAlertRelabelConfigs($additionalAlertRelabelConfigs)
    {
        $this->container['additionalAlertRelabelConfigs'] = $additionalAlertRelabelConfigs;

        return $this;
    }


    /**
     * Gets additionalScrapeConfigs
     * @return \Rancher\Model\SecretKeySelectorModel
     */
    public function getAdditionalScrapeConfigs()
    {
        return $this->container['additionalScrapeConfigs'];
    }

    /**
     * Sets additionalScrapeConfigs
     * @param \Rancher\Model\SecretKeySelectorModel $additionalScrapeConfigs
     * @return $this
     */
    public function setAdditionalScrapeConfigs($additionalScrapeConfigs)
    {
        $this->container['additionalScrapeConfigs'] = $additionalScrapeConfigs;

        return $this;
    }


    /**
     * Gets affinity
     * @return \Rancher\Model\AffinityModel
     */
    public function getAffinity()
    {
        return $this->container['affinity'];
    }

    /**
     * Sets affinity
     * @param \Rancher\Model\AffinityModel $affinity
     * @return $this
     */
    public function setAffinity($affinity)
    {
        $this->container['affinity'] = $affinity;

        return $this;
    }


    /**
     * Gets alerting
     * @return \Rancher\Model\AlertingSpecModel
     */
    public function getAlerting()
    {
        return $this->container['alerting'];
    }

    /**
     * Sets alerting
     * @param \Rancher\Model\AlertingSpecModel $alerting
     * @return $this
     */
    public function setAlerting($alerting)
    {
        $this->container['alerting'] = $alerting;

        return $this;
    }


    /**
     * Gets allowOverlappingBlocks
     * @return boolean
     */
    public function getAllowOverlappingBlocks()
    {
        return $this->container['allowOverlappingBlocks'];
    }

    /**
     * Sets allowOverlappingBlocks
     * @param boolean $allowOverlappingBlocks
     * @return $this
     */
    public function setAllowOverlappingBlocks($allowOverlappingBlocks)
    {
        $this->container['allowOverlappingBlocks'] = $allowOverlappingBlocks;

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
     * Gets arbitraryFSAccessThroughSMs
     * @return \Rancher\Model\ArbitraryFSAccessThroughSMsConfigModel
     */
    public function getArbitraryFSAccessThroughSMs()
    {
        return $this->container['arbitraryFSAccessThroughSMs'];
    }

    /**
     * Sets arbitraryFSAccessThroughSMs
     * @param \Rancher\Model\ArbitraryFSAccessThroughSMsConfigModel $arbitraryFSAccessThroughSMs
     * @return $this
     */
    public function setArbitraryFSAccessThroughSMs($arbitraryFSAccessThroughSMs)
    {
        $this->container['arbitraryFSAccessThroughSMs'] = $arbitraryFSAccessThroughSMs;

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
     * @return \Rancher\Model\ContainerModel[]
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers
     * @param \Rancher\Model\ContainerModel[] $containers
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
     * Gets disableCompaction
     * @return boolean
     */
    public function getDisableCompaction()
    {
        return $this->container['disableCompaction'];
    }

    /**
     * Sets disableCompaction
     * @param boolean $disableCompaction
     * @return $this
     */
    public function setDisableCompaction($disableCompaction)
    {
        $this->container['disableCompaction'] = $disableCompaction;

        return $this;
    }


    /**
     * Gets enableAdminAPI
     * @return boolean
     */
    public function getEnableAdminAPI()
    {
        return $this->container['enableAdminAPI'];
    }

    /**
     * Sets enableAdminAPI
     * @param boolean $enableAdminAPI
     * @return $this
     */
    public function setEnableAdminAPI($enableAdminAPI)
    {
        $this->container['enableAdminAPI'] = $enableAdminAPI;

        return $this;
    }


    /**
     * Gets enforcedNamespaceLabel
     * @return string
     */
    public function getEnforcedNamespaceLabel()
    {
        return $this->container['enforcedNamespaceLabel'];
    }

    /**
     * Sets enforcedNamespaceLabel
     * @param string $enforcedNamespaceLabel
     * @return $this
     */
    public function setEnforcedNamespaceLabel($enforcedNamespaceLabel)
    {
        $this->container['enforcedNamespaceLabel'] = $enforcedNamespaceLabel;

        return $this;
    }


    /**
     * Gets enforcedSampleLimit
     * @return int
     */
    public function getEnforcedSampleLimit()
    {
        return $this->container['enforcedSampleLimit'];
    }

    /**
     * Sets enforcedSampleLimit
     * @param int $enforcedSampleLimit
     * @return $this
     */
    public function setEnforcedSampleLimit($enforcedSampleLimit)
    {
        $this->container['enforcedSampleLimit'] = $enforcedSampleLimit;

        return $this;
    }


    /**
     * Gets enforcedTargetLimit
     * @return int
     */
    public function getEnforcedTargetLimit()
    {
        return $this->container['enforcedTargetLimit'];
    }

    /**
     * Sets enforcedTargetLimit
     * @param int $enforcedTargetLimit
     * @return $this
     */
    public function setEnforcedTargetLimit($enforcedTargetLimit)
    {
        $this->container['enforcedTargetLimit'] = $enforcedTargetLimit;

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
     * Gets ignoreNamespaceSelectors
     * @return boolean
     */
    public function getIgnoreNamespaceSelectors()
    {
        return $this->container['ignoreNamespaceSelectors'];
    }

    /**
     * Sets ignoreNamespaceSelectors
     * @param boolean $ignoreNamespaceSelectors
     * @return $this
     */
    public function setIgnoreNamespaceSelectors($ignoreNamespaceSelectors)
    {
        $this->container['ignoreNamespaceSelectors'] = $ignoreNamespaceSelectors;

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
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }


    /**
     * Gets imagePullSecrets
     * @return \Rancher\Model\LocalObjectReferenceModel[]
     */
    public function getImagePullSecrets()
    {
        return $this->container['imagePullSecrets'];
    }

    /**
     * Sets imagePullSecrets
     * @param \Rancher\Model\LocalObjectReferenceModel[] $imagePullSecrets
     * @return $this
     */
    public function setImagePullSecrets($imagePullSecrets)
    {
        $this->container['imagePullSecrets'] = $imagePullSecrets;

        return $this;
    }


    /**
     * Gets initContainers
     * @return \Rancher\Model\ContainerModel[]
     */
    public function getInitContainers()
    {
        return $this->container['initContainers'];
    }

    /**
     * Sets initContainers
     * @param \Rancher\Model\ContainerModel[] $initContainers
     * @return $this
     */
    public function setInitContainers($initContainers)
    {
        $this->container['initContainers'] = $initContainers;

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
     * @return $this
     */
    public function setLogFormat($logFormat)
    {
        $this->container['logFormat'] = $logFormat;

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
     * Gets overrideHonorLabels
     * @return boolean
     */
    public function getOverrideHonorLabels()
    {
        return $this->container['overrideHonorLabels'];
    }

    /**
     * Sets overrideHonorLabels
     * @param boolean $overrideHonorLabels
     * @return $this
     */
    public function setOverrideHonorLabels($overrideHonorLabels)
    {
        $this->container['overrideHonorLabels'] = $overrideHonorLabels;

        return $this;
    }


    /**
     * Gets overrideHonorTimestamps
     * @return boolean
     */
    public function getOverrideHonorTimestamps()
    {
        return $this->container['overrideHonorTimestamps'];
    }

    /**
     * Sets overrideHonorTimestamps
     * @param boolean $overrideHonorTimestamps
     * @return $this
     */
    public function setOverrideHonorTimestamps($overrideHonorTimestamps)
    {
        $this->container['overrideHonorTimestamps'] = $overrideHonorTimestamps;

        return $this;
    }


    /**
     * Gets ownerReferences
     * @return \Rancher\Model\OwnerReferenceModel[]
     */
    public function getOwnerReferences()
    {
        return $this->container['ownerReferences'];
    }

    /**
     * Sets ownerReferences
     * @param \Rancher\Model\OwnerReferenceModel[] $ownerReferences
     * @return $this
     */
    public function setOwnerReferences($ownerReferences)
    {
        $this->container['ownerReferences'] = $ownerReferences;

        return $this;
    }


    /**
     * Gets podMetadata
     * @return \Rancher\Model\EmbeddedObjectMetadataModel
     */
    public function getPodMetadata()
    {
        return $this->container['podMetadata'];
    }

    /**
     * Sets podMetadata
     * @param \Rancher\Model\EmbeddedObjectMetadataModel $podMetadata
     * @return $this
     */
    public function setPodMetadata($podMetadata)
    {
        $this->container['podMetadata'] = $podMetadata;

        return $this;
    }


    /**
     * Gets podMonitorNamespaceSelector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getPodMonitorNamespaceSelector()
    {
        return $this->container['podMonitorNamespaceSelector'];
    }

    /**
     * Sets podMonitorNamespaceSelector
     * @param \Rancher\Model\LabelSelectorModel $podMonitorNamespaceSelector
     * @return $this
     */
    public function setPodMonitorNamespaceSelector($podMonitorNamespaceSelector)
    {
        $this->container['podMonitorNamespaceSelector'] = $podMonitorNamespaceSelector;

        return $this;
    }


    /**
     * Gets podMonitorSelector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getPodMonitorSelector()
    {
        return $this->container['podMonitorSelector'];
    }

    /**
     * Sets podMonitorSelector
     * @param \Rancher\Model\LabelSelectorModel $podMonitorSelector
     * @return $this
     */
    public function setPodMonitorSelector($podMonitorSelector)
    {
        $this->container['podMonitorSelector'] = $podMonitorSelector;

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
     * @return $this
     */
    public function setPortName($portName)
    {
        $this->container['portName'] = $portName;

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
     * Gets probeNamespaceSelector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getProbeNamespaceSelector()
    {
        return $this->container['probeNamespaceSelector'];
    }

    /**
     * Sets probeNamespaceSelector
     * @param \Rancher\Model\LabelSelectorModel $probeNamespaceSelector
     * @return $this
     */
    public function setProbeNamespaceSelector($probeNamespaceSelector)
    {
        $this->container['probeNamespaceSelector'] = $probeNamespaceSelector;

        return $this;
    }


    /**
     * Gets probeSelector
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getProbeSelector()
    {
        return $this->container['probeSelector'];
    }

    /**
     * Sets probeSelector
     * @param \Rancher\Model\LabelSelectorModel $probeSelector
     * @return $this
     */
    public function setProbeSelector($probeSelector)
    {
        $this->container['probeSelector'] = $probeSelector;

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
     * @return $this
     */
    public function setPrometheusExternalLabelName($prometheusExternalLabelName)
    {
        $this->container['prometheusExternalLabelName'] = $prometheusExternalLabelName;

        return $this;
    }


    /**
     * Gets prometheusRulesExcludedFromEnforce
     * @return \Rancher\Model\PrometheusRuleExcludeConfigModel[]
     */
    public function getPrometheusRulesExcludedFromEnforce()
    {
        return $this->container['prometheusRulesExcludedFromEnforce'];
    }

    /**
     * Sets prometheusRulesExcludedFromEnforce
     * @param \Rancher\Model\PrometheusRuleExcludeConfigModel[] $prometheusRulesExcludedFromEnforce
     * @return $this
     */
    public function setPrometheusRulesExcludedFromEnforce($prometheusRulesExcludedFromEnforce)
    {
        $this->container['prometheusRulesExcludedFromEnforce'] = $prometheusRulesExcludedFromEnforce;

        return $this;
    }


    /**
     * Gets query
     * @return \Rancher\Model\QuerySpecModel
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     * @param \Rancher\Model\QuerySpecModel $query
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }


    /**
     * Gets queryLogFile
     * @return string
     */
    public function getQueryLogFile()
    {
        return $this->container['queryLogFile'];
    }

    /**
     * Sets queryLogFile
     * @param string $queryLogFile
     * @return $this
     */
    public function setQueryLogFile($queryLogFile)
    {
        $this->container['queryLogFile'] = $queryLogFile;

        return $this;
    }


    /**
     * Gets remoteRead
     * @return \Rancher\Model\RemoteReadSpecModel[]
     */
    public function getRemoteRead()
    {
        return $this->container['remoteRead'];
    }

    /**
     * Sets remoteRead
     * @param \Rancher\Model\RemoteReadSpecModel[] $remoteRead
     * @return $this
     */
    public function setRemoteRead($remoteRead)
    {
        $this->container['remoteRead'] = $remoteRead;

        return $this;
    }


    /**
     * Gets remoteWrite
     * @return \Rancher\Model\RemoteWriteSpecModel[]
     */
    public function getRemoteWrite()
    {
        return $this->container['remoteWrite'];
    }

    /**
     * Sets remoteWrite
     * @param \Rancher\Model\RemoteWriteSpecModel[] $remoteWrite
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
     * @return $this
     */
    public function setReplicaExternalLabelName($replicaExternalLabelName)
    {
        $this->container['replicaExternalLabelName'] = $replicaExternalLabelName;

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
     * @return \Rancher\Model\ResourceRequirementsModel
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \Rancher\Model\ResourceRequirementsModel $resources
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
     * @return $this
     */
    public function setRetentionSize($retentionSize)
    {
        $this->container['retentionSize'] = $retentionSize;

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
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getRuleSelector()
    {
        return $this->container['ruleSelector'];
    }

    /**
     * Sets ruleSelector
     * @param \Rancher\Model\LabelSelectorModel $ruleSelector
     * @return $this
     */
    public function setRuleSelector($ruleSelector)
    {
        $this->container['ruleSelector'] = $ruleSelector;

        return $this;
    }


    /**
     * Gets rules
     * @return \Rancher\Model\RulesModel
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     * @param \Rancher\Model\RulesModel $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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
     * Gets scrapeTimeout
     * @return string
     */
    public function getScrapeTimeout()
    {
        return $this->container['scrapeTimeout'];
    }

    /**
     * Sets scrapeTimeout
     * @param string $scrapeTimeout
     * @return $this
     */
    public function setScrapeTimeout($scrapeTimeout)
    {
        $this->container['scrapeTimeout'] = $scrapeTimeout;

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
     * @return \Rancher\Model\PodSecurityContextModel
     */
    public function getSecurityContext()
    {
        return $this->container['securityContext'];
    }

    /**
     * Sets securityContext
     * @param \Rancher\Model\PodSecurityContextModel $securityContext
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
     * @return \Rancher\Model\LabelSelectorModel
     */
    public function getServiceMonitorSelector()
    {
        return $this->container['serviceMonitorSelector'];
    }

    /**
     * Sets serviceMonitorSelector
     * @param \Rancher\Model\LabelSelectorModel $serviceMonitorSelector
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
     * Gets shards
     * @return int
     */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
     * Sets shards
     * @param int $shards
     * @return $this
     */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;

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
     * @return \Rancher\Model\StorageSpecModel
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     * @param \Rancher\Model\StorageSpecModel $storage
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
     * @return \Rancher\Model\TolerationModel[]
     */
    public function getTolerations()
    {
        return $this->container['tolerations'];
    }

    /**
     * Sets tolerations
     * @param \Rancher\Model\TolerationModel[] $tolerations
     * @return $this
     */
    public function setTolerations($tolerations)
    {
        $this->container['tolerations'] = $tolerations;

        return $this;
    }


    /**
     * Gets topologySpreadConstraints
     * @return \Rancher\Model\TopologySpreadConstraintModel[]
     */
    public function getTopologySpreadConstraints()
    {
        return $this->container['topologySpreadConstraints'];
    }

    /**
     * Sets topologySpreadConstraints
     * @param \Rancher\Model\TopologySpreadConstraintModel[] $topologySpreadConstraints
     * @return $this
     */
    public function setTopologySpreadConstraints($topologySpreadConstraints)
    {
        $this->container['topologySpreadConstraints'] = $topologySpreadConstraints;

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
     * Gets volumeMounts
     * @return \Rancher\Model\VolumeMountModel[]
     */
    public function getVolumeMounts()
    {
        return $this->container['volumeMounts'];
    }

    /**
     * Sets volumeMounts
     * @param \Rancher\Model\VolumeMountModel[] $volumeMounts
     * @return $this
     */
    public function setVolumeMounts($volumeMounts)
    {
        $this->container['volumeMounts'] = $volumeMounts;

        return $this;
    }


    /**
     * Gets volumes
     * @return \Rancher\Model\VolumeModel[]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     * @param \Rancher\Model\VolumeModel[] $volumes
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

        return $this;
    }


    /**
     * Gets walCompression
     * @return boolean
     */
    public function getWalCompression()
    {
        return $this->container['walCompression'];
    }

    /**
     * Sets walCompression
     * @param boolean $walCompression
     * @return $this
     */
    public function setWalCompression($walCompression)
    {
        $this->container['walCompression'] = $walCompression;

        return $this;
    }


    /**
     * Gets web
     * @return \Rancher\Model\WebSpecModel
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     * @param \Rancher\Model\WebSpecModel $web
     * @return $this
     */
    public function setWeb($web)
    {
        $this->container['web'] = $web;

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

