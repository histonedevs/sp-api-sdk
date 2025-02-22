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
class SelectedDeliveryWindow implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'SelectedDeliveryWindow';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'availability_type' => 'string',
        'delivery_window_option_id' => 'string',
        'editable_until' => '\DateTimeInterface',
        'end_date' => '\DateTimeInterface',
        'start_date' => '\DateTimeInterface',
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
        'availability_type' => null,
        'delivery_window_option_id' => null,
        'editable_until' => 'date-time',
        'end_date' => 'date-time',
        'start_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'availability_type' => 'availabilityType',
        'delivery_window_option_id' => 'deliveryWindowOptionId',
        'editable_until' => 'editableUntil',
        'end_date' => 'endDate',
        'start_date' => 'startDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'availability_type' => 'setAvailabilityType',
        'delivery_window_option_id' => 'setDeliveryWindowOptionId',
        'editable_until' => 'setEditableUntil',
        'end_date' => 'setEndDate',
        'start_date' => 'setStartDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'availability_type' => 'getAvailabilityType',
        'delivery_window_option_id' => 'getDeliveryWindowOptionId',
        'editable_until' => 'getEditableUntil',
        'end_date' => 'getEndDate',
        'start_date' => 'getStartDate',
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
        $this->container['availability_type'] = $data['availability_type'] ?? null;
        $this->container['delivery_window_option_id'] = $data['delivery_window_option_id'] ?? null;
        $this->container['editable_until'] = $data['editable_until'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
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
        if ($this->container['availability_type'] === null) {
            throw new AssertionException("'availability_type' can't be null");
        }

        if ($this->container['delivery_window_option_id'] === null) {
            throw new AssertionException("'delivery_window_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['delivery_window_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'delivery_window_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['delivery_window_option_id']) < 36)) {
            throw new AssertionException("invalid value for 'delivery_window_option_id', the character length must be bigger than or equal to 36.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['delivery_window_option_id'])) {
            throw new AssertionException("invalid value for 'delivery_window_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['end_date'] === null) {
            throw new AssertionException("'end_date' can't be null");
        }

        if ($this->container['start_date'] === null) {
            throw new AssertionException("'start_date' can't be null");
        }
    }

    /**
     * Gets availability_type.
     */
    public function getAvailabilityType() : string
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type.
     *
     * @param string $availability_type Identifies type of Delivery Window Availability. Values: `AVAILABLE`, `CONGESTED`
     */
    public function setAvailabilityType(string $availability_type) : self
    {
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets delivery_window_option_id.
     */
    public function getDeliveryWindowOptionId() : string
    {
        return $this->container['delivery_window_option_id'];
    }

    /**
     * Sets delivery_window_option_id.
     *
     * @param string $delivery_window_option_id Identifier of a delivery window option. A delivery window option represent one option for when a shipment is expected to be delivered.
     */
    public function setDeliveryWindowOptionId(string $delivery_window_option_id) : self
    {
        $this->container['delivery_window_option_id'] = $delivery_window_option_id;

        return $this;
    }

    /**
     * Gets editable_until.
     */
    public function getEditableUntil() : ?\DateTimeInterface
    {
        return $this->container['editable_until'];
    }

    /**
     * Sets editable_until.
     *
     * @param null|\DateTimeInterface $editable_until the timestamp at which this Window can no longer be edited
     */
    public function setEditableUntil(?\DateTimeInterface $editable_until) : self
    {
        $this->container['editable_until'] = $editable_until;

        return $this;
    }

    /**
     * Gets end_date.
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date.
     *
     * @param \DateTimeInterface $end_date the end timestamp of the window
     */
    public function setEndDate(\DateTimeInterface $end_date) : self
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets start_date.
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date.
     *
     * @param \DateTimeInterface $start_date the start timestamp of the window
     */
    public function setStartDate(\DateTimeInterface $start_date) : self
    {
        $this->container['start_date'] = $start_date;

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
