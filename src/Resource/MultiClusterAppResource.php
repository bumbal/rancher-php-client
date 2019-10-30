<?php

/**
 * MultiClusterAppResource
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

class MultiClusterAppResource
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
    protected $resourceName = 'multiClusterApp/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'multiClusterApps/';

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

        $queryString = http_build_query([
            'order' => $sortOrder,
            'limit' => $limit,
            'marker' => $marker,
        ]);

        $response = $this->client->request('POST', $this->constructPath(false, true) . '?'.$queryString, $filterArray);

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
     * @return \Rancher\Model\MultiClusterAppModel
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\MultiClusterAppModel');
    }

    /**
     * create
     *
     * @param \Rancher\Model\MultiClusterAppModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\MultiClusterAppModel
     */
    public function create($data)
    {
        $postData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data);

        $response = $this->client->request('POST', $this->constructPath(true, true), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\MultiClusterAppModel');
    }

    /**
     * update
     *
     * @param string $id
     * @param \Rancher\Model\MultiClusterAppModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\MultiClusterAppModel
     */
    public function update($id, $data)
    {
        $putData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data);

        $response = $this->client->request('PUT', $this->constructPath(true, true) . $id, $putData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\MultiClusterAppModel');
    }

    /**
     * remove
     *
     * @param string $id
     *
     * @throws RancherException
     * @return \Rancher\Model\MultiClusterAppModel
     */
    public function remove($id)
    {
        $response = $this->client->request('DELETE', $this->constructPath(true) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\MultiClusterAppModel');
    }

    /**
     * addProjects
     *
     * @param string $id
     * @param \Rancher\Model\UpdateMultiClusterAppTargetsInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function addProjects($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=addProjects', $postData);

        return;
    }

    /**
     * removeProjects
     *
     * @param string $id
     * @param \Rancher\Model\UpdateMultiClusterAppTargetsInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function removeProjects($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=removeProjects', $postData);

        return;
    }

    /**
     * rollback
     *
     * @param string $id
     * @param \Rancher\Model\MultiClusterAppRollbackInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function rollback($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=rollback', $postData);

        return;
    }
}
