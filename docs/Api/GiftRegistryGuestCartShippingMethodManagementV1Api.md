# TheCodeBunny\Magento2Api\GiftRegistryGuestCartShippingMethodManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**](GiftRegistryGuestCartShippingMethodManagementV1Api.md#giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost) | **POST** /V1/guest-giftregistry/{cartId}/estimate-shipping-methods | 


# **giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost**
> \TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[] giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $body)



Estimate shipping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\GiftRegistryGuestCartShippingMethodManagementV1Api();
$cartId = "cartId_example"; // string | The shopping cart ID.
$body = new \TheCodeBunny\Magento2Api\Model\Body122(); // \TheCodeBunny\Magento2Api\Model\Body122 | 

try {
    $result = $api_instance->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftRegistryGuestCartShippingMethodManagementV1Api->giftRegistryGuestCartShippingMethodManagementV1EstimateByRegistryIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The shopping cart ID. |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body122**](../Model/\TheCodeBunny\Magento2Api\Model\Body122.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

