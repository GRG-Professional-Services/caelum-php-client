# CaelumPhpClient\DefaultApi

All URIs are relative to *https://apigw.caelumai.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DocumentsDocIdGet**](DefaultApi.md#apiv1documentsdocidget) | **GET** /api/v1/documents/{docId} | 
[**apiV1DocumentsUploadPost**](DefaultApi.md#apiv1documentsuploadpost) | **POST** /api/v1/documents/upload | 

# **apiV1DocumentsDocIdGet**
> \CaelumPhpClient\Model\DocumentResponse200 apiV1DocumentsDocIdGet($xApiKey, $docId, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new CaelumPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = "xApiKey_example"; // string | 
$docId = "docId_example"; // string | 
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->apiV1DocumentsDocIdGet($xApiKey, $docId, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1DocumentsDocIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xApiKey** | **string**|  |
 **docId** | **string**|  |
 **authorization** | **string**|  |

### Return type

[**\CaelumPhpClient\Model\DocumentResponse200**](../Model/DocumentResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1DocumentsUploadPost**
> \CaelumPhpClient\Model\DocumentResponse200 apiV1DocumentsUploadPost($contentType, $accept, $xApiKey, $authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new CaelumPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentType = "contentType_example"; // string | 
$accept = "accept_example"; // string | 
$xApiKey = "xApiKey_example"; // string | 
$authorization = "authorization_example"; // string | 

try {
    $result = $apiInstance->apiV1DocumentsUploadPost($contentType, $accept, $xApiKey, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1DocumentsUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**|  |
 **accept** | **string**|  |
 **xApiKey** | **string**|  |
 **authorization** | **string**|  |

### Return type

[**\CaelumPhpClient\Model\DocumentResponse200**](../Model/DocumentResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

