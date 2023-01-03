# TheCodeBunny\Magento2Api\TaxTaxRuleRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxRuleRepositoryV1DeleteByIdDelete**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetGet) | **GET** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetListGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetListGet) | **GET** /V1/taxRules/search | 
[**taxTaxRuleRepositoryV1SavePost**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePost) | **POST** /V1/taxRules | 
[**taxTaxRuleRepositoryV1SavePut**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePut) | **PUT** /V1/taxRules | 


# **taxTaxRuleRepositoryV1DeleteByIdDelete**
> bool taxTaxRuleRepositoryV1DeleteByIdDelete($ruleId)



Delete TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\TaxTaxRuleRepositoryV1Api();
$ruleId = 56; // int | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1DeleteByIdDelete($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **taxTaxRuleRepositoryV1GetGet**
> \TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1GetGet($ruleId)



Get TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\TaxTaxRuleRepositoryV1Api();
$ruleId = 56; // int | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1GetGet($ruleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **int**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleSearchResultsInterface taxTaxRuleRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage)



Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\TaxTaxRuleRepositoryV1Api();
$searchCriteriaFilterGroups0Filters0Field = "searchCriteriaFilterGroups0Filters0Field_example"; // string | Field
$searchCriteriaFilterGroups0Filters0Value = "searchCriteriaFilterGroups0Filters0Value_example"; // string | Value
$searchCriteriaFilterGroups0Filters0ConditionType = "searchCriteriaFilterGroups0Filters0ConditionType_example"; // string | Condition type
$searchCriteriaSortOrders0Field = "searchCriteriaSortOrders0Field_example"; // string | Sorting field.
$searchCriteriaSortOrders0Direction = "searchCriteriaSortOrders0Direction_example"; // string | Sorting direction.
$searchCriteriaPageSize = 56; // int | Page size.
$searchCriteriaCurrentPage = 56; // int | Current page.

try {
    $result = $api_instance->taxTaxRuleRepositoryV1GetListGet($searchCriteriaFilterGroups0Filters0Field, $searchCriteriaFilterGroups0Filters0Value, $searchCriteriaFilterGroups0Filters0ConditionType, $searchCriteriaSortOrders0Field, $searchCriteriaSortOrders0Direction, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleSearchResultsInterface**](../Model/TaxDataTaxRuleSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePost($body)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\TaxTaxRuleRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body115(); // \TheCodeBunny\Magento2Api\Model\Body115 | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body115**](../Model/\TheCodeBunny\Magento2Api\Model\Body115.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePut($body)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\TaxTaxRuleRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body114(); // \TheCodeBunny\Magento2Api\Model\Body114 | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1SavePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body114**](../Model/\TheCodeBunny\Magento2Api\Model\Body114.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

