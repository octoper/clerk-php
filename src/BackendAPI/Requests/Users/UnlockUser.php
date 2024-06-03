<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UnlockUser
 *
 * Removes the lock from the given user.
 */
class UnlockUser extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/unlock";
    }

    /**
     * @param  string  $userId  The ID of the user to unlock
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
