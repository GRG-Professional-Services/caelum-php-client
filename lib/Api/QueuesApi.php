<?php
/**
 * QueuesApi
 * PHP version 5
 *
 * @category Class
 * @package  CaelumPhpClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Client Public API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2022-06-10T08:58:29Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.35
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CaelumPhpClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CaelumPhpClient\ApiException;
use CaelumPhpClient\Configuration;
use CaelumPhpClient\HeaderSelector;
use CaelumPhpClient\ObjectSerializer;

/**
 * QueuesApi Class Doc Comment
 *
 * @category Class
 * @package  CaelumPhpClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueuesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV1QueuesGet
     *
     * List
     *
     * @param  string $xApiKey xApiKey (required)
     * @param  string $authorization authorization (required)
     * @param  string $sortDesc sortDesc (optional)
     * @param  string $page page (optional)
     * @param  string $sortBy sortBy (optional)
     * @param  string $itemsPerPage itemsPerPage (optional)
     *
     * @throws \CaelumPhpClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CaelumPhpClient\Model\QueueListResponse200
     */
    public function apiV1QueuesGet($xApiKey, $authorization, $sortDesc = null, $page = null, $sortBy = null, $itemsPerPage = null)
    {
        list($response) = $this->apiV1QueuesGetWithHttpInfo($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage);
        return $response;
    }

    /**
     * Operation apiV1QueuesGetWithHttpInfo
     *
     * List
     *
     * @param  string $xApiKey (required)
     * @param  string $authorization (required)
     * @param  string $sortDesc (optional)
     * @param  string $page (optional)
     * @param  string $sortBy (optional)
     * @param  string $itemsPerPage (optional)
     *
     * @throws \CaelumPhpClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CaelumPhpClient\Model\QueueListResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1QueuesGetWithHttpInfo($xApiKey, $authorization, $sortDesc = null, $page = null, $sortBy = null, $itemsPerPage = null)
    {
        $returnType = '\CaelumPhpClient\Model\QueueListResponse200';
        $request = $this->apiV1QueuesGetRequest($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CaelumPhpClient\Model\QueueListResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CaelumPhpClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CaelumPhpClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1QueuesGetAsync
     *
     * List
     *
     * @param  string $xApiKey (required)
     * @param  string $authorization (required)
     * @param  string $sortDesc (optional)
     * @param  string $page (optional)
     * @param  string $sortBy (optional)
     * @param  string $itemsPerPage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1QueuesGetAsync($xApiKey, $authorization, $sortDesc = null, $page = null, $sortBy = null, $itemsPerPage = null)
    {
        return $this->apiV1QueuesGetAsyncWithHttpInfo($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1QueuesGetAsyncWithHttpInfo
     *
     * List
     *
     * @param  string $xApiKey (required)
     * @param  string $authorization (required)
     * @param  string $sortDesc (optional)
     * @param  string $page (optional)
     * @param  string $sortBy (optional)
     * @param  string $itemsPerPage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1QueuesGetAsyncWithHttpInfo($xApiKey, $authorization, $sortDesc = null, $page = null, $sortBy = null, $itemsPerPage = null)
    {
        $returnType = '\CaelumPhpClient\Model\QueueListResponse200';
        $request = $this->apiV1QueuesGetRequest($xApiKey, $authorization, $sortDesc, $page, $sortBy, $itemsPerPage);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1QueuesGet'
     *
     * @param  string $xApiKey (required)
     * @param  string $authorization (required)
     * @param  string $sortDesc (optional)
     * @param  string $page (optional)
     * @param  string $sortBy (optional)
     * @param  string $itemsPerPage (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1QueuesGetRequest($xApiKey, $authorization, $sortDesc = null, $page = null, $sortBy = null, $itemsPerPage = null)
    {
        // verify the required parameter 'xApiKey' is set
        if ($xApiKey === null || (is_array($xApiKey) && count($xApiKey) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xApiKey when calling apiV1QueuesGet'
            );
        }
        // verify the required parameter 'authorization' is set
        if ($authorization === null || (is_array($authorization) && count($authorization) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $authorization when calling apiV1QueuesGet'
            );
        }

        $resourcePath = '/api/v1/queues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($sortDesc !== null) {
            $queryParams['sortDesc'] = ObjectSerializer::toQueryValue($sortDesc, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($sortBy !== null) {
            $queryParams['sortBy'] = ObjectSerializer::toQueryValue($sortBy, null);
        }
        // query params
        if ($itemsPerPage !== null) {
            $queryParams['itemsPerPage'] = ObjectSerializer::toQueryValue($itemsPerPage, null);
        }
        // header params
        if ($xApiKey !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($xApiKey);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = ObjectSerializer::toHeaderValue($authorization);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}