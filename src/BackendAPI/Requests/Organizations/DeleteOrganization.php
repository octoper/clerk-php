<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteOrganization
 *
 * Deletes the given organization.
 * Please note that deleting an organization will also delete all
 * memberships and invitations.
 * This is not reversible.
 */
class DeleteOrganization extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}";
    }

    /**
     * @param  string  $organizationId  The ID of the organization to delete
     */
    public function __construct(
        protected string $organizationId,
    ) {
    }
}
