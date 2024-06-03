<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\SignUps\UpdateSignUp;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class SignUps extends Resource
{
    /**
     * @param  string  $id  The ID of the sign-up to update
     */
    public function updateSignUp(string $id, array $body = []): Response
    {
        return $this->connector->send(new UpdateSignUp($id, $body));
    }
}
