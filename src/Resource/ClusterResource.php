<?php

/**
 * ClusterResource
 *
 * @category Class
 * @package  Rancher
 * @author   Gerb Sterrenburg @ Bumbal
 * @link     https://github.com/freightlive/rancher-php-client
 */

namespace Rancher\Resource;

use Rancher\RancherClient;
use Rancher\RancherException;
use Rancher\RancherCollection;

class ClusterResource
{
    /**
     * @var RancherClient
     */
    protected $client;

    /**
     * @var string
     */
    protected $path = '/v3/';

    /**
     * @var string
     */
    protected $resourceName = 'cluster/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'clusters/';

    /**
     * @var string
     */
    protected $ownerId;

    /**
     * __construct
     *
     * @param RancherClient $client
     * @param string $ownerId
     *
     * @return void
     */
    public function __construct($client, $ownerId = null)
    {
        $this->client = $client;
        $this->ownerId = $ownerId;
    }

    /**
     * constructPath
     *
     * @param boolean $plural
     * @param boolean $includeOwnerId
     *
     * @return string
     */
    private function constructPath($includeOwnerId = false, $plural = false)
    {
        $constructedPath = $this->path;

        if($includeOwnerId && !empty($this->ownerId))
        {
            $constructedPath .= $this->ownerId . '/';
        }

        if($plural)
        {
            $constructedPath .= $this->resourcePluralName;
        }
        else
        {
            $constructedPath .= $this->resourceName;
        }

        return $constructedPath;
    }

    /**
     * getAll
     *
     * @param \Rancher\AbstractFilter $filter
     * @param string $sortOrder
     * @param int $limit
     * @param string $marker
     *
     * @throws RancherException
     * @return \Rancher\RancherCollection
     */
    public function collection($filter = null, $sortOrder = 'asc', $limit = 1000, $marker = "")
    {
        if(!in_array($sortOrder, ['asc', 'desc']))
        {
            throw new RancherException('sortDirection can only be asc or desc');
        }

        $collection = new RancherCollection();

        if($filter == null)
        {
            $filterArray = [];
        }
        else
        {
            $filterArray = $filter->toArray();
        }

        $params = array_merge([
            'order' => $sortOrder,
            'limit' => $limit,
            'marker' => $marker,
        ], $filterArray);

        $response = $this->client->request('GET', $this->constructPath(true, true), $params);

        $collection->filters = $response->filters;
        $collection->pagination = $response->pagination;
        $collection->sort = $response->sort;

        foreach($response->data as $element)
        {
            $object = $this->client->getSerializer()->deserialize($element, '\Rancher\Model\\'.ucfirst($response->resourceType).'Model');
            array_push($collection->data, $object);
        }

        return $collection;
    }

    /**
     * get
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\ClusterModel
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath(true, false) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ClusterModel');
    }

    /**
     * create
     *
     * @param \Rancher\Model\ClusterModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\ClusterModel
     */
    public function create($data)
    {
        $postData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data, null, null, 'create');

        $response = $this->client->request('POST', $this->constructPath(true, true), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ClusterModel');
    }

    /**
     * update
     *
     * @param string $id
     * @param \Rancher\Model\ClusterModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\ClusterModel
     */
    public function update($id, $data)
    {
        $putData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data, null, null, 'update');

        $response = $this->client->request('PUT', $this->constructPath(true, true) . $id, $putData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ClusterModel');
    }

    /**
     * remove
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\ClusterModel
     */
    public function remove($id)
    {
        $response = $this->client->request('DELETE', $this->constructPath(true) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ClusterModel');
    }

    /**
     * backupEtcd
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function backupEtcd($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=backupEtcd', []);

        return;
    }

    /**
     * disableMonitoring
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function disableMonitoring($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=disableMonitoring', []);

        return;
    }

    /**
     * editMonitoring
     *
     * @param string $id
     * @param \Rancher\Model\MonitoringInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function editMonitoring($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=editMonitoring', $postData);

        return;
    }

    /**
     * enableMonitoring
     *
     * @param string $id
     * @param \Rancher\Model\MonitoringInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function enableMonitoring($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=enableMonitoring', $postData);

        return;
    }

    /**
     * exportYaml
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\ExportOutputModel
     */
    public function exportYaml($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=exportYaml', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ExportOutputModel');
    }

    /**
     * generateKubeconfig
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\GenerateKubeConfigOutputModel
     */
    public function generateKubeconfig($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=generateKubeconfig', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\GenerateKubeConfigOutputModel');
    }

    /**
     * importYaml
     *
     * @param string $id
     * @param \Rancher\Model\ImportClusterYamlInputModel $input
     *
     * @throws RancherException
     * @return \Rancher\Model\ImportYamlOutputModel
     */
    public function importYaml($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=importYaml', $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\ImportYamlOutputModel');
    }

    /**
     * restoreFromEtcdBackup
     *
     * @param string $id
     * @param \Rancher\Model\RestoreFromEtcdBackupInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function restoreFromEtcdBackup($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=restoreFromEtcdBackup', $postData);

        return;
    }

    /**
     * rotateCertificates
     *
     * @param string $id
     * @param \Rancher\Model\RotateCertificateInputModel $input
     *
     * @throws RancherException
     * @return \Rancher\Model\RotateCertificateOutputModel
     */
    public function rotateCertificates($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=rotateCertificates', $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\RotateCertificateOutputModel');
    }

    /**
     * rotateEncryptionKey
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\RotateEncryptionKeyOutputModel
     */
    public function rotateEncryptionKey($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=rotateEncryptionKey', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\RotateEncryptionKeyOutputModel');
    }

    /**
     * saveAsTemplate
     *
     * @param string $id
     * @param \Rancher\Model\SaveAsTemplateInputModel $input
     *
     * @throws RancherException
     * @return \Rancher\Model\SaveAsTemplateOutputModel
     */
    public function saveAsTemplate($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=saveAsTemplate', $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\SaveAsTemplateOutputModel');
    }

    /**
     * viewMonitoring
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\MonitoringOutputModel
     */
    public function viewMonitoring($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=viewMonitoring', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\MonitoringOutputModel');
    }
}
