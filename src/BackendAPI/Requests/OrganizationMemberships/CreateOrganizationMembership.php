<?php

namespace Octoper\ClerkPHP\Requests\OrganizationMemberships;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateOrganizationMembership
 *
 * Adds a user as a member to the given organization.
 * Only users in the same instance as the
 * organization can be added as members.
 */
class CreateOrganizationMembership extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/memberships";
    }

    /**
     * @param  string  $organizationId  The ID of the organization where the new membership will be created
     */
    public function __construct(
        protected string $organizationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
