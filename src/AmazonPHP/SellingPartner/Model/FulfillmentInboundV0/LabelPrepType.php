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
class LabelPrepType
{
    /**
     * Possible values of this enum.
     */
    final public const NO_LABEL = 'NO_LABEL';

    final public const SELLER_LABEL = 'SELLER_LABEL';

    final public const AMAZON_LABEL = 'AMAZON_LABEL';

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
            self::NO_LABEL,
            self::SELLER_LABEL,
            self::AMAZON_LABEL,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
