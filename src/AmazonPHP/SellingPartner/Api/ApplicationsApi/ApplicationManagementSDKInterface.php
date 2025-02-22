<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ApplicationsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Application Management.
 *
 * The Selling Partner API for Application Management lets you programmatically update the client secret on registered applications.
 *
 * The version of the OpenAPI document: 2023-11-30
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ApplicationManagementSDKInterface
{
    public const API_NAME = 'ApplicationManagement';

    public const OPERATION_ROTATEAPPLICATIONCLIENTSECRET = 'rotateApplicationClientSecret';

    public const OPERATION_ROTATEAPPLICATIONCLIENTSECRET_PATH = '/applications/2023-11-30/clientSecret';

    /**
     * Operation rotateApplicationClientSecret.
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function rotateApplicationClientSecret(AccessToken $accessToken, string $region);
}
