<?php

namespace Octoper\ClerkPHP\Requests\OrganizationMemberships;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListOrganizationMemberships
 *
 * Retrieves all user memberships for the given organization
 */
class ListOrganizationMemberships extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/memberships";
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
