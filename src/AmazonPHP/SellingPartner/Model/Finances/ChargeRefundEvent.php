<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Finances;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class ChargeRefundEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'ChargeRefundEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'posted_date' => '\DateTimeInterface',
        'reason_code' => 'string',
        'reason_code_description' => 'string',
        'charge_refund_transactions' => '\AmazonPHP\SellingPartner\Model\Finances\ChargeRefundTransaction[]',
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
        'reason_code' => null,
        'reason_code_description' => null,
        'charge_refund_transactions' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'posted_date' => 'PostedDate',
        'reason_code' => 'ReasonCode',
        'reason_code_description' => 'ReasonCodeDescription',
        'charge_refund_transactions' => 'ChargeRefundTransactions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'posted_date' => 'setPostedDate',
        'reason_code' => 'setReasonCode',
        'reason_code_description' => 'setReasonCodeDescription',
        'charge_refund_transactions' => 'setChargeRefundTransactions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'posted_date' => 'getPostedDate',
        'reason_code' => 'getReasonCode',
        'reason_code_description' => 'getReasonCodeDescription',
        'charge_refund_transactions' => 'getChargeRefundTransactions',
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
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['reason_code_description'] = $data['reason_code_description'] ?? null;
        $this->container['charge_refund_transactions'] = $data['charge_refund_transactions'] ?? null;
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
     * @param null|\DateTimeInterface $posted_date posted_date
     */
    public function setPostedDate(?\DateTimeInterface $posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets reason_code.
     */
    public function getReasonCode() : ?string
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code.
     *
     * @param null|string $reason_code The reason given for a charge refund.  Example: `SubscriptionFeeCorrection`
     */
    public function setReasonCode(?string $reason_code) : self
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets reason_code_description.
     */
    public function getReasonCodeDescription() : ?string
    {
        return $this->container['reason_code_description'];
    }

    /**
     * Sets reason_code_description.
     *
     * @param null|string $reason_code_description A description of the Reason Code.   Example: `SubscriptionFeeCorrection`
     */
    public function setReasonCodeDescription(?string $reason_code_description) : self
    {
        $this->container['reason_code_description'] = $reason_code_description;

        return $this;
    }

    /**
     * Gets charge_refund_transactions.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances\ChargeRefundTransaction[]
     */
    public function getChargeRefundTransactions() : ?array
    {
        return $this->container['charge_refund_transactions'];
    }

    /**
     * Sets charge_refund_transactions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\ChargeRefundTransaction[] $charge_refund_transactions A list of `ChargeRefund` transactions
     */
    public function setChargeRefundTransactions(?array $charge_refund_transactions) : self
    {
        $this->container['charge_refund_transactions'] = $charge_refund_transactions;

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
