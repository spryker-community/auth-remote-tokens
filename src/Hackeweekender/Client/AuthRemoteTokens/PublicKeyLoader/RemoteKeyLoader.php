<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Hackweekender\Client\AuthRemoteTokens\PublicKeyLoader;

use Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensConfig;
use League\OAuth2\Server\CryptKey;

class RemoteKeyLoader implements RemoteKeyLoaderInterface
{
    /**
     * @var \Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensConfig
     */
    protected $config;

    /**
     * @param \Hackweekender\Client\AuthRemoteTokens\AuthRemoteTokensConfig $remoteAuthConfig
     */
    public function __construct(AuthRemoteTokensConfig $remoteAuthConfig)
    {
        $this->config = $remoteAuthConfig;
    }

    /**
     * @return array<string>
     */
    protected function getPemKeyRepresentations(): array
    {
        //todo bridge storage/redis client
        return $this->config->getPemKeys();
    }

    /**
     * @inheritDoc
     */
    public function loadPublicKeys(): array
    {
        return array_map(
            static fn (string $asymmetricKey): CryptKey => new CryptKey($asymmetricKey),
            $this->getPemKeyRepresentations(),
        );
    }
}
