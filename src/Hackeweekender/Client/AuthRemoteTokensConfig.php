<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Hackweekender\Client\AuthRemoteTokens;

use Spryker\Client\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\OauthCryptography\OauthCryptographyConfig getSharedConfig()
 */
class AuthRemoteTokensConfig extends AbstractBundleConfig
{
    /**
     * @deprecated keys only hardcoded for now
     *
     * @return array
     */
    public function getPemKeys(): array
    {
        // converted via codercat/jwk-to-pem
        return [
            '-----BEGIN RSA PUBLIC KEY-----
MIIBCgKCAQEAzmbezdo4TnkoRNCnCVXW4uJ+8nt6yKf0d09RW+twedg7zT31X2b+
jUHPRfFpmvypNVTqy9ekFbLPCy9q/cz0xgOLKTil4Qz3j8UBGNKdtA7ISLrcFGaT
gm2jTXdd2HVLqXuM/RCC1rclwEUJUbCHQSTyTdttE7A6oIXfjU1AM3q8UyP2jANr
f6xEMBc0PWiakvOMm3EMj6j+G3fmsYvyy6l36XV0YjAEzSB5aG3a0Bk2vJ+qqQ81
GMPKTgOoJ+/cTNizjupD3IEgT3ZU8jG0AC6zP/6sOjJMCXYat2sO4dOGFw0jX3Bl
VofEh5sX29iR1ABXrU/hFsHjzOb7WnD8iQIDAQAB
-----END RSA PUBLIC KEY-----',
        ];
    }
}
