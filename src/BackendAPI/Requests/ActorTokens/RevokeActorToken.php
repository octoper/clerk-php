<?php

namespace Octoper\ClerkPHP\Requests\ActorTokens;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevokeActorToken
 *
 * Revokes a pending actor token.
 */
class RevokeActorToken extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/actor_tokens/{$this->actorTokenId}/revoke";
    }

    /**
     * @param  string  $actorTokenId  The ID of the actor token to be revoked.
     */
    public function __construct(
        protected string $actorTokenId,
    ) {
    }
}
