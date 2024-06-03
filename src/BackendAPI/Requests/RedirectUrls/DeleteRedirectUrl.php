<?php

namespace Octoper\ClerkPHP\Requests\RedirectUrls;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteRedirectURL
 *
 * Remove the selected redirect URL from the whitelist of the instance
 */
class DeleteRedirectUrl extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/redirect_urls/{$this->id}";
    }

    /**
     * @param  string  $id  The ID of the redirect URL
     */
    public function __construct(
        protected string $id,
    ) {
    }
}
