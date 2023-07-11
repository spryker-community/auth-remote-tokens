<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Hackweekender\Client\AuthRemoteTokens;

interface AuthRemoteTokensClientInterface
{
    /**
     * Specification:
     * - Loads the default configured public ssh key.
     * - Creates `CryptKey` instance in case the configured key is not one.
     *
     * @api
     *
     * @return array<\League\OAuth2\Server\CryptKey>
     */
    public function loadPublicKeys(): array;
}
