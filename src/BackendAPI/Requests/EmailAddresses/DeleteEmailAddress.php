<?php

namespace Octoper\ClerkPHP\Requests\EmailAddresses;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeleteEmailAddress
 *
 * Delete the email address with the given ID
 */
class DeleteEmailAddress extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/email_addresses/{$this->emailAddressId}";
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to delete
     */
    public function __construct(
        protected string $emailAddressId,
    ) {
    }
}
