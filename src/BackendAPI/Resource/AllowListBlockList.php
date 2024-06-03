<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\AllowListBlockList\CreateAllowlistIdentifier;
use Octoper\ClerkPHP\Requests\AllowListBlockList\CreateBlocklistIdentifier;
use Octoper\ClerkPHP\Requests\AllowListBlockList\DeleteAllowlistIdentifier;
use Octoper\ClerkPHP\Requests\AllowListBlockList\DeleteBlocklistIdentifier;
use Octoper\ClerkPHP\Requests\AllowListBlockList\ListAllowlistIdentifiers;
use Octoper\ClerkPHP\Requests\AllowListBlockList\ListBlocklistIdentifiers;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class AllowListBlockList extends Resource
{
    public function listAllowlistIdentifiers(): Response
    {
        return $this->connector->send(new ListAllowlistIdentifiers());
    }

    public function createAllowlistIdentifier(): Response
    {
        return $this->connector->send(new CreateAllowlistIdentifier());
    }

    /**
     * @param  string  $identifierId  The ID of the identifier to delete from the allow-list
     */
    public function deleteAllowlistIdentifier(string $identifierId): Response
    {
        return $this->connector->send(new DeleteAllowlistIdentifier($identifierId));
    }

    public function listBlocklistIdentifiers(): Response
    {
        return $this->connector->send(new ListBlocklistIdentifiers());
    }

    public function createBlocklistIdentifier(array $body = []): Response
    {
        return $this->connector->send(new CreateBlocklistIdentifier($body));
    }

    /**
     * @param  string  $identifierId  The ID of the identifier to delete from the block-list
     */
    public function deleteBlocklistIdentifier(string $identifierId): Response
    {
        return $this->connector->send(new DeleteBlocklistIdentifier($identifierId));
    }
}
