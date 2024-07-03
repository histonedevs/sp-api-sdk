<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\AwdApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * The Selling Partner API for AWD.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD).
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface WarehousingAndDistributionSDKInterface
{
    public const API_NAME = 'WarehousingAndDistribution';

    public const OPERATION_GETINBOUNDSHIPMENT = 'getInboundShipment';

    public const OPERATION_GETINBOUNDSHIPMENT_PATH = '/awd/2024-05-09/inboundShipments/{shipmentId}';

    public const OPERATION_LISTINBOUNDSHIPMENTS = 'listInboundShipments';

    public const OPERATION_LISTINBOUNDSHIPMENTS_PATH = '/awd/2024-05-09/inboundShipments';

    public const OPERATION_LISTINVENTORY = 'listInventory';

    public const OPERATION_LISTINVENTORY_PATH = '/awd/2024-05-09/inventory';

    /**
     * Operation getInboundShipment.
     *
     * @param string $shipment_id ID for the shipment. A shipment contains the cases being inbounded. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getInboundShipment(AccessToken $accessToken, string $region, string $shipment_id) : \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InboundShipment;

    /**
     * Operation listInboundShipments.
     *
     * @param null|string $sort_by Field to sort results by. Required if &#x60;sortOrder&#x60; is provided. (optional)
     * @param null|string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param null|string $shipment_status Filter by inbound shipment status. (optional)
     * @param null|\DateTimeInterface $updated_after List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param null|\DateTimeInterface $updated_before List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param int $max_results Maximum number of results to return. (optional, default to 25)
     * @param null|string $next_token Token to retrieve the next set of paginated results. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function listInboundShipments(AccessToken $accessToken, string $region, ?string $sort_by = null, ?string $sort_order = null, ?string $shipment_status = null, ?\DateTimeInterface $updated_after = null, ?\DateTimeInterface $updated_before = null, int $max_results = 25, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\ShipmentListing;

    /**
     * Operation listInventory.
     *
     * @param null|string $sku Filter by seller or merchant SKU for the item. (optional)
     * @param null|string $sort_order Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param null|string $details Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param null|string $next_token Token to retrieve the next set of paginated results. (optional)
     * @param int $max_results Maximum number of results to return. (optional, default to 25)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function listInventory(AccessToken $accessToken, string $region, ?string $sku = null, ?string $sort_order = null, ?string $details = null, ?string $next_token = null, int $max_results = 25) : \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryListing;
}
