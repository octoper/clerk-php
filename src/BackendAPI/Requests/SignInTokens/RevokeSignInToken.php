<?php

namespace Octoper\ClerkPHP\Requests\SignInTokens;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevokeSignInToken
 *
 * Revokes a pending sign-in token
 */
class RevokeSignInToken extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/sign_in_tokens/{$this->signInTokenId}/revoke";
    }

    /**
     * @param  string  $signInTokenId  The ID of the sign-in token to be revoked
     */
    public function __construct(
        protected string $signInTokenId,
    ) {
    }
}
