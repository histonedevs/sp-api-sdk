<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorOrders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Orders.
 *
 * The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderItemStatus implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'OrderItemStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'item_sequence_number' => 'string',
        'buyer_product_identifier' => 'string',
        'vendor_product_identifier' => 'string',
        'net_cost' => '\AmazonPHP\SellingPartner\Model\VendorOrders\Money',
        'list_price' => '\AmazonPHP\SellingPartner\Model\VendorOrders\Money',
        'ordered_quantity' => '\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusOrderedQuantity',
        'acknowledgement_status' => '\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusAcknowledgementStatus',
        'receiving_status' => '\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusReceivingStatus',
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
        'item_sequence_number' => null,
        'buyer_product_identifier' => null,
        'vendor_product_identifier' => null,
        'net_cost' => null,
        'list_price' => null,
        'ordered_quantity' => null,
        'acknowledgement_status' => null,
        'receiving_status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'item_sequence_number' => 'itemSequenceNumber',
        'buyer_product_identifier' => 'buyerProductIdentifier',
        'vendor_product_identifier' => 'vendorProductIdentifier',
        'net_cost' => 'netCost',
        'list_price' => 'listPrice',
        'ordered_quantity' => 'orderedQuantity',
        'acknowledgement_status' => 'acknowledgementStatus',
        'receiving_status' => 'receivingStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'item_sequence_number' => 'setItemSequenceNumber',
        'buyer_product_identifier' => 'setBuyerProductIdentifier',
        'vendor_product_identifier' => 'setVendorProductIdentifier',
        'net_cost' => 'setNetCost',
        'list_price' => 'setListPrice',
        'ordered_quantity' => 'setOrderedQuantity',
        'acknowledgement_status' => 'setAcknowledgementStatus',
        'receiving_status' => 'setReceivingStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'item_sequence_number' => 'getItemSequenceNumber',
        'buyer_product_identifier' => 'getBuyerProductIdentifier',
        'vendor_product_identifier' => 'getVendorProductIdentifier',
        'net_cost' => 'getNetCost',
        'list_price' => 'getListPrice',
        'ordered_quantity' => 'getOrderedQuantity',
        'acknowledgement_status' => 'getAcknowledgementStatus',
        'receiving_status' => 'getReceivingStatus',
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
        $this->container['item_sequence_number'] = $data['item_sequence_number'] ?? null;
        $this->container['buyer_product_identifier'] = $data['buyer_product_identifier'] ?? null;
        $this->container['vendor_product_identifier'] = $data['vendor_product_identifier'] ?? null;
        $this->container['net_cost'] = $data['net_cost'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['ordered_quantity'] = $data['ordered_quantity'] ?? null;
        $this->container['acknowledgement_status'] = $data['acknowledgement_status'] ?? null;
        $this->container['receiving_status'] = $data['receiving_status'] ?? null;
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
        if ($this->container['item_sequence_number'] === null) {
            throw new AssertionException("'item_sequence_number' can't be null");
        }

        if ($this->container['net_cost'] !== null) {
            $this->container['net_cost']->validate();
        }

        if ($this->container['list_price'] !== null) {
            $this->container['list_price']->validate();
        }

        if ($this->container['ordered_quantity'] !== null) {
            $this->container['ordered_quantity']->validate();
        }

        if ($this->container['acknowledgement_status'] !== null) {
            $this->container['acknowledgement_status']->validate();
        }

        if ($this->container['receiving_status'] !== null) {
            $this->container['receiving_status']->validate();
        }
    }

    /**
     * Gets item_sequence_number.
     */
    public function getItemSequenceNumber() : string
    {
        return $this->container['item_sequence_number'];
    }

    /**
     * Sets item_sequence_number.
     *
     * @param string $item_sequence_number Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     */
    public function setItemSequenceNumber(string $item_sequence_number) : self
    {
        $this->container['item_sequence_number'] = $item_sequence_number;

        return $this;
    }

    /**
     * Gets buyer_product_identifier.
     */
    public function getBuyerProductIdentifier() : ?string
    {
        return $this->container['buyer_product_identifier'];
    }

    /**
     * Sets buyer_product_identifier.
     *
     * @param null|string $buyer_product_identifier buyer's Standard Identification Number (ASIN) of an item
     */
    public function setBuyerProductIdentifier(?string $buyer_product_identifier) : self
    {
        $this->container['buyer_product_identifier'] = $buyer_product_identifier;

        return $this;
    }

    /**
     * Gets vendor_product_identifier.
     */
    public function getVendorProductIdentifier() : ?string
    {
        return $this->container['vendor_product_identifier'];
    }

    /**
     * Sets vendor_product_identifier.
     *
     * @param null|string $vendor_product_identifier the vendor selected product identification of the item
     */
    public function setVendorProductIdentifier(?string $vendor_product_identifier) : self
    {
        $this->container['vendor_product_identifier'] = $vendor_product_identifier;

        return $this;
    }

    /**
     * Gets net_cost.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\Money
     */
    public function getNetCost() : ?Money
    {
        return $this->container['net_cost'];
    }

    /**
     * Sets net_cost.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\Money $net_cost net_cost
     */
    public function setNetCost(?Money $net_cost) : self
    {
        $this->container['net_cost'] = $net_cost;

        return $this;
    }

    /**
     * Gets list_price.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\Money
     */
    public function getListPrice() : ?Money
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\Money $list_price list_price
     */
    public function setListPrice(?Money $list_price) : self
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets ordered_quantity.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusOrderedQuantity
     */
    public function getOrderedQuantity() : ?OrderItemStatusOrderedQuantity
    {
        return $this->container['ordered_quantity'];
    }

    /**
     * Sets ordered_quantity.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusOrderedQuantity $ordered_quantity ordered_quantity
     */
    public function setOrderedQuantity(?OrderItemStatusOrderedQuantity $ordered_quantity) : self
    {
        $this->container['ordered_quantity'] = $ordered_quantity;

        return $this;
    }

    /**
     * Gets acknowledgement_status.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusAcknowledgementStatus
     */
    public function getAcknowledgementStatus() : ?OrderItemStatusAcknowledgementStatus
    {
        return $this->container['acknowledgement_status'];
    }

    /**
     * Sets acknowledgement_status.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusAcknowledgementStatus $acknowledgement_status acknowledgement_status
     */
    public function setAcknowledgementStatus(?OrderItemStatusAcknowledgementStatus $acknowledgement_status) : self
    {
        $this->container['acknowledgement_status'] = $acknowledgement_status;

        return $this;
    }

    /**
     * Gets receiving_status.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusReceivingStatus
     */
    public function getReceivingStatus() : ?OrderItemStatusReceivingStatus
    {
        return $this->container['receiving_status'];
    }

    /**
     * Sets receiving_status.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatusReceivingStatus $receiving_status receiving_status
     */
    public function setReceivingStatus(?OrderItemStatusReceivingStatus $receiving_status) : self
    {
        $this->container['receiving_status'] = $receiving_status;

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
