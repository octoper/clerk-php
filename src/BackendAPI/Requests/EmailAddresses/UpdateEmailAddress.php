<?php

namespace Octoper\ClerkPHP\Requests\EmailAddresses;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdateEmailAddress
 *
 * Updates an email address.
 */
class UpdateEmailAddress extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/email_addresses/{$this->emailAddressId}";
    }

    /**
     * @param  string  $emailAddressId  The ID of the email address to update
     */
    public function __construct(
        protected string $emailAddressId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
