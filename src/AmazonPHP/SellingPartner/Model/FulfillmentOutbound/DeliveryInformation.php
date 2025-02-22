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
class DeliveryInformation implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'DeliveryInformation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'delivery_document_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryDocument[]',
        'drop_off_location' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DropOffLocation',
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
        'delivery_document_list' => null,
        'drop_off_location' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'delivery_document_list' => 'deliveryDocumentList',
        'drop_off_location' => 'dropOffLocation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'delivery_document_list' => 'setDeliveryDocumentList',
        'drop_off_location' => 'setDropOffLocation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'delivery_document_list' => 'getDeliveryDocumentList',
        'drop_off_location' => 'getDropOffLocation',
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
        $this->container['delivery_document_list'] = $data['delivery_document_list'] ?? null;
        $this->container['drop_off_location'] = $data['drop_off_location'] ?? null;
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
        if ($this->container['drop_off_location'] !== null) {
            $this->container['drop_off_location']->validate();
        }
    }

    /**
     * Gets delivery_document_list.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryDocument[]
     */
    public function getDeliveryDocumentList() : ?array
    {
        return $this->container['delivery_document_list'];
    }

    /**
     * Sets delivery_document_list.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryDocument[] $delivery_document_list a list of delivery documents for a package
     */
    public function setDeliveryDocumentList(?array $delivery_document_list) : self
    {
        $this->container['delivery_document_list'] = $delivery_document_list;

        return $this;
    }

    /**
     * Gets drop_off_location.
     */
    public function getDropOffLocation() : ?DropOffLocation
    {
        return $this->container['drop_off_location'];
    }

    /**
     * Sets drop_off_location.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DropOffLocation $drop_off_location drop_off_location
     */
    public function setDropOffLocation(?DropOffLocation $drop_off_location) : self
    {
        $this->container['drop_off_location'] = $drop_off_location;

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
