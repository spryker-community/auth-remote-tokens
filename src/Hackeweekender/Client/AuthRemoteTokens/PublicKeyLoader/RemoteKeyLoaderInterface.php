<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Hackweekender\Client\AuthRemoteTokens\PublicKeyLoader;

interface RemoteKeyLoaderInterface
{
    /**
     * @return array<\League\OAuth2\Server\CryptKey>
     */
    public function loadPublicKeys(): array;
}
