<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
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
