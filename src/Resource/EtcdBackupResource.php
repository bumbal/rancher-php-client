<?php

/**
 * EtcdBackupResource
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

class EtcdBackupResource
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
    protected $resourceName = 'etcdBackup/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'etcdBackups/';

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
     * @return \Rancher\Model\EtcdBackupModel
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath(true, false) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\EtcdBackupModel');
    }

    /**
     * create
     *
     * @param \Rancher\Model\EtcdBackupModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\EtcdBackupModel
     */
    public function create($data)
    {
        $postData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data);

        $response = $this->client->request('POST', $this->constructPath(true, true), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\EtcdBackupModel');
    }

    /**
     * update
     *
     * @param string $id
     * @param \Rancher\Model\EtcdBackupModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\EtcdBackupModel
     */
    public function update($id, $data)
    {
        $putData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data);

        $response = $this->client->request('PUT', $this->constructPath(true, true) . $id, $putData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\EtcdBackupModel');
    }

    /**
     * remove
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\EtcdBackupModel
     */
    public function remove($id)
    {
        $response = $this->client->request('DELETE', $this->constructPath(true) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\EtcdBackupModel');
    }

}
