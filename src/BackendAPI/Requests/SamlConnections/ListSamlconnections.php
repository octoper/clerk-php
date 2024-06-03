<?php

namespace Octoper\ClerkPHP\Requests\SamlConnections;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListSAMLConnections
 *
 * Returns the list of SAML Connections for an instance.
 * Results can be paginated using the optional
 * `limit` and `offset` query parameters.
 * The SAML Connections are ordered by descending creation date
 * and the most recent will be returned first.
 */
class ListSamlconnections extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/saml_connections';
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
