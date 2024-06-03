<?php

namespace Octoper\ClerkPHP\Requests\OrganizationInvitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateOrganizationInvitationBulk
 *
 * Creates new organization invitations in bulk and sends out emails to the provided email addresses
 * with a link to accept the invitation and join the organization.
 * You can specify a different `role`
 * for each invited organization member.
 * New organization invitations get a "pending" status until they
 * are revoked by an organization administrator or accepted by the invitee.
 * The request body supports
 * passing an optional `redirect_url` parameter for each invitation.
 * When the invited user clicks the
 * link to accept the invitation, they will be redirected to the provided URL.
 * Use this parameter to
 * implement a custom invitation acceptance flow.
 * You must specify the ID of the user that will send
 * the invitation with the `inviter_user_id` parameter. Each invitation
 * can have a different inviter
 * user.
 * Inviter users must be members with administrator privileges in the organization.
 * Only "admin"
 * members can create organization invitations.
 * You can optionally provide public and private metadata
 * for each organization invitation. The public metadata are visible
 * by both the Frontend and the
 * Backend, whereas the private metadata are only visible by the Backend.
 * When the organization
 * invitation is accepted, the metadata will be transferred to the newly created organization
 * membership.
 */
class CreateOrganizationInvitationBulk extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/invitations/bulk";
    }

    /**
     * @param  string  $organizationId  The organization ID.
     */
    public function __construct(
        protected string $organizationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
