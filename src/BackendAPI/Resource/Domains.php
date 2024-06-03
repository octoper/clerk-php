<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Domains\AddDomain;
use Octoper\ClerkPHP\Requests\Domains\DeleteDomain;
use Octoper\ClerkPHP\Requests\Domains\ListDomains;
use Octoper\ClerkPHP\Requests\Domains\UpdateDomain;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Domains extends Resource
{
    public function listDomains(): Response
    {
        return $this->connector->send(new ListDomains());
    }

    public function addDomain(array $body = []): Response
    {
        return $this->connector->send(new AddDomain($body));
    }

    /**
     * @param  string  $domainId  The ID of the domain that will be deleted. Must be a satellite domain.
     */
    public function deleteDomain(string $domainId): Response
    {
        return $this->connector->send(new DeleteDomain($domainId));
    }

    /**
     * @param  string  $domainId  The ID of the domain that will be updated.
     */
    public function updateDomain(string $domainId, array $body = []): Response
    {
        return $this->connector->send(new UpdateDomain($domainId, $body));
    }
}
