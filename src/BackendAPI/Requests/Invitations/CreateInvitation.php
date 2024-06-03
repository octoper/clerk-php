<?php

namespace Octoper\ClerkPHP\Requests\Invitations;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateInvitation
 *
 * Creates a new invitation for the given email address and sends the invitation email.
 * Keep in mind
 * that you cannot create an invitation if there is already one for the given email address.
 * Also,
 * trying to create an invitation for an email address that already exists in your application will
 * result to an error.
 */
class CreateInvitation extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/invitations';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
