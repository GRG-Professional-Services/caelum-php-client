# CaelumPhpClient\DocumentsApi

All URIs are relative to *https://apigw.caelumai.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1DocumentsGet**](DocumentsApi.md#apiv1documentsget) | **GET** /api/v1/documents | List

# **apiV1DocumentsGet**
> \CaelumPhpClient\Model\DocumentListResponse200 apiV1DocumentsGet($xApiKey, $authorization, $queueId, $sortDesc, $itemsPerPage, $status, $page, $sortBy)

List

Get list of documents by queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new CaelumPhpClient\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = "xApiKey_example"; // string | 
$authorization = "authorization_example"; // string | 
$queueId = "queueId_example"; // string | 
$sortDesc = "sortDesc_example"; // string | 
$itemsPerPage = "itemsPerPage_example"; // string | 
$status = "status_example"; // string | 
$page = "page_example"; // string | 
$sortBy = "sortBy_example"; // string | 

try {
    $result = $apiInstance->apiV1DocumentsGet($xApiKey, $authorization, $queueId, $sortDesc, $itemsPerPage, $status, $page, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->apiV1DocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xApiKey** | **string**|  |
 **authorization** | **string**|  |
 **queueId** | **string**|  |
 **sortDesc** | **string**|  | [optional]
 **itemsPerPage** | **string**|  | [optional]
 **status** | **string**|  | [optional]
 **page** | **string**|  | [optional]
 **sortBy** | **string**|  | [optional]

### Return type

[**\CaelumPhpClient\Model\DocumentListResponse200**](../Model/DocumentListResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

