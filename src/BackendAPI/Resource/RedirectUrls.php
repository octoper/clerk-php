<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\RedirectUrls\CreateRedirectUrl;
use Octoper\ClerkPHP\Requests\RedirectUrls\DeleteRedirectUrl;
use Octoper\ClerkPHP\Requests\RedirectUrls\GetRedirectUrl;
use Octoper\ClerkPHP\Requests\RedirectUrls\ListRedirectUrls;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class RedirectUrls extends Resource
{
    public function listRedirectUrls(): Response
    {
        return $this->connector->send(new ListRedirectUrls());
    }

    public function createRedirectUrl(array $body = []): Response
    {
        return $this->connector->send(new CreateRedirectUrl($body));
    }

    /**
     * @param  string  $id  The ID of the redirect URL
     */
    public function getRedirectUrl(string $id): Response
    {
        return $this->connector->send(new GetRedirectUrl($id));
    }

    /**
     * @param  string  $id  The ID of the redirect URL
     */
    public function deleteRedirectUrl(string $id): Response
    {
        return $this->connector->send(new DeleteRedirectUrl($id));
    }
}
