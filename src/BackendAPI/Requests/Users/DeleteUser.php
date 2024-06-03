<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteUser
 *
 * Delete the specified user
 */
class DeleteUser extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}";
    }

    /**
     * @param  string  $userId  The ID of the user to delete
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
