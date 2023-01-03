# TheCodeBunny\Magento2Api\SalesRuleRuleRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleRuleRepositoryV1DeleteByIdDelete**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetByIdGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetByIdGet) | **GET** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetListGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetListGet) | **GET** /V1/salesRules/search | 
[**salesRuleRuleRepositoryV1SavePost**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePost) | **POST** /V1/salesRules | 
[**salesRuleRuleRepositoryV1SavePut**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePut) | **PUT** /V1/salesRules/{ruleId} | 


# **salesRuleRuleRepositoryV1DeleteByIdDelete**
> bool salesRuleRuleRepositoryV1DeleteByIdDelete($ruleId)



Delete rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesRuleRuleRepositoryV1Api();
$ruleId = 56; // int | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1DeleteByIdDelete($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1GetByIdGet**
> \TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1GetByIdGet($ruleId)



Get rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesRuleRuleRepositoryV1Api();
$ruleId = 56; // int | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1GetByIdGet($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleSearchResultInterface salesRuleRuleRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesRuleRuleRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->salesRuleRuleRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleSearchResultInterface**](../Model/SalesRuleDataRuleSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePost($body)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesRuleRuleRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body88(); // \TheCodeBunny\Magento2Api\Model\Body88 | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body88**](../Model/\TheCodeBunny\Magento2Api\Model\Body88.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePut($ruleId, $body)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesRuleRuleRepositoryV1Api();
$ruleId = "ruleId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body87(); // \TheCodeBunny\Magento2Api\Model\Body87 | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1SavePut($ruleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body87**](../Model/\TheCodeBunny\Magento2Api\Model\Body87.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

