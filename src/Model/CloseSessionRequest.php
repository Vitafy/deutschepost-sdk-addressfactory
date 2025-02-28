<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace PostDirekt\Sdk\AddressfactoryDirect\Model;

class CloseSessionRequest
{
    /**
     * The session id.
     *
     * @var string
     */
    private $sessionId;

    /**
     * @param string $sessionId
     * @return CloseSessionRequest
     */
    public function setSessionId(string $sessionId): self
    {
        $this->sessionId = $sessionId;
        return $this;
    }
}
