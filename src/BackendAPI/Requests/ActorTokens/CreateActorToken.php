<?php

namespace Octoper\ClerkPHP\Requests\ActorTokens;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateActorToken
 *
 * Create an actor token that can be used to impersonate the given user.
 * The `actor` parameter needs to
 * include at least a "sub" key whose value is the ID of the actor (impersonating) user.
 */
class CreateActorToken extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/actor_tokens';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
