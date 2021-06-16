# SellingPartnerApi\VendorInvoicesApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**submitInvoices()**](VendorInvoicesApi.md#submitInvoices) | **POST** /vendor/payments/v1/invoices | 


## `submitInvoices()`

```php
submitInvoices($body): \SellingPartnerApi\Model\VendorInvoices\SubmitInvoicesResponse
```



Submit new invoices to Amazon.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// See README for more information on the ConfigurationOptions object
$configurationOptions = new SellingPartnerApi\ConfigurationOptions(
    "amzn1.application-oa2-client.....",
    "abcd....",
    "Aztr|IwEBI....",
    "AKIA....",
    "ABCD....",
    "us-east-1",
    "https://sellingpartnerapi-na.amazon.com",
);
$config = new SellingPartnerApi\Configuration($configurationOptions);

$apiInstance = new SellingPartnerApi\Api\VendorInvoicesApi($config);
$body = new \SellingPartnerApi\Model\VendorInvoices\SubmitInvoicesRequest(); // \SellingPartnerApi\Model\VendorInvoices\SubmitInvoicesRequest

try {
    $result = $apiInstance->submitInvoices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VendorInvoicesApi->submitInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SellingPartnerApi\Model\VendorInvoices\SubmitInvoicesRequest**](../Model/VendorInvoices/SubmitInvoicesRequest.md)|  |

### Return type

[**\SellingPartnerApi\Model\VendorInvoices\SubmitInvoicesResponse**](../Model/VendorInvoices/SubmitInvoicesResponse.md)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Top]](#) [[API list]](../)
[[VendorInvoices Model list]](../Model/VendorInvoices)
[[README]](../../README.md)