<?php

namespace Rancher\Resource;

use Rancher\RancherClient;
use Rancher\RancherCollection;

class AdfsConfig
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
    protected $resourceName = 'adfsConfig/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'adfsConfigs/';

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
     * @return \Rancher\Model\AdfsConfig
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath() . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\AdfsConfig');
    }

    /**
     * set
     *
     * @param \Rancher\Model\AdfsConfig $data
     *
     * @throws \Exception
     * @return \Rancher\Model\AdfsConfig
     */
    public function set($data)
    {
        $postData = json_encode(\Rancher\ObjectSerializer::sanitizeForSerialization($data));

        $response = $this->client->request('PUT', $this->constructPath(), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\AdfsConfig');
    }


    /**
     * disable
     *
     * @param string $id
     *
     * @throws \Exception
     * @return void
     */
    public function disable($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=disable', []);

        return;
    }

    /**
     * testAndEnable
     *
     * @param string $id
     * @param \Rancher\Model\SamlConfigTestInput $input
     *
     * @throws \Exception
     * @return \Rancher\Model\SamlConfigTestOutput
     */
    public function testAndEnable($id, $input)
    {
        $postData = json_encode(\Rancher\ObjectSerializer::sanitizeForSerialization($input));

        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=testAndEnable', $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\SamlConfigTestOutput');
    }
}
