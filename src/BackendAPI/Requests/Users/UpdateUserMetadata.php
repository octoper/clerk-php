<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateUserMetadata
 *
 * Update a user's metadata attributes by merging existing values with the provided parameters.
 *
 * This
 * endpoint behaves differently than the *Update a user* endpoint.
 * Metadata values will not be replaced
 * entirely.
 * Instead, a deep merge will be performed.
 * Deep means that any nested JSON objects will be
 * merged as well.
 *
 * You can remove metadata keys at any level by setting their value to `null`.
 */
class UpdateUserMetadata extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/metadata";
    }

    /**
     * @param  string  $userId  The ID of the user whose metadata will be updated and merged
     */
    public function __construct(
        protected string $userId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
