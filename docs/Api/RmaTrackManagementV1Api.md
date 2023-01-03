# TheCodeBunny\Magento2Api\RmaTrackManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaTrackManagementV1AddTrackPost**](RmaTrackManagementV1Api.md#rmaTrackManagementV1AddTrackPost) | **POST** /V1/returns/{id}/tracking-numbers | 
[**rmaTrackManagementV1GetShippingLabelPdfGet**](RmaTrackManagementV1Api.md#rmaTrackManagementV1GetShippingLabelPdfGet) | **GET** /V1/returns/{id}/labels | 
[**rmaTrackManagementV1GetTracksGet**](RmaTrackManagementV1Api.md#rmaTrackManagementV1GetTracksGet) | **GET** /V1/returns/{id}/tracking-numbers | 
[**rmaTrackManagementV1RemoveTrackByIdDelete**](RmaTrackManagementV1Api.md#rmaTrackManagementV1RemoveTrackByIdDelete) | **DELETE** /V1/returns/{id}/tracking-numbers/{trackId} | 


# **rmaTrackManagementV1AddTrackPost**
> bool rmaTrackManagementV1AddTrackPost($id, $body)



Add track

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\RmaTrackManagementV1Api();
$id = 56; // int | 
$body = new \TheCodeBunny\Magento2Api\Model\Body131(); // \TheCodeBunny\Magento2Api\Model\Body131 | 

try {
    $result = $api_instance->rmaTrackManagementV1AddTrackPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1AddTrackPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\TheCodeBunny\Magento2Api\Model\Body131**](../Model/\TheCodeBunny\Magento2Api\Model\Body131.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1GetShippingLabelPdfGet**
> string rmaTrackManagementV1GetShippingLabelPdfGet($id)



Get shipping label int the PDF format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\RmaTrackManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->rmaTrackManagementV1GetShippingLabelPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1GetShippingLabelPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1GetTracksGet**
> \TheCodeBunny\Magento2Api\Model\RmaDataTrackSearchResultInterface rmaTrackManagementV1GetTracksGet($id)



Get track list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\RmaTrackManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->rmaTrackManagementV1GetTracksGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1GetTracksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\TheCodeBunny\Magento2Api\Model\RmaDataTrackSearchResultInterface**](../Model/RmaDataTrackSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaTrackManagementV1RemoveTrackByIdDelete**
> bool rmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId)



Remove track by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\RmaTrackManagementV1Api();
$id = 56; // int | 
$trackId = 56; // int | 

try {
    $result = $api_instance->rmaTrackManagementV1RemoveTrackByIdDelete($id, $trackId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaTrackManagementV1Api->rmaTrackManagementV1RemoveTrackByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **trackId** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

