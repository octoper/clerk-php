<?php

namespace Octoper\ClerkPHP\Requests\Webhooks;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GenerateSvixAuthURL
 *
 * Generate a new url for accessing the Svix's management dashboard for that particular instance
 */
class GenerateSvixAuthUrl extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhooks/svix_url';
    }

    public function __construct(
    ) {
    }
}
