<?php

namespace Octoper\ClerkPHP\Requests\Organizations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * MergeOrganizationMetadata
 *
 * Update organization metadata attributes by merging existing values with the provided
 * parameters.
 * Metadata values will be updated via a deep merge.
 * Deep meaning that any nested JSON
 * objects will be merged as well.
 * You can remove metadata keys at any level by setting their value to
 * `null`.
 */
class MergeOrganizationMetadata extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/organizations/{$this->organizationId}/metadata";
    }

    /**
     * @param  string  $organizationId  The ID of the organization for which metadata will be merged or updated
     */
    public function __construct(
        protected string $organizationId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
