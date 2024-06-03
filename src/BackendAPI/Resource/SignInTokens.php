<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\SignInTokens\CreateSignInToken;
use Octoper\ClerkPHP\Requests\SignInTokens\RevokeSignInToken;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class SignInTokens extends Resource
{
    public function createSignInToken(array $body = []): Response
    {
        return $this->connector->send(new CreateSignInToken($body));
    }

    /**
     * @param  string  $signInTokenId  The ID of the sign-in token to be revoked
     */
    public function revokeSignInToken(string $signInTokenId): Response
    {
        return $this->connector->send(new RevokeSignInToken($signInTokenId));
    }
}
