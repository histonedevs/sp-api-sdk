<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'asin' => 'string',
        'attributes' => 'array<string,mixed>',
        'classifications' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemBrowseClassificationsByMarketplace[]',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemDimensionsByMarketplace[]',
        'identifiers' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemIdentifiersByMarketplace[]',
        'images' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemImagesByMarketplace[]',
        'product_types' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemProductTypeByMarketplace[]',
        'relationships' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemRelationshipsByMarketplace[]',
        'sales_ranks' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSalesRanksByMarketplace[]',
        'summaries' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSummaryByMarketplace[]',
        'vendor_details' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVendorDetailsByMarketplace[]',
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
        'asin' => null,
        'attributes' => null,
        'classifications' => null,
        'dimensions' => null,
        'identifiers' => null,
        'images' => null,
        'product_types' => null,
        'relationships' => null,
        'sales_ranks' => null,
        'summaries' => null,
        'vendor_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'asin' => 'asin',
        'attributes' => 'attributes',
        'classifications' => 'classifications',
        'dimensions' => 'dimensions',
        'identifiers' => 'identifiers',
        'images' => 'images',
        'product_types' => 'productTypes',
        'relationships' => 'relationships',
        'sales_ranks' => 'salesRanks',
        'summaries' => 'summaries',
        'vendor_details' => 'vendorDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'asin' => 'setAsin',
        'attributes' => 'setAttributes',
        'classifications' => 'setClassifications',
        'dimensions' => 'setDimensions',
        'identifiers' => 'setIdentifiers',
        'images' => 'setImages',
        'product_types' => 'setProductTypes',
        'relationships' => 'setRelationships',
        'sales_ranks' => 'setSalesRanks',
        'summaries' => 'setSummaries',
        'vendor_details' => 'setVendorDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'asin' => 'getAsin',
        'attributes' => 'getAttributes',
        'classifications' => 'getClassifications',
        'dimensions' => 'getDimensions',
        'identifiers' => 'getIdentifiers',
        'images' => 'getImages',
        'product_types' => 'getProductTypes',
        'relationships' => 'getRelationships',
        'sales_ranks' => 'getSalesRanks',
        'summaries' => 'getSummaries',
        'vendor_details' => 'getVendorDetails',
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
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['classifications'] = $data['classifications'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
        $this->container['product_types'] = $data['product_types'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['sales_ranks'] = $data['sales_ranks'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['vendor_details'] = $data['vendor_details'] ?? null;
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
        if ($this->container['asin'] === null) {
            throw new AssertionException("'asin' can't be null");
        }
    }

    /**
     * Gets asin.
     */
    public function getAsin() : string
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin amazon Standard Identification Number (ASIN) is the unique identifier for an item in the Amazon catalog
     */
    public function setAsin(string $asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets attributes.
     *
     * @return null|array<string,mixed>
     */
    public function getAttributes() : ?array
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes.
     *
     * @param null|array<string,mixed> $attributes A JSON object that contains structured item attribute data keyed by attribute name. Catalog item attributes conform to the related product type definitions available in the Selling Partner API for Product Type Definitions.
     */
    public function setAttributes(?array $attributes) : self
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets classifications.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemBrowseClassificationsByMarketplace[]
     */
    public function getClassifications() : ?array
    {
        return $this->container['classifications'];
    }

    /**
     * Sets classifications.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemBrowseClassificationsByMarketplace[] $classifications array of classifications (browse nodes) associated with the item in the Amazon catalog by Amazon marketplace
     */
    public function setClassifications(?array $classifications) : self
    {
        $this->container['classifications'] = $classifications;

        return $this;
    }

    /**
     * Gets dimensions.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemDimensionsByMarketplace[]
     */
    public function getDimensions() : ?array
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemDimensionsByMarketplace[] $dimensions array of dimensions associated with the item in the Amazon catalog by Amazon marketplace
     */
    public function setDimensions(?array $dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets identifiers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemIdentifiersByMarketplace[]
     */
    public function getIdentifiers() : ?array
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemIdentifiersByMarketplace[] $identifiers identifiers associated with the item in the Amazon catalog, such as UPC and EAN identifiers
     */
    public function setIdentifiers(?array $identifiers) : self
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets images.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemImagesByMarketplace[]
     */
    public function getImages() : ?array
    {
        return $this->container['images'];
    }

    /**
     * Sets images.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemImagesByMarketplace[] $images images for an item in the Amazon catalog
     */
    public function setImages(?array $images) : self
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets product_types.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemProductTypeByMarketplace[]
     */
    public function getProductTypes() : ?array
    {
        return $this->container['product_types'];
    }

    /**
     * Sets product_types.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemProductTypeByMarketplace[] $product_types product types associated with the Amazon catalog item
     */
    public function setProductTypes(?array $product_types) : self
    {
        $this->container['product_types'] = $product_types;

        return $this;
    }

    /**
     * Gets relationships.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemRelationshipsByMarketplace[]
     */
    public function getRelationships() : ?array
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemRelationshipsByMarketplace[] $relationships relationships by marketplace for an Amazon catalog item (for example, variations)
     */
    public function setRelationships(?array $relationships) : self
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets sales_ranks.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSalesRanksByMarketplace[]
     */
    public function getSalesRanks() : ?array
    {
        return $this->container['sales_ranks'];
    }

    /**
     * Sets sales_ranks.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSalesRanksByMarketplace[] $sales_ranks sales ranks of an Amazon catalog item
     */
    public function setSalesRanks(?array $sales_ranks) : self
    {
        $this->container['sales_ranks'] = $sales_ranks;

        return $this;
    }

    /**
     * Gets summaries.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSummaryByMarketplace[]
     */
    public function getSummaries() : ?array
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemSummaryByMarketplace[] $summaries summary details of an Amazon catalog item
     */
    public function setSummaries(?array $summaries) : self
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets vendor_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVendorDetailsByMarketplace[]
     */
    public function getVendorDetails() : ?array
    {
        return $this->container['vendor_details'];
    }

    /**
     * Sets vendor_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVendorDetailsByMarketplace[] $vendor_details Vendor details associated with an Amazon catalog item. Vendor details are available to vendors only.
     */
    public function setVendorDetails(?array $vendor_details) : self
    {
        $this->container['vendor_details'] = $vendor_details;

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
