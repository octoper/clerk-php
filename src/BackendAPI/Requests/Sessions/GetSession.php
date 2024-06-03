<?php

namespace Octoper\ClerkPHP\Requests\Sessions;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetSession
 *
 * Retrieve the details of a session
 */
class GetSession extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/sessions/{$this->sessionId}";
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function __construct(
        protected string $sessionId,
    ) {
    }
}
