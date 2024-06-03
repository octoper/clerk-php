<?php

namespace Octoper\ClerkPHP\Requests\Webhooks;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteSvixApp
 *
 * Delete a Svix app and disassociate it from the current instance
 */
class DeleteSvixApp extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/webhooks/svix';
    }

    public function __construct(
    ) {
    }
}
