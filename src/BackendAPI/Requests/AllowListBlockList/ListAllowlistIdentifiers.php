<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListAllowlistIdentifiers
 *
 * Get a list of all identifiers allowed to sign up to an instance
 */
class ListAllowlistIdentifiers extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/allowlist_identifiers';
    }

    public function __construct() {
    }
}
