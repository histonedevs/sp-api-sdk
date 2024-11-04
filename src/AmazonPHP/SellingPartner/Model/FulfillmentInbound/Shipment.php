<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Shipment implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Shipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amazon_reference_id' => 'string',
        'contact_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation',
        'dates' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dates',
        'destination' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentDestination',
        'freight_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\FreightInformation',
        'name' => 'string',
        'placement_option_id' => 'string',
        'selected_delivery_window' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelectedDeliveryWindow',
        'selected_transportation_option_id' => 'string',
        'self_ship_appointment_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[]',
        'shipment_confirmation_id' => 'string',
        'shipment_id' => 'string',
        'source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentSource',
        'status' => 'string',
        'tracking_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TrackingDetails',
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
        'amazon_reference_id' => null,
        'contact_information' => null,
        'dates' => null,
        'destination' => null,
        'freight_information' => null,
        'name' => null,
        'placement_option_id' => null,
        'selected_delivery_window' => null,
        'selected_transportation_option_id' => null,
        'self_ship_appointment_details' => null,
        'shipment_confirmation_id' => null,
        'shipment_id' => null,
        'source' => null,
        'status' => null,
        'tracking_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amazon_reference_id' => 'amazonReferenceId',
        'contact_information' => 'contactInformation',
        'dates' => 'dates',
        'destination' => 'destination',
        'freight_information' => 'freightInformation',
        'name' => 'name',
        'placement_option_id' => 'placementOptionId',
        'selected_delivery_window' => 'selectedDeliveryWindow',
        'selected_transportation_option_id' => 'selectedTransportationOptionId',
        'self_ship_appointment_details' => 'selfShipAppointmentDetails',
        'shipment_confirmation_id' => 'shipmentConfirmationId',
        'shipment_id' => 'shipmentId',
        'source' => 'source',
        'status' => 'status',
        'tracking_details' => 'trackingDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_reference_id' => 'setAmazonReferenceId',
        'contact_information' => 'setContactInformation',
        'dates' => 'setDates',
        'destination' => 'setDestination',
        'freight_information' => 'setFreightInformation',
        'name' => 'setName',
        'placement_option_id' => 'setPlacementOptionId',
        'selected_delivery_window' => 'setSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'setSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'setSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'setShipmentConfirmationId',
        'shipment_id' => 'setShipmentId',
        'source' => 'setSource',
        'status' => 'setStatus',
        'tracking_details' => 'setTrackingDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_reference_id' => 'getAmazonReferenceId',
        'contact_information' => 'getContactInformation',
        'dates' => 'getDates',
        'destination' => 'getDestination',
        'freight_information' => 'getFreightInformation',
        'name' => 'getName',
        'placement_option_id' => 'getPlacementOptionId',
        'selected_delivery_window' => 'getSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'getSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'getSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'getShipmentConfirmationId',
        'shipment_id' => 'getShipmentId',
        'source' => 'getSource',
        'status' => 'getStatus',
        'tracking_details' => 'getTrackingDetails',
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
        $this->container['amazon_reference_id'] = $data['amazon_reference_id'] ?? null;
        $this->container['contact_information'] = $data['contact_information'] ?? null;
        $this->container['dates'] = $data['dates'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['freight_information'] = $data['freight_information'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['selected_delivery_window'] = $data['selected_delivery_window'] ?? null;
        $this->container['selected_transportation_option_id'] = $data['selected_transportation_option_id'] ?? null;
        $this->container['self_ship_appointment_details'] = $data['self_ship_appointment_details'] ?? null;
        $this->container['shipment_confirmation_id'] = $data['shipment_confirmation_id'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tracking_details'] = $data['tracking_details'] ?? null;
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
        if (null !== $this->container['amazon_reference_id'] && (\mb_strlen((string) $this->container['amazon_reference_id']) > 1024)) {
            throw new AssertionException("invalid value for 'amazon_reference_id', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['amazon_reference_id'] && (\mb_strlen((string) $this->container['amazon_reference_id']) < 1)) {
            throw new AssertionException("invalid value for 'amazon_reference_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['contact_information'] !== null) {
            $this->container['contact_information']->validate();
        }

        if ($this->container['dates'] !== null) {
            $this->container['dates']->validate();
        }

        if ($this->container['destination'] === null) {
            throw new AssertionException("'destination' can't be null");
        }

        $this->container['destination']->validate();

        if ($this->container['freight_information'] !== null) {
            $this->container['freight_information']->validate();
        }

        if ($this->container['placement_option_id'] === null) {
            throw new AssertionException("'placement_option_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['placement_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['placement_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['placement_option_id'])) {
            throw new AssertionException("invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['selected_delivery_window'] !== null) {
            $this->container['selected_delivery_window']->validate();
        }

        if (null !== $this->container['selected_transportation_option_id'] && (\mb_strlen((string) $this->container['selected_transportation_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', the character length must be smaller than or equal to 38.");
        }

        if (null !== $this->container['selected_transportation_option_id'] && (\mb_strlen((string) $this->container['selected_transportation_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', the character length must be bigger than or equal to 38.");
        }

        if (null !== $this->container['selected_transportation_option_id'] && !\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['selected_transportation_option_id'])) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if (null !== $this->container['shipment_confirmation_id'] && (\mb_strlen((string) $this->container['shipment_confirmation_id']) > 1024)) {
            throw new AssertionException("invalid value for 'shipment_confirmation_id', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['shipment_confirmation_id'] && (\mb_strlen((string) $this->container['shipment_confirmation_id']) < 1)) {
            throw new AssertionException("invalid value for 'shipment_confirmation_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['shipment_id']) > 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['shipment_id']) < 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['shipment_id'])) {
            throw new AssertionException("invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['source'] === null) {
            throw new AssertionException("'source' can't be null");
        }

        $this->container['source']->validate();

        if (null !== $this->container['status'] && (\mb_strlen((string) $this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['status'] && (\mb_strlen((string) $this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['tracking_details'] !== null) {
            $this->container['tracking_details']->validate();
        }
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
     * @param null|string $amazon_reference_id a unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment
     */
    public function setAmazonReferenceId(?string $amazon_reference_id) : self
    {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
    }

    /**
     * Gets contact_information.
     */
    public function getContactInformation() : ?ContactInformation
    {
        return $this->container['contact_information'];
    }

    /**
     * Sets contact_information.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation $contact_information contact_information
     */
    public function setContactInformation(?ContactInformation $contact_information) : self
    {
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    /**
     * Gets dates.
     */
    public function getDates() : ?Dates
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dates $dates dates
     */
    public function setDates(?Dates $dates) : self
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets destination.
     */
    public function getDestination() : ShipmentDestination
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentDestination $destination destination
     */
    public function setDestination(ShipmentDestination $destination) : self
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets freight_information.
     */
    public function getFreightInformation() : ?FreightInformation
    {
        return $this->container['freight_information'];
    }

    /**
     * Sets freight_information.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\FreightInformation $freight_information freight_information
     */
    public function setFreightInformation(?FreightInformation $freight_information) : self
    {
        $this->container['freight_information'] = $freight_information;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName() : ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param null|string $name the name of the shipment
     */
    public function setName(?string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement_option_id.
     */
    public function getPlacementOptionId() : string
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id.
     *
     * @param string $placement_option_id The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     */
    public function setPlacementOptionId(string $placement_option_id) : self
    {
        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets selected_delivery_window.
     */
    public function getSelectedDeliveryWindow() : ?SelectedDeliveryWindow
    {
        return $this->container['selected_delivery_window'];
    }

    /**
     * Sets selected_delivery_window.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelectedDeliveryWindow $selected_delivery_window selected_delivery_window
     */
    public function setSelectedDeliveryWindow(?SelectedDeliveryWindow $selected_delivery_window) : self
    {
        $this->container['selected_delivery_window'] = $selected_delivery_window;

        return $this;
    }

    /**
     * Gets selected_transportation_option_id.
     */
    public function getSelectedTransportationOptionId() : ?string
    {
        return $this->container['selected_transportation_option_id'];
    }

    /**
     * Sets selected_transportation_option_id.
     *
     * @param null|string $selected_transportation_option_id Identifier of a transportation option. A transportation option represent one option for how to send a shipment.
     */
    public function setSelectedTransportationOptionId(?string $selected_transportation_option_id) : self
    {
        $this->container['selected_transportation_option_id'] = $selected_transportation_option_id;

        return $this;
    }

    /**
     * Gets self_ship_appointment_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[]
     */
    public function getSelfShipAppointmentDetails() : ?array
    {
        return $this->container['self_ship_appointment_details'];
    }

    /**
     * Sets self_ship_appointment_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[] $self_ship_appointment_details list of self ship appointment details
     */
    public function setSelfShipAppointmentDetails(?array $self_ship_appointment_details) : self
    {
        $this->container['self_ship_appointment_details'] = $self_ship_appointment_details;

        return $this;
    }

    /**
     * Gets shipment_confirmation_id.
     */
    public function getShipmentConfirmationId() : ?string
    {
        return $this->container['shipment_confirmation_id'];
    }

    /**
     * Sets shipment_confirmation_id.
     *
     * @param null|string $shipment_confirmation_id the confirmed shipment ID which shows up on labels (for example, `FBA1234ABCD`)
     */
    public function setShipmentConfirmationId(?string $shipment_confirmation_id) : self
    {
        $this->container['shipment_confirmation_id'] = $shipment_confirmation_id;

        return $this;
    }

    /**
     * Gets shipment_id.
     */
    public function getShipmentId() : string
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     */
    public function setShipmentId(string $shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets source.
     */
    public function getSource() : ShipmentSource
    {
        return $this->container['source'];
    }

    /**
     * Sets source.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentSource $source source
     */
    public function setSource(ShipmentSource $source) : self
    {
        $this->container['source'] = $source;

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
     * @param null|string $status The status of a shipment. The state of the shipment will typically start as `UNCONFIRMED`, then transition to `WORKING` after a placement option has been confirmed, and then to `READY_TO_SHIP` once labels are generated.  Possible values: `ABANDONED`, `CANCELLED`, `CHECKED_IN`, `CLOSED`, `DELETED`, `DELIVERED`, `IN_TRANSIT`, `MIXED`, `READY_TO_SHIP`, `RECEIVING`, `SHIPPED`, `UNCONFIRMED`, `WORKING`
     */
    public function setStatus(?string $status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_details.
     */
    public function getTrackingDetails() : ?TrackingDetails
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TrackingDetails $tracking_details tracking_details
     */
    public function setTrackingDetails(?TrackingDetails $tracking_details) : self
    {
        $this->container['tracking_details'] = $tracking_details;

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
