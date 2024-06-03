<?php

namespace Octoper\ClerkPHP\Requests\PhoneNumbers;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreatePhoneNumber
 *
 * Create a new phone number
 */
class CreatePhoneNumber extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/phone_numbers';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
