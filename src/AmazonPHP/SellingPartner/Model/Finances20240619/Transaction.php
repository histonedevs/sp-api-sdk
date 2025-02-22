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
class Transaction implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

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
        'selling_partner_metadata' => '\AmazonPHP\SellingPartner\Model\Finances20240619\SellingPartnerMetadata',
        'related_identifiers' => '\AmazonPHP\SellingPartner\Model\Finances20240619\RelatedIdentifier[]',
        'transaction_type' => 'string',
        'transaction_id' => 'string',
        'transaction_status' => 'string',
        'description' => 'string',
        'posted_date' => 'DateTimeInterface',
        'total_amount' => '\AmazonPHP\SellingPartner\Model\Finances20240619\Currency',
        'marketplace_details' => '\AmazonPHP\SellingPartner\Model\Finances20240619\MarketplaceDetails',
        'items' => '\AmazonPHP\SellingPartner\Model\Finances20240619\Item[]',
        'contexts' => '\AmazonPHP\SellingPartner\Model\Finances20240619\Context[]',
        'breakdowns' => '\AmazonPHP\SellingPartner\Model\Finances20240619\Breakdown[]',
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
        'selling_partner_metadata' => null,
        'related_identifiers' => null,
        'transaction_type' => null,
        'transaction_id' => null,
        'transaction_status' => null,
        'description' => null,
        'posted_date' => 'date-time',
        'total_amount' => null,
        'marketplace_details' => null,
        'items' => null,
        'contexts' => null,
        'breakdowns' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'selling_partner_metadata' => 'sellingPartnerMetadata',
        'related_identifiers' => 'relatedIdentifiers',
        'transaction_type' => 'transactionType',
        'transaction_id' => 'transactionId',
        'transaction_status' => 'transactionStatus',
        'description' => 'description',
        'posted_date' => 'postedDate',
        'total_amount' => 'totalAmount',
        'marketplace_details' => 'marketplaceDetails',
        'items' => 'items',
        'contexts' => 'contexts',
        'breakdowns' => 'breakdowns',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'selling_partner_metadata' => 'setSellingPartnerMetadata',
        'related_identifiers' => 'setRelatedIdentifiers',
        'transaction_type' => 'setTransactionType',
        'transaction_id' => 'setTransactionId',
        'transaction_status' => 'setTransactionStatus',
        'description' => 'setDescription',
        'posted_date' => 'setPostedDate',
        'total_amount' => 'setTotalAmount',
        'marketplace_details' => 'setMarketplaceDetails',
        'items' => 'setItems',
        'contexts' => 'setContexts',
        'breakdowns' => 'setBreakdowns',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'selling_partner_metadata' => 'getSellingPartnerMetadata',
        'related_identifiers' => 'getRelatedIdentifiers',
        'transaction_type' => 'getTransactionType',
        'transaction_id' => 'getTransactionId',
        'transaction_status' => 'getTransactionStatus',
        'description' => 'getDescription',
        'posted_date' => 'getPostedDate',
        'total_amount' => 'getTotalAmount',
        'marketplace_details' => 'getMarketplaceDetails',
        'items' => 'getItems',
        'contexts' => 'getContexts',
        'breakdowns' => 'getBreakdowns',
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
        $this->container['selling_partner_metadata'] = $data['selling_partner_metadata'] ?? null;
        $this->container['related_identifiers'] = $data['related_identifiers'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['transaction_status'] = $data['transaction_status'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['marketplace_details'] = $data['marketplace_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['contexts'] = $data['contexts'] ?? null;
        $this->container['breakdowns'] = $data['breakdowns'] ?? null;
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
        if ($this->container['selling_partner_metadata'] !== null) {
            $this->container['selling_partner_metadata']->validate();
        }

        if ($this->container['total_amount'] !== null) {
            $this->container['total_amount']->validate();
        }

        if ($this->container['marketplace_details'] !== null) {
            $this->container['marketplace_details']->validate();
        }
    }

    /**
     * Gets selling_partner_metadata.
     */
    public function getSellingPartnerMetadata() : ?SellingPartnerMetadata
    {
        return $this->container['selling_partner_metadata'];
    }

    /**
     * Sets selling_partner_metadata.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\SellingPartnerMetadata $selling_partner_metadata selling_partner_metadata
     */
    public function setSellingPartnerMetadata(?SellingPartnerMetadata $selling_partner_metadata) : self
    {
        $this->container['selling_partner_metadata'] = $selling_partner_metadata;

        return $this;
    }

    /**
     * Gets related_identifiers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances20240619\RelatedIdentifier[]
     */
    public function getRelatedIdentifiers() : ?array
    {
        return $this->container['related_identifiers'];
    }

    /**
     * Sets related_identifiers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\RelatedIdentifier[] $related_identifiers related business identifiers of the transaction
     */
    public function setRelatedIdentifiers(?array $related_identifiers) : self
    {
        $this->container['related_identifiers'] = $related_identifiers;

        return $this;
    }

    /**
     * Gets transaction_type.
     */
    public function getTransactionType() : ?string
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param null|string $transaction_type The type of transaction.  **Possible value:** `Shipment`
     */
    public function setTransactionType(?string $transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_id.
     */
    public function getTransactionId() : ?string
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id.
     *
     * @param null|string $transaction_id the unique identifier of the transaction
     */
    public function setTransactionId(?string $transaction_id) : self
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets transaction_status.
     */
    public function getTransactionStatus() : ?string
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status.
     *
     * @param null|string $transaction_status The status of the transaction.   **Possible values:**  * `Deferred` * `Released`
     */
    public function setTransactionStatus(?string $transaction_status) : self
    {
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets description.
     */
    public function getDescription() : ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
     *
     * @param null|string $description Describes the reasons for the transaction.  **Example:** 'Order Payment', 'Refund Order'
     */
    public function setDescription(?string $description) : self
    {
        $this->container['description'] = $description;

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
     * Gets total_amount.
     */
    public function getTotalAmount() : ?Currency
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\Currency $total_amount total_amount
     */
    public function setTotalAmount(?Currency $total_amount) : self
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets marketplace_details.
     */
    public function getMarketplaceDetails() : ?MarketplaceDetails
    {
        return $this->container['marketplace_details'];
    }

    /**
     * Sets marketplace_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\MarketplaceDetails $marketplace_details marketplace_details
     */
    public function setMarketplaceDetails(?MarketplaceDetails $marketplace_details) : self
    {
        $this->container['marketplace_details'] = $marketplace_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances20240619\Item[]
     */
    public function getItems() : ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\Item[] $items a list of items in the transaction
     */
    public function setItems(?array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets contexts.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances20240619\Context[]
     */
    public function getContexts() : ?array
    {
        return $this->container['contexts'];
    }

    /**
     * Sets contexts.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\Context[] $contexts a list of additional information about the item
     */
    public function setContexts(?array $contexts) : self
    {
        $this->container['contexts'] = $contexts;

        return $this;
    }

    /**
     * Gets breakdowns.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Finances20240619\Breakdown[]
     */
    public function getBreakdowns() : ?array
    {
        return $this->container['breakdowns'];
    }

    /**
     * Sets breakdowns.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Finances20240619\Breakdown[] $breakdowns a list of breakdowns that provide details on how the total amount is calculated for the transaction
     */
    public function setBreakdowns(?array $breakdowns) : self
    {
        $this->container['breakdowns'] = $breakdowns;

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
