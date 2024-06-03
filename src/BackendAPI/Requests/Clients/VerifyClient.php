<?php

namespace Octoper\ClerkPHP\Requests\Clients;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * VerifyClient
 *
 * Verifies the client in the provided token
 */
class VerifyClient extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/clients/verify';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
