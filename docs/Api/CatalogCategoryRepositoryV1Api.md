# TheCodeBunny\Magento2Api\CatalogCategoryRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryRepositoryV1DeleteByIdentifierDelete**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1DeleteByIdentifierDelete) | **DELETE** /V1/categories/{categoryId} | 
[**catalogCategoryRepositoryV1GetGet**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1GetGet) | **GET** /V1/categories/{categoryId} | 
[**catalogCategoryRepositoryV1SavePost**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1SavePost) | **POST** /V1/categories | 
[**catalogCategoryRepositoryV1SavePut**](CatalogCategoryRepositoryV1Api.md#catalogCategoryRepositoryV1SavePut) | **PUT** /V1/categories/{id} | 


# **catalogCategoryRepositoryV1DeleteByIdentifierDelete**
> bool catalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId)



Delete category by identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogCategoryRepositoryV1Api();
$categoryId = 56; // int | 

try {
    $result = $api_instance->catalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1DeleteByIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1GetGet**
> \TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1GetGet($categoryId, $storeId)



Get info about category by category id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogCategoryRepositoryV1Api();
$categoryId = 56; // int | 
$storeId = 56; // int | 

try {
    $result = $api_instance->catalogCategoryRepositoryV1GetGet($categoryId, $storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**|  |
 **storeId** | **int**|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1SavePost($body)



Create category service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogCategoryRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body30(); // \TheCodeBunny\Magento2Api\Model\Body30 | 

try {
    $result = $api_instance->catalogCategoryRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body30**](../Model/\TheCodeBunny\Magento2Api\Model\Body30.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface catalogCategoryRepositoryV1SavePut($id, $body)



Create category service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogCategoryRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body31(); // \TheCodeBunny\Magento2Api\Model\Body31 | 

try {
    $result = $api_instance->catalogCategoryRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryRepositoryV1Api->catalogCategoryRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body31**](../Model/\TheCodeBunny\Magento2Api\Model\Body31.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataCategoryInterface**](../Model/CatalogDataCategoryInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

