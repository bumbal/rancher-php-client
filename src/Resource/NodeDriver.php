<?php

namespace Rancher\Resource;

use Rancher\RancherClient;
use Rancher\RancherCollection;

class NodeDriver
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
    protected $resourceName = 'nodeDriver/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'nodeDrivers/';

    /**
     * @var string
     */
    protected $ownerId;

    public function __construct($client, $ownerId = null)
    {
        $this->client = $client;
        $this->ownerId = $ownerId;
    }

    private function constructPath($plural = false)
    {
        $constructedPath = $this->path;

        if(!empty($this->ownerId))
        {
            $constructedPath .= $this->ownerId . '/';
        }

        if($plural)
        {
            $constructedPath .= $this->resourcePluralName . '/';
        }
        else
        {
            $constructedPath .= $this->resourceName . '/';
        }

        return $constructedPath;
    }

    /**
     * getAll
     *
     * @param \Rancher\AbstractFilter $filter
     * @param string $sortDirection
     * @param int $limit
     * @param string $marker
     *
     * @throws \Exception
     * @return \Rancher\RancherCollection
     */
    public function collection($filter = null, $sortOrder = 'asc', $limit = 1000, $marker = "")
    {
        if(!in_array($sortOrder, ['asc', 'desc']))
        {
            throw new \Exception('sortDirection can only be asc or desc');
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

        $response = $this->client->request('POST', $this->constructPath(true) . '?'.$queryString, $filterArray);

        $collection->filters = $response->filters;
        $collection->pagination = $response->pagination;
        $collection->sort = $response->sort;

        foreach($response->data as $element)
        {
            $object = $this->client->getSerializer()->deserialize($element, '\Rancher\Model\\'.ucfirst($response->resourceType));
            array_push($collection->data, $object);
        }

        return $collection;
    }

    /**
     * get
     *
     * @param string $id
     *
     * @throws \Exception
     * @return \Rancher\Model\NodeDriver
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\NodeDriver');
    }

    /**
     * set
     *
     * @param \Rancher\Model\NodeDriver $data
     *
     * @throws \Exception
     * @return \Rancher\Model\NodeDriver
     */
    public function set($data)
    {
        $postData = json_encode(\Rancher\ObjectSerializer::sanitizeForSerialization($data));

        $response = $this->client->request('PUT', $this->constructPath(), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\NodeDriver');
    }

    /**
     * remove
     *
     * @param string $id
     *
     * @throws \Exception
     * @return \Rancher\Model\NodeDriver
     */
    public function remove($id)
    {
        $response = $this->client->request('DELETE', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\NodeDriver');
    }

    /**
     * activate
     *
     * @param string $id
     *
     * @throws \Exception
     * @return \Rancher\Model\NodeDriver
     */
    public function activate($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=activate', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\NodeDriver');
    }

    /**
     * deactivate
     *
     * @param string $id
     *
     * @throws \Exception
     * @return \Rancher\Model\NodeDriver
     */
    public function deactivate($id)
    {
        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=deactivate', []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\NodeDriver');
    }
}
