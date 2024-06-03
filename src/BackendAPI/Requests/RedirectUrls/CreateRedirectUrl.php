<?php

namespace Octoper\ClerkPHP\Requests\RedirectUrls;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateRedirectURL
 *
 * Create a redirect URL
 */
class CreateRedirectUrl extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/redirect_urls';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
