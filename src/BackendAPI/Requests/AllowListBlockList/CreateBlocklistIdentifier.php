<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateBlocklistIdentifier
 *
 * Create an identifier that is blocked from accessing an instance
 */
class CreateBlocklistIdentifier extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/blocklist_identifiers';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
