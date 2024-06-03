<?php

namespace Octoper\ClerkPHP\Resource;

use Octoper\ClerkPHP\Requests\Miscellaneous\GetPublicInterstitial;
use Octoper\ClerkPHP\Resource;
use Saloon\Http\Response;

class Miscellaneous extends Resource
{
    /**
     * @param  string  $frontendApi  The Frontend API key of your instance
     * @param  string  $publishableKey  The publishable key of your instance
     */
    public function getPublicInterstitial(?string $frontendApi, ?string $publishableKey): Response
    {
        return $this->connector->send(new GetPublicInterstitial($frontendApi, $publishableKey));
    }
}
