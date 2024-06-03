<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateUser
 *
 * Update a user's attributes.
 *
 * You can set the user's primary contact identifiers (email address and
 * phone numbers) by updating the `primary_email_address_id` and `primary_phone_number_id` attributes
 * respectively.
 * Both IDs should correspond to verified identifications that belong to the user.
 *
 * You
 * can remove a user's username by setting the username attribute to null or the blank string "".
 * This
 * is a destructive action; the identification will be deleted forever.
 * Usernames can be removed only
 * if they are optional in your instance settings and there's at least one other identifier which can
 * be used for authentication.
 *
 * This endpoint allows changing a user's password. When passing the
 * `password` parameter directly you have two further options.
 * You can ignore the password policy
 * checks for your instance by setting the `skip_password_checks` parameter to `true`.
 * You can also
 * choose to sign the user out of all their active sessions on any device once the password is updated.
 * Just set `sign_out_of_other_sessions` to `true`.
 */
class UpdateUser extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/users/{$this->userId}";
    }

    /**
     * @param  string  $userId  The ID of the user to update
     */
    public function __construct(
        protected string $userId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
