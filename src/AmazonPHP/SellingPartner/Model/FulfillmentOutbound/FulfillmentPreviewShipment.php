<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentPreviewShipment implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FulfillmentPreviewShipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'earliest_ship_date' => 'DateTimeInterface',
        'latest_ship_date' => 'DateTimeInterface',
        'earliest_arrival_date' => 'DateTimeInterface',
        'latest_arrival_date' => 'DateTimeInterface',
        'shipping_notes' => 'string[]',
        'fulfillment_preview_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[]',
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
        'earliest_ship_date' => 'date-time',
        'latest_ship_date' => 'date-time',
        'earliest_arrival_date' => 'date-time',
        'latest_arrival_date' => 'date-time',
        'shipping_notes' => null,
        'fulfillment_preview_items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'earliest_ship_date' => 'earliestShipDate',
        'latest_ship_date' => 'latestShipDate',
        'earliest_arrival_date' => 'earliestArrivalDate',
        'latest_arrival_date' => 'latestArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_preview_items' => 'fulfillmentPreviewItems',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'earliest_ship_date' => 'setEarliestShipDate',
        'latest_ship_date' => 'setLatestShipDate',
        'earliest_arrival_date' => 'setEarliestArrivalDate',
        'latest_arrival_date' => 'setLatestArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_preview_items' => 'setFulfillmentPreviewItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'earliest_ship_date' => 'getEarliestShipDate',
        'latest_ship_date' => 'getLatestShipDate',
        'earliest_arrival_date' => 'getEarliestArrivalDate',
        'latest_arrival_date' => 'getLatestArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_preview_items' => 'getFulfillmentPreviewItems',
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
        $this->container['earliest_ship_date'] = $data['earliest_ship_date'] ?? null;
        $this->container['latest_ship_date'] = $data['latest_ship_date'] ?? null;
        $this->container['earliest_arrival_date'] = $data['earliest_arrival_date'] ?? null;
        $this->container['latest_arrival_date'] = $data['latest_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_preview_items'] = $data['fulfillment_preview_items'] ?? null;
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
        if ($this->container['fulfillment_preview_items'] === null) {
            throw new AssertionException("'fulfillment_preview_items' can't be null");
        }
    }

    /**
     * Gets earliest_ship_date.
     */
    public function getEarliestShipDate() : ?DateTimeInterface
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date.
     *
     * @param null|DateTimeInterface $earliest_ship_date Date timestamp
     */
    public function setEarliestShipDate(?DateTimeInterface $earliest_ship_date) : self
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date.
     */
    public function getLatestShipDate() : ?DateTimeInterface
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date.
     *
     * @param null|DateTimeInterface $latest_ship_date Date timestamp
     */
    public function setLatestShipDate(?DateTimeInterface $latest_ship_date) : self
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_arrival_date.
     */
    public function getEarliestArrivalDate() : ?DateTimeInterface
    {
        return $this->container['earliest_arrival_date'];
    }

    /**
     * Sets earliest_arrival_date.
     *
     * @param null|DateTimeInterface $earliest_arrival_date Date timestamp
     */
    public function setEarliestArrivalDate(?DateTimeInterface $earliest_arrival_date) : self
    {
        $this->container['earliest_arrival_date'] = $earliest_arrival_date;

        return $this;
    }

    /**
     * Gets latest_arrival_date.
     */
    public function getLatestArrivalDate() : ?DateTimeInterface
    {
        return $this->container['latest_arrival_date'];
    }

    /**
     * Sets latest_arrival_date.
     *
     * @param null|DateTimeInterface $latest_arrival_date Date timestamp
     */
    public function setLatestArrivalDate(?DateTimeInterface $latest_arrival_date) : self
    {
        $this->container['latest_arrival_date'] = $latest_arrival_date;

        return $this;
    }

    /**
     * Gets shipping_notes.
     *
     * @return null|string[]
     */
    public function getShippingNotes() : ?array
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes.
     *
     * @param null|string[] $shipping_notes provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed
     */
    public function setShippingNotes(?array $shipping_notes) : self
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    /**
     * Gets fulfillment_preview_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[]
     */
    public function getFulfillmentPreviewItems() : array
    {
        return $this->container['fulfillment_preview_items'];
    }

    /**
     * Sets fulfillment_preview_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[] $fulfillment_preview_items an array of fulfillment preview item information
     */
    public function setFulfillmentPreviewItems(array $fulfillment_preview_items) : self
    {
        $this->container['fulfillment_preview_items'] = $fulfillment_preview_items;

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
