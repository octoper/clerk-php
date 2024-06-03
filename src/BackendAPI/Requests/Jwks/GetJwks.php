<?php

namespace Octoper\ClerkPHP\Requests\Jwks;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetJWKS
 *
 * Retrieve the JSON Web Key Set of the instance
 */
class GetJwks extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/jwks';
    }

    public function __construct(
    ) {
    }
}
