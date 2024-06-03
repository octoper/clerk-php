<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * SetUserProfileImage
 *
 * Update a user's profile image
 */
class SetUserProfileImage extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/profile_image";
    }

    /**
     * @param  string  $userId  The ID of the user to update the profile image for
     */
    public function __construct(
        protected string $userId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
