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
class PackingOptionSummary implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PackingOptionSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'packing_option_id' => 'string',
        'status' => 'string',
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
        'packing_option_id' => null,
        'status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'packing_option_id' => 'packingOptionId',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'packing_option_id' => 'setPackingOptionId',
        'status' => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'packing_option_id' => 'getPackingOptionId',
        'status' => 'getStatus',
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
        $this->container['packing_option_id'] = $data['packing_option_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
        if ($this->container['packing_option_id'] === null) {
            throw new AssertionException("'packing_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['packing_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'packing_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['packing_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'packing_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['packing_option_id'])) {
            throw new AssertionException("invalid value for 'packing_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ((\mb_strlen((string) $this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets packing_option_id.
     */
    public function getPackingOptionId() : string
    {
        return $this->container['packing_option_id'];
    }

    /**
     * Sets packing_option_id.
     *
     * @param string $packing_option_id identifier of a packing option
     */
    public function setPackingOptionId(string $packing_option_id) : self
    {
        $this->container['packing_option_id'] = $packing_option_id;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status The status of a packing option. Possible values: 'OFFERED', 'ACCEPTED', 'EXPIRED'.
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

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
