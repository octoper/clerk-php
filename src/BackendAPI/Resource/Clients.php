<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Clients\GetClient;
use Octoper\ClerkPHP\Requests\Clients\GetClientList;
use Octoper\ClerkPHP\Requests\Clients\VerifyClient;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Clients extends Resource
{
    /**
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function getClientList(float|int|null $limit, float|int|null $offset): Response
    {
        return $this->connector->send(new GetClientList($limit, $offset));
    }

    public function verifyClient(array $body = []): Response
    {
        return $this->connector->send(new VerifyClient($body));
    }

    /**
     * @param  string  $clientId  Client ID.
     */
    public function getClient(string $clientId): Response
    {
        return $this->connector->send(new GetClient($clientId));
    }
}
