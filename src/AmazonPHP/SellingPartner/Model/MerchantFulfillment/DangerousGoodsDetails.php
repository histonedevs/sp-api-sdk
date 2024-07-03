<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * With the Selling Partner API for Merchant Fulfillment, you can build applications that sellers can use to purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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
class DangerousGoodsDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const PACKING_GROUP_I = 'I';

    final public const PACKING_GROUP_II = 'II';

    final public const PACKING_GROUP_III = 'III';

    final public const PACKING_INSTRUCTION_PI965_SECTION_IA = 'PI965_SECTION_IA';

    final public const PACKING_INSTRUCTION_PI965_SECTION_IB = 'PI965_SECTION_IB';

    final public const PACKING_INSTRUCTION_PI965_SECTION_II = 'PI965_SECTION_II';

    final public const PACKING_INSTRUCTION_PI966_SECTION_I = 'PI966_SECTION_I';

    final public const PACKING_INSTRUCTION_PI966_SECTION_II = 'PI966_SECTION_II';

    final public const PACKING_INSTRUCTION_PI967_SECTION_I = 'PI967_SECTION_I';

    final public const PACKING_INSTRUCTION_PI967_SECTION_II = 'PI967_SECTION_II';

    final public const PACKING_INSTRUCTION_PI968_SECTION_IA = 'PI968_SECTION_IA';

    final public const PACKING_INSTRUCTION_PI968_SECTION_IB = 'PI968_SECTION_IB';

    final public const PACKING_INSTRUCTION_PI969_SECTION_I = 'PI969_SECTION_I';

    final public const PACKING_INSTRUCTION_PI969_SECTION_II = 'PI969_SECTION_II';

    final public const PACKING_INSTRUCTION_PI970_SECTION_I = 'PI970_SECTION_I';

    final public const PACKING_INSTRUCTION_PI970_SECTION_II = 'PI970_SECTION_II';

    /**
     * The original name of the model.
     */
    protected static string $openAPIModelName = 'DangerousGoodsDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'united_nations_regulatory_id' => 'string',
        'transportation_regulatory_class' => 'string',
        'packing_group' => 'string',
        'packing_instruction' => 'string',
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
        'united_nations_regulatory_id' => null,
        'transportation_regulatory_class' => null,
        'packing_group' => null,
        'packing_instruction' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'united_nations_regulatory_id' => 'UnitedNationsRegulatoryId',
        'transportation_regulatory_class' => 'TransportationRegulatoryClass',
        'packing_group' => 'PackingGroup',
        'packing_instruction' => 'PackingInstruction',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'united_nations_regulatory_id' => 'setUnitedNationsRegulatoryId',
        'transportation_regulatory_class' => 'setTransportationRegulatoryClass',
        'packing_group' => 'setPackingGroup',
        'packing_instruction' => 'setPackingInstruction',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'united_nations_regulatory_id' => 'getUnitedNationsRegulatoryId',
        'transportation_regulatory_class' => 'getTransportationRegulatoryClass',
        'packing_group' => 'getPackingGroup',
        'packing_instruction' => 'getPackingInstruction',
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
        $this->container['united_nations_regulatory_id'] = $data['united_nations_regulatory_id'] ?? null;
        $this->container['transportation_regulatory_class'] = $data['transportation_regulatory_class'] ?? null;
        $this->container['packing_group'] = $data['packing_group'] ?? null;
        $this->container['packing_instruction'] = $data['packing_instruction'] ?? null;
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
    public function getPackingGroupAllowableValues() : array
    {
        return [
            self::PACKING_GROUP_I,
            self::PACKING_GROUP_II,
            self::PACKING_GROUP_III,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPackingInstructionAllowableValues() : array
    {
        return [
            self::PACKING_INSTRUCTION_PI965_SECTION_IA,
            self::PACKING_INSTRUCTION_PI965_SECTION_IB,
            self::PACKING_INSTRUCTION_PI965_SECTION_II,
            self::PACKING_INSTRUCTION_PI966_SECTION_I,
            self::PACKING_INSTRUCTION_PI966_SECTION_II,
            self::PACKING_INSTRUCTION_PI967_SECTION_I,
            self::PACKING_INSTRUCTION_PI967_SECTION_II,
            self::PACKING_INSTRUCTION_PI968_SECTION_IA,
            self::PACKING_INSTRUCTION_PI968_SECTION_IB,
            self::PACKING_INSTRUCTION_PI969_SECTION_I,
            self::PACKING_INSTRUCTION_PI969_SECTION_II,
            self::PACKING_INSTRUCTION_PI970_SECTION_I,
            self::PACKING_INSTRUCTION_PI970_SECTION_II,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (null !== $this->container['united_nations_regulatory_id'] && !\preg_match('/^(UN|ID|NA)[0-9]{4}$/', (string) $this->container['united_nations_regulatory_id'])) {
            throw new AssertionException("invalid value for 'united_nations_regulatory_id', must be conform to the pattern /^(UN|ID|NA)[0-9]{4}$/.");
        }

        if (null !== $this->container['transportation_regulatory_class'] && !\preg_match('/^[1-9](\\.[1-9])?$/', (string) $this->container['transportation_regulatory_class'])) {
            throw new AssertionException("invalid value for 'transportation_regulatory_class', must be conform to the pattern /^[1-9](\\.[1-9])?$/.");
        }

        $allowedValues = $this->getPackingGroupAllowableValues();

        if (null !== $this->container['packing_group'] && !\in_array($this->container['packing_group'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'packing_group', must be one of '%s'",
                    $this->container['packing_group'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        $allowedValues = $this->getPackingInstructionAllowableValues();

        if (null !== $this->container['packing_instruction'] && !\in_array($this->container['packing_instruction'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'packing_instruction', must be one of '%s'",
                    $this->container['packing_instruction'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets united_nations_regulatory_id.
     */
    public function getUnitedNationsRegulatoryId() : ?string
    {
        return $this->container['united_nations_regulatory_id'];
    }

    /**
     * Sets united_nations_regulatory_id.
     *
     * @param null|string $united_nations_regulatory_id the specific UNID of the item being shipped
     */
    public function setUnitedNationsRegulatoryId(?string $united_nations_regulatory_id) : self
    {
        $this->container['united_nations_regulatory_id'] = $united_nations_regulatory_id;

        return $this;
    }

    /**
     * Gets transportation_regulatory_class.
     */
    public function getTransportationRegulatoryClass() : ?string
    {
        return $this->container['transportation_regulatory_class'];
    }

    /**
     * Sets transportation_regulatory_class.
     *
     * @param null|string $transportation_regulatory_class the specific regulatory class of the shipped item
     */
    public function setTransportationRegulatoryClass(?string $transportation_regulatory_class) : self
    {
        $this->container['transportation_regulatory_class'] = $transportation_regulatory_class;

        return $this;
    }

    /**
     * Gets packing_group.
     */
    public function getPackingGroup() : ?string
    {
        return $this->container['packing_group'];
    }

    /**
     * Sets packing_group.
     *
     * @param null|string $packing_group the specific packaging group of the item being shipped
     */
    public function setPackingGroup(?string $packing_group) : self
    {
        $this->container['packing_group'] = $packing_group;

        return $this;
    }

    /**
     * Gets packing_instruction.
     */
    public function getPackingInstruction() : ?string
    {
        return $this->container['packing_instruction'];
    }

    /**
     * Sets packing_instruction.
     *
     * @param null|string $packing_instruction the specific packing instruction of the item being shipped
     */
    public function setPackingInstruction(?string $packing_instruction) : self
    {
        $this->container['packing_instruction'] = $packing_instruction;

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
