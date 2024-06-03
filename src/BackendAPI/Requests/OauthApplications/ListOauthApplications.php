<?php

namespace Octoper\ClerkPHP\Requests\OauthApplications;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListOAuthApplications
 *
 * This request returns the list of OAuth applications for an instance.
 * Results can be paginated using
 * the optional `limit` and `offset` query parameters.
 * The OAuth applications are ordered by descending
 * creation date.
 * Most recent OAuth applications will be returned first.
 */
class ListOauthApplications extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/oauth_applications';
    }

    /**
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     */
    public function __construct(
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'offset' => $this->offset]);
    }
}
