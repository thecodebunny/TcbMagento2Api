# TheCodeBunny\Magento2Api\StoreWebsiteRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeWebsiteRepositoryV1GetListGet**](StoreWebsiteRepositoryV1Api.md#storeWebsiteRepositoryV1GetListGet) | **GET** /V1/store/websites | 


# **storeWebsiteRepositoryV1GetListGet**
> \TheCodeBunny\Magento2Api\Model\StoreDataWebsiteInterface[] storeWebsiteRepositoryV1GetListGet()



Retrieve list of all websites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new TheCodeBunny\Magento2Api\Api\StoreWebsiteRepositoryV1Api();

try {
    $result = $api_instance->storeWebsiteRepositoryV1GetListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWebsiteRepositoryV1Api->storeWebsiteRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TheCodeBunny\Magento2Api\Model\StoreDataWebsiteInterface[]**](../Model/StoreDataWebsiteInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

