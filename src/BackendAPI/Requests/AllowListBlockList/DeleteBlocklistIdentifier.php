<?php

namespace Octoper\ClerkPHP\Requests\AllowListBlockList;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteBlocklistIdentifier
 *
 * Delete an identifier from the instance block-list
 */
class DeleteBlocklistIdentifier extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/blocklist_identifiers/{$this->identifierId}";
    }

    /**
     * @param  string  $identifierId  The ID of the identifier to delete from the block-list
     */
    public function __construct(
        protected string $identifierId,
    ) {
    }
}
