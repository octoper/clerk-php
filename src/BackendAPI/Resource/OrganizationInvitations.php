<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\OrganizationInvitations\CreateOrganizationInvitation;
use Octoper\ClerkPHP\Requests\OrganizationInvitations\CreateOrganizationInvitationBulk;
use Octoper\ClerkPHP\Requests\OrganizationInvitations\GetOrganizationInvitation;
use Octoper\ClerkPHP\Requests\OrganizationInvitations\ListOrganizationInvitations;
use Octoper\ClerkPHP\Requests\OrganizationInvitations\ListPendingOrganizationInvitations;
use Octoper\ClerkPHP\Requests\OrganizationInvitations\RevokeOrganizationInvitation;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class OrganizationInvitations extends Resource
{
    /**
     * @param  string  $organizationId  The organization ID.
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     * @param  string  $status  Filter organization invitations based on their status
     */
    public function listOrganizationInvitations(
        string $organizationId,
        float|int|null $limit,
        float|int|null $offset,
        ?string $status,
    ): Response {
        return $this->connector->send(new ListOrganizationInvitations($organizationId, $limit, $offset, $status));
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which to send the invitation
     */
    public function createOrganizationInvitation(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new CreateOrganizationInvitation($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The organization ID.
     */
    public function createOrganizationInvitationBulk(string $organizationId, array $body = []): Response
    {
        return $this->connector->send(new CreateOrganizationInvitationBulk($organizationId, $body));
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function listPendingOrganizationInvitations(
        string $organizationId,
        float|int|null $limit,
        float|int|null $offset,
    ): Response {
        return $this->connector->send(new ListPendingOrganizationInvitations($organizationId, $limit, $offset));
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  string  $invitationId  The organization invitation ID.
     */
    public function getOrganizationInvitation(string $organizationId, string $invitationId): Response
    {
        return $this->connector->send(new GetOrganizationInvitation($organizationId, $invitationId));
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  string  $invitationId  The organization invitation ID.
     */
    public function revokeOrganizationInvitation(string $organizationId, string $invitationId, array $body = []): Response
    {
        return $this->connector->send(new RevokeOrganizationInvitation($organizationId, $invitationId, $body));
    }
}
