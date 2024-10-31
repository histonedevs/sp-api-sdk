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
class CreditNoteDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'CreditNoteDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'reference_invoice_number' => 'string',
        'debit_note_number' => 'string',
        'returns_reference_number' => 'string',
        'goods_return_date' => 'DateTimeInterface',
        'rma_id' => 'string',
        'coop_reference_number' => 'string',
        'consignors_reference_number' => 'string',
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
        'reference_invoice_number' => null,
        'debit_note_number' => null,
        'returns_reference_number' => null,
        'goods_return_date' => 'date-time',
        'rma_id' => null,
        'coop_reference_number' => null,
        'consignors_reference_number' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'reference_invoice_number' => 'referenceInvoiceNumber',
        'debit_note_number' => 'debitNoteNumber',
        'returns_reference_number' => 'returnsReferenceNumber',
        'goods_return_date' => 'goodsReturnDate',
        'rma_id' => 'rmaId',
        'coop_reference_number' => 'coopReferenceNumber',
        'consignors_reference_number' => 'consignorsReferenceNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'reference_invoice_number' => 'setReferenceInvoiceNumber',
        'debit_note_number' => 'setDebitNoteNumber',
        'returns_reference_number' => 'setReturnsReferenceNumber',
        'goods_return_date' => 'setGoodsReturnDate',
        'rma_id' => 'setRmaId',
        'coop_reference_number' => 'setCoopReferenceNumber',
        'consignors_reference_number' => 'setConsignorsReferenceNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'reference_invoice_number' => 'getReferenceInvoiceNumber',
        'debit_note_number' => 'getDebitNoteNumber',
        'returns_reference_number' => 'getReturnsReferenceNumber',
        'goods_return_date' => 'getGoodsReturnDate',
        'rma_id' => 'getRmaId',
        'coop_reference_number' => 'getCoopReferenceNumber',
        'consignors_reference_number' => 'getConsignorsReferenceNumber',
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
        $this->container['reference_invoice_number'] = $data['reference_invoice_number'] ?? null;
        $this->container['debit_note_number'] = $data['debit_note_number'] ?? null;
        $this->container['returns_reference_number'] = $data['returns_reference_number'] ?? null;
        $this->container['goods_return_date'] = $data['goods_return_date'] ?? null;
        $this->container['rma_id'] = $data['rma_id'] ?? null;
        $this->container['coop_reference_number'] = $data['coop_reference_number'] ?? null;
        $this->container['consignors_reference_number'] = $data['consignors_reference_number'] ?? null;
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
     * Gets reference_invoice_number.
     */
    public function getReferenceInvoiceNumber() : ?string
    {
        return $this->container['reference_invoice_number'];
    }

    /**
     * Sets reference_invoice_number.
     *
     * @param null|string $reference_invoice_number Original invoice number when sending a credit note relating to an existing invoice. One invoice only to be processed per credit note. This is mandatory for AP credit notes.
     */
    public function setReferenceInvoiceNumber(?string $reference_invoice_number) : self
    {
        $this->container['reference_invoice_number'] = $reference_invoice_number;

        return $this;
    }

    /**
     * Gets debit_note_number.
     */
    public function getDebitNoteNumber() : ?string
    {
        return $this->container['debit_note_number'];
    }

    /**
     * Sets debit_note_number.
     *
     * @param null|string $debit_note_number Debit note number as generated by Amazon. Recommended for returns and COOP credit notes.
     */
    public function setDebitNoteNumber(?string $debit_note_number) : self
    {
        $this->container['debit_note_number'] = $debit_note_number;

        return $this;
    }

    /**
     * Gets returns_reference_number.
     */
    public function getReturnsReferenceNumber() : ?string
    {
        return $this->container['returns_reference_number'];
    }

    /**
     * Sets returns_reference_number.
     *
     * @param null|string $returns_reference_number Identifies the returns notice number. Mandatory for all returns credit notes.
     */
    public function setReturnsReferenceNumber(?string $returns_reference_number) : self
    {
        $this->container['returns_reference_number'] = $returns_reference_number;

        return $this;
    }

    /**
     * Gets goods_return_date.
     */
    public function getGoodsReturnDate() : ?DateTimeInterface
    {
        return $this->container['goods_return_date'];
    }

    /**
     * Sets goods_return_date.
     *
     * @param null|DateTimeInterface $goods_return_date Defines a date and time according to <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a>.
     */
    public function setGoodsReturnDate(?DateTimeInterface $goods_return_date) : self
    {
        $this->container['goods_return_date'] = $goods_return_date;

        return $this;
    }

    /**
     * Gets rma_id.
     */
    public function getRmaId() : ?string
    {
        return $this->container['rma_id'];
    }

    /**
     * Sets rma_id.
     *
     * @param null|string $rma_id identifies the Returned Merchandise Authorization ID, if generated
     */
    public function setRmaId(?string $rma_id) : self
    {
        $this->container['rma_id'] = $rma_id;

        return $this;
    }

    /**
     * Gets coop_reference_number.
     */
    public function getCoopReferenceNumber() : ?string
    {
        return $this->container['coop_reference_number'];
    }

    /**
     * Sets coop_reference_number.
     *
     * @param null|string $coop_reference_number Identifies the COOP reference used for COOP agreement. Failure to provide the COOP reference number or the debit note number may lead to a rejection of the credit note.
     */
    public function setCoopReferenceNumber(?string $coop_reference_number) : self
    {
        $this->container['coop_reference_number'] = $coop_reference_number;

        return $this;
    }

    /**
     * Gets consignors_reference_number.
     */
    public function getConsignorsReferenceNumber() : ?string
    {
        return $this->container['consignors_reference_number'];
    }

    /**
     * Sets consignors_reference_number.
     *
     * @param null|string $consignors_reference_number identifies the consignor reference number (VRET number), if generated by Amazon
     */
    public function setConsignorsReferenceNumber(?string $consignors_reference_number) : self
    {
        $this->container['consignors_reference_number'] = $consignors_reference_number;

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
