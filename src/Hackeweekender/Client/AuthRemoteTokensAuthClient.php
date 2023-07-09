<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Hackweekender\Client\AuthRemoteTokens;

use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensFactory getFactory()
 */
class AuthRemoteTokensAuthClient extends AbstractClient implements AuthRemoteTokensClientInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return array<\League\OAuth2\Server\CryptKey>
     */
    public function loadPublicKeys(): array
    {
        return $this->getFactory()->createRemoteKeyLoader()->loadPublicKeys();
    }
}
