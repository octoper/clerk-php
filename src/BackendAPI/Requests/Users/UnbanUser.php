<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UnbanUser
 *
 * Removes the ban mark from the given user.
 */
class UnbanUser extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/unban";
    }

    /**
     * @param  string  $userId  The ID of the user to unban
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
