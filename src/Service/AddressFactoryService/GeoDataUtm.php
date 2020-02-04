<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Service\AddressFactoryService;

use PostDirekt\Sdk\AddressfactoryDirect\Api\Data\GeoDataUtmInterface;

/**
 * GeoDataUtm
 *
 * @author Rico Sonntag <rico.sonntag@netresearch.de>
 * @link   https://www.netresearch.de/
 */
class GeoDataUtm implements GeoDataUtmInterface
{
    /**
     * @var string
     */
    private $northing;

    /**
     * @var string
     */
    private $easting;

    /**
     * GeoDataGk constructor.
     *
     * @param string $northing
     * @param string $easting
     */
    public function __construct(
        string $northing,
        string $easting
    ) {
        $this->northing = $northing;
        $this->easting = $easting;
    }

    /**
     * @return string
     */
    public function getNorthing(): string
    {
        return $this->northing;
    }

    /**
     * @return string
     */
    public function getEasting(): string
    {
        return $this->easting;
    }
}
