<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

use PostDirekt\Sdk\AddressfactoryDirect\Model\RequestType\SimpleInRecordWSType;

class ProcessSimpleDataRequest
{
    /**
     * The session id.
     *
     * @var string|null
     */
    private $sessionId;

    /**
     * The configuration name. You can get the name of the configuration from Deutsche Post Direkt.
     *
     * @var string|null
     */
    private $configName;

    /**
     * The "mandantId" parameter is optionally and can be used to determine which clients are to be
     * compared. You receive the "mandantId" from DeutschePost Direkt GmbH.
     *
     * @var string|null
     */
    private $mandantId;

    /**
     * The input data record to be compared.
     *
     * @var SimpleInRecordWSType
     */
    private $simpleInRecord;

    /**
     * @param string|null $sessionId
     * @return ProcessSimpleDataRequest
     */
    public function setSessionId($sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }

    /**
     * @param string|null $configName
     * @return ProcessSimpleDataRequest
     */
    public function setConfigName($configName): self
    {
        $this->configName = $configName;
        return $this;
    }

    /**
     * @param string|null $clientId
     * @return ProcessSimpleDataRequest
     */
    public function setMandantId($clientId): self
    {
        $this->mandantId = $clientId;
        return $this;
    }

    /**
     * @param SimpleInRecordWSType $simpleInRecord
     * @return ProcessSimpleDataRequest
     */
    public function setSimpleInRecord(SimpleInRecordWSType $simpleInRecord): self
    {
        $this->simpleInRecord = $simpleInRecord;
        return $this;
    }
}
