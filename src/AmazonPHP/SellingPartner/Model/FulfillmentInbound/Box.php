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
class Box implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Box';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'box_id' => 'string',
        'content_information_source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentInformationSource',
        'destination_region' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Region',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Item[]',
        'package_id' => 'string',
        'quantity' => 'int',
        'template_name' => 'string',
        'weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight',
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
        'box_id' => null,
        'content_information_source' => null,
        'destination_region' => null,
        'dimensions' => null,
        'items' => null,
        'package_id' => null,
        'quantity' => null,
        'template_name' => null,
        'weight' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'box_id' => 'boxId',
        'content_information_source' => 'contentInformationSource',
        'destination_region' => 'destinationRegion',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'package_id' => 'packageId',
        'quantity' => 'quantity',
        'template_name' => 'templateName',
        'weight' => 'weight',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'box_id' => 'setBoxId',
        'content_information_source' => 'setContentInformationSource',
        'destination_region' => 'setDestinationRegion',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'package_id' => 'setPackageId',
        'quantity' => 'setQuantity',
        'template_name' => 'setTemplateName',
        'weight' => 'setWeight',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'box_id' => 'getBoxId',
        'content_information_source' => 'getContentInformationSource',
        'destination_region' => 'getDestinationRegion',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'package_id' => 'getPackageId',
        'quantity' => 'getQuantity',
        'template_name' => 'getTemplateName',
        'weight' => 'getWeight',
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
        $this->container['box_id'] = $data['box_id'] ?? null;
        $this->container['content_information_source'] = $data['content_information_source'] ?? null;
        $this->container['destination_region'] = $data['destination_region'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['package_id'] = $data['package_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['template_name'] = $data['template_name'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
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
        if (null !== $this->container['box_id'] && (\mb_strlen((string) $this->container['box_id']) > 1024)) {
            throw new AssertionException("invalid value for 'box_id', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['box_id'] && (\mb_strlen((string) $this->container['box_id']) < 1)) {
            throw new AssertionException("invalid value for 'box_id', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['destination_region'] !== null) {
            $this->container['destination_region']->validate();
        }

        if ($this->container['dimensions'] !== null) {
            $this->container['dimensions']->validate();
        }

        if ($this->container['package_id'] === null) {
            throw new AssertionException("'package_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['package_id']) > 38)) {
            throw new AssertionException("invalid value for 'package_id', the character length must be smaller than or equal to 38.");
        }

        if ((\mb_strlen((string) $this->container['package_id']) < 38)) {
            throw new AssertionException("invalid value for 'package_id', the character length must be bigger than or equal to 38.");
        }

        if (!\preg_match('/^[a-zA-Z0-9-]*$/', (string) $this->container['package_id'])) {
            throw new AssertionException("invalid value for 'package_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if (null !== $this->container['quantity'] && ($this->container['quantity'] > 10000)) {
            throw new AssertionException("invalid value for 'quantity', must be smaller than or equal to 10000.");
        }

        if (null !== $this->container['quantity'] && ($this->container['quantity'] < 1)) {
            throw new AssertionException("invalid value for 'quantity', must be bigger than or equal to 1.");
        }

        if (null !== $this->container['template_name'] && (\mb_strlen((string) $this->container['template_name']) > 1024)) {
            throw new AssertionException("invalid value for 'template_name', the character length must be smaller than or equal to 1024.");
        }

        if (null !== $this->container['template_name'] && (\mb_strlen((string) $this->container['template_name']) < 1)) {
            throw new AssertionException("invalid value for 'template_name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['weight'] !== null) {
            $this->container['weight']->validate();
        }
    }

    /**
     * Gets box_id.
     */
    public function getBoxId() : ?string
    {
        return $this->container['box_id'];
    }

    /**
     * Sets box_id.
     *
     * @param null|string $box_id The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which is generated after transportation has been confirmed) and the index of the box.
     */
    public function setBoxId(?string $box_id) : self
    {
        $this->container['box_id'] = $box_id;

        return $this;
    }

    /**
     * Gets content_information_source.
     */
    public function getContentInformationSource() : ?BoxContentInformationSource
    {
        return $this->container['content_information_source'];
    }

    /**
     * Sets content_information_source.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentInformationSource $content_information_source content_information_source
     */
    public function setContentInformationSource(?BoxContentInformationSource $content_information_source) : self
    {
        $this->container['content_information_source'] = $content_information_source;

        return $this;
    }

    /**
     * Gets destination_region.
     */
    public function getDestinationRegion() : ?Region
    {
        return $this->container['destination_region'];
    }

    /**
     * Sets destination_region.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Region $destination_region destination_region
     */
    public function setDestinationRegion(?Region $destination_region) : self
    {
        $this->container['destination_region'] = $destination_region;

        return $this;
    }

    /**
     * Gets dimensions.
     */
    public function getDimensions() : ?Dimensions
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions $dimensions dimensions
     */
    public function setDimensions(?Dimensions $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Item[]
     */
    public function getItems() : ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Item[] $items items contained within the box
     */
    public function setItems(?array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets package_id.
     */
    public function getPackageId() : string
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id.
     *
     * @param string $package_id primary key to uniquely identify a Package (Box or Pallet)
     */
    public function setPackageId(string $package_id) : self
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets quantity.
     */
    public function getQuantity() : ?int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|int $quantity the number of containers where all other properties like weight or dimensions are identical
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets template_name.
     */
    public function getTemplateName() : ?string
    {
        return $this->container['template_name'];
    }

    /**
     * Sets template_name.
     *
     * @param null|string $template_name template name of the box
     */
    public function setTemplateName(?string $template_name) : self
    {
        $this->container['template_name'] = $template_name;

        return $this;
    }

    /**
     * Gets weight.
     */
    public function getWeight() : ?Weight
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight $weight weight
     */
    public function setWeight(?Weight $weight) : self
    {
        $this->container['weight'] = $weight;

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
