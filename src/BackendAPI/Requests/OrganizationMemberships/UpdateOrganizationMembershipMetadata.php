<?php

namespace Octoper\ClerkPHP\Requests\OrganizationMemberships;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateOrganizationMembershipMetadata
 *
 * Update an organization membership's metadata attributes by merging existing values with the provided
 * parameters.
 * Metadata values will be updated via a deep merge. Deep means that any nested JSON
 * objects will be merged as well.
 * You can remove metadata keys at any level by setting their value to
 * `null`.
 */
class UpdateOrganizationMembershipMetadata extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/memberships/{$this->userId}/metadata";
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
