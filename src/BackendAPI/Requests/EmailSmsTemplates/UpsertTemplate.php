<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpsertTemplate
 *
 * Updates the existing template of the given type and slug
 */
class UpsertTemplate extends BaseRequest
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}/{$this->slug}";
    }

    /**
     * @param  string  $templateType  The type of template to update
     * @param  string  $slug  The slug of the template to update
     */
    public function __construct(
        protected string $templateType,
        protected string $slug,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
