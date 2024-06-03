<?php

namespace Octoper\ClerkPHP\Requests\OrganizationMemberships;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateOrganizationMembership
 *
 * Updates the properties of an existing organization membership
 */
class UpdateOrganizationMembership extends BaseRequest
{
    protected Method $method = Method::PATCH;

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
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
