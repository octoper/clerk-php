<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\ProxyChecks\VerifyDomainProxy;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class ProxyChecks extends Resource
{
    public function verifyDomainProxy(array $body = []): Response
    {
        return $this->connector->send(new VerifyDomainProxy($body));
    }
}
