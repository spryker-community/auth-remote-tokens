# Auth Remote Tokens

1. New plugin for remote auth tokens. Extend your
`\Pyz\Client\Oauth\OauthDependencyProvider::getKeyLoaderPlugins`
to register our
`\Hackweekender\Client\AuthRemoteTokens\Plugin\Oauth\RemoteKeyLoaderPlugin`

2. Fork of the `league/oauth2-server` module to add support of the `OpenSSLAsymmetricKey` object in `CryptKey`.

```
https://github.com/DmytroKlymanSpryker/oauth2-server
```

