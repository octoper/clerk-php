<?php

namespace Octoper\ClerkPHP\Requests\EmailAddresses;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateEmailAddress
 *
 * Create a new email address
 */
class CreateEmailAddress extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/email_addresses';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
