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
class InboundPlanSummary implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'InboundPlanSummary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'created_at' => '\DateTimeInterface',
        'inbound_plan_id' => 'string',
        'last_updated_at' => 'DateTimeInterface',
        'marketplace_ids' => 'string[]',
        'name' => 'string',
        'source_address' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address',
        'status' => 'string',
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
        'created_at' => 'date-time',
        'inbound_plan_id' => null,
        'last_updated_at' => 'date-time',
        'marketplace_ids' => null,
        'name' => null,
        'source_address' => null,
        'status' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'created_at' => 'createdAt',
        'inbound_plan_id' => 'inboundPlanId',
        'last_updated_at' => 'lastUpdatedAt',
        'marketplace_ids' => 'marketplaceIds',
        'name' => 'name',
        'source_address' => 'sourceAddress',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'created_at' => 'setCreatedAt',
        'inbound_plan_id' => 'setInboundPlanId',
        'last_updated_at' => 'setLastUpdatedAt',
        'marketplace_ids' => 'setMarketplaceIds',
        'name' => 'setName',
        'source_address' => 'setSourceAddress',
        'status' => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'created_at' => 'getCreatedAt',
        'inbound_plan_id' => 'getInboundPlanId',
        'last_updated_at' => 'getLastUpdatedAt',
        'marketplace_ids' => 'getMarketplaceIds',
        'name' => 'getName',
        'source_address' => 'getSourceAddress',
        'status' => 'getStatus',
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['inbound_plan_id'] = $data['inbound_plan_id'] ?? null;
        $this->container['last_updated_at'] = $data['last_updated_at'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['source_address'] = $data['source_address'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
        if ($this->container['created_at'] === null) {
            throw new AssertionException("'created_at' can't be null");
        }

        if ($this->container['inbound_plan_id'] === null) {
            throw new AssertionException("'inbound_plan_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['inbound_plan_id']) > 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['inbound_plan_id']) < 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['inbound_plan_id'])) {
            throw new AssertionException("invalid value for 'inbound_plan_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['last_updated_at'] === null) {
            throw new AssertionException("'last_updated_at' can't be null");
        }

        if ($this->container['marketplace_ids'] === null) {
            throw new AssertionException("'marketplace_ids' can't be null");
        }

        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ($this->container['source_address'] === null) {
            throw new AssertionException("'source_address' can't be null");
        }

        $this->container['source_address']->validate();

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ((\mb_strlen((string) $this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if ((\mb_strlen((string) $this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }
    }

    /**
     * Gets created_at.
     */
    public function getCreatedAt() : \DateTimeInterface
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at.
     *
     * @param \DateTimeInterface $created_at The time at which the inbound plan was created. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) datetime format with pattern `yyyy-MM-ddTHH:mm:ssZ`.
     */
    public function setCreatedAt(DateTimeInterface $created_at) : self
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets inbound_plan_id.
     */
    public function getInboundPlanId() : string
    {
        return $this->container['inbound_plan_id'];
    }

    /**
     * Sets inbound_plan_id.
     *
     * @param string $inbound_plan_id identifier of an inbound plan
     */
    public function setInboundPlanId(string $inbound_plan_id) : self
    {
        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }

    /**
     * Gets last_updated_at.
     */
    public function getLastUpdatedAt() : \DateTimeInterface
    {
        return $this->container['last_updated_at'];
    }

    /**
     * Sets last_updated_at.
     *
     * @param \DateTimeInterface $last_updated_at The time at which the inbound plan was last updated. In [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) datetime format with pattern `yyyy-MM-ddTHH:mm:ssZ`.
     */
    public function setLastUpdatedAt(DateTimeInterface $last_updated_at) : self
    {
        $this->container['last_updated_at'] = $last_updated_at;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of marketplace IDs
     */
    public function setMarketplaceIds(array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name human-readable name of the inbound plan
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets source_address.
     */
    public function getSourceAddress() : Address
    {
        return $this->container['source_address'];
    }

    /**
     * Sets source_address.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Address $source_address source_address
     */
    public function setSourceAddress(Address $source_address) : self
    {
        $this->container['source_address'] = $source_address;

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
     * @param string $status The current status of the inbound plan. Possible values: `ACTIVE`, `VOIDED`, `SHIPPED`, `ERRORED`.
     */
    public function setStatus(string $status) : self
    {
        $this->container['status'] = $status;

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
