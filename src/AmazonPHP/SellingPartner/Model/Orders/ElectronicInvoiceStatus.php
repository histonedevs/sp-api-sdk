<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

/**
 * Selling Partner API for Orders.
 *
 * Use the Orders Selling Partner API to programmatically retrieve order information. With this API, you can develop fast, flexible, and custom applications to manage order synchronization, perform order research, and create demand-based decision support tools.   _Note:_ For the JP, AU, and SG marketplaces, the Orders API supports orders from 2016 onward. For all other marketplaces, the Orders API supports orders for the last two years (orders older than this don't show up in the response).
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ElectronicInvoiceStatus
{
    /**
     * Possible values of this enum.
     */
    final public const NOT_REQUIRED = 'NotRequired';

    final public const NOT_FOUND = 'NotFound';

    final public const PROCESSING = 'Processing';

    final public const ERRORED = 'Errored';

    final public const ACCEPTED = 'Accepted';

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
            self::NOT_REQUIRED,
            self::NOT_FOUND,
            self::PROCESSING,
            self::ERRORED,
            self::ACCEPTED,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
