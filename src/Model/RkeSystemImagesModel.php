<?php

/**
 * RkeSystemImagesModel
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Model;

use \ArrayAccess;

class RkeSystemImagesModel implements ArrayAccess
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
        'alpine',
        'calicoCni',
        'calicoControllers',
        'calicoCtl',
        'calicoFlexVol',
        'calicoNode',
        'canalCni',
        'canalFlannel',
        'canalFlexVol',
        'canalNode',
        'certDownloader',
        'coredns',
        'corednsAutoscaler',
        'dnsmasq',
        'etcd',
        'flannel',
        'flannelCni',
        'ingress',
        'ingressBackend',
        'kubedns',
        'kubednsAutoscaler',
        'kubednsSidecar',
        'kubernetes',
        'kubernetesServicesSidecar',
        'metricsServer',
        'nginxProxy',
        'podInfraContainer',
        'weaveCni',
        'weaveNode',
        'windowsPodInfraContainer',
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
        'alpine',
        'calicoCni',
        'calicoControllers',
        'calicoCtl',
        'calicoFlexVol',
        'calicoNode',
        'canalCni',
        'canalFlannel',
        'canalFlexVol',
        'canalNode',
        'certDownloader',
        'coredns',
        'corednsAutoscaler',
        'dnsmasq',
        'etcd',
        'flannel',
        'flannelCni',
        'ingress',
        'ingressBackend',
        'kubedns',
        'kubednsAutoscaler',
        'kubednsSidecar',
        'kubernetes',
        'kubernetesServicesSidecar',
        'metricsServer',
        'nginxProxy',
        'podInfraContainer',
        'weaveCni',
        'weaveNode',
        'windowsPodInfraContainer',
    ];

    public static function canBeUpdated()
    {
        return self::$canBeUpdated;
    }

    protected static $typeMap = [
        'alpine' => 'string',
        'calicoCni' => 'string',
        'calicoControllers' => 'string',
        'calicoCtl' => 'string',
        'calicoFlexVol' => 'string',
        'calicoNode' => 'string',
        'canalCni' => 'string',
        'canalFlannel' => 'string',
        'canalFlexVol' => 'string',
        'canalNode' => 'string',
        'certDownloader' => 'string',
        'coredns' => 'string',
        'corednsAutoscaler' => 'string',
        'dnsmasq' => 'string',
        'etcd' => 'string',
        'flannel' => 'string',
        'flannelCni' => 'string',
        'ingress' => 'string',
        'ingressBackend' => 'string',
        'kubedns' => 'string',
        'kubednsAutoscaler' => 'string',
        'kubednsSidecar' => 'string',
        'kubernetes' => 'string',
        'kubernetesServicesSidecar' => 'string',
        'metricsServer' => 'string',
        'nginxProxy' => 'string',
        'podInfraContainer' => 'string',
        'weaveCni' => 'string',
        'weaveNode' => 'string',
        'windowsPodInfraContainer' => 'string',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'alpine' => 'setAlpine',
        'calicoCni' => 'setCalicoCni',
        'calicoControllers' => 'setCalicoControllers',
        'calicoCtl' => 'setCalicoCtl',
        'calicoFlexVol' => 'setCalicoFlexVol',
        'calicoNode' => 'setCalicoNode',
        'canalCni' => 'setCanalCni',
        'canalFlannel' => 'setCanalFlannel',
        'canalFlexVol' => 'setCanalFlexVol',
        'canalNode' => 'setCanalNode',
        'certDownloader' => 'setCertDownloader',
        'coredns' => 'setCoredns',
        'corednsAutoscaler' => 'setCorednsAutoscaler',
        'dnsmasq' => 'setDnsmasq',
        'etcd' => 'setEtcd',
        'flannel' => 'setFlannel',
        'flannelCni' => 'setFlannelCni',
        'ingress' => 'setIngress',
        'ingressBackend' => 'setIngressBackend',
        'kubedns' => 'setKubedns',
        'kubednsAutoscaler' => 'setKubednsAutoscaler',
        'kubednsSidecar' => 'setKubednsSidecar',
        'kubernetes' => 'setKubernetes',
        'kubernetesServicesSidecar' => 'setKubernetesServicesSidecar',
        'metricsServer' => 'setMetricsServer',
        'nginxProxy' => 'setNginxProxy',
        'podInfraContainer' => 'setPodInfraContainer',
        'weaveCni' => 'setWeaveCni',
        'weaveNode' => 'setWeaveNode',
        'windowsPodInfraContainer' => 'setWindowsPodInfraContainer',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'alpine' => 'getAlpine',
        'calicoCni' => 'getCalicoCni',
        'calicoControllers' => 'getCalicoControllers',
        'calicoCtl' => 'getCalicoCtl',
        'calicoFlexVol' => 'getCalicoFlexVol',
        'calicoNode' => 'getCalicoNode',
        'canalCni' => 'getCanalCni',
        'canalFlannel' => 'getCanalFlannel',
        'canalFlexVol' => 'getCanalFlexVol',
        'canalNode' => 'getCanalNode',
        'certDownloader' => 'getCertDownloader',
        'coredns' => 'getCoredns',
        'corednsAutoscaler' => 'getCorednsAutoscaler',
        'dnsmasq' => 'getDnsmasq',
        'etcd' => 'getEtcd',
        'flannel' => 'getFlannel',
        'flannelCni' => 'getFlannelCni',
        'ingress' => 'getIngress',
        'ingressBackend' => 'getIngressBackend',
        'kubedns' => 'getKubedns',
        'kubednsAutoscaler' => 'getKubednsAutoscaler',
        'kubednsSidecar' => 'getKubednsSidecar',
        'kubernetes' => 'getKubernetes',
        'kubernetesServicesSidecar' => 'getKubernetesServicesSidecar',
        'metricsServer' => 'getMetricsServer',
        'nginxProxy' => 'getNginxProxy',
        'podInfraContainer' => 'getPodInfraContainer',
        'weaveCni' => 'getWeaveCni',
        'weaveNode' => 'getWeaveNode',
        'windowsPodInfraContainer' => 'getWindowsPodInfraContainer',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['alpine'] = isset($data['alpine']) ? $data['alpine'] : null;
        $this->container['calicoCni'] = isset($data['calicoCni']) ? $data['calicoCni'] : null;
        $this->container['calicoControllers'] = isset($data['calicoControllers']) ? $data['calicoControllers'] : null;
        $this->container['calicoCtl'] = isset($data['calicoCtl']) ? $data['calicoCtl'] : null;
        $this->container['calicoFlexVol'] = isset($data['calicoFlexVol']) ? $data['calicoFlexVol'] : null;
        $this->container['calicoNode'] = isset($data['calicoNode']) ? $data['calicoNode'] : null;
        $this->container['canalCni'] = isset($data['canalCni']) ? $data['canalCni'] : null;
        $this->container['canalFlannel'] = isset($data['canalFlannel']) ? $data['canalFlannel'] : null;
        $this->container['canalFlexVol'] = isset($data['canalFlexVol']) ? $data['canalFlexVol'] : null;
        $this->container['canalNode'] = isset($data['canalNode']) ? $data['canalNode'] : null;
        $this->container['certDownloader'] = isset($data['certDownloader']) ? $data['certDownloader'] : null;
        $this->container['coredns'] = isset($data['coredns']) ? $data['coredns'] : null;
        $this->container['corednsAutoscaler'] = isset($data['corednsAutoscaler']) ? $data['corednsAutoscaler'] : null;
        $this->container['dnsmasq'] = isset($data['dnsmasq']) ? $data['dnsmasq'] : null;
        $this->container['etcd'] = isset($data['etcd']) ? $data['etcd'] : null;
        $this->container['flannel'] = isset($data['flannel']) ? $data['flannel'] : null;
        $this->container['flannelCni'] = isset($data['flannelCni']) ? $data['flannelCni'] : null;
        $this->container['ingress'] = isset($data['ingress']) ? $data['ingress'] : null;
        $this->container['ingressBackend'] = isset($data['ingressBackend']) ? $data['ingressBackend'] : null;
        $this->container['kubedns'] = isset($data['kubedns']) ? $data['kubedns'] : null;
        $this->container['kubednsAutoscaler'] = isset($data['kubednsAutoscaler']) ? $data['kubednsAutoscaler'] : null;
        $this->container['kubednsSidecar'] = isset($data['kubednsSidecar']) ? $data['kubednsSidecar'] : null;
        $this->container['kubernetes'] = isset($data['kubernetes']) ? $data['kubernetes'] : null;
        $this->container['kubernetesServicesSidecar'] = isset($data['kubernetesServicesSidecar']) ? $data['kubernetesServicesSidecar'] : null;
        $this->container['metricsServer'] = isset($data['metricsServer']) ? $data['metricsServer'] : null;
        $this->container['nginxProxy'] = isset($data['nginxProxy']) ? $data['nginxProxy'] : null;
        $this->container['podInfraContainer'] = isset($data['podInfraContainer']) ? $data['podInfraContainer'] : null;
        $this->container['weaveCni'] = isset($data['weaveCni']) ? $data['weaveCni'] : null;
        $this->container['weaveNode'] = isset($data['weaveNode']) ? $data['weaveNode'] : null;
        $this->container['windowsPodInfraContainer'] = isset($data['windowsPodInfraContainer']) ? $data['windowsPodInfraContainer'] : null;
    }

    /**
     * Gets alpine
     * @return string
     */
    public function getAlpine()
    {
        return $this->container['alpine'];
    }

    /**
     * Sets alpine
     * @param string $alpine
     * @return $this
     */
    public function setAlpine($alpine)
    {
        $this->container['alpine'] = $alpine;

        return $this;
    }


    /**
     * Gets calicoCni
     * @return string
     */
    public function getCalicoCni()
    {
        return $this->container['calicoCni'];
    }

    /**
     * Sets calicoCni
     * @param string $calicoCni
     * @return $this
     */
    public function setCalicoCni($calicoCni)
    {
        $this->container['calicoCni'] = $calicoCni;

        return $this;
    }


    /**
     * Gets calicoControllers
     * @return string
     */
    public function getCalicoControllers()
    {
        return $this->container['calicoControllers'];
    }

    /**
     * Sets calicoControllers
     * @param string $calicoControllers
     * @return $this
     */
    public function setCalicoControllers($calicoControllers)
    {
        $this->container['calicoControllers'] = $calicoControllers;

        return $this;
    }


    /**
     * Gets calicoCtl
     * @return string
     */
    public function getCalicoCtl()
    {
        return $this->container['calicoCtl'];
    }

    /**
     * Sets calicoCtl
     * @param string $calicoCtl
     * @return $this
     */
    public function setCalicoCtl($calicoCtl)
    {
        $this->container['calicoCtl'] = $calicoCtl;

        return $this;
    }


    /**
     * Gets calicoFlexVol
     * @return string
     */
    public function getCalicoFlexVol()
    {
        return $this->container['calicoFlexVol'];
    }

    /**
     * Sets calicoFlexVol
     * @param string $calicoFlexVol
     * @return $this
     */
    public function setCalicoFlexVol($calicoFlexVol)
    {
        $this->container['calicoFlexVol'] = $calicoFlexVol;

        return $this;
    }


    /**
     * Gets calicoNode
     * @return string
     */
    public function getCalicoNode()
    {
        return $this->container['calicoNode'];
    }

    /**
     * Sets calicoNode
     * @param string $calicoNode
     * @return $this
     */
    public function setCalicoNode($calicoNode)
    {
        $this->container['calicoNode'] = $calicoNode;

        return $this;
    }


    /**
     * Gets canalCni
     * @return string
     */
    public function getCanalCni()
    {
        return $this->container['canalCni'];
    }

    /**
     * Sets canalCni
     * @param string $canalCni
     * @return $this
     */
    public function setCanalCni($canalCni)
    {
        $this->container['canalCni'] = $canalCni;

        return $this;
    }


    /**
     * Gets canalFlannel
     * @return string
     */
    public function getCanalFlannel()
    {
        return $this->container['canalFlannel'];
    }

    /**
     * Sets canalFlannel
     * @param string $canalFlannel
     * @return $this
     */
    public function setCanalFlannel($canalFlannel)
    {
        $this->container['canalFlannel'] = $canalFlannel;

        return $this;
    }


    /**
     * Gets canalFlexVol
     * @return string
     */
    public function getCanalFlexVol()
    {
        return $this->container['canalFlexVol'];
    }

    /**
     * Sets canalFlexVol
     * @param string $canalFlexVol
     * @return $this
     */
    public function setCanalFlexVol($canalFlexVol)
    {
        $this->container['canalFlexVol'] = $canalFlexVol;

        return $this;
    }


    /**
     * Gets canalNode
     * @return string
     */
    public function getCanalNode()
    {
        return $this->container['canalNode'];
    }

    /**
     * Sets canalNode
     * @param string $canalNode
     * @return $this
     */
    public function setCanalNode($canalNode)
    {
        $this->container['canalNode'] = $canalNode;

        return $this;
    }


    /**
     * Gets certDownloader
     * @return string
     */
    public function getCertDownloader()
    {
        return $this->container['certDownloader'];
    }

    /**
     * Sets certDownloader
     * @param string $certDownloader
     * @return $this
     */
    public function setCertDownloader($certDownloader)
    {
        $this->container['certDownloader'] = $certDownloader;

        return $this;
    }


    /**
     * Gets coredns
     * @return string
     */
    public function getCoredns()
    {
        return $this->container['coredns'];
    }

    /**
     * Sets coredns
     * @param string $coredns
     * @return $this
     */
    public function setCoredns($coredns)
    {
        $this->container['coredns'] = $coredns;

        return $this;
    }


    /**
     * Gets corednsAutoscaler
     * @return string
     */
    public function getCorednsAutoscaler()
    {
        return $this->container['corednsAutoscaler'];
    }

    /**
     * Sets corednsAutoscaler
     * @param string $corednsAutoscaler
     * @return $this
     */
    public function setCorednsAutoscaler($corednsAutoscaler)
    {
        $this->container['corednsAutoscaler'] = $corednsAutoscaler;

        return $this;
    }


    /**
     * Gets dnsmasq
     * @return string
     */
    public function getDnsmasq()
    {
        return $this->container['dnsmasq'];
    }

    /**
     * Sets dnsmasq
     * @param string $dnsmasq
     * @return $this
     */
    public function setDnsmasq($dnsmasq)
    {
        $this->container['dnsmasq'] = $dnsmasq;

        return $this;
    }


    /**
     * Gets etcd
     * @return string
     */
    public function getEtcd()
    {
        return $this->container['etcd'];
    }

    /**
     * Sets etcd
     * @param string $etcd
     * @return $this
     */
    public function setEtcd($etcd)
    {
        $this->container['etcd'] = $etcd;

        return $this;
    }


    /**
     * Gets flannel
     * @return string
     */
    public function getFlannel()
    {
        return $this->container['flannel'];
    }

    /**
     * Sets flannel
     * @param string $flannel
     * @return $this
     */
    public function setFlannel($flannel)
    {
        $this->container['flannel'] = $flannel;

        return $this;
    }


    /**
     * Gets flannelCni
     * @return string
     */
    public function getFlannelCni()
    {
        return $this->container['flannelCni'];
    }

    /**
     * Sets flannelCni
     * @param string $flannelCni
     * @return $this
     */
    public function setFlannelCni($flannelCni)
    {
        $this->container['flannelCni'] = $flannelCni;

        return $this;
    }


    /**
     * Gets ingress
     * @return string
     */
    public function getIngress()
    {
        return $this->container['ingress'];
    }

    /**
     * Sets ingress
     * @param string $ingress
     * @return $this
     */
    public function setIngress($ingress)
    {
        $this->container['ingress'] = $ingress;

        return $this;
    }


    /**
     * Gets ingressBackend
     * @return string
     */
    public function getIngressBackend()
    {
        return $this->container['ingressBackend'];
    }

    /**
     * Sets ingressBackend
     * @param string $ingressBackend
     * @return $this
     */
    public function setIngressBackend($ingressBackend)
    {
        $this->container['ingressBackend'] = $ingressBackend;

        return $this;
    }


    /**
     * Gets kubedns
     * @return string
     */
    public function getKubedns()
    {
        return $this->container['kubedns'];
    }

    /**
     * Sets kubedns
     * @param string $kubedns
     * @return $this
     */
    public function setKubedns($kubedns)
    {
        $this->container['kubedns'] = $kubedns;

        return $this;
    }


    /**
     * Gets kubednsAutoscaler
     * @return string
     */
    public function getKubednsAutoscaler()
    {
        return $this->container['kubednsAutoscaler'];
    }

    /**
     * Sets kubednsAutoscaler
     * @param string $kubednsAutoscaler
     * @return $this
     */
    public function setKubednsAutoscaler($kubednsAutoscaler)
    {
        $this->container['kubednsAutoscaler'] = $kubednsAutoscaler;

        return $this;
    }


    /**
     * Gets kubednsSidecar
     * @return string
     */
    public function getKubednsSidecar()
    {
        return $this->container['kubednsSidecar'];
    }

    /**
     * Sets kubednsSidecar
     * @param string $kubednsSidecar
     * @return $this
     */
    public function setKubednsSidecar($kubednsSidecar)
    {
        $this->container['kubednsSidecar'] = $kubednsSidecar;

        return $this;
    }


    /**
     * Gets kubernetes
     * @return string
     */
    public function getKubernetes()
    {
        return $this->container['kubernetes'];
    }

    /**
     * Sets kubernetes
     * @param string $kubernetes
     * @return $this
     */
    public function setKubernetes($kubernetes)
    {
        $this->container['kubernetes'] = $kubernetes;

        return $this;
    }


    /**
     * Gets kubernetesServicesSidecar
     * @return string
     */
    public function getKubernetesServicesSidecar()
    {
        return $this->container['kubernetesServicesSidecar'];
    }

    /**
     * Sets kubernetesServicesSidecar
     * @param string $kubernetesServicesSidecar
     * @return $this
     */
    public function setKubernetesServicesSidecar($kubernetesServicesSidecar)
    {
        $this->container['kubernetesServicesSidecar'] = $kubernetesServicesSidecar;

        return $this;
    }


    /**
     * Gets metricsServer
     * @return string
     */
    public function getMetricsServer()
    {
        return $this->container['metricsServer'];
    }

    /**
     * Sets metricsServer
     * @param string $metricsServer
     * @return $this
     */
    public function setMetricsServer($metricsServer)
    {
        $this->container['metricsServer'] = $metricsServer;

        return $this;
    }


    /**
     * Gets nginxProxy
     * @return string
     */
    public function getNginxProxy()
    {
        return $this->container['nginxProxy'];
    }

    /**
     * Sets nginxProxy
     * @param string $nginxProxy
     * @return $this
     */
    public function setNginxProxy($nginxProxy)
    {
        $this->container['nginxProxy'] = $nginxProxy;

        return $this;
    }


    /**
     * Gets podInfraContainer
     * @return string
     */
    public function getPodInfraContainer()
    {
        return $this->container['podInfraContainer'];
    }

    /**
     * Sets podInfraContainer
     * @param string $podInfraContainer
     * @return $this
     */
    public function setPodInfraContainer($podInfraContainer)
    {
        $this->container['podInfraContainer'] = $podInfraContainer;

        return $this;
    }


    /**
     * Gets weaveCni
     * @return string
     */
    public function getWeaveCni()
    {
        return $this->container['weaveCni'];
    }

    /**
     * Sets weaveCni
     * @param string $weaveCni
     * @return $this
     */
    public function setWeaveCni($weaveCni)
    {
        $this->container['weaveCni'] = $weaveCni;

        return $this;
    }


    /**
     * Gets weaveNode
     * @return string
     */
    public function getWeaveNode()
    {
        return $this->container['weaveNode'];
    }

    /**
     * Sets weaveNode
     * @param string $weaveNode
     * @return $this
     */
    public function setWeaveNode($weaveNode)
    {
        $this->container['weaveNode'] = $weaveNode;

        return $this;
    }


    /**
     * Gets windowsPodInfraContainer
     * @return string
     */
    public function getWindowsPodInfraContainer()
    {
        return $this->container['windowsPodInfraContainer'];
    }

    /**
     * Sets windowsPodInfraContainer
     * @param string $windowsPodInfraContainer
     * @return $this
     */
    public function setWindowsPodInfraContainer($windowsPodInfraContainer)
    {
        $this->container['windowsPodInfraContainer'] = $windowsPodInfraContainer;

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

