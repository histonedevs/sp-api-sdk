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
class PaymentInformation implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PaymentInformation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'payment_transaction_id' => 'string',
        'payment_mode' => 'string',
        'payment_date' => '\DateTimeInterface',
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
        'payment_transaction_id' => null,
        'payment_mode' => null,
        'payment_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'payment_transaction_id' => 'paymentTransactionId',
        'payment_mode' => 'paymentMode',
        'payment_date' => 'paymentDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'payment_transaction_id' => 'setPaymentTransactionId',
        'payment_mode' => 'setPaymentMode',
        'payment_date' => 'setPaymentDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'payment_transaction_id' => 'getPaymentTransactionId',
        'payment_mode' => 'getPaymentMode',
        'payment_date' => 'getPaymentDate',
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
        $this->container['payment_transaction_id'] = $data['payment_transaction_id'] ?? null;
        $this->container['payment_mode'] = $data['payment_mode'] ?? null;
        $this->container['payment_date'] = $data['payment_date'] ?? null;
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
        if ($this->container['payment_transaction_id'] === null) {
            throw new AssertionException("'payment_transaction_id' can't be null");
        }

        if ($this->container['payment_mode'] === null) {
            throw new AssertionException("'payment_mode' can't be null");
        }

        if ($this->container['payment_date'] === null) {
            throw new AssertionException("'payment_date' can't be null");
        }
    }

    /**
     * Gets payment_transaction_id.
     */
    public function getPaymentTransactionId() : string
    {
        return $this->container['payment_transaction_id'];
    }

    /**
     * Sets payment_transaction_id.
     *
     * @param string $payment_transaction_id the transaction identifier of this payment
     */
    public function setPaymentTransactionId(string $payment_transaction_id) : self
    {
        $this->container['payment_transaction_id'] = $payment_transaction_id;

        return $this;
    }

    /**
     * Gets payment_mode.
     */
    public function getPaymentMode() : string
    {
        return $this->container['payment_mode'];
    }

    /**
     * Sets payment_mode.
     *
     * @param string $payment_mode the transaction mode of this payment
     */
    public function setPaymentMode(string $payment_mode) : self
    {
        $this->container['payment_mode'] = $payment_mode;

        return $this;
    }

    /**
     * Gets payment_date.
     */
    public function getPaymentDate() : \DateTimeInterface
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date.
     *
     * @param \DateTimeInterface $payment_date Date timestamp
     */
    public function setPaymentDate(\DateTimeInterface $payment_date) : self
    {
        $this->container['payment_date'] = $payment_date;

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
