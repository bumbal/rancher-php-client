<?php

/**
 * KeyCloakOIDCConfigResource
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

class KeyCloakOIDCConfigResource
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
    protected $resourceName = 'keyCloakOIDCConfig/';

    /**
     * @var string
     */
    protected $resourcePluralName = 'keyCloakOIDCConfigs/';

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
     * @return \Rancher\Model\KeyCloakOIDCConfigModel
     */
    public function get($id)
    {
        $response = $this->client->request('GET', $this->constructPath(true, false) . $id, []);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\KeyCloakOIDCConfigModel');
    }

    /**
     * create
     *
     * @param \Rancher\Model\KeyCloakOIDCConfigModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\KeyCloakOIDCConfigModel
     */
    public function create($data)
    {
        $postData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data, null, null, 'create');

        $response = $this->client->request('POST', $this->constructPath(true, true), $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\KeyCloakOIDCConfigModel');
    }

    /**
     * update
     *
     * @param string $id
     * @param \Rancher\Model\KeyCloakOIDCConfigModel $data
     *
     * @throws RancherException
     * @return \Rancher\Model\KeyCloakOIDCConfigModel
     */
    public function update($id, $data)
    {
        $putData =  (array) \Rancher\ObjectSerializer::sanitizeForSerialization($data, null, null, 'update');

        $response = $this->client->request('PUT', $this->constructPath(true, true) . $id, $putData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\KeyCloakOIDCConfigModel');
    }


    /**
     * configureTest
     *
     * @param string $id
     * @param \Rancher\Model\KeyCloakOidcConfigModel $input
     *
     * @throws RancherException
     * @return \Rancher\Model\KeyCloakOidcTestOutputModel
     */
    public function configureTest($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $response = $this->client->request('POST', $this->constructPath() . $id . '?action=configureTest', $postData);

        return $this->client->getSerializer()->deserialize($response, '\Rancher\Model\KeyCloakOidcTestOutputModel');
    }

    /**
     * disable
     *
     * @param string $id
     *
     * @throws RancherException
     * @return void
     */
    public function disable($id)
    {
        $this->client->request('POST', $this->constructPath() . $id . '?action=disable', []);

        return;
    }

    /**
     * testAndApply
     *
     * @param string $id
     * @param \Rancher\Model\KeyCloakOidcApplyInputModel $input
     *
     * @throws RancherException
     * @return void
     */
    public function testAndApply($id, $input)
    {
        $postData = (array) \Rancher\ObjectSerializer::sanitizeForSerialization($input);

        $this->client->request('POST', $this->constructPath() . $id . '?action=testAndApply', $postData);

        return;
    }
}
