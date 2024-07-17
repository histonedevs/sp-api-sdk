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
class ItemInput implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ItemInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'expiration' => 'string',
        'label_owner' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelOwner',
        'manufacturing_lot_code' => 'string',
        'msku' => 'string',
        'prep_owner' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepOwner',
        'quantity' => 'int',
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
        'expiration' => null,
        'label_owner' => null,
        'manufacturing_lot_code' => null,
        'msku' => null,
        'prep_owner' => null,
        'quantity' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'expiration' => 'expiration',
        'label_owner' => 'labelOwner',
        'manufacturing_lot_code' => 'manufacturingLotCode',
        'msku' => 'msku',
        'prep_owner' => 'prepOwner',
        'quantity' => 'quantity',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'expiration' => 'setExpiration',
        'label_owner' => 'setLabelOwner',
        'manufacturing_lot_code' => 'setManufacturingLotCode',
        'msku' => 'setMsku',
        'prep_owner' => 'setPrepOwner',
        'quantity' => 'setQuantity',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'expiration' => 'getExpiration',
        'label_owner' => 'getLabelOwner',
        'manufacturing_lot_code' => 'getManufacturingLotCode',
        'msku' => 'getMsku',
        'prep_owner' => 'getPrepOwner',
        'quantity' => 'getQuantity',
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
        $this->container['expiration'] = $data['expiration'] ?? null;
        $this->container['label_owner'] = $data['label_owner'] ?? null;
        $this->container['manufacturing_lot_code'] = $data['manufacturing_lot_code'] ?? null;
        $this->container['msku'] = $data['msku'] ?? null;
        $this->container['prep_owner'] = $data['prep_owner'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
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
        if (null !== $this->container['expiration'] && !\preg_match('/^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', (string) $this->container['expiration'])) {
            throw new AssertionException("invalid value for 'expiration', must be conform to the pattern /^([0-9]{4})-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        if ($this->container['label_owner'] === null) {
            throw new AssertionException("'label_owner' can't be null");
        }

        if (null !== $this->container['manufacturing_lot_code'] && (\mb_strlen((string) $this->container['manufacturing_lot_code']) > 256)) {
            throw new AssertionException("invalid value for 'manufacturing_lot_code', the character length must be smaller than or equal to 256.");
        }

        if (null !== $this->container['manufacturing_lot_code'] && (\mb_strlen((string) $this->container['manufacturing_lot_code']) < 1)) {
            throw new AssertionException("invalid value for 'manufacturing_lot_code', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['msku'] === null) {
            throw new AssertionException("'msku' can't be null");
        }

        if ((\mb_strlen((string) $this->container['msku']) > 40)) {
            throw new AssertionException("invalid value for 'msku', the character length must be smaller than or equal to 40.");
        }

        if ((\mb_strlen((string) $this->container['msku']) < 1)) {
            throw new AssertionException("invalid value for 'msku', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['prep_owner'] === null) {
            throw new AssertionException("'prep_owner' can't be null");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if (($this->container['quantity'] > 10000)) {
            throw new AssertionException("invalid value for 'quantity', must be smaller than or equal to 10000.");
        }

        if (($this->container['quantity'] < 1)) {
            throw new AssertionException("invalid value for 'quantity', must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets expiration.
     */
    public function getExpiration() : ?string
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration.
     *
     * @param null|string $expiration The expiration date of the MSKU in ISO 8601 format. The same MSKU with different expiration dates cannot go into the same box.
     */
    public function setExpiration(?string $expiration) : self
    {
        $this->container['expiration'] = $expiration;

        return $this;
    }

    /**
     * Gets label_owner.
     */
    public function getLabelOwner() : LabelOwner
    {
        return $this->container['label_owner'];
    }

    /**
     * Sets label_owner.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\LabelOwner $label_owner label_owner
     */
    public function setLabelOwner(LabelOwner $label_owner) : self
    {
        $this->container['label_owner'] = $label_owner;

        return $this;
    }

    /**
     * Gets manufacturing_lot_code.
     */
    public function getManufacturingLotCode() : ?string
    {
        return $this->container['manufacturing_lot_code'];
    }

    /**
     * Sets manufacturing_lot_code.
     *
     * @param null|string $manufacturing_lot_code the manufacturing lot code
     */
    public function setManufacturingLotCode(?string $manufacturing_lot_code) : self
    {
        $this->container['manufacturing_lot_code'] = $manufacturing_lot_code;

        return $this;
    }

    /**
     * Gets msku.
     */
    public function getMsku() : string
    {
        return $this->container['msku'];
    }

    /**
     * Sets msku.
     *
     * @param string $msku merchant SKU
     */
    public function setMsku(string $msku) : self
    {
        $this->container['msku'] = $msku;

        return $this;
    }

    /**
     * Gets prep_owner.
     */
    public function getPrepOwner() : PrepOwner
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PrepOwner $prep_owner prep_owner
     */
    public function setPrepOwner(PrepOwner $prep_owner) : self
    {
        $this->container['prep_owner'] = $prep_owner;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the number of units of the specified msku that will be shipped
     */
    public function setQuantity(int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

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
