<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
final class VendorDirectFulfillmentShippingSDK implements VendorDirectFulfillmentShippingSDKInterface
{
    public function __construct(private readonly ClientInterface $client, private readonly HttpFactory $httpFactory, private readonly Configuration $configuration, private readonly LoggerInterface $logger)
    {
    }

    /**
     * Operation createShippingLabels.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order. (required)
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body The request payload containing parameters for creating shipping labels. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createShippingLabels(AccessToken $accessToken, string $region, string $purchase_order_number, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel
    {
        $request = $this->createShippingLabelsRequest($accessToken, $region, $purchase_order_number, $body);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'createShippingLabels', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'createShippingLabels')) {
                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'createShippingLabels'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'createShippingLabels',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'createShippingLabels', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'createShippingLabels')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'createShippingLabels'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'createShippingLabels',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel',
            []
        );
    }

    /**
     * Create request for operation 'createShippingLabels'.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order. (required)
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body The request payload containing parameters for creating shipping labels. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function createShippingLabelsRequest(AccessToken $accessToken, string $region, string $purchase_order_number, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body) : RequestInterface
    {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (\is_array($purchase_order_number) && \count($purchase_order_number) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling createShippingLabels'
            );
        }

        if (!\preg_match('/^[a-zA-Z0-9]+$/', $purchase_order_number)) {
            throw new InvalidArgumentException('invalid value for "purchase_order_number" when calling VendorShippingLabelsApi.createShippingLabels, must conform to the pattern /^[a-zA-Z0-9]+$/.');
        }

        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling createShippingLabels'
            );
        }

        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = \str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation getShippingLabel.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping label and should be the same purchaseOrderNumber as received in the order. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShippingLabel(AccessToken $accessToken, string $region, string $purchase_order_number) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel
    {
        $request = $this->getShippingLabelRequest($accessToken, $region, $purchase_order_number);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'getShippingLabel', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getShippingLabel')) {
                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getShippingLabel'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getShippingLabel',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'getShippingLabel', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getShippingLabel')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getShippingLabel'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getShippingLabel',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel',
            []
        );
    }

    /**
     * Create request for operation 'getShippingLabel'.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping label and should be the same purchaseOrderNumber as received in the order. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getShippingLabelRequest(AccessToken $accessToken, string $region, string $purchase_order_number) : RequestInterface
    {
        // verify the required parameter 'purchase_order_number' is set
        if ($purchase_order_number === null || (\is_array($purchase_order_number) && \count($purchase_order_number) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $purchase_order_number when calling getShippingLabel'
            );
        }

        if (!\preg_match('/^[a-zA-Z0-9]+$/', $purchase_order_number)) {
            throw new InvalidArgumentException('invalid value for "purchase_order_number" when calling VendorShippingLabelsApi.getShippingLabel, must conform to the pattern /^[a-zA-Z0-9]+$/.');
        }

        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        // path params
        if ($purchase_order_number !== null) {
            $resourcePath = \str_replace(
                '{' . 'purchaseOrderNumber' . '}',
                ObjectSerializer::toPathValue($purchase_order_number),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation getShippingLabels.
     *
     * @param \DateTimeInterface $created_after Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTimeInterface $created_before Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param null|string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param null|int $limit The limit to the number of records returned. (optional)
     * @param null|string $sort_order Sort ASC or DESC by order creation date. (optional, default to 'ASC')
     * @param null|string $next_token Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShippingLabels(AccessToken $accessToken, string $region, \DateTimeInterface $created_after, \DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?int $limit = null, ?string $sort_order = 'ASC', ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabelList
    {
        $request = $this->getShippingLabelsRequest($accessToken, $region, $created_after, $created_before, $ship_from_party_id, $limit, $sort_order, $next_token);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'getShippingLabels', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getShippingLabels')) {
                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getShippingLabels'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getShippingLabels',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'getShippingLabels', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'getShippingLabels')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'getShippingLabels'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'getShippingLabels',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabelList',
            []
        );
    }

    /**
     * Create request for operation 'getShippingLabels'.
     *
     * @param \DateTimeInterface $created_after Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTimeInterface $created_before Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param null|string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param null|int $limit The limit to the number of records returned. (optional)
     * @param null|string $sort_order Sort ASC or DESC by order creation date. (optional, default to 'ASC')
     * @param null|string $next_token Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function getShippingLabelsRequest(AccessToken $accessToken, string $region, \DateTimeInterface $created_after, \DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?int $limit = null, ?string $sort_order = 'ASC', ?string $next_token = null) : RequestInterface
    {
        // verify the required parameter 'created_after' is set
        if ($created_after === null || (\is_array($created_after) && \count($created_after) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_after when calling getShippingLabels'
            );
        }
        // verify the required parameter 'created_before' is set
        if ($created_before === null || (\is_array($created_before) && \count($created_before) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $created_before when calling getShippingLabels'
            );
        }

        if ($limit !== null && $limit > 100) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling VendorShippingLabelsApi.getShippingLabels, must be smaller than or equal to 100.');
        }

        if ($limit !== null && $limit < 1) {
            throw new InvalidArgumentException('invalid value for "$limit" when calling VendorShippingLabelsApi.getShippingLabels, must be bigger than or equal to 1.');
        }

        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($ship_from_party_id)) {
            $ship_from_party_id = ObjectSerializer::serializeCollection($ship_from_party_id, '', true);
        }

        if ($ship_from_party_id !== null) {
            $queryParams['shipFromPartyId'] = ObjectSerializer::toString($ship_from_party_id);
        }
        // query params
        if (\is_array($limit)) {
            $limit = ObjectSerializer::serializeCollection($limit, '', true);
        }

        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toString($limit);
        }
        // query params
        if (\is_array($created_after)) {
            $created_after = ObjectSerializer::serializeCollection($created_after, '', true);
        }

        if ($created_after !== null) {
            $queryParams['createdAfter'] = ObjectSerializer::toString($created_after);
        }
        // query params
        if (\is_array($created_before)) {
            $created_before = ObjectSerializer::serializeCollection($created_before, '', true);
        }

        if ($created_before !== null) {
            $queryParams['createdBefore'] = ObjectSerializer::toString($created_before);
        }
        // query params
        if (\is_array($sort_order)) {
            $sort_order = ObjectSerializer::serializeCollection($sort_order, '', true);
        }

        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toString($sort_order);
        }
        // query params
        if (\is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }

        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toString($next_token);
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation submitShippingLabelRequest.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body Request body containing the shipping labels data. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function submitShippingLabelRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference
    {
        $request = $this->submitShippingLabelRequestRequest($accessToken, $region, $body);

        $this->configuration->extensions()->preRequest('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest')) {
                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'submitShippingLabelRequest',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest', $request, $response);

            if ($this->configuration->loggingEnabled('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('VendorDirectFulfillmentShipping', 'submitShippingLabelRequest'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'VendorDirectFulfillmentShipping',
                        'operation' => 'submitShippingLabelRequest',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference',
            []
        );
    }

    /**
     * Create request for operation 'submitShippingLabelRequest'.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body Request body containing the shipping labels data. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     */
    public function submitShippingLabelRequestRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body) : RequestInterface
    {
        // verify the required parameter 'body' is set
        if ($body === null || (\is_array($body) && \count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling submitShippingLabelRequest'
            );
        }

        $resourcePath = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'POST',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['content-type'] === ['application/json']) {
                $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($body), JSON_THROW_ON_ERROR);
            } else {
                $httpBody = $body;
            }

            $request = $request->withBody($this->httpFactory->createStreamFromString($httpBody));
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
