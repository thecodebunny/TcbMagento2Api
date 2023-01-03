# TheCodeBunny\Magento2Api\SalesCreditmemoManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesCreditmemoManagementV1CancelPut**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1CancelPut) | **PUT** /V1/creditmemo/{id} | 
[**salesCreditmemoManagementV1GetCommentsListGet**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1GetCommentsListGet) | **GET** /V1/creditmemo/{id}/comments | 
[**salesCreditmemoManagementV1NotifyPost**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1NotifyPost) | **POST** /V1/creditmemo/{id}/emails | 
[**salesCreditmemoManagementV1RefundPost**](SalesCreditmemoManagementV1Api.md#salesCreditmemoManagementV1RefundPost) | **POST** /V1/creditmemo/refund | 


# **salesCreditmemoManagementV1CancelPut**
> bool salesCreditmemoManagementV1CancelPut($id)



Cancels a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesCreditmemoManagementV1Api();
$id = 56; // int | The credit memo ID.

try {
    $result = $api_instance->salesCreditmemoManagementV1CancelPut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1CancelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoManagementV1GetCommentsListGet**
> \TheCodeBunny\Magento2Api\Model\SalesDataCreditmemoCommentSearchResultInterface salesCreditmemoManagementV1GetCommentsListGet($id)



Lists comments for a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesCreditmemoManagementV1Api();
$id = 56; // int | The credit memo ID.

try {
    $result = $api_instance->salesCreditmemoManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesDataCreditmemoCommentSearchResultInterface**](../Model/SalesDataCreditmemoCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoManagementV1NotifyPost**
> bool salesCreditmemoManagementV1NotifyPost($id)



Emails a user a specified credit memo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesCreditmemoManagementV1Api();
$id = 56; // int | The credit memo ID.

try {
    $result = $api_instance->salesCreditmemoManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The credit memo ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesCreditmemoManagementV1RefundPost**
> \TheCodeBunny\Magento2Api\Model\SalesDataCreditmemoInterface salesCreditmemoManagementV1RefundPost($body)



Prepare creditmemo to refund and save it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\SalesCreditmemoManagementV1Api();
$body = new \TheCodeBunny\Magento2Api\Model\Body79(); // \TheCodeBunny\Magento2Api\Model\Body79 | 

try {
    $result = $api_instance->salesCreditmemoManagementV1RefundPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesCreditmemoManagementV1Api->salesCreditmemoManagementV1RefundPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body79**](../Model/\TheCodeBunny\Magento2Api\Model\Body79.md)|  | [optional]

### Return type

[**\TheCodeBunny\Magento2Api\Model\SalesDataCreditmemoInterface**](../Model/SalesDataCreditmemoInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

