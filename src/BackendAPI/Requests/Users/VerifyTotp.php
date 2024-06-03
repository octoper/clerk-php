<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * VerifyTOTP
 *
 * Verify that the provided TOTP or backup code is valid for the user.
 * Verifying a backup code will
 * result it in being consumed (i.e. it will
 * become invalid).
 * Useful for custom auth flows and
 * re-verification.
 */
class VerifyTotp extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/verify_totp";
    }

    /**
     * @param  string  $userId  The ID of the user for whom to verify the TOTP
     */
    public function __construct(
        protected string $userId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
