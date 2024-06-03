<?php

namespace Octoper\ClerkPHP\Requests\Clients;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetClient
 *
 * Returns the details of a client.
 */
class GetClient extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/clients/{$this->clientId}";
    }

    /**
     * @param  string  $clientId  Client ID.
     */
    public function __construct(
        protected string $clientId,
    ) {
    }
}
