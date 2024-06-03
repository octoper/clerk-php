<?php

namespace Octoper\ClerkPHP\Requests\JwtTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateJWTTemplate
 *
 * Updates an existing JWT template
 */
class UpdateJwttemplate extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/jwt_templates/{$this->templateId}";
    }

    /**
     * @param  string  $templateId  The ID of the JWT template to update
     */
    public function __construct(
        protected string $templateId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
