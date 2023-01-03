# TheCodeBunny\Magento2Api\CmsBlockRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cmsBlockRepositoryV1DeleteByIdDelete**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1DeleteByIdDelete) | **DELETE** /V1/cmsBlock/{blockId} | 
[**cmsBlockRepositoryV1GetByIdGet**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1GetByIdGet) | **GET** /V1/cmsBlock/{blockId} | 
[**cmsBlockRepositoryV1GetListGet**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1GetListGet) | **GET** /V1/cmsBlock/search | 
[**cmsBlockRepositoryV1SavePost**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1SavePost) | **POST** /V1/cmsBlock | 
[**cmsBlockRepositoryV1SavePut**](CmsBlockRepositoryV1Api.md#cmsBlockRepositoryV1SavePut) | **PUT** /V1/cmsBlock/{id} | 


# **cmsBlockRepositoryV1DeleteByIdDelete**
> bool cmsBlockRepositoryV1DeleteByIdDelete($blockId)



Delete block by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CmsBlockRepositoryV1Api();
$blockId = 56; // int | 

try {
    $result = $api_instance->cmsBlockRepositoryV1DeleteByIdDelete($blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1GetByIdGet**
> \TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface cmsBlockRepositoryV1GetByIdGet($blockId)



Retrieve block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CmsBlockRepositoryV1Api();
$blockId = 56; // int | 

try {
    $result = $api_instance->cmsBlockRepositoryV1GetByIdGet($blockId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockId** | **int**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\CmsDataBlockSearchResultsInterface cmsBlockRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve blocks matching the specified criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CmsBlockRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->cmsBlockRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchCriteriaFilterGroups0Filters0Field** | **string**| Field | [optional]
 **searchCriteriaFilterGroups0Filters0Value** | **string**| Value | [optional]
 **searchCriteriaFilterGroups0Filters0ConditionType** | **string**| Condition type | [optional]
 **searchCriteriaSortOrders0Field** | **string**| Sorting field. | [optional]
 **searchCriteriaSortOrders0Direction** | **string**| Sorting direction. | [optional]
 **searchCriteriaPageSize** | **int**| Page size. | [optional]
 **searchCriteriaCurrentPage** | **int**| Current page. | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CmsDataBlockSearchResultsInterface**](../Model/CmsDataBlockSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface cmsBlockRepositoryV1SavePost($body)



Save block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CmsBlockRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body16(); // \TheCodeBunny\Magento2Api\Model\Body16 | 

try {
    $result = $api_instance->cmsBlockRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body16**](../Model/\TheCodeBunny\Magento2Api\Model\Body16.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cmsBlockRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface cmsBlockRepositoryV1SavePut($id, $body)



Save block.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CmsBlockRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body17(); // \TheCodeBunny\Magento2Api\Model\Body17 | 

try {
    $result = $api_instance->cmsBlockRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CmsBlockRepositoryV1Api->cmsBlockRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body17**](../Model/\TheCodeBunny\Magento2Api\Model\Body17.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CmsDataBlockInterface**](../Model/CmsDataBlockInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

