<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetTemplateList
 *
 * Returns a list of all templates.
 * The templates are returned sorted by position.
 */
class GetTemplateList extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}";
    }

    /**
     * @param  string  $templateType  The type of templates to list (email or SMS)
     */
    public function __construct(
        protected string $templateType,
    ) {
    }
}
