<?php

namespace Rancher\Model;

use \ArrayAccess;

class ListenConfig implements ArrayAccess
{
    protected $container = [];

    protected static $typeMap = [
        'algorithm' => 'string',
        'annotations' => 'map[string]',
        'caCerts' => 'string',
        'cert' => 'string',
        'certFingerprint' => 'string',
        'cn' => 'string',
        'created' => '\DateTime',
        'creatorId' => 'string',
        'description' => 'string',
        'domains' => 'string[]',
        'enabled' => 'boolean',
        'expiresAt' => 'string',
        'generatedCerts' => 'map[string]',
        'id' => 'string',
        'issuedAt' => 'string',
        'issuer' => 'string',
        'key' => 'string',
        'keySize' => 'int',
        'knownIps' => 'string[]',
        'labels' => 'map[string]',
        'mode' => 'string',
        'name' => 'string',
        'ownerReferences' => '\Rancher\Model\OwnerReference[]',
        'removed' => '\DateTime',
        'serialNumber' => 'string',
        'subjectAlternativeNames' => 'string[]',
        'tos' => 'string[]',
        'uuid' => 'string',
        'version' => 'int',
    ];

    public static function typeMap()
    {
        return self::$typeMap;
    }

    protected static $setters = [
        'algorithm' => 'setAlgorithm',
        'annotations' => 'setAnnotations',
        'caCerts' => 'setCaCerts',
        'cert' => 'setCert',
        'certFingerprint' => 'setCertFingerprint',
        'cn' => 'setCn',
        'created' => 'setCreated',
        'creatorId' => 'setCreatorId',
        'description' => 'setDescription',
        'domains' => 'setDomains',
        'enabled' => 'setEnabled',
        'expiresAt' => 'setExpiresAt',
        'generatedCerts' => 'setGeneratedCerts',
        'id' => 'setId',
        'issuedAt' => 'setIssuedAt',
        'issuer' => 'setIssuer',
        'key' => 'setKey',
        'keySize' => 'setKeySize',
        'knownIps' => 'setKnownIps',
        'labels' => 'setLabels',
        'mode' => 'setMode',
        'name' => 'setName',
        'ownerReferences' => 'setOwnerReferences',
        'removed' => 'setRemoved',
        'serialNumber' => 'setSerialNumber',
        'subjectAlternativeNames' => 'setSubjectAlternativeNames',
        'tos' => 'setTos',
        'uuid' => 'setUuid',
        'version' => 'setVersion',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    protected static $getters = [
        'algorithm' => 'getAlgorithm',
        'annotations' => 'getAnnotations',
        'caCerts' => 'getCaCerts',
        'cert' => 'getCert',
        'certFingerprint' => 'getCertFingerprint',
        'cn' => 'getCn',
        'created' => 'getCreated',
        'creatorId' => 'getCreatorId',
        'description' => 'getDescription',
        'domains' => 'getDomains',
        'enabled' => 'getEnabled',
        'expiresAt' => 'getExpiresAt',
        'generatedCerts' => 'getGeneratedCerts',
        'id' => 'getId',
        'issuedAt' => 'getIssuedAt',
        'issuer' => 'getIssuer',
        'key' => 'getKey',
        'keySize' => 'getKeySize',
        'knownIps' => 'getKnownIps',
        'labels' => 'getLabels',
        'mode' => 'getMode',
        'name' => 'getName',
        'ownerReferences' => 'getOwnerReferences',
        'removed' => 'getRemoved',
        'serialNumber' => 'getSerialNumber',
        'subjectAlternativeNames' => 'getSubjectAlternativeNames',
        'tos' => 'getTos',
        'uuid' => 'getUuid',
        'version' => 'getVersion',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    public function __construct(array $data = null)
    {
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['caCerts'] = isset($data['caCerts']) ? $data['caCerts'] : null;
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['certFingerprint'] = isset($data['certFingerprint']) ? $data['certFingerprint'] : null;
        $this->container['cn'] = isset($data['cn']) ? $data['cn'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['generatedCerts'] = isset($data['generatedCerts']) ? $data['generatedCerts'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issuedAt'] = isset($data['issuedAt']) ? $data['issuedAt'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['keySize'] = isset($data['keySize']) ? $data['keySize'] : null;
        $this->container['knownIps'] = isset($data['knownIps']) ? $data['knownIps'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerReferences'] = isset($data['ownerReferences']) ? $data['ownerReferences'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $data['subjectAlternativeNames'] : null;
        $this->container['tos'] = isset($data['tos']) ? $data['tos'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Gets algorithm
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     * @param string $algorithm
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

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
     * Gets caCerts
     * @return string
     */
    public function getCaCerts()
    {
        return $this->container['caCerts'];
    }

    /**
     * Sets caCerts
     * @param string $caCerts
     * @return $this
     */
    public function setCaCerts($caCerts)
    {
        $this->container['caCerts'] = $caCerts;

        return $this;
    }


    /**
     * Gets cert
     * @return string
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     * @param string $cert
     * @return $this
     */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;

        return $this;
    }


    /**
     * Gets certFingerprint
     * @return string
     */
    public function getCertFingerprint()
    {
        return $this->container['certFingerprint'];
    }

    /**
     * Sets certFingerprint
     * @param string $certFingerprint
     * @return $this
     */
    public function setCertFingerprint($certFingerprint)
    {
        $this->container['certFingerprint'] = $certFingerprint;

        return $this;
    }


    /**
     * Gets cn
     * @return string
     */
    public function getCn()
    {
        return $this->container['cn'];
    }

    /**
     * Sets cn
     * @param string $cn
     * @return $this
     */
    public function setCn($cn)
    {
        $this->container['cn'] = $cn;

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
     * Gets domains
     * @return string[]
     */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
     * Sets domains
     * @param string[] $domains
     * @return $this
     */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;

        return $this;
    }


    /**
     * Gets enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }


    /**
     * Gets expiresAt
     * @return string
     */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
     * Sets expiresAt
     * @param string $expiresAt
     * @return $this
     */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;

        return $this;
    }


    /**
     * Gets generatedCerts
     * @return string[]
     */
    public function getGeneratedCerts()
    {
        return $this->container['generatedCerts'];
    }

    /**
     * Sets generatedCerts
     * @param string[] $generatedCerts
     * @return $this
     */
    public function setGeneratedCerts($generatedCerts)
    {
        $this->container['generatedCerts'] = $generatedCerts;

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
     * Gets issuedAt
     * @return string
     */
    public function getIssuedAt()
    {
        return $this->container['issuedAt'];
    }

    /**
     * Sets issuedAt
     * @param string $issuedAt
     * @return $this
     */
    public function setIssuedAt($issuedAt)
    {
        $this->container['issuedAt'] = $issuedAt;

        return $this;
    }


    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }


    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }


    /**
     * Gets keySize
     * @return int
     */
    public function getKeySize()
    {
        return $this->container['keySize'];
    }

    /**
     * Sets keySize
     * @param int $keySize
     * @return $this
     */
    public function setKeySize($keySize)
    {
        $this->container['keySize'] = $keySize;

        return $this;
    }


    /**
     * Gets knownIps
     * @return string[]
     */
    public function getKnownIps()
    {
        return $this->container['knownIps'];
    }

    /**
     * Sets knownIps
     * @param string[] $knownIps
     * @return $this
     */
    public function setKnownIps($knownIps)
    {
        $this->container['knownIps'] = $knownIps;

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
     * Gets mode
     * @return string
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param string $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

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
     * Gets serialNumber
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
     * Sets serialNumber
     * @param string $serialNumber
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;

        return $this;
    }


    /**
     * Gets subjectAlternativeNames
     * @return string[]
     */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
     * Sets subjectAlternativeNames
     * @param string[] $subjectAlternativeNames
     * @return $this
     */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;

        return $this;
    }


    /**
     * Gets tos
     * @return string[]
     */
    public function getTos()
    {
        return $this->container['tos'];
    }

    /**
     * Sets tos
     * @param string[] $tos
     * @return $this
     */
    public function setTos($tos)
    {
        $this->container['tos'] = $tos;

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
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version
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

