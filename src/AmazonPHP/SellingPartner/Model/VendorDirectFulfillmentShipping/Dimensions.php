<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Dimensions implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const UNIT_OF_MEASURE_IN = 'IN';

    final public const UNIT_OF_MEASURE_CM = 'CM';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Dimensions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'length' => 'string',
        'width' => 'string',
        'height' => 'string',
        'unit_of_measure' => 'string',
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
        'length' => null,
        'width' => null,
        'height' => null,
        'unit_of_measure' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'unit_of_measure' => 'unitOfMeasure',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit_of_measure' => 'setUnitOfMeasure',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit_of_measure' => 'getUnitOfMeasure',
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
        $this->container['length'] = $data['length'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
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
    public function getUnitOfMeasureAllowableValues() : array
    {
        return [
            self::UNIT_OF_MEASURE_IN,
            self::UNIT_OF_MEASURE_CM,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['length'] === null) {
            throw new AssertionException("'length' can't be null");
        }

        if ($this->container['width'] === null) {
            throw new AssertionException("'width' can't be null");
        }

        if ($this->container['height'] === null) {
            throw new AssertionException("'height' can't be null");
        }

        if ($this->container['unit_of_measure'] === null) {
            throw new AssertionException("'unit_of_measure' can't be null");
        }

        $allowedValues = $this->getUnitOfMeasureAllowableValues();

        if (null !== $this->container['unit_of_measure'] && !\in_array($this->container['unit_of_measure'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'unit_of_measure', must be one of '%s'",
                    $this->container['unit_of_measure'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets length.
     */
    public function getLength() : string
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param string $length A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.  <br>**Pattern** : `^-?(0|([1-9]\\\\d*))(\\\\.\\\\d+)?([eE][+-]?\\\\d+)?$`.
     */
    public function setLength(string $length) : self
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width.
     */
    public function getWidth() : string
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param string $width A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.  <br>**Pattern** : `^-?(0|([1-9]\\\\d*))(\\\\.\\\\d+)?([eE][+-]?\\\\d+)?$`.
     */
    public function setWidth(string $width) : self
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height.
     */
    public function getHeight() : string
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param string $height A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation.  <br>**Pattern** : `^-?(0|([1-9]\\\\d*))(\\\\.\\\\d+)?([eE][+-]?\\\\d+)?$`.
     */
    public function setHeight(string $height) : self
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit_of_measure.
     */
    public function getUnitOfMeasure() : string
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure.
     *
     * @param string $unit_of_measure the unit of measure for dimensions
     */
    public function setUnitOfMeasure(string $unit_of_measure) : self
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

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
