<?php

namespace Octoper\ClerkPHP\Requests\Webhooks;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateSvixApp
 *
 * Create a Svix app and associate it with the current instance
 */
class CreateSvixApp extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhooks/svix';
    }

    public function __construct(
    ) {
    }
}
