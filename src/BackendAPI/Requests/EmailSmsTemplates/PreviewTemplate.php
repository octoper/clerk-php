<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * PreviewTemplate
 *
 * Returns a preview of a template for a given template_type, slug and body
 */
class PreviewTemplate extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}/{$this->slug}/preview";
    }

    /**
     * @param  string  $templateType  The type of template to preview
     * @param  string  $slug  The slug of the template to preview
     */
    public function __construct(
        protected string $templateType,
        protected string $slug,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
