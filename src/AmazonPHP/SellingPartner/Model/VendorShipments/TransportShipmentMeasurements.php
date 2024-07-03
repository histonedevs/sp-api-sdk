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
class TransportShipmentMeasurements implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'TransportShipmentMeasurements';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_carton_count' => 'int',
        'total_pallet_stackable' => 'int',
        'total_pallet_non_stackable' => 'int',
        'shipment_weight' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Weight',
        'shipment_volume' => '\AmazonPHP\SellingPartner\Model\VendorShipments\Volume',
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
        'total_carton_count' => null,
        'total_pallet_stackable' => null,
        'total_pallet_non_stackable' => null,
        'shipment_weight' => null,
        'shipment_volume' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_carton_count' => 'totalCartonCount',
        'total_pallet_stackable' => 'totalPalletStackable',
        'total_pallet_non_stackable' => 'totalPalletNonStackable',
        'shipment_weight' => 'shipmentWeight',
        'shipment_volume' => 'shipmentVolume',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_carton_count' => 'setTotalCartonCount',
        'total_pallet_stackable' => 'setTotalPalletStackable',
        'total_pallet_non_stackable' => 'setTotalPalletNonStackable',
        'shipment_weight' => 'setShipmentWeight',
        'shipment_volume' => 'setShipmentVolume',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_carton_count' => 'getTotalCartonCount',
        'total_pallet_stackable' => 'getTotalPalletStackable',
        'total_pallet_non_stackable' => 'getTotalPalletNonStackable',
        'shipment_weight' => 'getShipmentWeight',
        'shipment_volume' => 'getShipmentVolume',
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
        $this->container['total_carton_count'] = $data['total_carton_count'] ?? null;
        $this->container['total_pallet_stackable'] = $data['total_pallet_stackable'] ?? null;
        $this->container['total_pallet_non_stackable'] = $data['total_pallet_non_stackable'] ?? null;
        $this->container['shipment_weight'] = $data['shipment_weight'] ?? null;
        $this->container['shipment_volume'] = $data['shipment_volume'] ?? null;
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
        if ($this->container['shipment_weight'] !== null) {
            $this->container['shipment_weight']->validate();
        }

        if ($this->container['shipment_volume'] !== null) {
            $this->container['shipment_volume']->validate();
        }
    }

    /**
     * Gets total_carton_count.
     */
    public function getTotalCartonCount() : ?int
    {
        return $this->container['total_carton_count'];
    }

    /**
     * Sets total_carton_count.
     *
     * @param null|int $total_carton_count Total number of cartons present in the shipment. Provide the cartonCount only for non-palletized shipments.
     */
    public function setTotalCartonCount(?int $total_carton_count) : self
    {
        $this->container['total_carton_count'] = $total_carton_count;

        return $this;
    }

    /**
     * Gets total_pallet_stackable.
     */
    public function getTotalPalletStackable() : ?int
    {
        return $this->container['total_pallet_stackable'];
    }

    /**
     * Sets total_pallet_stackable.
     *
     * @param null|int $total_pallet_stackable total number of Stackable Pallets present in the shipment
     */
    public function setTotalPalletStackable(?int $total_pallet_stackable) : self
    {
        $this->container['total_pallet_stackable'] = $total_pallet_stackable;

        return $this;
    }

    /**
     * Gets total_pallet_non_stackable.
     */
    public function getTotalPalletNonStackable() : ?int
    {
        return $this->container['total_pallet_non_stackable'];
    }

    /**
     * Sets total_pallet_non_stackable.
     *
     * @param null|int $total_pallet_non_stackable total number of Non Stackable Pallets present in the shipment
     */
    public function setTotalPalletNonStackable(?int $total_pallet_non_stackable) : self
    {
        $this->container['total_pallet_non_stackable'] = $total_pallet_non_stackable;

        return $this;
    }

    /**
     * Gets shipment_weight.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight
     */
    public function getShipmentWeight() : ?Weight
    {
        return $this->container['shipment_weight'];
    }

    /**
     * Sets shipment_weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Weight $shipment_weight shipment_weight
     */
    public function setShipmentWeight(?Weight $shipment_weight) : self
    {
        $this->container['shipment_weight'] = $shipment_weight;

        return $this;
    }

    /**
     * Gets shipment_volume.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorShipments\Volume
     */
    public function getShipmentVolume() : ?Volume
    {
        return $this->container['shipment_volume'];
    }

    /**
     * Sets shipment_volume.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorShipments\Volume $shipment_volume shipment_volume
     */
    public function setShipmentVolume(?Volume $shipment_volume) : self
    {
        $this->container['shipment_volume'] = $shipment_volume;

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
