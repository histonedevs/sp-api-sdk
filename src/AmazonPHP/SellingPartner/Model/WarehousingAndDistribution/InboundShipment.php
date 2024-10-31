<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\WarehousingAndDistribution;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for Amazon Warehousing and Distribution.
 *
 * The Selling Partner API for Amazon Warehousing and Distribution (AWD) provides programmatic access to information about AWD shipments and inventory.
 *
 * The version of the OpenAPI document: 2024-05-09
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InboundShipment implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'InboundShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'carrier_code' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\CarrierCode',
        'created_at' => 'DateTimeInterface',
        'destination_address' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\Address',
        'external_reference_id' => 'string',
        'order_id' => 'string',
        'origin_address' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\Address',
        'received_quantity' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryQuantity[]',
        'ship_by' => 'DateTimeInterface',
        'shipment_container_quantities' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\DistributionPackageQuantity[]',
        'shipment_id' => 'string',
        'shipment_sku_quantities' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\SkuQuantity[]',
        'shipment_status' => '\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InboundShipmentStatus',
        'tracking_id' => 'string',
        'updated_at' => 'DateTimeInterface',
        'warehouse_reference_id' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'carrier_code' => null,
        'created_at' => 'date-time',
        'destination_address' => null,
        'external_reference_id' => null,
        'order_id' => null,
        'origin_address' => null,
        'received_quantity' => null,
        'ship_by' => 'date-time',
        'shipment_container_quantities' => null,
        'shipment_id' => null,
        'shipment_sku_quantities' => null,
        'shipment_status' => null,
        'tracking_id' => null,
        'updated_at' => 'date-time',
        'warehouse_reference_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'carrier_code' => 'carrierCode',
        'created_at' => 'createdAt',
        'destination_address' => 'destinationAddress',
        'external_reference_id' => 'externalReferenceId',
        'order_id' => 'orderId',
        'origin_address' => 'originAddress',
        'received_quantity' => 'receivedQuantity',
        'ship_by' => 'shipBy',
        'shipment_container_quantities' => 'shipmentContainerQuantities',
        'shipment_id' => 'shipmentId',
        'shipment_sku_quantities' => 'shipmentSkuQuantities',
        'shipment_status' => 'shipmentStatus',
        'tracking_id' => 'trackingId',
        'updated_at' => 'updatedAt',
        'warehouse_reference_id' => 'warehouseReferenceId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'carrier_code' => 'setCarrierCode',
        'created_at' => 'setCreatedAt',
        'destination_address' => 'setDestinationAddress',
        'external_reference_id' => 'setExternalReferenceId',
        'order_id' => 'setOrderId',
        'origin_address' => 'setOriginAddress',
        'received_quantity' => 'setReceivedQuantity',
        'ship_by' => 'setShipBy',
        'shipment_container_quantities' => 'setShipmentContainerQuantities',
        'shipment_id' => 'setShipmentId',
        'shipment_sku_quantities' => 'setShipmentSkuQuantities',
        'shipment_status' => 'setShipmentStatus',
        'tracking_id' => 'setTrackingId',
        'updated_at' => 'setUpdatedAt',
        'warehouse_reference_id' => 'setWarehouseReferenceId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'carrier_code' => 'getCarrierCode',
        'created_at' => 'getCreatedAt',
        'destination_address' => 'getDestinationAddress',
        'external_reference_id' => 'getExternalReferenceId',
        'order_id' => 'getOrderId',
        'origin_address' => 'getOriginAddress',
        'received_quantity' => 'getReceivedQuantity',
        'ship_by' => 'getShipBy',
        'shipment_container_quantities' => 'getShipmentContainerQuantities',
        'shipment_id' => 'getShipmentId',
        'shipment_sku_quantities' => 'getShipmentSkuQuantities',
        'shipment_status' => 'getShipmentStatus',
        'tracking_id' => 'getTrackingId',
        'updated_at' => 'getUpdatedAt',
        'warehouse_reference_id' => 'getWarehouseReferenceId',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['external_reference_id'] = $data['external_reference_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['origin_address'] = $data['origin_address'] ?? null;
        $this->container['received_quantity'] = $data['received_quantity'] ?? null;
        $this->container['ship_by'] = $data['ship_by'] ?? null;
        $this->container['shipment_container_quantities'] = $data['shipment_container_quantities'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['shipment_sku_quantities'] = $data['shipment_sku_quantities'] ?? null;
        $this->container['shipment_status'] = $data['shipment_status'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['warehouse_reference_id'] = $data['warehouse_reference_id'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['carrier_code'] !== null) {
            $this->container['carrier_code']->validate();
        }

        if ($this->container['destination_address'] === null) {
            throw new AssertionException("'destination_address' can't be null");
        }

        $this->container['destination_address']->validate();

        if ($this->container['order_id'] === null) {
            throw new AssertionException("'order_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['order_id']) < 1)) {
            throw new AssertionException("invalid value for 'order_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['origin_address'] === null) {
            throw new AssertionException("'origin_address' can't be null");
        }

        $this->container['origin_address']->validate();

        if ($this->container['shipment_container_quantities'] === null) {
            throw new AssertionException("'shipment_container_quantities' can't be null");
        }

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['shipment_id']) < 1)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['shipment_status'] === null) {
            throw new AssertionException("'shipment_status' can't be null");
        }

        if (null !== $this->container['tracking_id'] && (\mb_strlen((string) $this->container['tracking_id']) < 1)) {
            throw new AssertionException("invalid value for 'tracking_id', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets carrier_code.
     */
    public function getCarrierCode() : ?CarrierCode
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\CarrierCode $carrier_code carrier_code
     */
    public function setCarrierCode(?CarrierCode $carrier_code) : self
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets created_at.
     */
    public function getCreatedAt() : ?DateTimeInterface
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at.
     *
     * @param null|DateTimeInterface $created_at Timestamp when the shipment was created. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     */
    public function setCreatedAt(?DateTimeInterface $created_at) : self
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets destination_address.
     */
    public function getDestinationAddress() : Address
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\Address $destination_address destination_address
     */
    public function setDestinationAddress(Address $destination_address) : self
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets external_reference_id.
     */
    public function getExternalReferenceId() : ?string
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id.
     *
     * @param null|string $external_reference_id Client-provided reference ID that can correlate this shipment to client resources. For example, to map this shipment to an internal bookkeeping order record.
     */
    public function setExternalReferenceId(?string $external_reference_id) : self
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets order_id.
     */
    public function getOrderId() : string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param string $order_id the AWD inbound order ID that this inbound shipment belongs to
     */
    public function setOrderId(string $order_id) : self
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets origin_address.
     */
    public function getOriginAddress() : Address
    {
        return $this->container['origin_address'];
    }

    /**
     * Sets origin_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\Address $origin_address origin_address
     */
    public function setOriginAddress(Address $origin_address) : self
    {
        $this->container['origin_address'] = $origin_address;

        return $this;
    }

    /**
     * Gets received_quantity.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryQuantity[]
     */
    public function getReceivedQuantity() : ?array
    {
        return $this->container['received_quantity'];
    }

    /**
     * Sets received_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InventoryQuantity[] $received_quantity quantity received (at the receiving end) as part of this shipment
     */
    public function setReceivedQuantity(?array $received_quantity) : self
    {
        $this->container['received_quantity'] = $received_quantity;

        return $this;
    }

    /**
     * Gets ship_by.
     */
    public function getShipBy() : ?DateTimeInterface
    {
        return $this->container['ship_by'];
    }

    /**
     * Sets ship_by.
     *
     * @param null|DateTimeInterface $ship_by timestamp when the shipment will be shipped
     */
    public function setShipBy(?DateTimeInterface $ship_by) : self
    {
        $this->container['ship_by'] = $ship_by;

        return $this;
    }

    /**
     * Gets shipment_container_quantities.
     *
     * @return \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\DistributionPackageQuantity[]
     */
    public function getShipmentContainerQuantities() : array
    {
        return $this->container['shipment_container_quantities'];
    }

    /**
     * Sets shipment_container_quantities.
     *
     * @param \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\DistributionPackageQuantity[] $shipment_container_quantities packages that are part of this shipment
     */
    public function setShipmentContainerQuantities(array $shipment_container_quantities) : self
    {
        $this->container['shipment_container_quantities'] = $shipment_container_quantities;

        return $this;
    }

    /**
     * Gets shipment_id.
     */
    public function getShipmentId() : string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id unique shipment ID
     */
    public function setShipmentId(string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_sku_quantities.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\SkuQuantity[]
     */
    public function getShipmentSkuQuantities() : ?array
    {
        return $this->container['shipment_sku_quantities'];
    }

    /**
     * Sets shipment_sku_quantities.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\SkuQuantity[] $shipment_sku_quantities Quantity details at SKU level for the shipment. This attribute will only appear if the skuQuantities parameter in the request is set to SHOW.
     */
    public function setShipmentSkuQuantities(?array $shipment_sku_quantities) : self
    {
        $this->container['shipment_sku_quantities'] = $shipment_sku_quantities;

        return $this;
    }

    /**
     * Gets shipment_status.
     */
    public function getShipmentStatus() : InboundShipmentStatus
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\WarehousingAndDistribution\InboundShipmentStatus $shipment_status shipment_status
     */
    public function setShipmentStatus(InboundShipmentStatus $shipment_status) : self
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets tracking_id.
     */
    public function getTrackingId() : ?string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param null|string $tracking_id carrier-unique tracking ID for this shipment
     */
    public function setTrackingId(?string $tracking_id) : self
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets updated_at.
     */
    public function getUpdatedAt() : ?DateTimeInterface
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at.
     *
     * @param null|DateTimeInterface $updated_at Timestamp when the shipment was updated. The date is returned in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> format.
     */
    public function setUpdatedAt(?DateTimeInterface $updated_at) : self
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets warehouse_reference_id.
     */
    public function getWarehouseReferenceId() : ?string
    {
        return $this->container['warehouse_reference_id'];
    }

    /**
     * Sets warehouse_reference_id.
     *
     * @param null|string $warehouse_reference_id An AWD-provided reference ID that you can use to interact with the warehouse. For example, a carrier appointment booking.
     */
    public function setWarehouseReferenceId(?string $warehouse_reference_id) : self
    {
        $this->container['warehouse_reference_id'] = $warehouse_reference_id;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
