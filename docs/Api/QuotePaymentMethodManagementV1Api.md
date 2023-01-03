# TheCodeBunny\Magento2Api\QuotePaymentMethodManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotePaymentMethodManagementV1GetGet**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetGet) | **GET** /V1/carts/{cartId}/selected-payment-method | 
[**quotePaymentMethodManagementV1GetGet_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetGet_0) | **GET** /V1/carts/mine/selected-payment-method | 
[**quotePaymentMethodManagementV1GetListGet**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetListGet) | **GET** /V1/carts/{cartId}/payment-methods | 
[**quotePaymentMethodManagementV1GetListGet_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1GetListGet_0) | **GET** /V1/carts/mine/payment-methods | 
[**quotePaymentMethodManagementV1SetPut**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1SetPut) | **PUT** /V1/carts/{cartId}/selected-payment-method | 
[**quotePaymentMethodManagementV1SetPut_0**](QuotePaymentMethodManagementV1Api.md#quotePaymentMethodManagementV1SetPut_0) | **PUT** /V1/carts/mine/selected-payment-method | 


# **quotePaymentMethodManagementV1GetGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface quotePaymentMethodManagementV1GetGet($cartId)



Returns the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->quotePaymentMethodManagementV1GetGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetGet_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface quotePaymentMethodManagementV1GetGet_0()



Returns the payment method for a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();

try {
    $result = $api_instance->quotePaymentMethodManagementV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentInterface**](../Model/QuoteDataPaymentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[] quotePaymentMethodManagementV1GetListGet($cartId)



Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->quotePaymentMethodManagementV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1GetListGet_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[] quotePaymentMethodManagementV1GetListGet_0()



Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();

try {
    $result = $api_instance->quotePaymentMethodManagementV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataPaymentMethodInterface[]**](../Model/QuoteDataPaymentMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1SetPut**
> string quotePaymentMethodManagementV1SetPut($cartId, $body)



Adds a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();
$cartId = 56; // int | The cart ID.
$body = new \TheCodeBunny\Magento2Api\Model\Body63(); // \TheCodeBunny\Magento2Api\Model\Body63 | 

try {
    $result = $api_instance->quotePaymentMethodManagementV1SetPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body63**](../Model/\TheCodeBunny\Magento2Api\Model\Body63.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quotePaymentMethodManagementV1SetPut_0**
> string quotePaymentMethodManagementV1SetPut_0($body)



Adds a specified payment method to a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuotePaymentMethodManagementV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body64(); // \TheCodeBunny\Magento2Api\Model\Body64 | 

try {
    $result = $api_instance->quotePaymentMethodManagementV1SetPut_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotePaymentMethodManagementV1Api->quotePaymentMethodManagementV1SetPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body64**](../Model/\TheCodeBunny\Magento2Api\Model\Body64.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

