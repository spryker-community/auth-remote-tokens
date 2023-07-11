<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
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
