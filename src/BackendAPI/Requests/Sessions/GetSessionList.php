<?php

namespace Octoper\ClerkPHP\Requests\Sessions;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetSessionList
 *
 * Returns a list of all sessions.
 * The sessions are returned sorted by creation date, with the newest
 * sessions appearing first.
 * **Deprecation Notice (2024-01-01):** All parameters were initially
 * considered optional, however
 * moving forward at least one of `client_id` or `user_id` parameters
 * should be provided.
 */
class GetSessionList extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/sessions';
    }

    /**
     * @param  null|string  $clientId  List sessions for the given client
     * @param  null|string  $userId  List sessions for the given user
     * @param  null|string  $status  Filter sessions by the provided status
     * @param  null|float|int  $limit  Applies a limit to the number of results returned.
     *                                 Can be used for paginating the results together with `offset`.
     * @param  null|float|int  $offset  Skip the first `offset` results when paginating.
     *                                  Needs to be an integer greater or equal to zero.
     *                                  To be used in conjunction with `limit`.
     */
    public function __construct(
        protected ?string $clientId = null,
        protected ?string $userId = null,
        protected ?string $status = null,
        protected float|int|null $limit = null,
        protected float|int|null $offset = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'client_id' => $this->clientId,
            'user_id' => $this->userId,
            'status' => $this->status,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ]);
    }
}
