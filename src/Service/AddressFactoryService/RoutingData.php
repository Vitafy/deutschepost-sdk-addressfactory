<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\RoutingDataInterface;

/**
 * RoutingData
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class RoutingData implements RoutingDataInterface
{
    /**
     * @var string
     */
    private $routingCode;

    /**
     * @var string
     */
    private $alOrt;

    /**
     * @var string
     */
    private $cargoCenter;

    /**
     * @var string
     */
    private $streetKey;

    /**
     * @var string
     */
    private $districtKey;

    /**
     * RoutingData constructor.
     *
     * @param string $routingCode
     * @param string $alOrt
     * @param string $cargoCenter
     * @param string $streetKey
     * @param string $districtKey
     */
    public function __construct(
        string $routingCode,
        string $alOrt,
        string $cargoCenter,
        string $streetKey,
        string $districtKey
    ) {
        $this->routingCode = $routingCode;
        $this->alOrt = $alOrt;
        $this->cargoCenter = $cargoCenter;
        $this->streetKey = $streetKey;
        $this->districtKey = $districtKey;
    }

    public function getRoutingCode(): string
    {
        return $this->routingCode;
    }

    public function getAlOrt(): string
    {
        return $this->alOrt;
    }

    public function getCargoCenter(): string
    {
        return $this->cargoCenter;
    }

    public function getStreetKey(): string
    {
        return $this->streetKey;
    }

    public function getDistrictKey(): string
    {
        return $this->districtKey;
    }
}
