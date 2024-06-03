<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Sessions\CreateSessionTokenFromTemplate;
use Octoper\ClerkPHP\Requests\Sessions\GetSession;
use Octoper\ClerkPHP\Requests\Sessions\GetSessionList;
use Octoper\ClerkPHP\Requests\Sessions\RevokeSession;
use Octoper\ClerkPHP\Requests\Sessions\VerifySession;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Sessions extends Resource
{
    /**
     * @param  string  $clientId  List sessions for the given client
     * @param  string  $userId  List sessions for the given user
     * @param  string  $status  Filter sessions by the provided status
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function getSessionList(
        ?string $clientId,
        ?string $userId,
        ?string $status,
        float|int|null $limit,
        float|int|null $offset,
    ): Response {
        return $this->connector->send(new GetSessionList($clientId, $userId, $status, $limit, $offset));
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function getSession(string $sessionId): Response
    {
        return $this->connector->send(new GetSession($sessionId));
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function revokeSession(string $sessionId): Response
    {
        return $this->connector->send(new RevokeSession($sessionId));
    }

    /**
     * @param  string  $sessionId  The ID of the session
     */
    public function verifySession(string $sessionId, array $body = []): Response
    {
        return $this->connector->send(new VerifySession($sessionId, $body));
    }

    /**
     * @param  string  $sessionId  The ID of the session
     * @param  string  $templateName  The name of the JWT Template defined in your instance (e.g. `custom_hasura`).
     */
    public function createSessionTokenFromTemplate(string $sessionId, string $templateName): Response
    {
        return $this->connector->send(new CreateSessionTokenFromTemplate($sessionId, $templateName));
    }
}
