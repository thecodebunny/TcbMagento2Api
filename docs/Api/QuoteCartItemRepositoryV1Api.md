# TheCodeBunny\Magento2Api\QuoteCartItemRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartItemRepositoryV1DeleteByIdDelete**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1DeleteByIdDelete_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1DeleteByIdDelete_0) | **DELETE** /V1/carts/mine/items/{itemId} | 
[**quoteCartItemRepositoryV1GetListGet**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet) | **GET** /V1/carts/{cartId}/items | 
[**quoteCartItemRepositoryV1GetListGet_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1GetListGet_0) | **GET** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePost**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost) | **POST** /V1/carts/{quoteId}/items | 
[**quoteCartItemRepositoryV1SavePost_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePost_0) | **POST** /V1/carts/mine/items | 
[**quoteCartItemRepositoryV1SavePut**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut) | **PUT** /V1/carts/{cartId}/items/{itemId} | 
[**quoteCartItemRepositoryV1SavePut_0**](QuoteCartItemRepositoryV1Api.md#quoteCartItemRepositoryV1SavePut_0) | **PUT** /V1/carts/mine/items/{itemId} | 


# **quoteCartItemRepositoryV1DeleteByIdDelete**
> bool quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$cartId = 56; // int | The cart ID.
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $api_instance->quoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1DeleteByIdDelete_0**
> bool quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId)



Removes the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$itemId = 56; // int | The item ID of the item to be removed.

try {
    $result = $api_instance->quoteCartItemRepositoryV1DeleteByIdDelete_0($itemId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1DeleteByIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet($cartId)



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$cartId = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCartItemRepositoryV1GetListGet($cartId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **int**| The cart ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1GetListGet_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface[] quoteCartItemRepositoryV1GetListGet_0()



Lists items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();

try {
    $result = $api_instance->quoteCartItemRepositoryV1GetListGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1GetListGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost($quoteId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$quoteId = "quoteId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body57(); // \TheCodeBunny\Magento2Api\Model\Body57 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePost($quoteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quoteId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body57**](../Model/\TheCodeBunny\Magento2Api\Model\Body57.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePost_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePost_0($body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body59(); // \TheCodeBunny\Magento2Api\Model\Body59 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body59**](../Model/\TheCodeBunny\Magento2Api\Model\Body59.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut($cartId, $itemId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$cartId = "cartId_example"; // string | 
$itemId = "itemId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body58(); // \TheCodeBunny\Magento2Api\Model\Body58 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePut($cartId, $itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cartId** | **string**|  |
 **itemId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body58**](../Model/\TheCodeBunny\Magento2Api\Model\Body58.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartItemRepositoryV1SavePut_0**
> \TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface quoteCartItemRepositoryV1SavePut_0($itemId, $body)



Add/update the specified cart item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\QuoteCartItemRepositoryV1Api();
$itemId = "itemId_example"; // string | 
$body = new \TheCodeBunny\Magento2Api\Model\Body60(); // \TheCodeBunny\Magento2Api\Model\Body60 | 

try {
    $result = $api_instance->quoteCartItemRepositoryV1SavePut_0($itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartItemRepositoryV1Api->quoteCartItemRepositoryV1SavePut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **itemId** | **string**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body60**](../Model/\TheCodeBunny\Magento2Api\Model\Body60.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

