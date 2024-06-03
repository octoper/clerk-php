<?php

namespace Octoper\ClerkPHP\Requests\OrganizationInvitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateOrganizationInvitation
 *
 * Creates a new organization invitation and sends an email to the provided `email_address` with a link
 * to accept the invitation and join the organization.
 * You can specify the `role` for the invited
 * organization member.
 *
 * New organization invitations get a "pending" status until they are revoked by
 * an organization administrator or accepted by the invitee.
 *
 * The request body supports passing an
 * optional `redirect_url` parameter.
 * When the invited user clicks the link to accept the invitation,
 * they will be redirected to the URL provided.
 * Use this parameter to implement a custom invitation
 * acceptance flow.
 *
 * You must specify the ID of the user that will send the invitation with the
 * `inviter_user_id` parameter.
 * That user must be a member with administrator privileges in the
 * organization.
 * Only "admin" members can create organization invitations.
 *
 * You can optionally provide
 * public and private metadata for the organization invitation.
 * The public metadata are visible by both
 * the Frontend and the Backend whereas the private ones only by the Backend.
 * When the organization
 * invitation is accepted, the metadata will be transferred to the newly created organization
 * membership.
 */
class CreateOrganizationInvitation extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/invitations";
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which to send the invitation
     */
    public function __construct(
        protected string $organizationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
