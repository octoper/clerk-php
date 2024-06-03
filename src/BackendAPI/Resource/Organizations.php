<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Organizations\CreateOrganization;
use Octoper\ClerkPHP\Requests\Organizations\DeleteOrganization;
use Octoper\ClerkPHP\Requests\Organizations\DeleteOrganizationLogo;
use Octoper\ClerkPHP\Requests\Organizations\GetOrganization;
use Octoper\ClerkPHP\Requests\Organizations\ListOrganizations;
use Octoper\ClerkPHP\Requests\Organizations\MergeOrganizationMetadata;
use Octoper\ClerkPHP\Requests\Organizations\UpdateOrganization;
use Octoper\ClerkPHP\Requests\Organizations\UploadOrganizationLogo;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Organizations extends Resource
{
    /**
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     * @param  bool  $includeMembersCount  Flag to denote whether the member counts of each organization should be included in the response or not.
     * @param  string  $query  Returns organizations with ID, name, or slug that match the given query.
     *                         Uses exact match for organization ID and partial match for name and slug.
     */
    public function listOrganizations(
        float|int|null $limit,
        float|int|null $offset,
        ?bool $includeMembersCount,
        ?string $query,
    ): Response {
        return $this->connector->send(new ListOrganizations($limit, $offset, $includeMembersCount, $query));
    }

    public function createOrganization(array $body = []): Response
    {
        return $this->connector->send(new CreateOrganization($body));
    }

    /**
     * @param  string  $organizationId  The ID or slug of the organization
     */
    public function getOrganization(string $organizationId): Response
    {
        return $this->connector->send(new GetOrganization($organizationId));
    }

    /**
     * @param  string  $organizationId  The ID of the organization to delete
     */
    public function deleteOrganization(string $organizationId): Response
    {
        return $this->connector->send(new DeleteOrganization($organizationId));
    }

    /**
     * @param  string  $organizationId  The ID of the organization to update
     */
    public function updateOrganization(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new UpdateOrganization($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which metadata will be merged or updated
     */
    public function mergeOrganizationMetadata(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new MergeOrganizationMetadata($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which to upload a logo
     */
    public function uploadOrganizationLogo(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new UploadOrganizationLogo($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which the logo will be deleted.
     */
    public function deleteOrganizationLogo(string $organizationId): Response
    {
        return $this->connector->send(new DeleteOrganizationLogo($organizationId));
    }
}
