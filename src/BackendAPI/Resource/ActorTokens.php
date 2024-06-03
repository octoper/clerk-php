<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\ActorTokens\CreateActorToken;
use Octoper\ClerkPHP\Requests\ActorTokens\RevokeActorToken;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class ActorTokens extends Resource
{
    public function createActorToken(array $body): Response
    {
        return $this->connector->send(new CreateActorToken($body));
    }

    /**
     * @param  string  $actorTokenId  The ID of the actor token to be revoked.
     */
    public function revokeActorToken(string $actorTokenId): Response
    {
        return $this->connector->send(new RevokeActorToken($actorTokenId));
    }
}
