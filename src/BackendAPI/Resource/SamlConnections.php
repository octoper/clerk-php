<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\SamlConnections\CreateSamlconnection;
use Octoper\ClerkPHP\Requests\SamlConnections\DeleteSamlconnection;
use Octoper\ClerkPHP\Requests\SamlConnections\GetSamlconnection;
use Octoper\ClerkPHP\Requests\SamlConnections\ListSamlconnections;
use Octoper\ClerkPHP\Requests\SamlConnections\UpdateSamlconnection;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class SamlConnections extends Resource
{
    /**
     * @param  float|int  $limit  Applies a limit to the number of results returned.
     *                            Can be used for paginating the results together with `offset`.
     * @param  float|int  $offset  Skip the first `offset` results when paginating.
     *                             Needs to be an integer greater or equal to zero.
     *                             To be used in conjunction with `limit`.
     */
    public function listSamlconnections(float|int|null $limit, float|int|null $offset): Response
    {
        return $this->connector->send(new ListSamlconnections($limit, $offset));
    }

    public function createSamlconnection(array $body = []): Response
    {
        return $this->connector->send(new CreateSamlconnection($body));
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection
     */
    public function getSamlconnection(string $samlConnectionId): Response
    {
        return $this->connector->send(new GetSamlconnection($samlConnectionId));
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection to delete
     */
    public function deleteSamlconnection(string $samlConnectionId): Response
    {
        return $this->connector->send(new DeleteSamlconnection($samlConnectionId));
    }

    /**
     * @param  string  $samlConnectionId  The ID of the SAML Connection to update
     */
    public function updateSamlconnection(string $samlConnectionId, array $body = []): Response
    {
        return $this->connector->send(new UpdateSamlconnection($samlConnectionId, $body));
    }
}
