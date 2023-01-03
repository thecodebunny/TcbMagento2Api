# TheCodeBunny\Magento2Api\QuoteGuestCartTotalManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartTotalManagementV1CollectTotalsPut**](QuoteGuestCartTotalManagementV1Api.md#quoteGuestCartTotalManagementV1CollectTotalsPut) | **PUT** /V1/guest-carts/{cartId}/collect-totals | 


# **quoteGuestCartTotalManagementV1CollectTotalsPut**
> \TheCodeBunny\Magento2Api\Model\QuoteDataTotalsInterface quoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $body)



Set shipping/billing methods and additional data for cart and collect totals for guest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteGuestCartTotalManagementV1Api();
$cartId = "cartId_example"; // string | The cart ID.
$body = new \TheCodeBunny\Magento2Api\Model\Body69(); // \TheCodeBunny\Magento2Api\Model\Body69 | 

try {
    $result = $api_instance->quoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartTotalManagementV1Api->quoteGuestCartTotalManagementV1CollectTotalsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**| The cart ID. |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body69**](../Model/\TheCodeBunny\Magento2Api\Model\Body69.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

