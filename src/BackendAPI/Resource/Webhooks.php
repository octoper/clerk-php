<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Webhooks\CreateSvixApp;
use Octoper\ClerkPHP\Requests\Webhooks\DeleteSvixApp;
use Octoper\ClerkPHP\Requests\Webhooks\GenerateSvixAuthUrl;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Webhooks extends Resource
{
    public function createSvixApp(): Response
    {
        return $this->connector->send(new CreateSvixApp());
    }

    public function deleteSvixApp(): Response
    {
        return $this->connector->send(new DeleteSvixApp());
    }

    public function generateSvixAuthUrl(): Response
    {
        return $this->connector->send(new GenerateSvixAuthUrl());
    }
}
