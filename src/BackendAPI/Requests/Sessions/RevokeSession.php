<?php

namespace Octoper\ClerkPHP\Requests\Sessions;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevokeSession
 *
 * Sets the status of a session as "revoked", which is an unauthenticated state.
 * In multi-session mode,
 * a revoked session will still be returned along with its client object, however the user will need to
 * sign in again.
 */
class RevokeSession extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/sessions/{$this->sessionId}/revoke";
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function __construct(
        protected string $sessionId,
    ) {
    }
}
