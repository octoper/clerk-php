<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetUser
 *
 * Retrieve the details of a user
 */
class GetUser extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}";
    }

    /**
     * @param  string  $userId  The ID of the user to retrieve
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
