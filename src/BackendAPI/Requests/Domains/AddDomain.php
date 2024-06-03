<?php

namespace Octoper\ClerkPHP\Requests\Domains;

use Octoper\ClerkPHP\BaseRequest;
use Saloon\Enums\Method;

/**
 * AddDomain
 *
 * Add a new domain for your instance.
 * Useful in the case of multi-domain instances, allows adding
 * satellite domains to an instance.
 * The new domain must have a `name`. The domain name can contain the
 * port for development instances, like `localhost:3000`.
 * At the moment, instances can have only one
 * primary domain, so the `is_satellite` parameter must be set to `true`.
 * If you're planning to
 * configure the new satellite domain to run behind a proxy, pass the `proxy_url` parameter
 * accordingly.
 */
class AddDomain extends BaseRequest
{
    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/domains';
    }

    public function __construct(
        protected array $body = [],
    ) {
        parent::__construct($body);
    }
}
