<?php

namespace Octoper\ClerkPHP\Requests\PhoneNumbers;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * UpdatePhoneNumber
 *
 * Updates a phone number
 */
class UpdatePhoneNumber extends BaseRequest
{
    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/phone_numbers/{$this->phoneNumberId}";
    }

    /**
     * @param  string  $phoneNumberId  The ID of the phone number to update
     */
    public function __construct(
        protected string $phoneNumberId,
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
