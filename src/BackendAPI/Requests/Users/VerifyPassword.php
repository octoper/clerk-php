<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * VerifyPassword
 *
 * Check that the user's password matches the supplied input.
 * Useful for custom auth flows and
 * re-verification.
 */
class VerifyPassword extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/verify_password";
    }

    /**
     * @param  string  $userId  The ID of the user for whom to verify the password
     */
    public function __construct(
        protected string $userId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
