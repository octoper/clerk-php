<?php

namespace Octoper\ClerkPHP\Requests\Invitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListInvitations
 *
 * Returns all non-revoked invitations for your application, sorted by creation date
 */
class ListInvitations extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/invitations';
    }

    /**
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     * @param  null|string  $status  Filter invitations based on their status
     */
    public function __construct(
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
        protected ?string $status = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['limit' => $this->limit, 'offset' => $this->offset, 'status' => $this->status]);
    }
}
