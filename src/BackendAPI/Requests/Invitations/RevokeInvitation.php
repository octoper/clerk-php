<?php

namespace Octoper\ClerkPHP\Requests\Invitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * RevokeInvitation
 *
 * Revokes the given invitation.
 * Revoking an invitation will prevent the user from using the invitation
 * link that was sent to them.
 * However, it doesn't prevent the user from signing up if they follow the
 * sign up flow.
 * Only active (i.e. non-revoked) invitations can be revoked.
 */
class RevokeInvitation extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/invitations/{$this->invitationId}/revoke";
    }

    /**
     * @param  string  $invitationId  The ID of the invitation to be revoked
     */
    public function __construct(
        protected string $invitationId,
    ) {
    }
}
