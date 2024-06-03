<?php

namespace Octoper\ClerkPHP\Requests\ProxyChecks;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * VerifyDomainProxy
 *
 * This endpoint can be used to validate that a proxy-enabled domain is operational.
 * It tries to verify
 * that the proxy URL provided in the parameters maps to a functional proxy that can reach the Clerk
 * Frontend API.
 *
 * You can use this endpoint before you set a proxy URL for a domain. This way you can
 * ensure that switching to proxy-based
 * configuration will not lead to downtime for your instance.
 *
 * The
 * `proxy_url` parameter allows for testing proxy configurations for domains that don't have a proxy
 * URL yet, or operate on
 * a different proxy URL than the one provided. It can also be used to
 * re-validate a domain that is already configured to work with a proxy.
 */
class VerifyDomainProxy extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/proxy_checks';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
