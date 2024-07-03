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
class FulfillmentOrder implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'FulfillmentOrder';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'seller_fulfillment_order_id' => 'string',
        'marketplace_id' => 'string',
        'displayable_order_id' => 'string',
        'displayable_order_date' => '\DateTimeInterface',
        'displayable_order_comment' => 'string',
        'shipping_speed_category' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory',
        'delivery_window' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryWindow',
        'destination_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address',
        'fulfillment_action' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction',
        'fulfillment_policy' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPolicy',
        'cod_settings' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CODSettings',
        'received_date' => '\DateTimeInterface',
        'fulfillment_order_status' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderStatus',
        'status_updated_date' => '\DateTimeInterface',
        'notification_emails' => 'string[]',
        'feature_constraints' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]',
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
        'seller_fulfillment_order_id' => null,
        'marketplace_id' => null,
        'displayable_order_id' => null,
        'displayable_order_date' => 'date-time',
        'displayable_order_comment' => null,
        'shipping_speed_category' => null,
        'delivery_window' => null,
        'destination_address' => null,
        'fulfillment_action' => null,
        'fulfillment_policy' => null,
        'cod_settings' => null,
        'received_date' => 'date-time',
        'fulfillment_order_status' => null,
        'status_updated_date' => 'date-time',
        'notification_emails' => null,
        'feature_constraints' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'seller_fulfillment_order_id' => 'sellerFulfillmentOrderId',
        'marketplace_id' => 'marketplaceId',
        'displayable_order_id' => 'displayableOrderId',
        'displayable_order_date' => 'displayableOrderDate',
        'displayable_order_comment' => 'displayableOrderComment',
        'shipping_speed_category' => 'shippingSpeedCategory',
        'delivery_window' => 'deliveryWindow',
        'destination_address' => 'destinationAddress',
        'fulfillment_action' => 'fulfillmentAction',
        'fulfillment_policy' => 'fulfillmentPolicy',
        'cod_settings' => 'codSettings',
        'received_date' => 'receivedDate',
        'fulfillment_order_status' => 'fulfillmentOrderStatus',
        'status_updated_date' => 'statusUpdatedDate',
        'notification_emails' => 'notificationEmails',
        'feature_constraints' => 'featureConstraints',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'displayable_order_id' => 'setDisplayableOrderId',
        'displayable_order_date' => 'setDisplayableOrderDate',
        'displayable_order_comment' => 'setDisplayableOrderComment',
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'delivery_window' => 'setDeliveryWindow',
        'destination_address' => 'setDestinationAddress',
        'fulfillment_action' => 'setFulfillmentAction',
        'fulfillment_policy' => 'setFulfillmentPolicy',
        'cod_settings' => 'setCodSettings',
        'received_date' => 'setReceivedDate',
        'fulfillment_order_status' => 'setFulfillmentOrderStatus',
        'status_updated_date' => 'setStatusUpdatedDate',
        'notification_emails' => 'setNotificationEmails',
        'feature_constraints' => 'setFeatureConstraints',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'displayable_order_id' => 'getDisplayableOrderId',
        'displayable_order_date' => 'getDisplayableOrderDate',
        'displayable_order_comment' => 'getDisplayableOrderComment',
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'delivery_window' => 'getDeliveryWindow',
        'destination_address' => 'getDestinationAddress',
        'fulfillment_action' => 'getFulfillmentAction',
        'fulfillment_policy' => 'getFulfillmentPolicy',
        'cod_settings' => 'getCodSettings',
        'received_date' => 'getReceivedDate',
        'fulfillment_order_status' => 'getFulfillmentOrderStatus',
        'status_updated_date' => 'getStatusUpdatedDate',
        'notification_emails' => 'getNotificationEmails',
        'feature_constraints' => 'getFeatureConstraints',
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
        $this->container['seller_fulfillment_order_id'] = $data['seller_fulfillment_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['displayable_order_id'] = $data['displayable_order_id'] ?? null;
        $this->container['displayable_order_date'] = $data['displayable_order_date'] ?? null;
        $this->container['displayable_order_comment'] = $data['displayable_order_comment'] ?? null;
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['fulfillment_action'] = $data['fulfillment_action'] ?? null;
        $this->container['fulfillment_policy'] = $data['fulfillment_policy'] ?? null;
        $this->container['cod_settings'] = $data['cod_settings'] ?? null;
        $this->container['received_date'] = $data['received_date'] ?? null;
        $this->container['fulfillment_order_status'] = $data['fulfillment_order_status'] ?? null;
        $this->container['status_updated_date'] = $data['status_updated_date'] ?? null;
        $this->container['notification_emails'] = $data['notification_emails'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
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
        if ($this->container['seller_fulfillment_order_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_id' can't be null");
        }

        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ($this->container['displayable_order_id'] === null) {
            throw new AssertionException("'displayable_order_id' can't be null");
        }

        if ($this->container['displayable_order_date'] === null) {
            throw new AssertionException("'displayable_order_date' can't be null");
        }

        if ($this->container['displayable_order_comment'] === null) {
            throw new AssertionException("'displayable_order_comment' can't be null");
        }

        if ($this->container['shipping_speed_category'] === null) {
            throw new AssertionException("'shipping_speed_category' can't be null");
        }

        if ($this->container['delivery_window'] !== null) {
            $this->container['delivery_window']->validate();
        }

        if ($this->container['destination_address'] === null) {
            throw new AssertionException("'destination_address' can't be null");
        }

        $this->container['destination_address']->validate();

        if ($this->container['cod_settings'] !== null) {
            $this->container['cod_settings']->validate();
        }

        if ($this->container['received_date'] === null) {
            throw new AssertionException("'received_date' can't be null");
        }

        if ($this->container['fulfillment_order_status'] === null) {
            throw new AssertionException("'fulfillment_order_status' can't be null");
        }

        if ($this->container['status_updated_date'] === null) {
            throw new AssertionException("'status_updated_date' can't be null");
        }
    }

    /**
     * Gets seller_fulfillment_order_id.
     */
    public function getSellerFulfillmentOrderId() : string
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    /**
     * Sets seller_fulfillment_order_id.
     *
     * @param string $seller_fulfillment_order_id the fulfillment order identifier submitted with the `createFulfillmentOrder` operation
     */
    public function setSellerFulfillmentOrderId(string $seller_fulfillment_order_id) : self
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

        return $this;
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace the fulfillment order is placed against
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets displayable_order_id.
     */
    public function getDisplayableOrderId() : string
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id.
     *
     * @param string $displayable_order_id A fulfillment order identifier submitted with the `createFulfillmentOrder` operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
     */
    public function setDisplayableOrderId(string $displayable_order_id) : self
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date.
     */
    public function getDisplayableOrderDate() : \DateTimeInterface
    {
        return $this->container['displayable_order_date'];
    }

    /**
     * Sets displayable_order_date.
     *
     * @param \DateTimeInterface $displayable_order_date Date timestamp
     */
    public function setDisplayableOrderDate(\DateTimeInterface $displayable_order_date) : self
    {
        $this->container['displayable_order_date'] = $displayable_order_date;

        return $this;
    }

    /**
     * Gets displayable_order_comment.
     */
    public function getDisplayableOrderComment() : string
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment.
     *
     * @param string $displayable_order_comment A text block submitted with the `createFulfillmentOrder` operation. Displays in recipient-facing materials such as the packing slip.
     */
    public function setDisplayableOrderComment(string $displayable_order_comment) : self
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
    }

    /**
     * Gets shipping_speed_category.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory() : ShippingSpeedCategory
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     */
    public function setShippingSpeedCategory(ShippingSpeedCategory $shipping_speed_category) : self
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets delivery_window.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryWindow
     */
    public function getDeliveryWindow() : ?DeliveryWindow
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryWindow $delivery_window delivery_window
     */
    public function setDeliveryWindow(?DeliveryWindow $delivery_window) : self
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets destination_address.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address
     */
    public function getDestinationAddress() : Address
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\Address $destination_address destination_address
     */
    public function setDestinationAddress(Address $destination_address) : self
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction
     */
    public function getFulfillmentAction() : ?FulfillmentAction
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentAction $fulfillment_action fulfillment_action
     */
    public function setFulfillmentAction(?FulfillmentAction $fulfillment_action) : self
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPolicy
     */
    public function getFulfillmentPolicy() : ?FulfillmentPolicy
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPolicy $fulfillment_policy fulfillment_policy
     */
    public function setFulfillmentPolicy(?FulfillmentPolicy $fulfillment_policy) : self
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets cod_settings.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CODSettings
     */
    public function getCodSettings() : ?CODSettings
    {
        return $this->container['cod_settings'];
    }

    /**
     * Sets cod_settings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\CODSettings $cod_settings cod_settings
     */
    public function setCodSettings(?CODSettings $cod_settings) : self
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    /**
     * Gets received_date.
     */
    public function getReceivedDate() : \DateTimeInterface
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date.
     *
     * @param \DateTimeInterface $received_date Date timestamp
     */
    public function setReceivedDate(\DateTimeInterface $received_date) : self
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets fulfillment_order_status.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderStatus
     */
    public function getFulfillmentOrderStatus() : FulfillmentOrderStatus
    {
        return $this->container['fulfillment_order_status'];
    }

    /**
     * Sets fulfillment_order_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderStatus $fulfillment_order_status fulfillment_order_status
     */
    public function setFulfillmentOrderStatus(FulfillmentOrderStatus $fulfillment_order_status) : self
    {
        $this->container['fulfillment_order_status'] = $fulfillment_order_status;

        return $this;
    }

    /**
     * Gets status_updated_date.
     */
    public function getStatusUpdatedDate() : \DateTimeInterface
    {
        return $this->container['status_updated_date'];
    }

    /**
     * Sets status_updated_date.
     *
     * @param \DateTimeInterface $status_updated_date Date timestamp
     */
    public function setStatusUpdatedDate(\DateTimeInterface $status_updated_date) : self
    {
        $this->container['status_updated_date'] = $status_updated_date;

        return $this;
    }

    /**
     * Gets notification_emails.
     *
     * @return null|string[]
     */
    public function getNotificationEmails() : ?array
    {
        return $this->container['notification_emails'];
    }

    /**
     * Sets notification_emails.
     *
     * @param null|string[] $notification_emails a list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller
     */
    public function setNotificationEmails(?array $notification_emails) : self
    {
        $this->container['notification_emails'] = $notification_emails;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints() : ?array
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
     */
    public function setFeatureConstraints(?array $feature_constraints) : self
    {
        $this->container['feature_constraints'] = $feature_constraints;

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
