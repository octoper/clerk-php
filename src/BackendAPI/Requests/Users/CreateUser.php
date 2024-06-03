<?php

namespace Octoper\ClerkPHP\Requests\Users;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateUser
 *
 * Creates a new user. Your user management settings determine how you should setup your user
 * model.
 *
 * Any email address and phone number created using this method will be marked as
 * verified.
 *
 * Note: If you are performing a migration, check out our guide on [zero downtime
 * migrations](https://clerk.com/docs/deployments/migrate-overview).
 *
 * A rate limit rule of 20 requests
 * per 10 seconds is applied to this endpoint.
 */
class CreateUser extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/users';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
