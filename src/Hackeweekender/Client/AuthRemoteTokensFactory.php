<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Hackweekender\Client\AuthRemoteTokens;

use Hackweekender\Client\AuthRemoteTokens\PublicKeyLoader\RemoteKeyLoader;
use Spryker\Client\Kernel\AbstractFactory;

/**
 * @method \Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensConfig getConfig()
 */
class AuthRemoteTokensFactory extends AbstractFactory
{
    /**
     * @return \Hackweekender\Client\AuthRemoteTokens\PublicKeyLoader\RemoteKeyLoader
     */
    public function createRemoteKeyLoader(): RemoteKeyLoader
    {
        return new RemoteKeyLoader($this->getConfig());
    }
}
