<?php

namespace Octoper\ClerkPHP\Requests\JwtTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetJWTTemplate
 *
 * Retrieve the details of a given JWT template
 */
class GetJwttemplate extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/jwt_templates/{$this->templateId}";
    }

    /**
     * @param  string  $templateId  JWT Template ID
     */
    public function __construct(
        protected string $templateId,
    ) {
    }
}
