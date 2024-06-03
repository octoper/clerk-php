<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteUserProfileImage
 *
 * Delete a user's profile image
 */
class DeleteUserProfileImage extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}/profile_image";
    }

    /**
     * @param  string  $userId  The ID of the user to delete the profile image for
     */
    public function __construct(
        protected string $userId,
    ) {
    }
}
