<?php
/**
 * SalesOrderItemRepositoryV1Api
 * PHP version 5
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/thecodebunny/TcbMagento2Api.git)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/thecodebunny/TcbMagento2Api.git.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/thecodebunny/TcbMagento2Api.git
 * Do not edit the class manually.
 */

namespace TheCodeBunny\Magento2Api\Api;

use \TheCodeBunny\Magento2Api\ApiClient;
use \TheCodeBunny\Magento2Api\ApiException;
use \TheCodeBunny\Magento2Api\Configuration;
use \TheCodeBunny\Magento2Api\ObjectSerializer;

/**
 * SalesOrderItemRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class SalesOrderItemRepositoryV1Api
{
    /**
     * API Client
     *
     * @var \TheCodeBunny\Magento2Api\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \TheCodeBunny\Magento2Api\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\TheCodeBunny\Magento2Api\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \TheCodeBunny\Magento2Api\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \TheCodeBunny\Magento2Api\ApiClient $apiClient set the API client
     *
     * @return SalesOrderItemRepositoryV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGet
     *
     * 
     *
     * @param int $id The order item ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\SalesDataOrderItemInterface
     */
    public function salesOrderItemRepositoryV1GetGet($id)
    {
        list($response) = $this->salesOrderItemRepositoryV1GetGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetGetWithHttpInfo
     *
     * 
     *
     * @param int $id The order item ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\SalesDataOrderItemInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderItemRepositoryV1GetGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling salesOrderItemRepositoryV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/orders/items/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemInterface',
                '/V1/orders/items/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGet
     *
     * 
     *
     * @param string $searchCriteriaFilterGroups0Filters0Field Field (optional)
     * @param string $searchCriteriaFilterGroups0Filters0Value Value (optional)
     * @param string $searchCriteriaFilterGroups0Filters0ConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrders0Field Sorting field. (optional)
     * @param string $searchCriteriaSortOrders0Direction Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\SalesDataOrderItemSearchResultInterface
     */
    public function salesOrderItemRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field = null, $searchCriteriaFilterGroups0Filters0Value = null, $searchCriteriaFilterGroups0Filters0ConditionType = null, $searchCriteriaSortOrders0Field = null, $searchCriteriaSortOrders0Direction = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->salesOrderItemRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation salesOrderItemRepositoryV1GetListGetWithHttpInfo
     *
     * 
     *
     * @param string $searchCriteriaFilterGroups0Filters0Field Field (optional)
     * @param string $searchCriteriaFilterGroups0Filters0Value Value (optional)
     * @param string $searchCriteriaFilterGroups0Filters0ConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrders0Field Sorting field. (optional)
     * @param string $searchCriteriaSortOrders0Direction Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\SalesDataOrderItemSearchResultInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function salesOrderItemRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroups0Filters0Field = null, $searchCriteriaFilterGroups0Filters0Value = null, $searchCriteriaFilterGroups0Filters0ConditionType = null, $searchCriteriaSortOrders0Field = null, $searchCriteriaSortOrders0Direction = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        // parse inputs
        $resourcePath = "/V1/orders/items";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($searchCriteriaFilterGroups0Filters0Field !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroups0Filters0Field);
        }
        // query params
        if ($searchCriteriaFilterGroups0Filters0Value !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][value]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroups0Filters0Value);
        }
        // query params
        if ($searchCriteriaFilterGroups0Filters0ConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][0][filters][0][conditionType]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroups0Filters0ConditionType);
        }
        // query params
        if ($searchCriteriaSortOrders0Field !== null) {
            $queryParams['searchCriteria[sortOrders][0][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrders0Field);
        }
        // query params
        if ($searchCriteriaSortOrders0Direction !== null) {
            $queryParams['searchCriteria[sortOrders][0][direction]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrders0Direction);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaCurrentPage);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemSearchResultInterface',
                '/V1/orders/items'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemSearchResultInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\SalesDataOrderItemSearchResultInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}