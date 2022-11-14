<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Api\Data;

/**
 * @api
 */
interface PhoneNumberInterface
{
    const TYPE_UNKNOWN = 'unknown';
    const TYPE_PRIVATE = 'private';
    const TYPE_BUSINESS = 'business';
    const TYPE_MOBILE = 'mobile';
    const TYPE_FAX = 'fax';

    public function getType(): string;

    public function getAreaCode(): string;

    public function getDialNumber(): string;
}
