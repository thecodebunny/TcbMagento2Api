<?php
/**
 * QuoteGuestCouponManagementV1Api
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
 * QuoteGuestCouponManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class QuoteGuestCouponManagementV1Api
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
     * @return QuoteGuestCouponManagementV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation quoteGuestCouponManagementV1GetGet
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return string
     */
    public function quoteGuestCouponManagementV1GetGet($cartId)
    {
        list($response) = $this->quoteGuestCouponManagementV1GetGetWithHttpInfo($cartId);
        return $response;
    }

    /**
     * Operation quoteGuestCouponManagementV1GetGetWithHttpInfo
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestCouponManagementV1GetGetWithHttpInfo($cartId)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteGuestCouponManagementV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/coupons";
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
                'string',
                '/V1/guest-carts/{cartId}/coupons'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
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
     * Operation quoteGuestCouponManagementV1RemoveDelete
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return bool
     */
    public function quoteGuestCouponManagementV1RemoveDelete($cartId)
    {
        list($response) = $this->quoteGuestCouponManagementV1RemoveDeleteWithHttpInfo($cartId);
        return $response;
    }

    /**
     * Operation quoteGuestCouponManagementV1RemoveDeleteWithHttpInfo
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestCouponManagementV1RemoveDeleteWithHttpInfo($cartId)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteGuestCouponManagementV1RemoveDelete');
        }
        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/coupons";
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/guest-carts/{cartId}/coupons'
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation quoteGuestCouponManagementV1SetPut
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @param string $couponCode The coupon code data. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return bool
     */
    public function quoteGuestCouponManagementV1SetPut($cartId, $couponCode)
    {
        list($response) = $this->quoteGuestCouponManagementV1SetPutWithHttpInfo($cartId, $couponCode);
        return $response;
    }

    /**
     * Operation quoteGuestCouponManagementV1SetPutWithHttpInfo
     *
     * 
     *
     * @param string $cartId The cart ID. (required)
     * @param string $couponCode The coupon code data. (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function quoteGuestCouponManagementV1SetPutWithHttpInfo($cartId, $couponCode)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling quoteGuestCouponManagementV1SetPut');
        }
        // verify the required parameter 'couponCode' is set
        if ($couponCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $couponCode when calling quoteGuestCouponManagementV1SetPut');
        }
        // parse inputs
        $resourcePath = "/V1/guest-carts/{cartId}/coupons/{couponCode}";
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
        // path params
        if ($couponCode !== null) {
            $resourcePath = str_replace(
                "{" . "couponCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($couponCode),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/guest-carts/{cartId}/coupons/{couponCode}'
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}