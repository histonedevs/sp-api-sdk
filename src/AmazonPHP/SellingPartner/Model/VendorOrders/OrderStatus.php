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
class OrderStatus implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const PURCHASE_ORDER_STATUS_OPEN = 'OPEN';

    final public const PURCHASE_ORDER_STATUS_CLOSED = 'CLOSED';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'OrderStatus';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'purchase_order_number' => 'string',
        'purchase_order_status' => 'string',
        'purchase_order_date' => '\DateTimeInterface',
        'last_updated_date' => '\DateTimeInterface',
        'selling_party' => '\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'ship_to_party' => '\AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification',
        'item_status' => '\AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatus[]',
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
        'purchase_order_number' => null,
        'purchase_order_status' => null,
        'purchase_order_date' => 'date-time',
        'last_updated_date' => 'date-time',
        'selling_party' => null,
        'ship_to_party' => null,
        'item_status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'purchase_order_number' => 'purchaseOrderNumber',
        'purchase_order_status' => 'purchaseOrderStatus',
        'purchase_order_date' => 'purchaseOrderDate',
        'last_updated_date' => 'lastUpdatedDate',
        'selling_party' => 'sellingParty',
        'ship_to_party' => 'shipToParty',
        'item_status' => 'itemStatus',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'purchase_order_status' => 'setPurchaseOrderStatus',
        'purchase_order_date' => 'setPurchaseOrderDate',
        'last_updated_date' => 'setLastUpdatedDate',
        'selling_party' => 'setSellingParty',
        'ship_to_party' => 'setShipToParty',
        'item_status' => 'setItemStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'purchase_order_status' => 'getPurchaseOrderStatus',
        'purchase_order_date' => 'getPurchaseOrderDate',
        'last_updated_date' => 'getLastUpdatedDate',
        'selling_party' => 'getSellingParty',
        'ship_to_party' => 'getShipToParty',
        'item_status' => 'getItemStatus',
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
        $this->container['purchase_order_number'] = $data['purchase_order_number'] ?? null;
        $this->container['purchase_order_status'] = $data['purchase_order_status'] ?? null;
        $this->container['purchase_order_date'] = $data['purchase_order_date'] ?? null;
        $this->container['last_updated_date'] = $data['last_updated_date'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['item_status'] = $data['item_status'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPurchaseOrderStatusAllowableValues() : array
    {
        return [
            self::PURCHASE_ORDER_STATUS_OPEN,
            self::PURCHASE_ORDER_STATUS_CLOSED,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['purchase_order_number'] === null) {
            throw new AssertionException("'purchase_order_number' can't be null");
        }

        if ($this->container['purchase_order_status'] === null) {
            throw new AssertionException("'purchase_order_status' can't be null");
        }

        $allowedValues = $this->getPurchaseOrderStatusAllowableValues();

        if (null !== $this->container['purchase_order_status'] && !\in_array($this->container['purchase_order_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'purchase_order_status', must be one of '%s'",
                    $this->container['purchase_order_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['purchase_order_date'] === null) {
            throw new AssertionException("'purchase_order_date' can't be null");
        }

        if ($this->container['selling_party'] === null) {
            throw new AssertionException("'selling_party' can't be null");
        }

        $this->container['selling_party']->validate();

        if ($this->container['ship_to_party'] === null) {
            throw new AssertionException("'ship_to_party' can't be null");
        }

        $this->container['ship_to_party']->validate();

        if ($this->container['item_status'] === null) {
            throw new AssertionException("'item_status' can't be null");
        }
    }

    /**
     * Gets purchase_order_number.
     */
    public function getPurchaseOrderNumber() : string
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number.
     *
     * @param string $purchase_order_number The buyer's purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     */
    public function setPurchaseOrderNumber(string $purchase_order_number) : self
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets purchase_order_status.
     */
    public function getPurchaseOrderStatus() : string
    {
        return $this->container['purchase_order_status'];
    }

    /**
     * Sets purchase_order_status.
     *
     * @param string $purchase_order_status the status of the buyer's purchase order for this order
     */
    public function setPurchaseOrderStatus(string $purchase_order_status) : self
    {
        $this->container['purchase_order_status'] = $purchase_order_status;

        return $this;
    }

    /**
     * Gets purchase_order_date.
     */
    public function getPurchaseOrderDate() : \DateTimeInterface
    {
        return $this->container['purchase_order_date'];
    }

    /**
     * Sets purchase_order_date.
     *
     * @param \DateTimeInterface $purchase_order_date The date the purchase order was placed. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date/time format.
     */
    public function setPurchaseOrderDate(\DateTimeInterface $purchase_order_date) : self
    {
        $this->container['purchase_order_date'] = $purchase_order_date;

        return $this;
    }

    /**
     * Gets last_updated_date.
     */
    public function getLastUpdatedDate() : ?\DateTimeInterface
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date.
     *
     * @param null|\DateTimeInterface $last_updated_date The date when the purchase order was last updated. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date/time format.
     */
    public function setLastUpdatedDate(?\DateTimeInterface $last_updated_date) : self
    {
        $this->container['last_updated_date'] = $last_updated_date;

        return $this;
    }

    /**
     * Gets selling_party.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification
     */
    public function getSellingParty() : PartyIdentification
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $selling_party selling_party
     */
    public function setSellingParty(PartyIdentification $selling_party) : self
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }

    /**
     * Gets ship_to_party.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification
     */
    public function getShipToParty() : PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorOrders\PartyIdentification $ship_to_party ship_to_party
     */
    public function setShipToParty(PartyIdentification $ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets item_status.
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatus[]
     */
    public function getItemStatus() : array
    {
        return $this->container['item_status'];
    }

    /**
     * Sets item_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorOrders\OrderItemStatus[] $item_status detailed description of items order status
     */
    public function setItemStatus(array $item_status) : self
    {
        $this->container['item_status'] = $item_status;

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
