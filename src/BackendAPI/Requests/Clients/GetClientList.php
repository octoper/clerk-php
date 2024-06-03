<?php

namespace Octoper\ClerkPHP\Requests\Clients;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetClientList
 *
 * Returns a list of all clients. The clients are returned sorted by creation date,
 * with the newest
 * clients appearing first.
 * Warning: the endpoint is being deprecated and will be removed in future
 * versions.
 */
class GetClientList extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/clients';
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
