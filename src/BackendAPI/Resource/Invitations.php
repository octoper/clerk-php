<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Invitations\CreateInvitation;
use Octoper\ClerkPHP\Requests\Invitations\ListInvitations;
use Octoper\ClerkPHP\Requests\Invitations\RevokeInvitation;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Invitations extends Resource
{
    /**
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     * @param  string  $status  Filter invitations based on their status
     */
    public function listInvitations(float|int|null $limit, float|int|null $offset, ?string $status): Response
    {
        return $this->connector->send(new ListInvitations($limit, $offset, $status));
    }

    public function createInvitation(array $body = []): Response
    {
        return $this->connector->send(new CreateInvitation($body));
    }

    /**
     * @param  string  $invitationId  The ID of the invitation to be revoked
     */
    public function revokeInvitation(string $invitationId): Response
    {
        return $this->connector->send(new RevokeInvitation($invitationId));
    }
}
