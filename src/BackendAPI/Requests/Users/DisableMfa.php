<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DisableMFA
 *
 * Disable all of a user's MFA methods (e.g. OTP sent via SMS, TOTP on their authenticator app) at
 * once.
 */
class DisableMfa extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/mfa";
    }

    /**
     * @param  string  $userId  The ID of the user whose MFA methods are to be disabled
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
