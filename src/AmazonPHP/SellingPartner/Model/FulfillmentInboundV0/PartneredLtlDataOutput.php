<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInboundV0;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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
class PartneredLtlDataOutput implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'PartneredLtlDataOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'contact' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Contact',
        'box_count' => 'int',
        'seller_freight_class' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\SellerFreightClass',
        'freight_ready_date' => 'DateTimeInterface',
        'pallet_list' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Pallet[]',
        'total_weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Weight',
        'seller_declared_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Amount',
        'amazon_calculated_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Amount',
        'preview_pickup_date' => 'DateTimeInterface',
        'preview_delivery_date' => 'DateTimeInterface',
        'preview_freight_class' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\SellerFreightClass',
        'amazon_reference_id' => 'string',
        'is_bill_of_lading_available' => 'bool',
        'partnered_estimate' => '\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\PartneredEstimate',
        'carrier_name' => 'string',
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
        'contact' => null,
        'box_count' => 'int64',
        'seller_freight_class' => null,
        'freight_ready_date' => 'date',
        'pallet_list' => null,
        'total_weight' => null,
        'seller_declared_value' => null,
        'amazon_calculated_value' => null,
        'preview_pickup_date' => 'date',
        'preview_delivery_date' => 'date',
        'preview_freight_class' => null,
        'amazon_reference_id' => null,
        'is_bill_of_lading_available' => null,
        'partnered_estimate' => null,
        'carrier_name' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'contact' => 'Contact',
        'box_count' => 'BoxCount',
        'seller_freight_class' => 'SellerFreightClass',
        'freight_ready_date' => 'FreightReadyDate',
        'pallet_list' => 'PalletList',
        'total_weight' => 'TotalWeight',
        'seller_declared_value' => 'SellerDeclaredValue',
        'amazon_calculated_value' => 'AmazonCalculatedValue',
        'preview_pickup_date' => 'PreviewPickupDate',
        'preview_delivery_date' => 'PreviewDeliveryDate',
        'preview_freight_class' => 'PreviewFreightClass',
        'amazon_reference_id' => 'AmazonReferenceId',
        'is_bill_of_lading_available' => 'IsBillOfLadingAvailable',
        'partnered_estimate' => 'PartneredEstimate',
        'carrier_name' => 'CarrierName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'contact' => 'setContact',
        'box_count' => 'setBoxCount',
        'seller_freight_class' => 'setSellerFreightClass',
        'freight_ready_date' => 'setFreightReadyDate',
        'pallet_list' => 'setPalletList',
        'total_weight' => 'setTotalWeight',
        'seller_declared_value' => 'setSellerDeclaredValue',
        'amazon_calculated_value' => 'setAmazonCalculatedValue',
        'preview_pickup_date' => 'setPreviewPickupDate',
        'preview_delivery_date' => 'setPreviewDeliveryDate',
        'preview_freight_class' => 'setPreviewFreightClass',
        'amazon_reference_id' => 'setAmazonReferenceId',
        'is_bill_of_lading_available' => 'setIsBillOfLadingAvailable',
        'partnered_estimate' => 'setPartneredEstimate',
        'carrier_name' => 'setCarrierName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'contact' => 'getContact',
        'box_count' => 'getBoxCount',
        'seller_freight_class' => 'getSellerFreightClass',
        'freight_ready_date' => 'getFreightReadyDate',
        'pallet_list' => 'getPalletList',
        'total_weight' => 'getTotalWeight',
        'seller_declared_value' => 'getSellerDeclaredValue',
        'amazon_calculated_value' => 'getAmazonCalculatedValue',
        'preview_pickup_date' => 'getPreviewPickupDate',
        'preview_delivery_date' => 'getPreviewDeliveryDate',
        'preview_freight_class' => 'getPreviewFreightClass',
        'amazon_reference_id' => 'getAmazonReferenceId',
        'is_bill_of_lading_available' => 'getIsBillOfLadingAvailable',
        'partnered_estimate' => 'getPartneredEstimate',
        'carrier_name' => 'getCarrierName',
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
        $this->container['contact'] = $data['contact'] ?? null;
        $this->container['box_count'] = $data['box_count'] ?? null;
        $this->container['seller_freight_class'] = $data['seller_freight_class'] ?? null;
        $this->container['freight_ready_date'] = $data['freight_ready_date'] ?? null;
        $this->container['pallet_list'] = $data['pallet_list'] ?? null;
        $this->container['total_weight'] = $data['total_weight'] ?? null;
        $this->container['seller_declared_value'] = $data['seller_declared_value'] ?? null;
        $this->container['amazon_calculated_value'] = $data['amazon_calculated_value'] ?? null;
        $this->container['preview_pickup_date'] = $data['preview_pickup_date'] ?? null;
        $this->container['preview_delivery_date'] = $data['preview_delivery_date'] ?? null;
        $this->container['preview_freight_class'] = $data['preview_freight_class'] ?? null;
        $this->container['amazon_reference_id'] = $data['amazon_reference_id'] ?? null;
        $this->container['is_bill_of_lading_available'] = $data['is_bill_of_lading_available'] ?? null;
        $this->container['partnered_estimate'] = $data['partnered_estimate'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
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
        if ($this->container['contact'] === null) {
            throw new AssertionException("'contact' can't be null");
        }

        $this->container['contact']->validate();

        if ($this->container['box_count'] === null) {
            throw new AssertionException("'box_count' can't be null");
        }

        if ($this->container['freight_ready_date'] === null) {
            throw new AssertionException("'freight_ready_date' can't be null");
        }

        if ($this->container['pallet_list'] === null) {
            throw new AssertionException("'pallet_list' can't be null");
        }

        if ($this->container['total_weight'] === null) {
            throw new AssertionException("'total_weight' can't be null");
        }

        $this->container['total_weight']->validate();

        if ($this->container['seller_declared_value'] !== null) {
            $this->container['seller_declared_value']->validate();
        }

        if ($this->container['amazon_calculated_value'] !== null) {
            $this->container['amazon_calculated_value']->validate();
        }

        if ($this->container['preview_pickup_date'] === null) {
            throw new AssertionException("'preview_pickup_date' can't be null");
        }

        if ($this->container['preview_delivery_date'] === null) {
            throw new AssertionException("'preview_delivery_date' can't be null");
        }

        if ($this->container['preview_freight_class'] === null) {
            throw new AssertionException("'preview_freight_class' can't be null");
        }

        if ($this->container['amazon_reference_id'] === null) {
            throw new AssertionException("'amazon_reference_id' can't be null");
        }

        if ($this->container['is_bill_of_lading_available'] === null) {
            throw new AssertionException("'is_bill_of_lading_available' can't be null");
        }

        if ($this->container['partnered_estimate'] !== null) {
            $this->container['partnered_estimate']->validate();
        }

        if ($this->container['carrier_name'] === null) {
            throw new AssertionException("'carrier_name' can't be null");
        }
    }

    /**
     * Gets contact.
     */
    public function getContact() : Contact
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Contact $contact contact
     */
    public function setContact(Contact $contact) : self
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count.
     */
    public function getBoxCount() : int
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count.
     *
     * @param int $box_count Contains an unsigned integer
     */
    public function setBoxCount(int $box_count) : self
    {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class.
     */
    public function getSellerFreightClass() : ?SellerFreightClass
    {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\SellerFreightClass $seller_freight_class seller_freight_class
     */
    public function setSellerFreightClass(?SellerFreightClass $seller_freight_class) : self
    {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date.
     */
    public function getFreightReadyDate() : \DateTimeInterface
    {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date.
     *
     * @param \DateTimeInterface $freight_ready_date Type containing date in string format
     */
    public function setFreightReadyDate(DateTimeInterface $freight_ready_date) : self
    {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Pallet[]
     */
    public function getPalletList() : array
    {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Pallet[] $pallet_list a list of pallet information
     */
    public function setPalletList(array $pallet_list) : self
    {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight.
     */
    public function getTotalWeight() : ?Weight
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Weight $total_weight total_weight
     */
    public function setTotalWeight(Weight $total_weight) : self
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value.
     */
    public function getSellerDeclaredValue() : ?Amount
    {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Amount $seller_declared_value seller_declared_value
     */
    public function setSellerDeclaredValue(?Amount $seller_declared_value) : self
    {
        $this->container['seller_declared_value'] = $seller_declared_value;

        return $this;
    }

    /**
     * Gets amazon_calculated_value.
     */
    public function getAmazonCalculatedValue() : ?Amount
    {
        return $this->container['amazon_calculated_value'];
    }

    /**
     * Sets amazon_calculated_value.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\Amount $amazon_calculated_value amazon_calculated_value
     */
    public function setAmazonCalculatedValue(?Amount $amazon_calculated_value) : self
    {
        $this->container['amazon_calculated_value'] = $amazon_calculated_value;

        return $this;
    }

    /**
     * Gets preview_pickup_date.
     */
    public function getPreviewPickupDate() : ?\DateTimeInterface
    {
        return $this->container['preview_pickup_date'];
    }

    /**
     * Sets preview_pickup_date.
     *
     * @param \DateTimeInterface $preview_pickup_date Type containing date in string format
     */
    public function setPreviewPickupDate(DateTimeInterface $preview_pickup_date) : self
    {
        $this->container['preview_pickup_date'] = $preview_pickup_date;

        return $this;
    }

    /**
     * Gets preview_delivery_date.
     */
    public function getPreviewDeliveryDate() : ?\DateTimeInterface
    {
        return $this->container['preview_delivery_date'];
    }

    /**
     * Sets preview_delivery_date.
     *
     * @param \DateTimeInterface $preview_delivery_date Type containing date in string format
     */
    public function setPreviewDeliveryDate(DateTimeInterface $preview_delivery_date) : self
    {
        $this->container['preview_delivery_date'] = $preview_delivery_date;

        return $this;
    }

    /**
     * Gets preview_freight_class.
     */
    public function getPreviewFreightClass() : ?SellerFreightClass
    {
        return $this->container['preview_freight_class'];
    }

    /**
     * Sets preview_freight_class.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\SellerFreightClass $preview_freight_class preview_freight_class
     */
    public function setPreviewFreightClass(SellerFreightClass $preview_freight_class) : self
    {
        $this->container['preview_freight_class'] = $preview_freight_class;

        return $this;
    }

    /**
     * Gets amazon_reference_id.
     */
    public function getAmazonReferenceId() : ?string
    {
        return $this->container['amazon_reference_id'];
    }

    /**
     * Sets amazon_reference_id.
     *
     * @param string $amazon_reference_id a unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment
     */
    public function setAmazonReferenceId(string $amazon_reference_id) : self
    {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
    }

    /**
     * Gets is_bill_of_lading_available.
     */
    public function getIsBillOfLadingAvailable() : ?bool
    {
        return $this->container['is_bill_of_lading_available'];
    }

    /**
     * Sets is_bill_of_lading_available.
     *
     * @param bool $is_bill_of_lading_available indicates whether the bill of lading for the shipment is available
     */
    public function setIsBillOfLadingAvailable(bool $is_bill_of_lading_available) : self
    {
        $this->container['is_bill_of_lading_available'] = $is_bill_of_lading_available;

        return $this;
    }

    /**
     * Gets partnered_estimate.
     */
    public function getPartneredEstimate() : ?PartneredEstimate
    {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInboundV0\PartneredEstimate $partnered_estimate partnered_estimate
     */
    public function setPartneredEstimate(?PartneredEstimate $partnered_estimate) : self
    {
        $this->container['partnered_estimate'] = $partnered_estimate;

        return $this;
    }

    /**
     * Gets carrier_name.
     */
    public function getCarrierName() : ?string
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the carrier for the inbound shipment
     */
    public function setCarrierName(string $carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

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
