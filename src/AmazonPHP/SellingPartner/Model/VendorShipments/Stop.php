<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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
class Stop implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const FUNCTION_CODE_PORT_OF_DISCHARGE = 'PortOfDischarge';

    final public const FUNCTION_CODE_FREIGHT_PAYABLE_AT = 'FreightPayableAt';

    final public const FUNCTION_CODE_PORT_OF_LOADING = 'PortOfLoading';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Stop';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'function_code' => 'string',
        'location_identification' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Location',
        'arrival_time' => 'DateTimeInterface',
        'departure_time' => 'DateTimeInterface',
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
        'function_code' => null,
        'location_identification' => null,
        'arrival_time' => 'date-time',
        'departure_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'function_code' => 'functionCode',
        'location_identification' => 'locationIdentification',
        'arrival_time' => 'arrivalTime',
        'departure_time' => 'departureTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'function_code' => 'setFunctionCode',
        'location_identification' => 'setLocationIdentification',
        'arrival_time' => 'setArrivalTime',
        'departure_time' => 'setDepartureTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'function_code' => 'getFunctionCode',
        'location_identification' => 'getLocationIdentification',
        'arrival_time' => 'getArrivalTime',
        'departure_time' => 'getDepartureTime',
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
        $this->container['function_code'] = $data['function_code'] ?? null;
        $this->container['location_identification'] = $data['location_identification'] ?? null;
        $this->container['arrival_time'] = $data['arrival_time'] ?? null;
        $this->container['departure_time'] = $data['departure_time'] ?? null;
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
    public function getFunctionCodeAllowableValues() : array
    {
        return [
            self::FUNCTION_CODE_PORT_OF_DISCHARGE,
            self::FUNCTION_CODE_FREIGHT_PAYABLE_AT,
            self::FUNCTION_CODE_PORT_OF_LOADING,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['function_code'] === null) {
            throw new AssertionException("'function_code' can't be null");
        }

        $allowedValues = $this->getFunctionCodeAllowableValues();

        if (null !== $this->container['function_code'] && !\in_array($this->container['function_code'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'function_code', must be one of '%s'",
                    $this->container['function_code'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['location_identification'] !== null) {
            $this->container['location_identification']->validate();
        }
    }

    /**
     * Gets function_code.
     */
    public function getFunctionCode() : string
    {
        return $this->container['function_code'];
    }

    /**
     * Sets function_code.
     *
     * @param string $function_code provide the function code
     */
    public function setFunctionCode(string $function_code) : self
    {
        $this->container['function_code'] = $function_code;

        return $this;
    }

    /**
     * Gets location_identification.
     */
    public function getLocationIdentification() : ?Location
    {
        return $this->container['location_identification'];
    }

    /**
     * Sets location_identification.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Location $location_identification location_identification
     */
    public function setLocationIdentification(?Location $location_identification) : self
    {
        $this->container['location_identification'] = $location_identification;

        return $this;
    }

    /**
     * Gets arrival_time.
     */
    public function getArrivalTime() : ?\DateTimeInterface
    {
        return $this->container['arrival_time'];
    }

    /**
     * Sets arrival_time.
     *
     * @param null|\DateTimeInterface $arrival_time date and time of the arrival of the cargo
     */
    public function setArrivalTime(?\DateTimeInterface $arrival_time) : self
    {
        $this->container['arrival_time'] = $arrival_time;

        return $this;
    }

    /**
     * Gets departure_time.
     */
    public function getDepartureTime() : ?\DateTimeInterface
    {
        return $this->container['departure_time'];
    }

    /**
     * Sets departure_time.
     *
     * @param null|\DateTimeInterface $departure_time date and time of the departure of the cargo
     */
    public function setDepartureTime(?\DateTimeInterface $departure_time) : self
    {
        $this->container['departure_time'] = $departure_time;

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
