<?php

namespace Octoper\ClerkPHP\Requests\OrganizationMemberships;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteOrganizationMembership
 *
 * Removes the given membership from the organization
 */
class DeleteOrganizationMembership extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/memberships/{$this->userId}";
    }

    /**
     * @param  string  $organizationId  The ID of the organization the membership belongs to
     * @param  string  $userId  The ID of the user that this membership belongs to
     */
    public function __construct(
        protected string $organizationId,
        protected string $userId,
    ) {
    }
}
