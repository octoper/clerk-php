<?php

namespace Octoper\ClerkPHP\Requests\OrganizationInvitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevokeOrganizationInvitation
 *
 * Use this request to revoke a previously issued organization invitation.
 * Revoking an organization
 * invitation makes it invalid; the invited user will no longer be able to join the organization with
 * the revoked invitation.
 * Only organization invitations with "pending" status can be revoked.
 * The
 * request needs the `requesting_user_id` parameter to specify the user which revokes the
 * invitation.
 * Only users with "admin" role can revoke invitations.
 */
class RevokeOrganizationInvitation extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/invitations/{$this->invitationId}/revoke";
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  string  $invitationId  The organization invitation ID.
     */
    public function __construct(
        protected string $organizationId,
        protected string $invitationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
