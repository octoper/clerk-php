<?php

namespace Octoper\ClerkPHP\Requests\PhoneNumbers;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * GetPhoneNumber
 *
 * Returns the details of a phone number
 */
class GetPhoneNumber extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/phone_numbers/{$this->phoneNumberId}";
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to retrieve
     */
    public function __construct(
        protected string $phoneNumberId,
    ) {
    }
}
