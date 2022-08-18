# CaelumPhpClient\AuthApi

All URIs are relative to *https://apigw.caelumai.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1AuthSigninPost**](AuthApi.md#apiv1authsigninpost) | **POST** /api/v1/auth/signin | SignIn

# **apiV1AuthSigninPost**
> \CaelumPhpClient\Model\AuthResponse200 apiV1AuthSigninPost($body)

SignIn

Login users to Caelum AI, used user_name and password. Return JWT Access Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: api_key
$config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CaelumPhpClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new CaelumPhpClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CaelumPhpClient\Model\SignInModel(); // \CaelumPhpClient\Model\SignInModel | 

try {
    $result = $apiInstance->apiV1AuthSigninPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->apiV1AuthSigninPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CaelumPhpClient\Model\SignInModel**](../Model/SignInModel.md)|  |

### Return type

[**\CaelumPhpClient\Model\AuthResponse200**](../Model/AuthResponse200.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

