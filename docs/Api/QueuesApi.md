# CaelumPhpClient\QueuesApi

All URIs are relative to *https://apigw.caelumai.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1QueuesGet**](QueuesApi.md#apiv1queuesget) | **GET** /api/v1/queues | List

# **apiV1QueuesGet**
> \CaelumPhpClient\Model\QueueListResponse200 apiV1QueuesGet($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage)

List

Get list of queues by customer credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new CaelumPhpClient\Api\QueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xApiKey = "xApiKey_example"; // string | 
$authorization = "authorization_example"; // string | 
$sortDesc = "sortDesc_example"; // string | 
$page = "page_example"; // string | 
$sortBy = "sortBy_example"; // string | 
$itemsPerPage = "itemsPerPage_example"; // string | 

try {
    $result = $apiInstance->apiV1QueuesGet($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueuesApi->apiV1QueuesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xApiKey** | **string**|  |
 **authorization** | **string**|  |
 **sortDesc** | **string**|  | [optional]
 **page** | **string**|  | [optional]
 **sortBy** | **string**|  | [optional]
 **itemsPerPage** | **string**|  | [optional]

### Return type

[**\CaelumPhpClient\Model\QueueListResponse200**](../Model/QueueListResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

