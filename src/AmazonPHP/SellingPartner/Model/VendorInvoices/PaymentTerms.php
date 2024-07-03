<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorInvoices;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
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
class PaymentTerms implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const TYPE_BASIC = 'Basic';

    final public const TYPE_END_OF_MONTH = 'EndOfMonth';

    final public const TYPE_FIXED_DATE = 'FixedDate';

    final public const TYPE_PROXIMO = 'Proximo';

    final public const TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE = 'PaymentDueUponReceiptOfInvoice';

    final public const TYPE_LETTEROF_CREDIT = 'LetterofCredit';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PaymentTerms';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'type' => 'string',
        'discount_percent' => 'string',
        'discount_due_days' => 'float',
        'net_due_days' => 'float',
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
        'type' => null,
        'discount_percent' => null,
        'discount_due_days' => null,
        'net_due_days' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'discount_percent' => 'discountPercent',
        'discount_due_days' => 'discountDueDays',
        'net_due_days' => 'netDueDays',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'discount_percent' => 'setDiscountPercent',
        'discount_due_days' => 'setDiscountDueDays',
        'net_due_days' => 'setNetDueDays',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'discount_percent' => 'getDiscountPercent',
        'discount_due_days' => 'getDiscountDueDays',
        'net_due_days' => 'getNetDueDays',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['discount_percent'] = $data['discount_percent'] ?? null;
        $this->container['discount_due_days'] = $data['discount_due_days'] ?? null;
        $this->container['net_due_days'] = $data['net_due_days'] ?? null;
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
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_BASIC,
            self::TYPE_END_OF_MONTH,
            self::TYPE_FIXED_DATE,
            self::TYPE_PROXIMO,
            self::TYPE_PAYMENT_DUE_UPON_RECEIPT_OF_INVOICE,
            self::TYPE_LETTEROF_CREDIT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets type.
     */
    public function getType() : ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param null|string $type the payment term type for the invoice
     */
    public function setType(?string $type) : self
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets discount_percent.
     */
    public function getDiscountPercent() : ?string
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent.
     *
     * @param null|string $discount_percent A decimal number with no loss of precision. Useful when precision loss is unacceptable, as with currencies. Follows RFC7159 for number representation. <br>**Pattern** : `^-?(0|([1-9]\\d*))(\\.\\d+)?([eE][+-]?\\d+)?$`.
     */
    public function setDiscountPercent(?string $discount_percent) : self
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets discount_due_days.
     */
    public function getDiscountDueDays() : ?float
    {
        return $this->container['discount_due_days'];
    }

    /**
     * Sets discount_due_days.
     *
     * @param null|float $discount_due_days the number of calendar days from the base date (Invoice date) until the discount is no longer valid
     */
    public function setDiscountDueDays(?float $discount_due_days) : self
    {
        $this->container['discount_due_days'] = $discount_due_days;

        return $this;
    }

    /**
     * Gets net_due_days.
     */
    public function getNetDueDays() : ?float
    {
        return $this->container['net_due_days'];
    }

    /**
     * Sets net_due_days.
     *
     * @param null|float $net_due_days the number of calendar days from the base date (invoice date) until the total amount on the invoice is due
     */
    public function setNetDueDays(?float $net_due_days) : self
    {
        $this->container['net_due_days'] = $net_due_days;

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
