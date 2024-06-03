<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * LockUser
 *
 * Marks the given user as locked, which means they are not allowed to sign in again until the lock
 * expires.
 * Lock duration can be configured in the instance's restrictions settings.
 */
class LockUser extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/lock";
    }

    /**
     * @param  string  $userId  The ID of the user to lock
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
