<?php

namespace Octoper\ClerkPHP\Requests\OrganizationInvitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetOrganizationInvitation
 *
 * Use this request to get an existing organization invitation by ID.
 */
class GetOrganizationInvitation extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/invitations/{$this->invitationId}";
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  string  $invitationId  The organization invitation ID.
     */
    public function __construct(
        protected string $organizationId,
        protected string $invitationId,
    ) {
    }
}
