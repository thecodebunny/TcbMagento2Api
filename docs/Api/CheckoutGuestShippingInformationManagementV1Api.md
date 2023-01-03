# TheCodeBunny\Magento2Api\CheckoutGuestShippingInformationManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**](CheckoutGuestShippingInformationManagementV1Api.md#checkoutGuestShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/guest-carts/{cartId}/shipping-information | 


# **checkoutGuestShippingInformationManagementV1SaveAddressInformationPost**
> \TheCodeBunny\Magento2Api\Model\CheckoutDataPaymentDetailsInterface checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\CheckoutGuestShippingInformationManagementV1Api();
$cartId = "cartId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body94(); // \TheCodeBunny\Magento2Api\Model\Body94 | 

try {
    $result = $api_instance->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutGuestShippingInformationManagementV1Api->checkoutGuestShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body94**](../Model/\TheCodeBunny\Magento2Api\Model\Body94.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

