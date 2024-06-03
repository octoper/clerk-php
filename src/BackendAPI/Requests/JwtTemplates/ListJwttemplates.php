<?php

namespace Octoper\ClerkPHP\Requests\JwtTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListJWTTemplates
 */
class ListJwttemplates extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/jwt_templates';
    }

    public function __construct(
    ) {
    }
}
