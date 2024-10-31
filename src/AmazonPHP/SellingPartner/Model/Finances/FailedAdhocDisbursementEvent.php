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
class FailedAdhocDisbursementEvent implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FailedAdhocDisbursementEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'funds_transfers_type' => 'string',
        'transfer_id' => 'string',
        'disbursement_id' => 'string',
        'payment_disbursement_type' => 'string',
        'status' => 'string',
        'transfer_amount' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'posted_date' => 'DateTimeInterface',
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
        'funds_transfers_type' => null,
        'transfer_id' => null,
        'disbursement_id' => null,
        'payment_disbursement_type' => null,
        'status' => null,
        'transfer_amount' => null,
        'posted_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'funds_transfers_type' => 'FundsTransfersType',
        'transfer_id' => 'TransferId',
        'disbursement_id' => 'DisbursementId',
        'payment_disbursement_type' => 'PaymentDisbursementType',
        'status' => 'Status',
        'transfer_amount' => 'TransferAmount',
        'posted_date' => 'PostedDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'funds_transfers_type' => 'setFundsTransfersType',
        'transfer_id' => 'setTransferId',
        'disbursement_id' => 'setDisbursementId',
        'payment_disbursement_type' => 'setPaymentDisbursementType',
        'status' => 'setStatus',
        'transfer_amount' => 'setTransferAmount',
        'posted_date' => 'setPostedDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'funds_transfers_type' => 'getFundsTransfersType',
        'transfer_id' => 'getTransferId',
        'disbursement_id' => 'getDisbursementId',
        'payment_disbursement_type' => 'getPaymentDisbursementType',
        'status' => 'getStatus',
        'transfer_amount' => 'getTransferAmount',
        'posted_date' => 'getPostedDate',
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
        $this->container['funds_transfers_type'] = $data['funds_transfers_type'] ?? null;
        $this->container['transfer_id'] = $data['transfer_id'] ?? null;
        $this->container['disbursement_id'] = $data['disbursement_id'] ?? null;
        $this->container['payment_disbursement_type'] = $data['payment_disbursement_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['transfer_amount'] = $data['transfer_amount'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
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
        if ($this->container['transfer_amount'] !== null) {
            $this->container['transfer_amount']->validate();
        }
    }

    /**
     * Gets funds_transfers_type.
     */
    public function getFundsTransfersType() : ?string
    {
        return $this->container['funds_transfers_type'];
    }

    /**
     * Sets funds_transfers_type.
     *
     * @param null|string $funds_transfers_type The type of fund transfer. For example, `Refund`.
     */
    public function setFundsTransfersType(?string $funds_transfers_type) : self
    {
        $this->container['funds_transfers_type'] = $funds_transfers_type;

        return $this;
    }

    /**
     * Gets transfer_id.
     */
    public function getTransferId() : ?string
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id.
     *
     * @param null|string $transfer_id the transfer identifier
     */
    public function setTransferId(?string $transfer_id) : self
    {
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets disbursement_id.
     */
    public function getDisbursementId() : ?string
    {
        return $this->container['disbursement_id'];
    }

    /**
     * Sets disbursement_id.
     *
     * @param null|string $disbursement_id the disbursement identifier
     */
    public function setDisbursementId(?string $disbursement_id) : self
    {
        $this->container['disbursement_id'] = $disbursement_id;

        return $this;
    }

    /**
     * Gets payment_disbursement_type.
     */
    public function getPaymentDisbursementType() : ?string
    {
        return $this->container['payment_disbursement_type'];
    }

    /**
     * Sets payment_disbursement_type.
     *
     * @param null|string $payment_disbursement_type The type of payment for disbursement. For example, `CREDIT_CARD`.
     */
    public function setPaymentDisbursementType(?string $payment_disbursement_type) : self
    {
        $this->container['payment_disbursement_type'] = $payment_disbursement_type;

        return $this;
    }

    /**
     * Gets status.
     */
    public function getStatus() : ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param null|string $status The status of the failed `AdhocDisbursement`. For example, `HARD_DECLINED`.
     */
    public function setStatus(?string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transfer_amount.
     */
    public function getTransferAmount() : ?Currency
    {
        return $this->container['transfer_amount'];
    }

    /**
     * Sets transfer_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $transfer_amount transfer_amount
     */
    public function setTransferAmount(?Currency $transfer_amount) : self
    {
        $this->container['transfer_amount'] = $transfer_amount;

        return $this;
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
