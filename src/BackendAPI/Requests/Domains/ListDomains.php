<?php

namespace Octoper\ClerkPHP\Requests\Domains;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * ListDomains
 *
 * Use this endpoint to get a list of all domains for an instance.
 * The response will contain the
 * primary domain for the instance and any satellite domains. Each domain in the response contains
 * information about the URLs where Clerk operates and the required CNAME targets.
 */
class ListDomains extends BaseRequest
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/domains';
    }

    public function __construct(
    ) {
    }
}
