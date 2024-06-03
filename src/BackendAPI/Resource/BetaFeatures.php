<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\BetaFeatures\ChangeProductionInstanceDomain;
use Octoper\ClerkPHP\Requests\BetaFeatures\UpdateInstanceAuthConfig;
use Octoper\ClerkPHP\Requests\BetaFeatures\UpdateProductionInstanceDomain;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class BetaFeatures extends Resource
{
    public function updateInstanceAuthConfig(array $body = []): Response
    {
        return $this->connector->send(new UpdateInstanceAuthConfig($body));
    }

    public function updateProductionInstanceDomain(array $body = []): Response
    {
        return $this->connector->send(new UpdateProductionInstanceDomain($body));
    }

    public function changeProductionInstanceDomain(array $body = []): Response
    {
        return $this->connector->send(new ChangeProductionInstanceDomain($body));
    }
}
