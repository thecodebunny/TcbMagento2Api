<?php
/**
 * ConfigurableProductLinkManagementV1Api
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
 * ConfigurableProductLinkManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class ConfigurableProductLinkManagementV1Api
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
     * @return ConfigurableProductLinkManagementV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation configurableProductLinkManagementV1AddChildPost
     *
     * 
     *
     * @param string $sku  (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body108 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return bool
     */
    public function configurableProductLinkManagementV1AddChildPost($sku, $body = null)
    {
        list($response) = $this->configurableProductLinkManagementV1AddChildPostWithHttpInfo($sku, $body);
        return $response;
    }

    /**
     * Operation configurableProductLinkManagementV1AddChildPostWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @param \TheCodeBunny\Magento2Api\Model\Body108 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function configurableProductLinkManagementV1AddChildPostWithHttpInfo($sku, $body = null)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling configurableProductLinkManagementV1AddChildPost');
        }
        // parse inputs
        $resourcePath = "/V1/configurable-products/{sku}/child";
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
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
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
                'bool',
                '/V1/configurable-products/{sku}/child'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
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
     * Operation configurableProductLinkManagementV1GetChildrenGet
     *
     * 
     *
     * @param string $sku  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\CatalogDataProductInterface[]
     */
    public function configurableProductLinkManagementV1GetChildrenGet($sku)
    {
        list($response) = $this->configurableProductLinkManagementV1GetChildrenGetWithHttpInfo($sku);
        return $response;
    }

    /**
     * Operation configurableProductLinkManagementV1GetChildrenGetWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\CatalogDataProductInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function configurableProductLinkManagementV1GetChildrenGetWithHttpInfo($sku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling configurableProductLinkManagementV1GetChildrenGet');
        }
        // parse inputs
        $resourcePath = "/V1/configurable-products/{sku}/children";
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
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
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
                '\TheCodeBunny\Magento2Api\Model\CatalogDataProductInterface[]',
                '/V1/configurable-products/{sku}/children'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\CatalogDataProductInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\CatalogDataProductInterface[]', $e->getResponseHeaders());
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
     * Operation configurableProductLinkManagementV1RemoveChildDelete
     *
     * 
     *
     * @param string $sku  (required)
     * @param string $childSku  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return bool
     */
    public function configurableProductLinkManagementV1RemoveChildDelete($sku, $childSku)
    {
        list($response) = $this->configurableProductLinkManagementV1RemoveChildDeleteWithHttpInfo($sku, $childSku);
        return $response;
    }

    /**
     * Operation configurableProductLinkManagementV1RemoveChildDeleteWithHttpInfo
     *
     * 
     *
     * @param string $sku  (required)
     * @param string $childSku  (required)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function configurableProductLinkManagementV1RemoveChildDeleteWithHttpInfo($sku, $childSku)
    {
        // verify the required parameter 'sku' is set
        if ($sku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sku when calling configurableProductLinkManagementV1RemoveChildDelete');
        }
        // verify the required parameter 'childSku' is set
        if ($childSku === null) {
            throw new \InvalidArgumentException('Missing the required parameter $childSku when calling configurableProductLinkManagementV1RemoveChildDelete');
        }
        // parse inputs
        $resourcePath = "/V1/configurable-products/{sku}/children/{childSku}";
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
        if ($sku !== null) {
            $resourcePath = str_replace(
                "{" . "sku" . "}",
                $this->apiClient->getSerializer()->toPathValue($sku),
                $resourcePath
            );
        }
        // path params
        if ($childSku !== null) {
            $resourcePath = str_replace(
                "{" . "childSku" . "}",
                $this->apiClient->getSerializer()->toPathValue($childSku),
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
                '/V1/configurable-products/{sku}/children/{childSku}'
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
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
