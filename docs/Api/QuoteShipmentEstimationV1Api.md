# TheCodeBunny\Magento2Api\QuoteShipmentEstimationV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/carts/{cartId}/estimate-shipping-methods | 
[**quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**](QuoteShipmentEstimationV1Api.md#quoteShipmentEstimationV1EstimateByExtendedAddressPost_0) | **POST** /V1/carts/mine/estimate-shipping-methods | 


# **quoteShipmentEstimationV1EstimateByExtendedAddressPost**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShipmentEstimationV1Api();
$cartId = "cartId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body54(); // \TheCodeBunny\Magento2Api\Model\Body54 | 

try {
    $result = $api_instance->quoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body54**](../Model/\TheCodeBunny\Magento2Api\Model\Body54.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShipmentEstimationV1EstimateByExtendedAddressPost_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShipmentEstimationV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body55(); // \TheCodeBunny\Magento2Api\Model\Body55 | 

try {
    $result = $api_instance->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShipmentEstimationV1Api->quoteShipmentEstimationV1EstimateByExtendedAddressPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body55**](../Model/\TheCodeBunny\Magento2Api\Model\Body55.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

