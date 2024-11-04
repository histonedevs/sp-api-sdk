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
class ServiceFeeEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ServiceFeeEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'fee_reason' => 'string',
        'fee_list' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]',
        'seller_sku' => 'string',
        'fn_sku' => 'string',
        'fee_description' => 'string',
        'asin' => 'string',
        'store_name' => 'string',
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
        'amazon_order_id' => null,
        'fee_reason' => null,
        'fee_list' => null,
        'seller_sku' => null,
        'fn_sku' => null,
        'fee_description' => null,
        'asin' => null,
        'store_name' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_order_id' => 'AmazonOrderId',
        'fee_reason' => 'FeeReason',
        'fee_list' => 'FeeList',
        'seller_sku' => 'SellerSKU',
        'fn_sku' => 'FnSKU',
        'fee_description' => 'FeeDescription',
        'asin' => 'ASIN',
        'store_name' => 'StoreName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'fee_reason' => 'setFeeReason',
        'fee_list' => 'setFeeList',
        'seller_sku' => 'setSellerSku',
        'fn_sku' => 'setFnSku',
        'fee_description' => 'setFeeDescription',
        'asin' => 'setAsin',
        'store_name' => 'setStoreName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'fee_reason' => 'getFeeReason',
        'fee_list' => 'getFeeList',
        'seller_sku' => 'getSellerSku',
        'fn_sku' => 'getFnSku',
        'fee_description' => 'getFeeDescription',
        'asin' => 'getAsin',
        'store_name' => 'getStoreName',
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['fee_reason'] = $data['fee_reason'] ?? null;
        $this->container['fee_list'] = $data['fee_list'] ?? null;
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['fn_sku'] = $data['fn_sku'] ?? null;
        $this->container['fee_description'] = $data['fee_description'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['store_name'] = $data['store_name'] ?? null;
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
     * Gets amazon_order_id.
     */
    public function getAmazonOrderId() : ?string
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param null|string $amazon_order_id an Amazon-defined identifier for an order
     */
    public function setAmazonOrderId(?string $amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets fee_reason.
     */
    public function getFeeReason() : ?string
    {
        return $this->container['fee_reason'];
    }

    /**
     * Sets fee_reason.
     *
     * @param null|string $fee_reason a short description of the service fee reason
     */
    public function setFeeReason(?string $fee_reason) : self
    {
        $this->container['fee_reason'] = $fee_reason;

        return $this;
    }

    /**
     * Gets fee_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[]
     */
    public function getFeeList() : ?array
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent[] $fee_list a list of fee component information
     */
    public function setFeeList(?array $fee_list) : self
    {
        $this->container['fee_list'] = $fee_list;

        return $this;
    }

    /**
     * Gets seller_sku.
     */
    public function getSellerSku() : ?string
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param null|string $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     */
    public function setSellerSku(?string $seller_sku) : self
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets fn_sku.
     */
    public function getFnSku() : ?string
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku.
     *
     * @param null|string $fn_sku a unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center
     */
    public function setFnSku(?string $fn_sku) : self
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets fee_description.
     */
    public function getFeeDescription() : ?string
    {
        return $this->container['fee_description'];
    }

    /**
     * Sets fee_description.
     *
     * @param null|string $fee_description a short description of the service fee event
     */
    public function setFeeDescription(?string $fee_description) : self
    {
        $this->container['fee_description'] = $fee_description;

        return $this;
    }

    /**
     * Gets asin.
     */
    public function getAsin() : ?string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param null|string $asin the Amazon Standard Identification Number (ASIN) of the item
     */
    public function setAsin(?string $asin) : self
    {
        $this->container['asin'] = $asin;

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
