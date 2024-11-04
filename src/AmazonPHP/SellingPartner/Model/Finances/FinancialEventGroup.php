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
class FinancialEventGroup implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FinancialEventGroup';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'financial_event_group_id' => 'string',
        'processing_status' => 'string',
        'fund_transfer_status' => 'string',
        'original_total' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'converted_total' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'fund_transfer_date' => '\DateTimeInterface',
        'trace_id' => 'string',
        'account_tail' => 'string',
        'beginning_balance' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'financial_event_group_start' => '\DateTimeInterface',
        'financial_event_group_end' => '\DateTimeInterface',
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
        'financial_event_group_id' => null,
        'processing_status' => null,
        'fund_transfer_status' => null,
        'original_total' => null,
        'converted_total' => null,
        'fund_transfer_date' => 'date-time',
        'trace_id' => null,
        'account_tail' => null,
        'beginning_balance' => null,
        'financial_event_group_start' => 'date-time',
        'financial_event_group_end' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'financial_event_group_id' => 'FinancialEventGroupId',
        'processing_status' => 'ProcessingStatus',
        'fund_transfer_status' => 'FundTransferStatus',
        'original_total' => 'OriginalTotal',
        'converted_total' => 'ConvertedTotal',
        'fund_transfer_date' => 'FundTransferDate',
        'trace_id' => 'TraceId',
        'account_tail' => 'AccountTail',
        'beginning_balance' => 'BeginningBalance',
        'financial_event_group_start' => 'FinancialEventGroupStart',
        'financial_event_group_end' => 'FinancialEventGroupEnd',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'financial_event_group_id' => 'setFinancialEventGroupId',
        'processing_status' => 'setProcessingStatus',
        'fund_transfer_status' => 'setFundTransferStatus',
        'original_total' => 'setOriginalTotal',
        'converted_total' => 'setConvertedTotal',
        'fund_transfer_date' => 'setFundTransferDate',
        'trace_id' => 'setTraceId',
        'account_tail' => 'setAccountTail',
        'beginning_balance' => 'setBeginningBalance',
        'financial_event_group_start' => 'setFinancialEventGroupStart',
        'financial_event_group_end' => 'setFinancialEventGroupEnd',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'financial_event_group_id' => 'getFinancialEventGroupId',
        'processing_status' => 'getProcessingStatus',
        'fund_transfer_status' => 'getFundTransferStatus',
        'original_total' => 'getOriginalTotal',
        'converted_total' => 'getConvertedTotal',
        'fund_transfer_date' => 'getFundTransferDate',
        'trace_id' => 'getTraceId',
        'account_tail' => 'getAccountTail',
        'beginning_balance' => 'getBeginningBalance',
        'financial_event_group_start' => 'getFinancialEventGroupStart',
        'financial_event_group_end' => 'getFinancialEventGroupEnd',
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
        $this->container['financial_event_group_id'] = $data['financial_event_group_id'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['fund_transfer_status'] = $data['fund_transfer_status'] ?? null;
        $this->container['original_total'] = $data['original_total'] ?? null;
        $this->container['converted_total'] = $data['converted_total'] ?? null;
        $this->container['fund_transfer_date'] = $data['fund_transfer_date'] ?? null;
        $this->container['trace_id'] = $data['trace_id'] ?? null;
        $this->container['account_tail'] = $data['account_tail'] ?? null;
        $this->container['beginning_balance'] = $data['beginning_balance'] ?? null;
        $this->container['financial_event_group_start'] = $data['financial_event_group_start'] ?? null;
        $this->container['financial_event_group_end'] = $data['financial_event_group_end'] ?? null;
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
        if ($this->container['original_total'] !== null) {
            $this->container['original_total']->validate();
        }

        if ($this->container['converted_total'] !== null) {
            $this->container['converted_total']->validate();
        }

        if ($this->container['beginning_balance'] !== null) {
            $this->container['beginning_balance']->validate();
        }
    }

    /**
     * Gets financial_event_group_id.
     */
    public function getFinancialEventGroupId() : ?string
    {
        return $this->container['financial_event_group_id'];
    }

    /**
     * Sets financial_event_group_id.
     *
     * @param null|string $financial_event_group_id a unique identifier for the financial event group
     */
    public function setFinancialEventGroupId(?string $financial_event_group_id) : self
    {
        $this->container['financial_event_group_id'] = $financial_event_group_id;

        return $this;
    }

    /**
     * Gets processing_status.
     */
    public function getProcessingStatus() : ?string
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status.
     *
     * @param null|string $processing_status The processing status of the financial event group indicates whether the balance of the financial event group is settled.  Possible values:  * `Open` * `Closed`
     */
    public function setProcessingStatus(?string $processing_status) : self
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets fund_transfer_status.
     */
    public function getFundTransferStatus() : ?string
    {
        return $this->container['fund_transfer_status'];
    }

    /**
     * Sets fund_transfer_status.
     *
     * @param null|string $fund_transfer_status the status of the fund transfer
     */
    public function setFundTransferStatus(?string $fund_transfer_status) : self
    {
        $this->container['fund_transfer_status'] = $fund_transfer_status;

        return $this;
    }

    /**
     * Gets original_total.
     */
    public function getOriginalTotal() : ?Currency
    {
        return $this->container['original_total'];
    }

    /**
     * Sets original_total.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $original_total original_total
     */
    public function setOriginalTotal(?Currency $original_total) : self
    {
        $this->container['original_total'] = $original_total;

        return $this;
    }

    /**
     * Gets converted_total.
     */
    public function getConvertedTotal() : ?Currency
    {
        return $this->container['converted_total'];
    }

    /**
     * Sets converted_total.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $converted_total converted_total
     */
    public function setConvertedTotal(?Currency $converted_total) : self
    {
        $this->container['converted_total'] = $converted_total;

        return $this;
    }

    /**
     * Gets fund_transfer_date.
     */
    public function getFundTransferDate() : ?\DateTimeInterface
    {
        return $this->container['fund_transfer_date'];
    }

    /**
     * Sets fund_transfer_date.
     *
     * @param null|\DateTimeInterface $fund_transfer_date A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function setFundTransferDate(?\DateTimeInterface $fund_transfer_date) : self
    {
        $this->container['fund_transfer_date'] = $fund_transfer_date;

        return $this;
    }

    /**
     * Gets trace_id.
     */
    public function getTraceId() : ?string
    {
        return $this->container['trace_id'];
    }

    /**
     * Sets trace_id.
     *
     * @param null|string $trace_id the trace identifier used by sellers to look up transactions externally
     */
    public function setTraceId(?string $trace_id) : self
    {
        $this->container['trace_id'] = $trace_id;

        return $this;
    }

    /**
     * Gets account_tail.
     */
    public function getAccountTail() : ?string
    {
        return $this->container['account_tail'];
    }

    /**
     * Sets account_tail.
     *
     * @param null|string $account_tail the account tail of the payment instrument
     */
    public function setAccountTail(?string $account_tail) : self
    {
        $this->container['account_tail'] = $account_tail;

        return $this;
    }

    /**
     * Gets beginning_balance.
     */
    public function getBeginningBalance() : ?Currency
    {
        return $this->container['beginning_balance'];
    }

    /**
     * Sets beginning_balance.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances\Currency $beginning_balance beginning_balance
     */
    public function setBeginningBalance(?Currency $beginning_balance) : self
    {
        $this->container['beginning_balance'] = $beginning_balance;

        return $this;
    }

    /**
     * Gets financial_event_group_start.
     */
    public function getFinancialEventGroupStart() : ?\DateTimeInterface
    {
        return $this->container['financial_event_group_start'];
    }

    /**
     * Sets financial_event_group_start.
     *
     * @param null|\DateTimeInterface $financial_event_group_start A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function setFinancialEventGroupStart(?\DateTimeInterface $financial_event_group_start) : self
    {
        $this->container['financial_event_group_start'] = $financial_event_group_start;

        return $this;
    }

    /**
     * Gets financial_event_group_end.
     */
    public function getFinancialEventGroupEnd() : ?\DateTimeInterface
    {
        return $this->container['financial_event_group_end'];
    }

    /**
     * Sets financial_event_group_end.
     *
     * @param null|\DateTimeInterface $financial_event_group_end A date in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
     */
    public function setFinancialEventGroupEnd(?\DateTimeInterface $financial_event_group_end) : self
    {
        $this->container['financial_event_group_end'] = $financial_event_group_end;

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
