<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface RoutingDataInterface
{
    /**
     * Returns the 11 digit code, created out of postal code, street code and house number.
     *
     * @return string
     */
    public function getRoutingCode(): string;

    /**
     * Returns the alphanumeric destination location identifier.
     *
     * @return string
     */
    public function getAlOrt(): string;

    /**
     * Returns the name of the cargo center.
     *
     * @return string
     */
    public function getCargoCenter(): string;

    public function getStreetKey(): string;

    public function getDistrictKey(): string;
}
