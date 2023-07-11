<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
