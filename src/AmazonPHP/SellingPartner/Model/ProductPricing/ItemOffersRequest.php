<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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
class ItemOffersRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ItemOffersRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'uri' => 'string',
        'method' => '\AmazonPHP\SellingPartner\Model\ProductPricing\HttpMethod',
        'headers' => 'array<string,string>',
        'marketplace_id' => 'string',
        'item_condition' => '\AmazonPHP\SellingPartner\Model\ProductPricing\ItemCondition',
        'customer_type' => '\AmazonPHP\SellingPartner\Model\ProductPricing\CustomerType',
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
        'uri' => null,
        'method' => null,
        'headers' => null,
        'marketplace_id' => null,
        'item_condition' => null,
        'customer_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'uri' => 'uri',
        'method' => 'method',
        'headers' => 'headers',
        'marketplace_id' => 'MarketplaceId',
        'item_condition' => 'ItemCondition',
        'customer_type' => 'CustomerType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'uri' => 'setUri',
        'method' => 'setMethod',
        'headers' => 'setHeaders',
        'marketplace_id' => 'setMarketplaceId',
        'item_condition' => 'setItemCondition',
        'customer_type' => 'setCustomerType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'uri' => 'getUri',
        'method' => 'getMethod',
        'headers' => 'getHeaders',
        'marketplace_id' => 'getMarketplaceId',
        'item_condition' => 'getItemCondition',
        'customer_type' => 'getCustomerType',
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
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['method'] = $data['method'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['item_condition'] = $data['item_condition'] ?? null;
        $this->container['customer_type'] = $data['customer_type'] ?? null;
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
        if ($this->container['uri'] === null) {
            throw new AssertionException("'uri' can't be null");
        }

        if ($this->container['method'] === null) {
            throw new AssertionException("'method' can't be null");
        }

        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ($this->container['item_condition'] === null) {
            throw new AssertionException("'item_condition' can't be null");
        }
    }

    /**
     * Gets uri.
     */
    public function getUri() : string
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri.
     *
     * @param string $uri The resource path of the operation you are calling in batch without any query parameters.  If you are calling `getItemOffersBatch`, supply the path of `getItemOffers`.  **Example:** `/products/pricing/v0/items/B000P6Q7MY/offers`  If you are calling `getListingOffersBatch`, supply the path of `getListingOffers`.  **Example:** `/products/pricing/v0/listings/B000P6Q7MY/offers`
     */
    public function setUri(string $uri) : self
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets method.
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\HttpMethod
     */
    public function getMethod() : HttpMethod
    {
        return $this->container['method'];
    }

    /**
     * Sets method.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\HttpMethod $method method
     */
    public function setMethod(HttpMethod $method) : self
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets headers.
     *
     * @return null|array<string,string>
     */
    public function getHeaders() : ?array
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers.
     *
     * @param null|array<string,string> $headers a mapping of additional HTTP headers to send/receive for the individual batch request
     */
    public function setHeaders(?array $headers) : self
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned.
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets item_condition.
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductPricing\ItemCondition
     */
    public function getItemCondition() : ItemCondition
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductPricing\ItemCondition $item_condition item_condition
     */
    public function setItemCondition(ItemCondition $item_condition) : self
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets customer_type.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\CustomerType
     */
    public function getCustomerType() : ?CustomerType
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\CustomerType $customer_type customer_type
     */
    public function setCustomerType(?CustomerType $customer_type) : self
    {
        $this->container['customer_type'] = $customer_type;

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
