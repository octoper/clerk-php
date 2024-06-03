<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateAllowlistIdentifier
 *
 * Create an identifier allowed to sign up to an instance
 */
class CreateAllowlistIdentifier extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/allowlist_identifiers';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
