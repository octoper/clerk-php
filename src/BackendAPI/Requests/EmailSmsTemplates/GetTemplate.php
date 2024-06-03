<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetTemplate
 *
 * Returns the details of a template
 */
class GetTemplate extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}/{$this->slug}";
    }

    /**
     * @param  string  $templateType  The type of templates to retrieve (email or SMS)
     * @param  string  $slug  The slug (i.e. machine-friendly name) of the template to retrieve
     */
    public function __construct(
        protected string $templateType,
        protected string $slug,
    ) {
    }
}
