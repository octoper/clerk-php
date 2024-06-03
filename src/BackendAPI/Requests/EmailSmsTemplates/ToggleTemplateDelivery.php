<?php

namespace Octoper\ClerkPHP\Requests\EmailSmsTemplates;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ToggleTemplateDelivery
 *
 * Toggles the delivery by Clerk for a template of a given type and slug.
 * If disabled, Clerk will not
 * deliver the resulting email or SMS.
 * The app developer will need to listen to the `email.created` or
 * `sms.created` webhooks in order to handle delivery themselves.
 */
class ToggleTemplateDelivery extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/templates/{$this->templateType}/{$this->slug}/toggle_delivery";
    }

    /**
     * @param  string  $templateType  The type of template to toggle delivery for
     * @param  string  $slug  The slug of the template for which to toggle delivery
     */
    public function __construct(
        protected string $templateType,
        protected string $slug,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
