<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorTransactionStatus;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Transaction Status.
 *
 * The Selling Partner API for Retail Procurement Transaction Status provides programmatic access to status information on specific asynchronous POST transactions for vendors.
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
class Transaction implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const STATUS_FAILURE = 'Failure';

    final public const STATUS_PROCESSING = 'Processing';

    final public const STATUS_SUCCESS = 'Success';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Transaction';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'transaction_id' => 'string',
        'status' => 'string',
        'errors' => '\AmazonPHP\SellingPartner\Model\VendorTransactionStatus\Error[]',
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
        'transaction_id' => null,
        'status' => null,
        'errors' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'transaction_id' => 'transactionId',
        'status' => 'status',
        'errors' => 'errors',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'transaction_id' => 'setTransactionId',
        'status' => 'setStatus',
        'errors' => 'setErrors',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'transaction_id' => 'getTransactionId',
        'status' => 'getStatus',
        'errors' => 'getErrors',
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
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
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
    public function getStatusAllowableValues() : array
    {
        return [
            self::STATUS_FAILURE,
            self::STATUS_PROCESSING,
            self::STATUS_SUCCESS,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['transaction_id'] === null) {
            throw new AssertionException("'transaction_id' can't be null");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        $allowedValues = $this->getStatusAllowableValues();

        if (null !== $this->container['status'] && !\in_array($this->container['status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'status', must be one of '%s'",
                    $this->container['status'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets transaction_id.
     */
    public function getTransactionId() : string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id.
     *
     * @param string $transaction_id the unique identifier returned in the 'transactionId' field in response to the post request of a specific transaction
     */
    public function setTransactionId(string $transaction_id) : self
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status current processing status of the transaction
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorTransactionStatus\Error[]
     */
    public function getErrors() : ?array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorTransactionStatus\Error[] $errors a list of error responses returned when a request is unsuccessful
     */
    public function setErrors(?array $errors) : self
    {
        $this->container['errors'] = $errors;

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
