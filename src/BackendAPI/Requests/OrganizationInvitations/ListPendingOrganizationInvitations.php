<?php

namespace Octoper\ClerkPHP\Requests\OrganizationInvitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListPendingOrganizationInvitations
 *
 * This request returns the list of organization invitations with "pending" status.
 * These are the
 * organization invitations that can still be used to join the organization, but have not been accepted
 * by the invited user yet.
 * Results can be paginated using the optional `limit` and `offset` query
 * parameters.
 * The organization invitations are ordered by descending creation date.
 * Most recent
 * invitations will be returned first.
 * Any invitations created as a result of an Organization Domain
 * are not included in the results.
 */
class ListPendingOrganizationInvitations extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/invitations/pending";
    }

    /**
     * @param  string  $organizationId  The organization ID.
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     */
    public function __construct(
        protected string $organizationId,
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'offset' => $this->offset]);
    }
}
