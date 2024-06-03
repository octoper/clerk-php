<?php

namespace Octoper\ClerkPHP\Requests\JwtTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteJWTTemplate
 */
class DeleteJwttemplate extends BaseRequest
{
    protected Method $method = Method::DELETE;

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
