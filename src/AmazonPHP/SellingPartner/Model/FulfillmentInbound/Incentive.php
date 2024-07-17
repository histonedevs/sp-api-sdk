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
class Incentive implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Incentive';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'description' => 'string',
        'target' => 'string',
        'type' => 'string',
        'value' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency',
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
        'description' => null,
        'target' => null,
        'type' => null,
        'value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'description' => 'description',
        'target' => 'target',
        'type' => 'type',
        'value' => 'value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'description' => 'setDescription',
        'target' => 'setTarget',
        'type' => 'setType',
        'value' => 'setValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'description' => 'getDescription',
        'target' => 'getTarget',
        'type' => 'getType',
        'value' => 'getValue',
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['target'] = $data['target'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
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
        if ($this->container['description'] === null) {
            throw new AssertionException("'description' can't be null");
        }

        if ((\mb_strlen((string) $this->container['description']) > 1024)) {
            throw new AssertionException("invalid value for 'description', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['description']) < 1)) {
            throw new AssertionException("invalid value for 'description', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['target'] === null) {
            throw new AssertionException("'target' can't be null");
        }

        if ((\mb_strlen((string) $this->container['target']) > 1024)) {
            throw new AssertionException("invalid value for 'target', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['target']) < 1)) {
            throw new AssertionException("invalid value for 'target', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['type'] === null) {
            throw new AssertionException("'type' can't be null");
        }

        if ((\mb_strlen((string) $this->container['type']) > 1024)) {
            throw new AssertionException("invalid value for 'type', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['type']) < 1)) {
            throw new AssertionException("invalid value for 'type', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['value'] === null) {
            throw new AssertionException("'value' can't be null");
        }

        $this->container['value']->validate();
    }

    /**
     * Gets description.
     */
    public function getDescription() : string
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param string $description description of the incentive
     */
    public function setDescription(string $description) : self
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets target.
     */
    public function getTarget() : string
    {
        return $this->container['target'];
    }

    /**
     * Sets target.
     *
     * @param string $target Target of the incentive. Can be 'Placement Services' or 'Fulfillment Fee Discount'.
     */
    public function setTarget(string $target) : self
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets type.
     */
    public function getType() : string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type Type of incentive. Can be: `FEE`, `DISCOUNT`.
     */
    public function setType(string $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value.
     */
    public function getValue() : Currency
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency $value value
     */
    public function setValue(Currency $value) : self
    {
        $this->container['value'] = $value;

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
