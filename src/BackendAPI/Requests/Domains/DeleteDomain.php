<?php

namespace Octoper\ClerkPHP\Requests\Domains;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteDomain
 *
 * Deletes a satellite domain for the instance.
 * It is currently not possible to delete the instance's
 * primary domain.
 */
class DeleteDomain extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/domains/{$this->domainId}";
    }

    /**
     * @param  string  $domainId  The ID of the domain that will be deleted. Must be a satellite domain.
     */
    public function __construct(
        protected string $domainId,
    ) {
    }
}
