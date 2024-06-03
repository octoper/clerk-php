<?php

namespace Octoper\ClerkPHP\Requests\Sessions;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateSessionTokenFromTemplate
 *
 * Creates a JSON Web Token(JWT) based on a session and a JWT Template name defined for your instance
 */
class CreateSessionTokenFromTemplate extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/sessions/{$this->sessionId}/tokens/{$this->templateName}";
    }

    /**
     * @param  string  $sessionId  The ID of the session
     * @param  string  $templateName  The name of the JWT Template defined in your instance (e.g. `custom_hasura`).
     */
    public function __construct(
        protected string $sessionId,
        protected string $templateName,
    ) { }
}
