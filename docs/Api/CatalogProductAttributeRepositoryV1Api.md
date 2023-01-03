# TheCodeBunny\Magento2Api\CatalogProductAttributeRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeRepositoryV1DeleteByIdDelete**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attributes/{attributeCode} | 
[**catalogProductAttributeRepositoryV1GetGet**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1GetGet) | **GET** /V1/products/attributes/{attributeCode} | 
[**catalogProductAttributeRepositoryV1GetListGet**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1GetListGet) | **GET** /V1/products/attributes | 
[**catalogProductAttributeRepositoryV1SavePost**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1SavePost) | **POST** /V1/products/attributes | 
[**catalogProductAttributeRepositoryV1SavePut**](CatalogProductAttributeRepositoryV1Api.md#catalogProductAttributeRepositoryV1SavePut) | **PUT** /V1/products/attributes/{attributeCode} | 


# **catalogProductAttributeRepositoryV1DeleteByIdDelete**
> bool catalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode)



Delete Attribute by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductAttributeRepositoryV1Api();
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1GetGet**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1GetGet($attributeCode)



Retrieve specific attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductAttributeRepositoryV1Api();
$attributeCode = "attributeCode_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeRepositoryV1GetGet($attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeSearchResultsInterface catalogProductAttributeRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve all attributes for entity type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductAttributeRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->catalogProductAttributeRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeSearchResultsInterface**](../Model/CatalogDataProductAttributeSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1SavePost($body)



Save attribute data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductAttributeRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body21(); // \TheCodeBunny\Magento2Api\Model\Body21 | 

try {
    $result = $api_instance->catalogProductAttributeRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body21**](../Model/\TheCodeBunny\Magento2Api\Model\Body21.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface catalogProductAttributeRepositoryV1SavePut($attributeCode, $body)



Save attribute data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CatalogProductAttributeRepositoryV1Api();
$attributeCode = "attributeCode_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body20(); // \TheCodeBunny\Magento2Api\Model\Body20 | 

try {
    $result = $api_instance->catalogProductAttributeRepositoryV1SavePut($attributeCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeRepositoryV1Api->catalogProductAttributeRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body20**](../Model/\TheCodeBunny\Magento2Api\Model\Body20.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CatalogDataProductAttributeInterface**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

