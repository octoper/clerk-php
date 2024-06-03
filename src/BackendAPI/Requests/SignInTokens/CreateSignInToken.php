<?php

namespace Octoper\ClerkPHP\Requests\SignInTokens;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateSignInToken
 *
 * Creates a new sign-in token and associates it with the given user.
 * By default, sign-in tokens expire
 * in 30 days.
 * You can optionally supply a different duration in seconds using the `expires_in_seconds`
 * property.
 */
class CreateSignInToken extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/sign_in_tokens';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
