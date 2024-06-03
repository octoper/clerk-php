<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Jwks\GetJwks;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Jwks extends Resource
{
    public function getJwks(): Response
    {
        return $this->connector->send(new GetJwks());
    }
}
