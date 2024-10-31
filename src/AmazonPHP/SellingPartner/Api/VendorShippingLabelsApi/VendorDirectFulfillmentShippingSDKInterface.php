<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

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
interface VendorDirectFulfillmentShippingSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentShipping';

    public const OPERATION_CREATESHIPPINGLABELS = 'createShippingLabels';

    public const OPERATION_CREATESHIPPINGLABELS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';

    public const OPERATION_GETSHIPPINGLABEL = 'getShippingLabel';

    public const OPERATION_GETSHIPPINGLABEL_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';

    public const OPERATION_GETSHIPPINGLABELS = 'getShippingLabels';

    public const OPERATION_GETSHIPPINGLABELS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';

    public const OPERATION_SUBMITSHIPPINGLABELREQUEST = 'submitShippingLabelRequest';

    public const OPERATION_SUBMITSHIPPINGLABELREQUEST_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';

    /**
     * Operation createShippingLabels.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping labels. It should be the same purchaseOrderNumber as received in the order. (required)
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body The request payload that contains parameters for creating shipping labels. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function createShippingLabels(AccessToken $accessToken, string $region, string $purchase_order_number, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel;

    /**
     * Operation getShippingLabel.
     *
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping label. Should be the same &#x60;purchaseOrderNumber&#x60; as received in the order. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShippingLabel(AccessToken $accessToken, string $region, string $purchase_order_number) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel;

    /**
     * Operation getShippingLabels.
     *
     * @param DateTimeInterface $created_after Shipping labels that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param DateTimeInterface $created_before Shipping labels that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param null|string $ship_from_party_id The vendor warehouseId for order fulfillment. If not specified, the result will contain orders for all warehouses. (optional)
     * @param null|int $limit The limit to the number of records returned. (optional)
     * @param string $sort_order Sort ASC or DESC by order creation date. (optional, default to 'ASC')
     * @param null|string $next_token Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getShippingLabels(AccessToken $accessToken, string $region, DateTimeInterface $created_after, DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?int $limit = null, string $sort_order = 'ASC', ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabelList;

    /**
     * Operation submitShippingLabelRequest.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body Request body that contains the shipping labels data. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function submitShippingLabelRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference;
}
