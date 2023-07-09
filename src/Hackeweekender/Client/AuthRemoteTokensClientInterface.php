<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
