<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\OrganizationMemberships\CreateOrganizationMembership;
use Octoper\ClerkPHP\Requests\OrganizationMemberships\DeleteOrganizationMembership;
use Octoper\ClerkPHP\Requests\OrganizationMemberships\ListOrganizationMemberships;
use Octoper\ClerkPHP\Requests\OrganizationMemberships\UpdateOrganizationMembership;
use Octoper\ClerkPHP\Requests\OrganizationMemberships\UpdateOrganizationMembershipMetadata;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class OrganizationMemberships extends Resource
{
    /**
     * @param  string  $organizationId  The organization ID.
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function listOrganizationMemberships(
        string $organizationId,
        float|int|null $limit,
        float|int|null $offset,
    ): Response {
        return $this->connector->send(new ListOrganizationMemberships($organizationId, $limit, $offset));
    }

    /**
     * @param  string  $organizationId  The ID of the organization where the new membership will be created
     */
    public function createOrganizationMembership(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new CreateOrganizationMembership($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The ID of the organization the membership belongs to
     * @param  string  $userId  The ID of the user that this membership belongs to
     */
    public function deleteOrganizationMembership(string $organizationId, string $userId): Response
    {
        return $this->connector->send(new DeleteOrganizationMembership($organizationId, $userId));
    }

    /**
     * @param  string  $organizationId  The ID of the organization the membership belongs to
     * @param  string  $userId  The ID of the user that this membership belongs to
     */
    public function updateOrganizationMembership(string $organizationId, string $userId, array $body = []): Response
    {
        return $this->connector->send(new UpdateOrganizationMembership($organizationId, $userId, $body));
    }

    /**
     * @param  string  $organizationId  The ID of the organization the membership belongs to
     * @param  string  $userId  The ID of the user that this membership belongs to
     */
    public function updateOrganizationMembershipMetadata(string $organizationId, string $userId, array $body = []): Response
    {
        return $this->connector->send(new UpdateOrganizationMembershipMetadata($organizationId, $userId, $body));
    }
}
