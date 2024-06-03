<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteOrganizationLogo
 *
 * Delete the organization's logo.
 */
class DeleteOrganizationLogo extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/logo";
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which the logo will be deleted.
     */
    public function __construct(
        protected string $organizationId,
    ) {
    }
}
