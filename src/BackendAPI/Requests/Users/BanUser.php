<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * BanUser
 *
 * Marks the given user as banned, which means that all their sessions are revoked and they are not
 * allowed to sign in again.
 */
class BanUser extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/ban";
    }

    /**
     * @param  string  $userId  The ID of the user to ban
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
