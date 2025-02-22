<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

/**
 * The Selling Partner API for FBA inbound operations.
 *
 * The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
 *
 * The version of the OpenAPI document: 2024-03-20
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class PrepType
{
    /**
     * Possible values of this enum.
     */
    final public const BLACK_SHRINKWRAP = 'ITEM_BLACK_SHRINKWRAP';

    final public const BLANKSTK = 'ITEM_BLANKSTK';

    final public const BOXING = 'ITEM_BOXING';

    final public const BUBBLEWRAP = 'ITEM_BUBBLEWRAP';

    final public const CAP_SEALING = 'ITEM_CAP_SEALING';

    final public const DEBUNDLE = 'ITEM_DEBUNDLE';

    final public const HANG_GARMENT = 'ITEM_HANG_GARMENT';

    final public const LABELING = 'ITEM_LABELING';

    final public const NO_PREP = 'ITEM_NO_PREP';

    final public const POLYBAGGING = 'ITEM_POLYBAGGING';

    final public const RMOVHANG = 'ITEM_RMOVHANG';

    final public const SETCREAT = 'ITEM_SETCREAT';

    final public const SETSTK = 'ITEM_SETSTK';

    final public const SIOC = 'ITEM_SIOC';

    final public const SUFFOSTK = 'ITEM_SUFFOSTK';

    final public const TAPING = 'ITEM_TAPING';

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
            self::BLACK_SHRINKWRAP,
            self::BLANKSTK,
            self::BOXING,
            self::BUBBLEWRAP,
            self::CAP_SEALING,
            self::DEBUNDLE,
            self::HANG_GARMENT,
            self::LABELING,
            self::NO_PREP,
            self::POLYBAGGING,
            self::RMOVHANG,
            self::SETCREAT,
            self::SETSTK,
            self::SIOC,
            self::SUFFOSTK,
            self::TAPING,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
