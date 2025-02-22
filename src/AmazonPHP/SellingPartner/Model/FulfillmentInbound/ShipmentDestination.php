<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ShipmentDestination implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ShipmentDestination';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'destination_type' => 'string',
        'warehouse_id' => 'string',
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
        'address' => null,
        'destination_type' => null,
        'warehouse_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'address' => 'address',
        'destination_type' => 'destinationType',
        'warehouse_id' => 'warehouseId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'address' => 'setAddress',
        'destination_type' => 'setDestinationType',
        'warehouse_id' => 'setWarehouseId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'address' => 'getAddress',
        'destination_type' => 'getDestinationType',
        'warehouse_id' => 'getWarehouseId',
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['destination_type'] = $data['destination_type'] ?? null;
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
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
        if ($this->container['address'] !== null) {
            $this->container['address']->validate();
        }

        if ($this->container['destination_type'] === null) {
            throw new AssertionException("'destination_type' can't be null");
        }

        if ((\mb_strlen((string) $this->container['destination_type']) > 1024)) {
            throw new AssertionException("invalid value for 'destination_type', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['destination_type']) < 1)) {
            throw new AssertionException("invalid value for 'destination_type', the character length must be bigger than or equal to 1.");
        }

        if (null !== $this->container['warehouse_id'] && (\mb_strlen((string) $this->container['warehouse_id']) > 1024)) {
            throw new AssertionException("invalid value for 'warehouse_id', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['warehouse_id'] && (\mb_strlen((string) $this->container['warehouse_id']) < 1)) {
            throw new AssertionException("invalid value for 'warehouse_id', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets address.
     */
    public function getAddress() : ?Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $address address
     */
    public function setAddress(?Address $address) : self
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets destination_type.
     */
    public function getDestinationType() : string
    {
        return $this->container['destination_type'];
    }

    /**
     * Sets destination_type.
     *
     * @param string $destination_type The type of destination for this shipment. Possible values: `AMAZON_OPTIMIZED`, `AMAZON_WAREHOUSE`.
     */
    public function setDestinationType(string $destination_type) : self
    {
        $this->container['destination_type'] = $destination_type;

        return $this;
    }

    /**
     * Gets warehouse_id.
     */
    public function getWarehouseId() : ?string
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id.
     *
     * @param null|string $warehouse_id The warehouse that the shipment should be sent to. Empty if the destination type is `AMAZON_OPTIMIZED`.
     */
    public function setWarehouseId(?string $warehouse_id) : self
    {
        $this->container['warehouse_id'] = $warehouse_id;

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
