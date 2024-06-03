<?php

namespace Octoper\ClerkPHP\Requests\JwtTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateJWTTemplate
 *
 * Create a new JWT template
 */
class CreateJwttemplate extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/jwt_templates';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
