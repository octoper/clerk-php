<?php

namespace Octoper\ClerkPHP\Requests\PhoneNumbers;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * DeletePhoneNumber
 *
 * Delete the phone number with the given ID
 */
class DeletePhoneNumber extends BaseRequest
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/phone_numbers/{$this->phoneNumberId}";
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to delete
     */
    public function __construct(
        protected string $phoneNumberId,
    ) {
    }
}
