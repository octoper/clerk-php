<?php

namespace Octoper\ClerkPHP\Requests\EmailAddresses;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetEmailAddress
 *
 * Returns the details of an email address.
 */
class GetEmailAddress extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/email_addresses/{$this->emailAddressId}";
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to retrieve
     */
    public function __construct(
        protected string $emailAddressId,
    ) {
    }
}
