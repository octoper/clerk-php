<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\JwtTemplates\CreateJwttemplate;
use Octoper\ClerkPHP\Requests\JwtTemplates\DeleteJwttemplate;
use Octoper\ClerkPHP\Requests\JwtTemplates\GetJwttemplate;
use Octoper\ClerkPHP\Requests\JwtTemplates\ListJwttemplates;
use Octoper\ClerkPHP\Requests\JwtTemplates\UpdateJwttemplate;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class JwtTemplates extends Resource
{
    public function listJwttemplates(): Response
    {
        return $this->connector->send(new ListJwttemplates());
    }

    public function createJwttemplate(array $body = []): Response
    {
        return $this->connector->send(new CreateJwttemplate($body));
    }

    /**
     * @param  string  $templateId  JWT Template ID
     */
    public function getJwttemplate(string $templateId): Response
    {
        return $this->connector->send(new GetJwttemplate($templateId));
    }

    /**
     * @param  string  $templateId  JWT Template ID
     */
    public function deleteJwttemplate(string $templateId): Response
    {
        return $this->connector->send(new DeleteJwttemplate($templateId));
    }

    /**
     * @param  string  $templateId  The ID of the JWT template to update
     */
    public function updateJwttemplate(string $templateId, array $body = []): Response
    {
        return $this->connector->send(new UpdateJwttemplate($templateId, $body));
    }
}
