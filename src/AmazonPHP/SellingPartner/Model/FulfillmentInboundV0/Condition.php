<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInboundV0;

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class Condition
{
    /**
     * Possible values of this enum.
     */
    final public const NEW_ITEM = 'NewItem';

    final public const NEW_WITH_WARRANTY = 'NewWithWarranty';

    final public const NEW_OEM = 'NewOEM';

    final public const NEW_OPEN_BOX = 'NewOpenBox';

    final public const USED_LIKE_NEW = 'UsedLikeNew';

    final public const USED_VERY_GOOD = 'UsedVeryGood';

    final public const USED_GOOD = 'UsedGood';

    final public const USED_ACCEPTABLE = 'UsedAcceptable';

    final public const USED_POOR = 'UsedPoor';

    final public const USED_REFURBISHED = 'UsedRefurbished';

    final public const COLLECTIBLE_LIKE_NEW = 'CollectibleLikeNew';

    final public const COLLECTIBLE_VERY_GOOD = 'CollectibleVeryGood';

    final public const COLLECTIBLE_GOOD = 'CollectibleGood';

    final public const COLLECTIBLE_ACCEPTABLE = 'CollectibleAcceptable';

    final public const COLLECTIBLE_POOR = 'CollectiblePoor';

    final public const REFURBISHED_WITH_WARRANTY = 'RefurbishedWithWarranty';

    final public const REFURBISHED = 'Refurbished';

    final public const CLUB = 'Club';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::NEW_ITEM,
            self::NEW_WITH_WARRANTY,
            self::NEW_OEM,
            self::NEW_OPEN_BOX,
            self::USED_LIKE_NEW,
            self::USED_VERY_GOOD,
            self::USED_GOOD,
            self::USED_ACCEPTABLE,
            self::USED_POOR,
            self::USED_REFURBISHED,
            self::COLLECTIBLE_LIKE_NEW,
            self::COLLECTIBLE_VERY_GOOD,
            self::COLLECTIBLE_GOOD,
            self::COLLECTIBLE_ACCEPTABLE,
            self::COLLECTIBLE_POOR,
            self::REFURBISHED_WITH_WARRANTY,
            self::REFURBISHED,
            self::CLUB,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
