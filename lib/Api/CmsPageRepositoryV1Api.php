<?php
/**
 * CmsPageRepositoryV1Api
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
 * CmsPageRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class CmsPageRepositoryV1Api
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
     * @return CmsPageRepositoryV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cmsPageRepositoryV1DeleteByIdDelete
     *
     * 
     *
     * @param int $pageId  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return bool
     */
    public function cmsPageRepositoryV1DeleteByIdDelete($pageId)
    {
        list($response) = $this->cmsPageRepositoryV1DeleteByIdDeleteWithHttpInfo($pageId);
        return $response;
    }

    /**
     * Operation cmsPageRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * 
     *
     * @param int $pageId  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function cmsPageRepositoryV1DeleteByIdDeleteWithHttpInfo($pageId)
    {
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling cmsPageRepositoryV1DeleteByIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/cmsPage/{pageId}";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/cmsPage/{pageId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation cmsPageRepositoryV1GetByIdGet
     *
     * 
     *
     * @param int $pageId  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface
     */
    public function cmsPageRepositoryV1GetByIdGet($pageId)
    {
        list($response) = $this->cmsPageRepositoryV1GetByIdGetWithHttpInfo($pageId);
        return $response;
    }

    /**
     * Operation cmsPageRepositoryV1GetByIdGetWithHttpInfo
     *
     * 
     *
     * @param int $pageId  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function cmsPageRepositoryV1GetByIdGetWithHttpInfo($pageId)
    {
        // verify the required parameter 'pageId' is set
        if ($pageId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $pageId when calling cmsPageRepositoryV1GetByIdGet');
        }
        // parse inputs
        $resourcePath = "/V1/cmsPage/{pageId}";
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
        if ($pageId !== null) {
            $resourcePath = str_replace(
                "{" . "pageId" . "}",
                $this->apiClient->getSerializer()->toPathValue($pageId),
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
                '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface',
                '/V1/cmsPage/{pageId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation cmsPageRepositoryV1GetListGet
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
     * @return \TheCodeBunny\Magento2Api\Model\CmsDataPageSearchResultsInterface
     */
    public function cmsPageRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field = null, $searchCriteriaFilterGroups0Filters0Value = null, $searchCriteriaFilterGroups0Filters0ConditionType = null, $searchCriteriaSortOrders0Field = null, $searchCriteriaSortOrders0Direction = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->cmsPageRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation cmsPageRepositoryV1GetListGetWithHttpInfo
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
     * @return array of \TheCodeBunny\Magento2Api\Model\CmsDataPageSearchResultsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function cmsPageRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroups0Filters0Field = null, $searchCriteriaFilterGroups0Filters0Value = null, $searchCriteriaFilterGroups0Filters0ConditionType = null, $searchCriteriaSortOrders0Field = null, $searchCriteriaSortOrders0Direction = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        // parse inputs
        $resourcePath = "/V1/cmsPage/search";
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
                '\TheCodeBunny\Magento2Api\Model\CmsDataPageSearchResultsInterface',
                '/V1/cmsPage/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\CmsDataPageSearchResultsInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\CmsDataPageSearchResultsInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation cmsPageRepositoryV1SavePost
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body14 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface
     */
    public function cmsPageRepositoryV1SavePost($body = null)
    {
        list($response) = $this->cmsPageRepositoryV1SavePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation cmsPageRepositoryV1SavePostWithHttpInfo
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body14 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function cmsPageRepositoryV1SavePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/cmsPage";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface',
                '/V1/cmsPage'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
     * Operation cmsPageRepositoryV1SavePut
     *
     * 
     *
     * @param string $id  (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body15 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface
     */
    public function cmsPageRepositoryV1SavePut($id, $body = null)
    {
        list($response) = $this->cmsPageRepositoryV1SavePutWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation cmsPageRepositoryV1SavePutWithHttpInfo
     *
     * 
     *
     * @param string $id  (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body15 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\CmsDataPageInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function cmsPageRepositoryV1SavePutWithHttpInfo($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling cmsPageRepositoryV1SavePut');
        }
        // parse inputs
        $resourcePath = "/V1/cmsPage/{id}";
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

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface',
                '/V1/cmsPage/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\CmsDataPageInterface', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
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
