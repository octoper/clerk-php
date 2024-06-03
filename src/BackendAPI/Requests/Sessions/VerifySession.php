<?php

namespace Octoper\ClerkPHP\Requests\Sessions;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * VerifySession
 *
 * Returns the session if it is authenticated, otherwise returns an error.
 * WARNING: This endpoint is
 * deprecated and will be removed in future versions. We strongly recommend switching to networkless
 * verification using short-lived session tokens,
 *          which is implemented transparently in all
 * recent SDK versions (e.g. [NodeJS
 * SDK](https://clerk.com/docs/backend-requests/handling/nodejs#clerk-express-require-auth)).
 *
 * For more details on how networkless verification works, refer to our [Session Tokens
 * documentation](https://clerk.com/docs/backend-requests/resources/session-tokens).
 */
class VerifySession extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/sessions/{$this->sessionId}/verify";
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function __construct(
        protected string $sessionId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
