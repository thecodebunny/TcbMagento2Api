<?php
/**
 * EavAttributeSetManagementV1Api
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
 * EavAttributeSetManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  TheCodeBunny\Swagger\Magento2\Client
 * @author   Hemang Vyas (TheCodeBunny)
 * @link     https://github.com/thecodebunny/TcbMagento2Api.git
 */
class EavAttributeSetManagementV1Api
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
     * @return EavAttributeSetManagementV1Api
     */
    public function setApiClient(\TheCodeBunny\Magento2Api\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation eavAttributeSetManagementV1CreatePost
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body1 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return \TheCodeBunny\Magento2Api\Model\EavDataAttributeSetInterface
     */
    public function eavAttributeSetManagementV1CreatePost($body = null)
    {
        list($response) = $this->eavAttributeSetManagementV1CreatePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation eavAttributeSetManagementV1CreatePostWithHttpInfo
     *
     * 
     *
     * @param \TheCodeBunny\Magento2Api\Model\Body1 $body  (optional)
     * @throws \TheCodeBunny\Magento2Api\ApiException on non-2xx response
     * @return array of \TheCodeBunny\Magento2Api\Model\EavDataAttributeSetInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function eavAttributeSetManagementV1CreatePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/eav/attribute-sets";
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
                '\TheCodeBunny\Magento2Api\Model\EavDataAttributeSetInterface',
                '/V1/eav/attribute-sets'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\TheCodeBunny\Magento2Api\Model\EavDataAttributeSetInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\TheCodeBunny\Magento2Api\Model\EavDataAttributeSetInterface', $e->getResponseHeaders());
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
