<?php
/**
 * QuoteBillingAddressManagementV1Api
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
 * QuoteBillingAddressManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class QuoteBillingAddressManagementV1Api
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
     * @return QuoteBillingAddressManagementV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteBillingAddressManagementV1AssignPost
     *
     * 
     *
     * @param int $cartId The cart ID. (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body66 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return int
     */
    public function quoteBillingAddressManagementV1AssignPost($cartId, $body = null)
    {
        list($response) = $this->quoteBillingAddressManagementV1AssignPostWithHttpInfo($cartId, $body);
        return $response;
    }

    /**
     * Operation quoteBillingAddressManagementV1AssignPostWithHttpInfo
     *
     * 
     *
     * @param int $cartId The cart ID. (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body66 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteBillingAddressManagementV1AssignPostWithHttpInfo($cartId, $body = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteBillingAddressManagementV1AssignPost');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{cartId}/billing-address";
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
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'int',
                '/V1/carts/{cartId}/billing-address'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation quoteBillingAddressManagementV1AssignPost_0
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body67 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return int
     */
    public function quoteBillingAddressManagementV1AssignPost_0($body = null)
    {
        list($response) = $this->quoteBillingAddressManagementV1AssignPost_0WithHttpInfo($body);
        return $response;
    }

    /**
     * Operation quoteBillingAddressManagementV1AssignPost_0WithHttpInfo
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body67 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteBillingAddressManagementV1AssignPost_0WithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/carts/mine/billing-address";
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
                'int',
                '/V1/carts/mine/billing-address'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation quoteBillingAddressManagementV1GetGet
     *
     * 
     *
     * @param int $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface
     */
    public function quoteBillingAddressManagementV1GetGet($cartId)
    {
        list($response) = $this->quoteBillingAddressManagementV1GetGetWithHttpInfo($cartId);
        return $response;
    }

    /**
     * Operation quoteBillingAddressManagementV1GetGetWithHttpInfo
     *
     * 
     *
     * @param int $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteBillingAddressManagementV1GetGetWithHttpInfo($cartId)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteBillingAddressManagementV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/carts/{cartId}/billing-address";
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
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
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
                '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface',
                '/V1/carts/{cartId}/billing-address'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface', $e->getResponseHeaders());
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation quoteBillingAddressManagementV1GetGet_0
     *
     * 
     *
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface
     */
    public function quoteBillingAddressManagementV1GetGet_0()
    {
        list($response) = $this->quoteBillingAddressManagementV1GetGet_0WithHttpInfo();
        return $response;
    }

    /**
     * Operation quoteBillingAddressManagementV1GetGet_0WithHttpInfo
     *
     * 
     *
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteBillingAddressManagementV1GetGet_0WithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/V1/carts/mine/billing-address";
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
                '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface',
                '/V1/carts/mine/billing-address'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\QuoteDataAddressInterface', $e->getResponseHeaders());
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
