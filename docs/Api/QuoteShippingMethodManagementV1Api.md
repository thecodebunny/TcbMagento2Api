# TheCodeBunny\Magento2Api\QuoteShippingMethodManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteShippingMethodManagementV1EstimateByAddressIdPost**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1EstimateByAddressIdPost) | **POST** /V1/carts/{cartId}/estimate-shipping-methods-by-address-id | 
[**quoteShippingMethodManagementV1EstimateByAddressIdPost_0**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1EstimateByAddressIdPost_0) | **POST** /V1/carts/mine/estimate-shipping-methods-by-address-id | 
[**quoteShippingMethodManagementV1GetListGet**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1GetListGet) | **GET** /V1/carts/{cartId}/shipping-methods | 
[**quoteShippingMethodManagementV1GetListGet_0**](QuoteShippingMethodManagementV1Api.md#quoteShippingMethodManagementV1GetListGet_0) | **GET** /V1/carts/mine/shipping-methods | 


# **quoteShippingMethodManagementV1EstimateByAddressIdPost**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShippingMethodManagementV1Api();
$cartId = 56; // int | The shopping cart ID.
$body = new \TheCodeBunny\Magento2Api\Model\Body52(); // \TheCodeBunny\Magento2Api\Model\Body52 | 

try {
    $result = $api_instance->quoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1EstimateByAddressIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body52**](../Model/\TheCodeBunny\Magento2Api\Model\Body52.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1EstimateByAddressIdPost_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1EstimateByAddressIdPost_0($body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShippingMethodManagementV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body53(); // \TheCodeBunny\Magento2Api\Model\Body53 | 

try {
    $result = $api_instance->quoteShippingMethodManagementV1EstimateByAddressIdPost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1EstimateByAddressIdPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body53**](../Model/\TheCodeBunny\Magento2Api\Model\Body53.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1GetListGet($cartId)



Lists applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShippingMethodManagementV1Api();
$cartId = 56; // int | The shopping cart ID.

try {
    $result = $api_instance->quoteShippingMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The shopping cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteShippingMethodManagementV1GetListGet_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] quoteShippingMethodManagementV1GetListGet_0()



Lists applicable shipping methods for a specified quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteShippingMethodManagementV1Api();

try {
    $result = $api_instance->quoteShippingMethodManagementV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteShippingMethodManagementV1Api->quoteShippingMethodManagementV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

