<?php

namespace Octoper\ClerkPHP\Requests\TestingTokens;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * CreateTestingToken
 *
 * Retrieve a new testing token. Only available for development instances.
 */
class CreateTestingToken extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/testing_tokens';
    }

    public function __construct(
    ) {
    }
}
