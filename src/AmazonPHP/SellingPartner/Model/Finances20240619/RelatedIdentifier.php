<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances20240619;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances provides financial information relevant to a seller's business. You can obtain financial events for a given order or date range without having to wait until a statement period closes.
 *
 * The version of the OpenAPI document: 2024-06-19
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RelatedIdentifier implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const RELATED_IDENTIFIER_NAME_ORDER_ID = 'ORDER_ID';

    final public const RELATED_IDENTIFIER_NAME_SHIPMENT_ID = 'SHIPMENT_ID';

    final public const RELATED_IDENTIFIER_NAME_EVENT_GROUP_ID = 'EVENT_GROUP_ID';

    final public const RELATED_IDENTIFIER_NAME_REFUND_ID = 'REFUND_ID';

    final public const RELATED_IDENTIFIER_NAME_INVOICE_ID = 'INVOICE_ID';

    final public const RELATED_IDENTIFIER_NAME_DISBURSEMENT_ID = 'DISBURSEMENT_ID';

    final public const RELATED_IDENTIFIER_NAME_TRANSFER_ID = 'TRANSFER_ID';

    final public const RELATED_IDENTIFIER_NAME_DEFERRED_TRANSACTION_ID = 'DEFERRED_TRANSACTION_ID';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'RelatedIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'related_identifier_name' => 'string',
        'related_identifier_value' => 'string',
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
        'related_identifier_name' => null,
        'related_identifier_value' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'related_identifier_name' => 'relatedIdentifierName',
        'related_identifier_value' => 'relatedIdentifierValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'related_identifier_name' => 'setRelatedIdentifierName',
        'related_identifier_value' => 'setRelatedIdentifierValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'related_identifier_name' => 'getRelatedIdentifierName',
        'related_identifier_value' => 'getRelatedIdentifierValue',
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
        $this->container['related_identifier_name'] = $data['related_identifier_name'] ?? null;
        $this->container['related_identifier_value'] = $data['related_identifier_value'] ?? null;
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
    public function getRelatedIdentifierNameAllowableValues() : array
    {
        return [
            self::RELATED_IDENTIFIER_NAME_ORDER_ID,
            self::RELATED_IDENTIFIER_NAME_SHIPMENT_ID,
            self::RELATED_IDENTIFIER_NAME_EVENT_GROUP_ID,
            self::RELATED_IDENTIFIER_NAME_REFUND_ID,
            self::RELATED_IDENTIFIER_NAME_INVOICE_ID,
            self::RELATED_IDENTIFIER_NAME_DISBURSEMENT_ID,
            self::RELATED_IDENTIFIER_NAME_TRANSFER_ID,
            self::RELATED_IDENTIFIER_NAME_DEFERRED_TRANSACTION_ID,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getRelatedIdentifierNameAllowableValues();

        if (null !== $this->container['related_identifier_name'] && !\in_array($this->container['related_identifier_name'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'related_identifier_name', must be one of '%s'",
                    $this->container['related_identifier_name'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets related_identifier_name.
     */
    public function getRelatedIdentifierName() : ?string
    {
        return $this->container['related_identifier_name'];
    }

    /**
     * Sets related_identifier_name.
     *
     * @param null|string $related_identifier_name an enumerated set of related business identifier names
     */
    public function setRelatedIdentifierName(?string $related_identifier_name) : self
    {
        $this->container['related_identifier_name'] = $related_identifier_name;

        return $this;
    }

    /**
     * Gets related_identifier_value.
     */
    public function getRelatedIdentifierValue() : ?string
    {
        return $this->container['related_identifier_value'];
    }

    /**
     * Sets related_identifier_value.
     *
     * @param null|string $related_identifier_value corresponding value of `RelatedIdentifierName`
     */
    public function setRelatedIdentifierValue(?string $related_identifier_value) : self
    {
        $this->container['related_identifier_value'] = $related_identifier_value;

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
