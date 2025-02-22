<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances provides financial information that is relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SellerReviewEnrollmentPaymentEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'SellerReviewEnrollmentPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => 'DateTimeInterface',
        'enrollment_id' => 'string',
        'parent_asin' => 'string',
        'fee_component' => '\AmazonPHP\SellingPartner\Model\Finances\FeeComponent',
        'charge_component' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
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
        'posted_date' => 'date-time',
        'enrollment_id' => null,
        'parent_asin' => null,
        'fee_component' => null,
        'charge_component' => null,
        'total_amount' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'PostedDate',
        'enrollment_id' => 'EnrollmentId',
        'parent_asin' => 'ParentASIN',
        'fee_component' => 'FeeComponent',
        'charge_component' => 'ChargeComponent',
        'total_amount' => 'TotalAmount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'enrollment_id' => 'setEnrollmentId',
        'parent_asin' => 'setParentAsin',
        'fee_component' => 'setFeeComponent',
        'charge_component' => 'setChargeComponent',
        'total_amount' => 'setTotalAmount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'enrollment_id' => 'getEnrollmentId',
        'parent_asin' => 'getParentAsin',
        'fee_component' => 'getFeeComponent',
        'charge_component' => 'getChargeComponent',
        'total_amount' => 'getTotalAmount',
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['enrollment_id'] = $data['enrollment_id'] ?? null;
        $this->container['parent_asin'] = $data['parent_asin'] ?? null;
        $this->container['fee_component'] = $data['fee_component'] ?? null;
        $this->container['charge_component'] = $data['charge_component'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
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
        if ($this->container['fee_component'] !== null) {
            $this->container['fee_component']->validate();
        }

        if ($this->container['charge_component'] !== null) {
            $this->container['charge_component']->validate();
        }

        if ($this->container['total_amount'] !== null) {
            $this->container['total_amount']->validate();
        }
    }

    /**
     * Gets posted_date.
     */
    public function getPostedDate() : ?\DateTimeInterface
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param null|\DateTimeInterface $posted_date A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets enrollment_id.
     */
    public function getEnrollmentId() : ?string
    {
        return $this->container['enrollment_id'];
    }

    /**
     * Sets enrollment_id.
     *
     * @param null|string $enrollment_id an enrollment identifier
     */
    public function setEnrollmentId(?string $enrollment_id) : self
    {
        $this->container['enrollment_id'] = $enrollment_id;

        return $this;
    }

    /**
     * Gets parent_asin.
     */
    public function getParentAsin() : ?string
    {
        return $this->container['parent_asin'];
    }

    /**
     * Sets parent_asin.
     *
     * @param null|string $parent_asin the Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program
     */
    public function setParentAsin(?string $parent_asin) : self
    {
        $this->container['parent_asin'] = $parent_asin;

        return $this;
    }

    /**
     * Gets fee_component.
     */
    public function getFeeComponent() : ?FeeComponent
    {
        return $this->container['fee_component'];
    }

    /**
     * Sets fee_component.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\FeeComponent $fee_component fee_component
     */
    public function setFeeComponent(?FeeComponent $fee_component) : self
    {
        $this->container['fee_component'] = $fee_component;

        return $this;
    }

    /**
     * Gets charge_component.
     */
    public function getChargeComponent() : ?ChargeComponent
    {
        return $this->container['charge_component'];
    }

    /**
     * Sets charge_component.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeComponent $charge_component charge_component
     */
    public function setChargeComponent(?ChargeComponent $charge_component) : self
    {
        $this->container['charge_component'] = $charge_component;

        return $this;
    }

    /**
     * Gets total_amount.
     */
    public function getTotalAmount() : ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $total_amount total_amount
     */
    public function setTotalAmount(?Currency $total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

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
