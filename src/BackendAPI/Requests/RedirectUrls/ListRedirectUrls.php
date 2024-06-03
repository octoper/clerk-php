<?php

namespace Octoper\ClerkPHP\Requests\RedirectUrls;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListRedirectURLs
 *
 * Lists all whitelisted redirect_urls for the instance
 */
class ListRedirectUrls extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/redirect_urls';
    }

    public function __construct(
    ) {
    }
}
