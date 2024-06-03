<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteAllowlistIdentifier
 *
 * Delete an identifier from the instance allow-list
 */
class DeleteAllowlistIdentifier extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/allowlist_identifiers/{$this->identifierId}";
    }

    /**
     * @param  string  $identifierId  The ID of the identifier to delete from the allow-list
     */
    public function __construct(
        protected string $identifierId,
    ) {
    }
}
