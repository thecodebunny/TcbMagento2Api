# TheCodeBunny\Magento2Api\CatalogProductLinkTypeListV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkTypeListV1GetItemAttributesGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemAttributesGet) | **GET** /V1/products/links/{type}/attributes | 
[**catalogProductLinkTypeListV1GetItemsGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemsGet) | **GET** /V1/products/links/types | 


# **catalogProductLinkTypeListV1GetItemAttributesGet**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkAttributeInterface[] catalogProductLinkTypeListV1GetItemAttributesGet($type)



Provide a list of the product link type attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductLinkTypeListV1Api();
$type = "type_example"; // string | 

try {
    $result = $api_instance->catalogProductLinkTypeListV1GetItemAttributesGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkAttributeInterface[]**](../Model/CatalogDataProductLinkAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkTypeListV1GetItemsGet**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkTypeInterface[] catalogProductLinkTypeListV1GetItemsGet()



Retrieve information about available product link types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductLinkTypeListV1Api();

try {
    $result = $api_instance->catalogProductLinkTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductLinkTypeInterface[]**](../Model/CatalogDataProductLinkTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

