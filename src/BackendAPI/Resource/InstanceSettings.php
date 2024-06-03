<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\InstanceSettings\UpdateInstance;
use Octoper\ClerkPHP\Requests\InstanceSettings\UpdateInstanceOrganizationSettings;
use Octoper\ClerkPHP\Requests\InstanceSettings\UpdateInstanceRestrictions;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class InstanceSettings extends Resource
{
    public function updateInstance(array $body = []): Response
    {
        return $this->connector->send(new UpdateInstance($body));
    }

    public function updateInstanceRestrictions(array $body = []): Response
    {
        return $this->connector->send(new UpdateInstanceRestrictions($body));
    }

    public function updateInstanceOrganizationSettings(array $body = []): Response
    {
        return $this->connector->send(new UpdateInstanceOrganizationSettings($body));
    }
}
