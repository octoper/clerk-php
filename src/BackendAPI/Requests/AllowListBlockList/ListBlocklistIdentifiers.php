<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListBlocklistIdentifiers
 *
 * Get a list of all identifiers which are not allowed to access an instance
 */
class ListBlocklistIdentifiers extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/blocklist_identifiers';
    }

    public function __construct(
    ) {
    }
}
