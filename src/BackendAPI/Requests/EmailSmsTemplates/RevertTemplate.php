<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevertTemplate
 *
 * Reverts an updated template to its default state
 */
class RevertTemplate extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}/{$this->slug}/revert";
    }

    /**
     * @param  string  $templateType  The type of template to revert
     * @param  string  $slug  The slug of the template to revert
     */
    public function __construct(
        protected string $templateType,
        protected string $slug,
    ) {
    }
}
