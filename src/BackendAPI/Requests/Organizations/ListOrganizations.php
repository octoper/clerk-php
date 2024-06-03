<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListOrganizations
 *
 * This request returns the list of organizations for an instance.
 * Results can be paginated using the
 * optional `limit` and `offset` query parameters.
 * The organizations are ordered by descending creation
 * date.
 * Most recent organizations will be returned first.
 */
class ListOrganizations extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/organizations';
    }

    /**
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     * @param  null|bool  $includeMembersCount  Flag to denote whether the member counts of each organization should be included in the response or not.
     * @param  null|string  $query  Returns organizations with ID, name, or slug that match the given query.
     *                              Uses exact match for organization ID and partial match for name and slug.
     */
    public function __construct(
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
        protected ?bool $includeMembersCount = null,
        protected ?string $query = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'limit' => $this->limit,
            'offset' => $this->offset,
            'include_members_count' => $this->includeMembersCount,
            'query' => $this->query,
        ]);
    }
}
