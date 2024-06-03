<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetOAuthAccessToken
 *
 * Fetch the corresponding OAuth access token for a user that has previously authenticated with a
 * particular OAuth provider.
 * For OAuth 2.0, if the access token has expired and we have a
 * corresponding refresh token, the access token will be refreshed transparently the new one will be
 * returned.
 */
class GetOauthAccessToken extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/oauth_access_tokens/{$this->provider}";
    }

    /**
     * @param  string  $userId  The ID of the user for which to retrieve the OAuth access token
     * @param  string  $provider  The ID of the OAuth provider (e.g. `oauth_google`)
     */
    public function __construct(
        protected string $userId,
        protected string $provider,
    ) {
    }
}
