<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances provides financial information that is relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RemovalShipmentEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'RemovalShipmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => 'DateTimeInterface',
        'merchant_order_id' => 'string',
        'order_id' => 'string',
        'transaction_type' => 'string',
        'store_name' => 'string',
        'removal_shipment_item_list' => '\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItem[]',
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
        'posted_date' => 'date-time',
        'merchant_order_id' => null,
        'order_id' => null,
        'transaction_type' => null,
        'store_name' => null,
        'removal_shipment_item_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'PostedDate',
        'merchant_order_id' => 'MerchantOrderId',
        'order_id' => 'OrderId',
        'transaction_type' => 'TransactionType',
        'store_name' => 'StoreName',
        'removal_shipment_item_list' => 'RemovalShipmentItemList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'merchant_order_id' => 'setMerchantOrderId',
        'order_id' => 'setOrderId',
        'transaction_type' => 'setTransactionType',
        'store_name' => 'setStoreName',
        'removal_shipment_item_list' => 'setRemovalShipmentItemList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'merchant_order_id' => 'getMerchantOrderId',
        'order_id' => 'getOrderId',
        'transaction_type' => 'getTransactionType',
        'store_name' => 'getStoreName',
        'removal_shipment_item_list' => 'getRemovalShipmentItemList',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['merchant_order_id'] = $data['merchant_order_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
        $this->container['removal_shipment_item_list'] = $data['removal_shipment_item_list'] ?? null;
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
    }

    /**
     * Gets posted_date.
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets merchant_order_id.
     */
    public function getMerchantOrderId() : ?string
    {
        return $this->container['merchant_order_id'];
    }

    /**
     * Sets merchant_order_id.
     *
     * @param null|string $merchant_order_id the merchant removal `orderId`
     */
    public function setMerchantOrderId(?string $merchant_order_id) : self
    {
        $this->container['merchant_order_id'] = $merchant_order_id;

        return $this;
    }

    /**
     * Gets order_id.
     */
    public function getOrderId() : ?string
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id.
     *
     * @param null|string $order_id the identifier for the removal shipment order
     */
    public function setOrderId(?string $order_id) : self
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets transaction_type.
     */
    public function getTransactionType() : ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type The type of removal order.  Possible values:  * `WHOLESALE_LIQUIDATION`
     */
    public function setTransactionType(?string $transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets store_name.
     */
    public function getStoreName() : ?string
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name.
     *
     * @param null|string $store_name the name of the store where the event occurred
     */
    public function setStoreName(?string $store_name) : self
    {
        $this->container['store_name'] = $store_name;

        return $this;
    }

    /**
     * Gets removal_shipment_item_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItem[]
     */
    public function getRemovalShipmentItemList() : ?array
    {
        return $this->container['removal_shipment_item_list'];
    }

    /**
     * Sets removal_shipment_item_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\RemovalShipmentItem[] $removal_shipment_item_list a list of `RemovalShipmentItem`
     */
    public function setRemovalShipmentItemList(?array $removal_shipment_item_list) : self
    {
        $this->container['removal_shipment_item_list'] = $removal_shipment_item_list;

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
