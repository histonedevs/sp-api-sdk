<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Notifications;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.  For more information, refer to the [Notifications Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-use-case-guide).
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
class EventFilter implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const EVENT_FILTER_TYPE_ANY_OFFER_CHANGED = 'ANY_OFFER_CHANGED';

    final public const EVENT_FILTER_TYPE_ORDER_CHANGE = 'ORDER_CHANGE';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'EventFilter';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'aggregation_settings' => '\AmazonPHP\SellingPartner\Model\Notifications\AggregationSettings',
        'marketplace_ids' => 'string[]',
        'order_change_types' => '\AmazonPHP\SellingPartner\Model\Notifications\OrderChangeTypeEnum[]',
        'event_filter_type' => 'string',
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
        'aggregation_settings' => null,
        'marketplace_ids' => null,
        'order_change_types' => null,
        'event_filter_type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'aggregation_settings' => 'aggregationSettings',
        'marketplace_ids' => 'marketplaceIds',
        'order_change_types' => 'orderChangeTypes',
        'event_filter_type' => 'eventFilterType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'aggregation_settings' => 'setAggregationSettings',
        'marketplace_ids' => 'setMarketplaceIds',
        'order_change_types' => 'setOrderChangeTypes',
        'event_filter_type' => 'setEventFilterType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'aggregation_settings' => 'getAggregationSettings',
        'marketplace_ids' => 'getMarketplaceIds',
        'order_change_types' => 'getOrderChangeTypes',
        'event_filter_type' => 'getEventFilterType',
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
        $this->container['aggregation_settings'] = $data['aggregation_settings'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['order_change_types'] = $data['order_change_types'] ?? null;
        $this->container['event_filter_type'] = $data['event_filter_type'] ?? null;
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
    public function getEventFilterTypeAllowableValues() : array
    {
        return [
            self::EVENT_FILTER_TYPE_ANY_OFFER_CHANGED,
            self::EVENT_FILTER_TYPE_ORDER_CHANGE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['aggregation_settings'] !== null) {
            $this->container['aggregation_settings']->validate();
        }

        if ($this->container['event_filter_type'] === null) {
            throw new AssertionException("'event_filter_type' can't be null");
        }

        $allowedValues = $this->getEventFilterTypeAllowableValues();

        if (null !== $this->container['event_filter_type'] && !\in_array($this->container['event_filter_type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'event_filter_type', must be one of '%s'",
                    $this->container['event_filter_type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets aggregation_settings.
     */
    public function getAggregationSettings() : ?AggregationSettings
    {
        return $this->container['aggregation_settings'];
    }

    /**
     * Sets aggregation_settings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Notifications\AggregationSettings $aggregation_settings aggregation_settings
     */
    public function setAggregationSettings(?AggregationSettings $aggregation_settings) : self
    {
        $this->container['aggregation_settings'] = $aggregation_settings;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return null|string[]
     */
    public function getMarketplaceIds() : ?array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param null|string[] $marketplace_ids A list of marketplace identifiers to subscribe to (for example: ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list.
     */
    public function setMarketplaceIds(?array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets order_change_types.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Notifications\OrderChangeTypeEnum[]
     */
    public function getOrderChangeTypes() : ?array
    {
        return $this->container['order_change_types'];
    }

    /**
     * Sets order_change_types.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Notifications\OrderChangeTypeEnum[] $order_change_types A list of order change types to subscribe to (for example: `BuyerRequestedChange`). To receive notifications of all change types, do not provide this list.
     */
    public function setOrderChangeTypes(?array $order_change_types) : self
    {
        $this->container['order_change_types'] = $order_change_types;

        return $this;
    }

    /**
     * Gets event_filter_type.
     */
    public function getEventFilterType() : string
    {
        return $this->container['event_filter_type'];
    }

    /**
     * Sets event_filter_type.
     *
     * @param string $event_filter_type An `eventFilterType` value that is supported by the specific `notificationType`. This is used by the subscription service to determine the type of event filter. Refer to [Notification Type Values](https://developer-docs.amazon.com/sp-api/docs/notification-type-values) to determine if an `eventFilterType` is supported.
     */
    public function setEventFilterType(string $event_filter_type) : self
    {
        $this->container['event_filter_type'] = $event_filter_type;

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
