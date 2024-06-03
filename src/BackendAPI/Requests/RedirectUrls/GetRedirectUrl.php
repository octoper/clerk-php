<?php

namespace Octoper\ClerkPHP\Requests\RedirectUrls;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetRedirectURL
 *
 * Retrieve the details of the redirect URL with the given ID
 */
class GetRedirectUrl extends BaseRequest
{
    protected Method $method = Method::GET;

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
