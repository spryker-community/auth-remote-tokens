<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Hackweekender\Client\AuthRemoteTokens\Plugin\Oauth;

use Spryker\Client\Kernel\AbstractPlugin;
use Spryker\Client\OauthExtension\Dependency\Plugin\KeyLoaderPluginInterface;

/**
 * @method \Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensClientInterface getClient()
 */
class RemoteKeyLoaderPlugin extends AbstractPlugin implements KeyLoaderPluginInterface
{
    /**
     * {@inheritDoc}
     * - Load the keys from cached resource
     *
     * @return array<\League\OAuth2\Server\CryptKey>
     */
    public function loadKeys(): array
    {
        return $this->getClient()->loadPublicKeys();
    }
}
