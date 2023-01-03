# TheCodeBunny\Magento2Api\SalesOrderAddressRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderAddressRepositoryV1SavePut**](SalesOrderAddressRepositoryV1Api.md#salesOrderAddressRepositoryV1SavePut) | **PUT** /V1/orders/{parent_id} | 


# **salesOrderAddressRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\SalesDataOrderAddressInterface salesOrderAddressRepositoryV1SavePut($parentId, $body)



Performs persist operations for a specified order address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesOrderAddressRepositoryV1Api();
$parentId = "parentId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body74(); // \TheCodeBunny\Magento2Api\Model\Body74 | 

try {
    $result = $api_instance->salesOrderAddressRepositoryV1SavePut($parentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderAddressRepositoryV1Api->salesOrderAddressRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body74**](../Model/\TheCodeBunny\Magento2Api\Model\Body74.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesDataOrderAddressInterface**](../Model/SalesDataOrderAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

