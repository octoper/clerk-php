<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetOrganization
 *
 * Fetches the organization whose ID or slug matches the provided `id_or_slug` URL query parameter.
 */
class GetOrganization extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}";
    }

    /**
     * @param  string  $organizationId  The ID or slug of the organization
     */
    public function __construct(
        protected string $organizationId,
    ) {
    }
}
