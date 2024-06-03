<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\TestingTokens\CreateTestingToken;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class TestingTokens extends Resource
{
    public function createTestingToken(): Response
    {
        return $this->connector->send(new CreateTestingToken());
    }
}
