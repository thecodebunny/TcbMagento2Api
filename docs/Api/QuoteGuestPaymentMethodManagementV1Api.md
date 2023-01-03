# TheCodeBunny\Magento2Api\QuoteGuestPaymentMethodManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestPaymentMethodManagementV1GetGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/selected-payment-method | 
[**quoteGuestPaymentMethodManagementV1GetListGet**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1GetListGet) | **GET** /V1/guest-carts/{cartId}/payment-methods | 
[**quoteGuestPaymentMethodManagementV1SetPut**](QuoteGuestPaymentMethodManagementV1Api.md#quoteGuestPaymentMethodManagementV1SetPut) | **PUT** /V1/guest-carts/{cartId}/selected-payment-method | 


# **quoteGuestPaymentMethodManagementV1GetGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface quoteGuestPaymentMethodManagementV1GetGet($cartId)



Return the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[] quoteGuestPaymentMethodManagementV1GetListGet($cartId)



List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestPaymentMethodManagementV1SetPut**
> int quoteGuestPaymentMethodManagementV1SetPut($cartId, $body)



Add a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteGuestPaymentMethodManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.
$body = new \TheCodeBunny\Magento2Api\Model\Body65(); // \TheCodeBunny\Magento2Api\Model\Body65 | 

try {
    $result = $api_instance->quoteGuestPaymentMethodManagementV1SetPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestPaymentMethodManagementV1Api->quoteGuestPaymentMethodManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body65**](../Model/\TheCodeBunny\Magento2Api\Model\Body65.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

