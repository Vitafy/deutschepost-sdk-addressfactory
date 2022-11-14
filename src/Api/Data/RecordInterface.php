<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface RecordInterface
{
    public function getRecordId(): int;

    public function getPerson();

    public function getAddress();

    public function getParcelStation();

    public function getGeoData();

    public function getGeoDataUtm();

    public function getGeoDataGk();

    public function getRoutingData();

    /**
     * @return PhoneNumberInterface[]
     */
    public function getPhoneNumbers(): array;

    /**
     * @return string[]
     */
    public function getStatusCodes(): array;

    public function getPostOffice();

    public function getPostalBox();

    public function getBulkReceiver();
}
