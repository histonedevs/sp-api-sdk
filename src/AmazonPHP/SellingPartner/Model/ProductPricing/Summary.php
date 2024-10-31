<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ProductPricing;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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
class Summary implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'Summary';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'total_offer_count' => 'int',
        'number_of_offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]',
        'lowest_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[]',
        'buy_box_prices' => '\AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[]',
        'list_price' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'competitive_price_threshold' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'suggested_lower_price_plus_shipping' => '\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType',
        'sales_rankings' => '\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]',
        'buy_box_eligible_offers' => '\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]',
        'offers_available_time' => 'DateTimeInterface',
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
        'total_offer_count' => 'int32',
        'number_of_offers' => null,
        'lowest_prices' => null,
        'buy_box_prices' => null,
        'list_price' => null,
        'competitive_price_threshold' => null,
        'suggested_lower_price_plus_shipping' => null,
        'sales_rankings' => null,
        'buy_box_eligible_offers' => null,
        'offers_available_time' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'total_offer_count' => 'TotalOfferCount',
        'number_of_offers' => 'NumberOfOffers',
        'lowest_prices' => 'LowestPrices',
        'buy_box_prices' => 'BuyBoxPrices',
        'list_price' => 'ListPrice',
        'competitive_price_threshold' => 'CompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'SuggestedLowerPricePlusShipping',
        'sales_rankings' => 'SalesRankings',
        'buy_box_eligible_offers' => 'BuyBoxEligibleOffers',
        'offers_available_time' => 'OffersAvailableTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'total_offer_count' => 'setTotalOfferCount',
        'number_of_offers' => 'setNumberOfOffers',
        'lowest_prices' => 'setLowestPrices',
        'buy_box_prices' => 'setBuyBoxPrices',
        'list_price' => 'setListPrice',
        'competitive_price_threshold' => 'setCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'setSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'setSalesRankings',
        'buy_box_eligible_offers' => 'setBuyBoxEligibleOffers',
        'offers_available_time' => 'setOffersAvailableTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'total_offer_count' => 'getTotalOfferCount',
        'number_of_offers' => 'getNumberOfOffers',
        'lowest_prices' => 'getLowestPrices',
        'buy_box_prices' => 'getBuyBoxPrices',
        'list_price' => 'getListPrice',
        'competitive_price_threshold' => 'getCompetitivePriceThreshold',
        'suggested_lower_price_plus_shipping' => 'getSuggestedLowerPricePlusShipping',
        'sales_rankings' => 'getSalesRankings',
        'buy_box_eligible_offers' => 'getBuyBoxEligibleOffers',
        'offers_available_time' => 'getOffersAvailableTime',
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
        $this->container['total_offer_count'] = $data['total_offer_count'] ?? null;
        $this->container['number_of_offers'] = $data['number_of_offers'] ?? null;
        $this->container['lowest_prices'] = $data['lowest_prices'] ?? null;
        $this->container['buy_box_prices'] = $data['buy_box_prices'] ?? null;
        $this->container['list_price'] = $data['list_price'] ?? null;
        $this->container['competitive_price_threshold'] = $data['competitive_price_threshold'] ?? null;
        $this->container['suggested_lower_price_plus_shipping'] = $data['suggested_lower_price_plus_shipping'] ?? null;
        $this->container['sales_rankings'] = $data['sales_rankings'] ?? null;
        $this->container['buy_box_eligible_offers'] = $data['buy_box_eligible_offers'] ?? null;
        $this->container['offers_available_time'] = $data['offers_available_time'] ?? null;
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
        if ($this->container['total_offer_count'] === null) {
            throw new AssertionException("'total_offer_count' can't be null");
        }

        if ($this->container['list_price'] !== null) {
            $this->container['list_price']->validate();
        }

        if ($this->container['competitive_price_threshold'] !== null) {
            $this->container['competitive_price_threshold']->validate();
        }

        if ($this->container['suggested_lower_price_plus_shipping'] !== null) {
            $this->container['suggested_lower_price_plus_shipping']->validate();
        }
    }

    /**
     * Gets total_offer_count.
     */
    public function getTotalOfferCount() : int
    {
        return $this->container['total_offer_count'];
    }

    /**
     * Sets total_offer_count.
     *
     * @param int $total_offer_count the number of unique offers contained in NumberOfOffers
     */
    public function setTotalOfferCount(int $total_offer_count) : self
    {
        $this->container['total_offer_count'] = $total_offer_count;

        return $this;
    }

    /**
     * Gets number_of_offers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]
     */
    public function getNumberOfOffers() : ?array
    {
        return $this->container['number_of_offers'];
    }

    /**
     * Sets number_of_offers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[] $number_of_offers number_of_offers
     */
    public function setNumberOfOffers(?array $number_of_offers) : self
    {
        $this->container['number_of_offers'] = $number_of_offers;

        return $this;
    }

    /**
     * Gets lowest_prices.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[]
     */
    public function getLowestPrices() : ?array
    {
        return $this->container['lowest_prices'];
    }

    /**
     * Sets lowest_prices.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\LowestPriceType[] $lowest_prices lowest_prices
     */
    public function setLowestPrices(?array $lowest_prices) : self
    {
        $this->container['lowest_prices'] = $lowest_prices;

        return $this;
    }

    /**
     * Gets buy_box_prices.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[]
     */
    public function getBuyBoxPrices() : ?array
    {
        return $this->container['buy_box_prices'];
    }

    /**
     * Sets buy_box_prices.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\BuyBoxPriceType[] $buy_box_prices buy_box_prices
     */
    public function setBuyBoxPrices(?array $buy_box_prices) : self
    {
        $this->container['buy_box_prices'] = $buy_box_prices;

        return $this;
    }

    /**
     * Gets list_price.
     */
    public function getListPrice() : ?MoneyType
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $list_price list_price
     */
    public function setListPrice(?MoneyType $list_price) : self
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets competitive_price_threshold.
     */
    public function getCompetitivePriceThreshold() : ?MoneyType
    {
        return $this->container['competitive_price_threshold'];
    }

    /**
     * Sets competitive_price_threshold.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $competitive_price_threshold competitive_price_threshold
     */
    public function setCompetitivePriceThreshold(?MoneyType $competitive_price_threshold) : self
    {
        $this->container['competitive_price_threshold'] = $competitive_price_threshold;

        return $this;
    }

    /**
     * Gets suggested_lower_price_plus_shipping.
     */
    public function getSuggestedLowerPricePlusShipping() : ?MoneyType
    {
        return $this->container['suggested_lower_price_plus_shipping'];
    }

    /**
     * Sets suggested_lower_price_plus_shipping.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\MoneyType $suggested_lower_price_plus_shipping suggested_lower_price_plus_shipping
     */
    public function setSuggestedLowerPricePlusShipping(?MoneyType $suggested_lower_price_plus_shipping) : self
    {
        $this->container['suggested_lower_price_plus_shipping'] = $suggested_lower_price_plus_shipping;

        return $this;
    }

    /**
     * Gets sales_rankings.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[]
     */
    public function getSalesRankings() : ?array
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\SalesRankType[] $sales_rankings a list of sales rank information for the item, by category
     */
    public function setSalesRankings(?array $sales_rankings) : self
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }

    /**
     * Gets buy_box_eligible_offers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[]
     */
    public function getBuyBoxEligibleOffers() : ?array
    {
        return $this->container['buy_box_eligible_offers'];
    }

    /**
     * Sets buy_box_eligible_offers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductPricing\OfferCountType[] $buy_box_eligible_offers buy_box_eligible_offers
     */
    public function setBuyBoxEligibleOffers(?array $buy_box_eligible_offers) : self
    {
        $this->container['buy_box_eligible_offers'] = $buy_box_eligible_offers;

        return $this;
    }

    /**
     * Gets offers_available_time.
     */
    public function getOffersAvailableTime() : ?\DateTimeInterface
    {
        return $this->container['offers_available_time'];
    }

    /**
     * Sets offers_available_time.
     *
     * @param null|\DateTimeInterface $offers_available_time when the status is ActiveButTooSoonForProcessing, this is the time when the offers will be available for processing
     */
    public function setOffersAvailableTime(?\DateTimeInterface $offers_available_time) : self
    {
        $this->container['offers_available_time'] = $offers_available_time;

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
